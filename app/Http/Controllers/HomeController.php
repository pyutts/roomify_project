<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\Hotel;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Payment;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request){
        
        $query = Hotel::with('photos');
        
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('rating') && is_numeric($request->rating)) {
            $query->where('rating', '>=', $request->rating);
        }

        $daftar_hotel = $query->latest()->paginate(3)->withQueryString();

        return view('home.section.section_home', compact('daftar_hotel'));
    }

    public function home_login(Request $request){
        $query = Hotel::with('photos');
        
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('rating') && is_numeric($request->rating)) {
            $query->where('rating', '>=', $request->rating);
        }

        $daftar_hotel = $query->latest()->paginate(3)->withQueryString();
        return view('home.section.section_home_login',compact('daftar_hotel'));
    }

    // Fungsi Edit Profile untuk bagian Homepages
    public function edit($id) {
        $user = UsersModel::findOrFail($id);
        return view('home.section.profile.myprofile', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = UsersModel::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            'phone' => 'nullable',
            'photo_profile' => 'nullable|image',
        ]);

        $data = $request->except(['password', 'photo_profile', 'email','username']); 
        $data['role'] = $request->input('role', $user->role);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('photo_profile')) {
            $path = $request->file('photo_profile')->store('admins', 'public');
            $data['photo_profile'] = $path;
        }

        $user->update($data);

        return redirect()->route('home_login')->with('success', 'Data Anda berhasil diperbarui.');
    }

    // Fungsi About di Homepages
    public function about()
    {
        return view ('home.section.about.detail');
    }

    // Fungsi Daftar Hotel di Homepages
    public function daftar_hotel(Request $request)
    {
           $query = Hotel::with('photos');

            if ($request->has('search') && $request->search != '') {
                $query->where('name', 'like', '%' . $request->search . '%');
            }

            if ($request->has('rating') && is_numeric($request->rating)) {
                $query->where('rating', '>=', $request->rating);
            }

            $daftar_hotel = $query->latest()->paginate(5)->withQueryString();

            return view('home.section.hotel.hotel_list', compact('daftar_hotel'));
    }

    // Fungsi Detail Hotel di Homepages
    public function detail_hotel($id)
    {
        $detail_hotel = Hotel::with(['photos', 'owner','rooms'])->findOrFail($id);
        return view('home.section.hotel.hotel_detail', compact('detail_hotel'));
    }


    public function storeBooking(Request $request)
    {
        $userId = Session::get('users_id'); 

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda belum login!');
        }

        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        $room = Room::findOrFail($request->room_id);

        if (!$room->availability) {
            return back()->with('error', 'Kamar tidak tersedia.');
        }

        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $days = $checkIn->diffInDays($checkOut);

    
        if ($days == 0) {
            $days = 1;
        }

        $pricePerDay = $room->price;
        $totalPrice = $days * $pricePerDay;
        
        Booking::create([
            'user_id' => $userId,
            'room_id' => $request->room_id,
            'kode_bookings' => 'B-' . strtoupper(Str::random(8)),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'total_price' => $totalPrice, // Gunakan total harga yang sudah diperbaiki
            'status' => 'pending',
        ]);

        return redirect()->route('mybooking.index')->with('success', 'Selamat Anda sudah booking, Tolong Selesaikan Pembayaran anda!');
    }

    // Fungsi Daftar Booking di Homepages
    public function myBooking()
    {
        $userId = Session::get('users_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda belum login!');
        }

        $bookings = Booking::with(['room.hotel.photos', 'room.hotel'])
                           ->where('user_id', $userId)
                           ->orderBy('created_at', 'desc')
                           ->paginate(10);

        return view('home.section.booking.booking_list', compact('bookings'));
    }

    // Fungsi untuk detail booking di Homepages
    public function detailBooking($id)
    {
        $userId = Session::get('users_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda belum login!');
        }

        $booking = Booking::with(['room.hotel.photos', 'room.hotel', 'user'])
                          ->where('user_id', $userId)
                          ->findOrFail($id);

        return view('home.section.booking.booking_detail', compact('booking'));
    }

    // Fungsi untuk membatalkan booking di Homepages
    public function cancelBooking($id)
    {
        $userId = Session::get('users_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda belum login!');
        }

        $booking = Booking::where('user_id', $userId)
                          ->where('id', $id)
                          ->where('status', 'pending')
                          ->firstOrFail();

        $booking->update(['status' => 'cancelled']);

        return redirect()->route('mybooking.index')->with('success', 'Booking berhasil dibatalkan.');
    }

     // Fungsi untuk melanjutkan ke pembayaran
    public function payment($id)
    {
        $userId = Session::get('users_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda belum login!');
        }

        $booking = Booking::with(['room.hotel', 'user'])
                          ->where('user_id', $userId)
                          ->where('status', 'pending')
                          ->findOrFail($id);
        return view('home.section.booking.booking_payment', compact('booking'));
    }

    // Fungsi untuk konfirmasi pembayaran (simulasi)
    public function confirmPayment(Request $request, $id)
    {
        $userId = Session::get('users_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda belum login!');
        }

        $booking = Booking::where('user_id', $userId)
                        ->where('id', $id)
                        ->where('status', 'pending')
                        ->firstOrFail();

        $request->validate([
            'payment_method' => 'required|in:credit_card,bank_transfer,ewallet',
        ]);

        // Simpan data pembayaran
        Payment::create([
            'booking_id' => $booking->id,
            'kode_transaksi' => strtoupper('TRX-' . Str::random(8)),
            'amount' => $booking->total_price,
            'payment_method' => $request->payment_method,
            'payment_status' => 'paid',
        ]);

        // Update status booking
        $booking->update(['status' => 'confirmed']);

        return redirect()->route('mybooking.index')->with('success', 'Pembayaran berhasil dan booking dikonfirmasi!');
    }

    

}

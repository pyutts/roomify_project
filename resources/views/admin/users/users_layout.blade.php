@extends('admin.main.app')
@section('content_users')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title m-0">Daftar Users</h4>
            <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah User</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="usersTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Contoh Nama</td>
                            <td>contoh@email.com</td>
                            <td>Admin</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
    $(document).ready(function() {
        $('#usersTable').DataTable({
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Tidak ada data yang tersedia",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                "infoFiltered": "(disaring dari _MAX_ total data)",
                "search": "Cari:",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "loadingRecords": "Memuat data...",
                "processing": "Sedang diproses...",
                "emptyTable": "Tidak ada data di dalam tabel",
                "aria": {
                    "sortAscending": ": aktifkan untuk mengurutkan naik",
                    "sortDescending": ": aktifkan untuk mengurutkan turun"
                }
            }
        });
    });
    </script>

@endsection

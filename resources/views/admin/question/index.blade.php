@extends('admin.master')
@section('isi')
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/img/favicon.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <br>
        <div class="card-header">
            <h3 class="card-title">Data Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Pengirim</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>date</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->subject }}</td>
                                @if ($item->answer)
                                    <td>Terjawab</td>
                                @else
                                    <td>Belum Terjawab</td>
                                @endif
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('berita.publish', $item->id) }}" class="btn btn-success m-1"
                                        title="Edit detail">
                                        Balas
                                    </a>
                                    <a href="{{ route('berita.publish', $item->id) }}" class="btn btn-warning m-1"
                                        title="Edit detail">
                                        Lihat Pesan
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endsection

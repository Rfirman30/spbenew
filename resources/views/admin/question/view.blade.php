@extends('admin.master')
@section('isi')
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/img/favicon.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <br>
        <div class="card-header">
            <h3 class="card-title">Jawaban Admin</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card">
                <div class="row">
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name="email" readonly class="form-control" value="{{ $data->email }}">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="emtextail" readonly name="name" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subjcet</label>
                    <input type="text" class="form-control" readonly name="subject" value="{{ $data->subject }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Question</label>
                    <textarea class="form-control" name="question" readonly id="exampleFormControlTextarea1" rows="3">{{ $data->question }}</textarea>
                </div>
                @if ($data->answer)
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Answer</label>
                        <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="3">{{ $data->answer->answer }}</textarea>
                    </div>
                @else
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Answer</label>
                        <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="3">Belum Diisi</textarea>
                    </div>
                @endif
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

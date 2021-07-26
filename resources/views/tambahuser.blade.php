@extends('layouts.adminlayout')

@section('content')
    <div class="card mt-5">
        <div class="card-header text-center">
            ANIME - <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-body">
            <a href="/user" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>

                <form action="/user/store" method="POST" enctype="multipart/form-data">


                    @csrf



                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama')}}" placeholder="Masukkan Nama">

                        <!-- error message untuk title -->
                        @error('Nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">

                        <!-- error message untuk title -->
                        @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="role">Pilih Role</label>
                        <select id="role" name="role">
                            <option value="admin">Volvo</option>
                            <option value="pengunjung">Saab</option>
                        </select>
                        <input type="text" class="form-control @error('rolr') is-invalid @enderror" name="role" value="{{ old('role') }}">

                        <!-- error message untuk title -->
                        @error('role')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection

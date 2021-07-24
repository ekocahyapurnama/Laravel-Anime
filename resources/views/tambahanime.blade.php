@extends('layouts.adminlayout')

@section('content')
            <div class="card mt-5">
                <div class="card-header text-center">
                    ANIME - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/anime" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form action="/anime/store" method="POST" enctype="multipart/form-data">


                        {{ csrf_field() }}


                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Anime">

                            <!-- error message untuk title -->
                            @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">EPISODE</label>
                            <input type="text" class="form-control @error('episode') is-invalid @enderror" name="episode" value="{{ old('episode') }}" placeholder="Masukkan Episode Anime">

                            <!-- error message untuk title -->
                            @error('episode')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">GENRE</label>
                            <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" placeholder="Masukkan Genre Anime">

                            <!-- error message untuk title -->
                            @error('genre')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">RATING</label>
                            <input type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" placeholder="Masukkan Rating Anime">

                            <!-- error message untuk title -->
                            @error('rating')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">STUDIO</label>
                            <input type="text" class="form-control @error('studio') is-invalid @enderror" name="studio" value="{{ old('studio') }}" placeholder="Masukkan Studio Anime">

                            <!-- error message untuk title -->
                            @error('studio')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">SINOPSIS</label>
                            <textarea class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" rows="5" placeholder="Masukkan Sinopsis Anime">{{ old('sinopsis') }}</textarea>

                            <!-- error message untuk content -->
                            @error('sinopsis')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">

                            <!-- error message untuk title -->
                            @error('gambar')
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

@extends('layouts.adminlayout')

@section('content')
    <body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                GENRE - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/genre" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>

                @foreach($genre as $g)
                    <form method="post" action="/genre/update">

                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $g->id_gen }}"> <br/>

                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" name="genre" class="form-control" required="required" value="{{ $g->genre }}">

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                @endforeach

            </div>
        </div>
    </div>
    </body>
@endsection

@extends('layouts.adminlayout')

@section('content')
    <body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                GENRE - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/Studio" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>

                @foreach($studio as $s)
                    <form method="post" action="/studio/update">
                        

                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $s->id_stud }}"> <br/>

                        <div class="form-group">
                            <label>Studio</label>
                            <input type="text" name="genre" class="form-control" required="required" value="{{ $s->nama }}">

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

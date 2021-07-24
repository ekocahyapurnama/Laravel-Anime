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
                    
                    <form action="/genre/store" method="POST">

                    
                        {{ csrf_field() }} 
 
                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" name="genre" class="form-control" required="required" placeholder="Genre ..">
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
@endsection
@extends('layouts.adminlayout')

@section('content')
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   STUDIO - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/studio" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form action="/studio/store" method="POST">

                    
                        {{ csrf_field() }} 
 
                        <div class="form-group">
                            <label>Studio</label>
                            <input type="text" name="studio" class="form-control" required="required" placeholder="Studio ..">
 
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
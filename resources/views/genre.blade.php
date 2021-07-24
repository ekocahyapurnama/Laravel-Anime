@extends('layouts.adminlayout')

@section('content')
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    GENRE
                </div>
                <div class="card-body">
                    <a href="/tambahgenre" class="btn btn-primary">Input GENRE Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
								<th>Genre</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($genre as $g)
							<tr>
								<td>{{ $g->id_gen }}</td>
								<td>{{ $g->genre }}</td>
								<td>
									<a href="#" class="btn btn-warning">Edit</a>
									<a href="#" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data Genre?');">Hapus</a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

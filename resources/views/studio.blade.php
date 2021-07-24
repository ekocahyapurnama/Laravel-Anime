@extends('layouts.adminlayout')

@section('content')
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    STUDIO
                </div>
                <div class="card-body">
                    <a href="/tambahstudio" class="btn btn-primary">Input STUDIO Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
								<th>Studio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($studio as $s)
							<tr>
								<td>{{ $s->id_stud }}</td>
								<td>{{ $s->nama }}</td>
								<td>
									<a href="#" class="btn btn-warning">Edit</a>
									<a href="#" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data Studio?');">Hapus</a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

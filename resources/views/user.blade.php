@extends('layouts.adminlayout')

@section('content')
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    USER
                </div>
                <div class="card-body">
                    <a href="/user/tambahuser" class="btn btn-primary">Input USER Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
								<th>Email</th>
								<th>Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $u)
							<tr>
								<td>{{ $u->name }}</td>
								<td>{{ $u->email }}</td>
								<td>{{ $u->role }}</td>
								<td>
									<a href="/useredit/edit/{{ $u->id }}" class="btn btn-warning">Edit</a>
									<a href="/user/hapus/{{ $u->id }}" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data User?');">Hapus</a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

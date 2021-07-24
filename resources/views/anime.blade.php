@extends('layouts.adminlayout')

@section('content')
    <div>
            <div class="card mt-5">
                <div class="card-header text-center">
                    ANIME
                </div>
                <div class="card-body">
                    <a href="/tambahanime" class="btn btn-primary">Input ANIME Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
								<th>Episode</th>
								<th>Genre</th>
                                <th>Rating</th>
								<th>Studio</th>
								<th>Sinopsis</th>
                                <th>Gambar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($anime as $a)
							<tr>
								<td>{{ $a->judul }}</td>
								<td>{{ $a->episode }}</td>
								<td>{{ $a->genre }}</td>
                                <td>{{ $a->rating }}</td>
								<td>{{ $a->studio }}</td>
								<td>{{ $a->sinopsis }}</td>
                                <td class="text-center">
                                    <img src="{{ Storage::url('images/').$a->gambar }}" class="rounded" style="width: 150px">
                                </td>
								<td>
									<a href="#" class="btn btn-warning">Edit</a>
									<a href="#" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data Anime?');">Hapus</a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

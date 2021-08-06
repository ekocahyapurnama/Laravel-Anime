@extends('layouts.adminlayout')

@section('content')
    <div>
            <div class="card mt-5">
                <div class="card-header text-center">
                    ANIME
                </div>
                <div class="card-body">
                    <form class="form-inline md-form mr-auto mb-4" action="/anime/cari" method="GET">
                        <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari Anime .." value="{{ old('anime') }}">
                        <input class="btn btn-outline-primary" type="submit" value="CARI">
                    </form>
                    @if (count($anime))
                    @else
                        <div class="alert alert-danger" role="alert">
                            Oops.. Data Tidak Ditemukan
                        </div>
                    @endif
                    <a href="/tambahanime" class="btn btn-primary">Input ANIME Baru</a>
                    <a href="/cetakanime" class="btn btn-primary">Laporan</a>
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
								<td style="overflow: hidden;  text-overflow: ellipsis; max-width: 50ch;">{{ $a->sinopsis }}</td>
                                <td class="text-center">
                                    <img src="{{ Storage::url('images/').$a->gambar }}" class="rounded" style="width: 150px">
                                </td>
								<td>
									<a href="/animeedit/edit/{{ $a->id_anim }}" class="btn btn-warning">Edit</a>
									<a href="/anime/hapus/{{ $a->id_anim }}" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data Anime?');">Hapus</a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

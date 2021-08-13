@extends('layouts.app')

@section('content')
 <!-- Product Section Begin -->
        <div class="container">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                        @foreach($anime as $a)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ Storage::url('images/').$a->gambar }}">
                                        <div class="ep">{{ $a->episode }}</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{ $a->genre }}</li>
                                        </ul>
                                        <h5><a href="/animedetail/detail/{{ $a->id_anim }}">{{ $a->judul }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
        </div>
    <!-- Product Section End -->
@endsection

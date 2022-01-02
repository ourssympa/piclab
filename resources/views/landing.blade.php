@extends('layout.defaultlayout')

@section('section')
<div class="bg-dark">
    <h1 class="display-4 font-weight-semi-bold uppercase letter-spacing-2 line-height-150 text text-white">{{$title }}</h1>
    <div class="padding-lg-50 padding-top-0 padding-bottom-0">
        <div class="container-fluid">
            <div class="portfolio-metro portfolio-icon-overlay column-4 spacing-10 hover-style-2">
                @foreach($te as $key )
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="image\{{$key['id']}}">
                        <img src="{{ $key['urls']['regular']}}" alt="">
                         </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- end container-fluid -->
    </div>
</div>
@endsection

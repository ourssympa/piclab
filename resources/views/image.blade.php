@extends("layout.defaultlayout")

@section('section')
<div class="section-2xl bg-dark">
  <div class="container">
    <div class="row">
        <div class="col-8 ">  <img src="{{ $ref['regular'] }}" alt=""></div>
        <div class="text-center"><button href="{{ route('images') }}" type="button" class="btn btn-success btn-lg "><i class="fas fa-download"></i>Téléchargement</button>
        </div>
      </div>
    </div>
</div>

<div class="bg-dark">
    <div class="padding-lg-50 padding-top-0 padding-bottom-0">
        <div class="container-fluid">
            <div class="portfolio-metro portfolio-icon-overlay column-4 spacing-10 hover-style-2">
                @foreach($te1['results'] as $key )
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="{{$key['id']}}">
                            <img src="{{ $key['urls']['regular']}}" data-target="#indicators" data-slide-to="1" alt="" />
                         </a>
                       
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- end container-fluid -->
    </div>
</div>
@endsection

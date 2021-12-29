@extends('layout.defaultlayout')

@section("section")
<div class="section bg-dark">
    <h1 class="display-4 font-weight-semi-bold uppercase letter-spacing-2 line-height-150 text text-white">{{$recherche }}</h1>
    <h3 class=" font-weight-semi-bold uppercase letter-spacing-2 line-height-100 text text-white">{{$te['total']}} resultat pour '{{$recherche }}' </h3>
    <div class="">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
         @foreach($te['results'] as $key )

            <div class="col-13 col-xl-4 col-lg-3">
                <img src="{{ $key['urls']['regular']}}" data-target="#indicators" data-slide-to="1" alt="" />
           </div>

         @endforeach

        </div>

    </div>

</div>
@endsection

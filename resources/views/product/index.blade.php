@extends('layouts.app')
@section('title', $viewData['title'])
{{-- @section('subtitle', $viewData['subtitle']) --}}

@section('content')
<div>
    <h1 class=" text-center text-uppercase text-dark mb-0 Portfolio2"><strong> Portfolio</strong></h1>
    {{-- <div class="text-center star"><i class="fas fa-star "></i></div> --}}
    {{-- <div class="divider-custom ">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star "></i></div>
      <div class="divider-custom-line"></div>
    </div> --}}
    </div>
{{-- <div class="row">
@foreach ($viewData['products'] as $product)
<div class="col-md-4 col-lg-3 mb-2">
<div class="card">
<img src="{{ asset('/img/' . $product['image']) }}"
class="card-img-top img-card">
<div class="card-body text-center">
<a href="{{ route('product.show', ['id' => $product['id']]) }}"
class="btn bg-primary text-white">{{ $product['name'] }}</a>
</div>
</div>
</div>
@endforeach
</div> --}}
<div class="row">
    @foreach ($viewData['products'] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
    <img src="{{ asset('/storage/' . $product->getImage()) }}"
    class="card-img-top">
    <div class="card-body text-center">
    <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
    class="btn btn-outline-success ">
    {{ $product->getName() }}</a>
    </div>
    </div>
    </div>
    @endforeach
    </div>
@endsection
@extends('website.layouts.app')

@section('content')


<!-- Page Add Section Begin -->
<section class="page-add cart-page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>All Products<span>.</span></h2>
                    <a href="{{ route('website.home') }}">Home</a>
                    <a class="active" href="#">Products</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('public/assets/img/add.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Categories Page Section Begin -->
<section class="categories-page spad">
    <div class="container">
        
        <div class="row">
            @forelse ($products as $product)

                <div class="col-lg-3 col-md-3">
                    <div class="single-product-item">
                        <figure>
                            <img src="{{ asset('public/assets/img/products/img-2.jpg') }}" alt="">
                            <div class="p-status sale">sale</div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6 style="margin-left: 5px;">{{ $product->title }}</h6>
                            </a>
                            <p style="margin-left: 5px;">$ {{ $product->price }} <span class="pull-right"><button class="btn btn-primary btn-sm"> Add to cart</button></p>
                        </div>
                    </div>
                </div>

            @empty
                
            @endforelse
            
            
        </div>
        
    </div>
</section>
<!-- Categories Page Section End -->
@endsection
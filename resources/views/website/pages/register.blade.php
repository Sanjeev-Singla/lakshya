@extends('website.layouts.app')

@section('content')

<!-- Page Add Section Begin -->
<section class="page-add cart-page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Register<span>.</span></h2>
                    <a href="{{ route('website.home') }}">Home</a>
                    <a class="active" href="#">Register</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('public/assets/img/add.jpg') }}" alt="">
            </div>
            
        </div>
    </div>
</section>
<!-- Page Add Section End -->



<!-- Login Add Section Begin -->
<section class="cart-total-page spad pt-4">
    <div class="container">
        <form action="{{ route('website.register') }}" class="checkout-form" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h3>Register</h3>
                    @include('flash-message')
                </div>
                
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">First Name*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required>
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Last Name</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Email*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Phone*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Password*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Confirm Password*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="password" name="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirm Password" required>
                            @error('confirm_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
            
        </form>
    </div>
</section>
<!-- Login Add Section End -->
@endsection

@extends('website.layouts.app')

@section('content')

<!-- Page Add Section Begin -->
<section class="page-add cart-page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Change Password<span>.</span></h2>
                    <a href="{{ route('website.home') }}">Home</a>
                    <a class="active" href="#">Change Password</a>
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
        <form action="{{ route('website.change-password') }}" class="checkout-form" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h3>Change Password</h3>
                    @include('flash-message')
                </div>
                
                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Current Password*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="password" name="current_password" value="{{ old('current_password') }}" placeholder="Current Password" required>
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">New Password*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="password" name="new_password" value="{{ old('new_password') }}" placeholder="New Password" required>
                            @error('new_password')
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

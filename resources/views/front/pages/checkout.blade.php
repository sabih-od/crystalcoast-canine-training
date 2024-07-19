@extends('front.layout.app')
@section('content')
<!-- Begin: Main Slider -->
<div class="innerBan galleryInner">
    <img src="front/images/innerbnr1.webp" class="w-100" alt="">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main Slider -->



<!-- Begin: Step 1 -->
<div class="checkOutStyle">
    <div class="container">
        <div class="row">
            <form class="row formStyle">
                <div class="col-md-12">
                    <div class="title inner">
                        <!-- <h2 class="section-heading">Billing Address</h2> -->
                        <h4>Fill the form below to complete your purchase</h4>
                        <p class="checkout-subheading"><span>Already Registered?</span> Click here to <a
                                href="account.php">Login now</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>first Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>email address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Phone</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>confirm password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label>address</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="col-md-6">
                    <label>Country</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>city</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>ZIP/POSTAL CODE</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>sTATE/pROVINCE</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <div class="checkbox">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">Craete an account for later use</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="checkbox">
                        <input type="checkbox" id="box-2">
                        <label for="box-2">Ship to the same address mentioned above </label>
                    </div>
                </div>
                <div class="col-md-12 title my-5 text-center">
                    <h2 class="section-heading">Order Summary</h2>
                </div>
                <div class="col-md-12 order-summery">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <span>Subtotal (3 items)</span>
                        </div>
                        <div class="col-6 text-right">
                            <strong>USD 75.00</strong>
                        </div>
                        <hr class="w-100">
                        <div class="col-6">
                            <span>Shipping fee</span>
                        </div>
                        <div class="col-6 text-right">
                            <strong>USD 5.00</strong>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-12">
                            <div class="applyCoupon d-sm-flex">
                                <input type="text" class="form-control" placeholder="Enter Voucher Code">
                                <button class="btnStyle btn-block">Apply</button>
                            </div>
                        </div>
                        <hr class="w-100">
                        <div class="col-6">
                            <span>Total</span>
                        </div>
                        <div class="col-6 text-right">
                            <strong>USD 80.00</strong>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-12 mt-4">
                            <button type="button" class="btnStyle btn-block"
                                onclick="window.location.href='{{ route('front.payment') }}'">proceed
                                to
                                checkout</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Step 1 -->

@endsection
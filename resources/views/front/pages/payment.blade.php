@extends('front.layout.app')
@section('content')
 <!-- Begin: Main Slider -->
 <div class="innerBan galleryInner">
    <img src="front/images/innerbnr1.webp" class="w-100" alt="">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Payment</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main Slider -->



<!-- Begin: Step 2 -->
<div class="checkOutStyle">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-12">
                <div class="title">
                    <h2 class="section-heading">Payment Methods</h2>
                </div>
            </div> -->
            <div class="col-md-12">
                <form class="row formStyle">
                    <div class="col-md-12 mb-4 text-center">
                        <img src="front/images/card-img.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <label>card number</label>
                        <input type="text" class="form-control" placeholder="card number">
                    </div>
                    <div class="col-md-6">
                        <label>name on card</label>
                        <input type="text" class="form-control" placeholder="card title">
                    </div>
                    <div class="col-md-4">
                        <label>expiration date</label>
                        <input type="text" class="form-control" placeholder="mm/yy">
                    </div>
                    <div class="col-md-2">
                        <label>cvv</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox mt-4">
                            <input type="checkbox" id="box-2">
                            <label for="box-2">
                                <h5>save card</h5>information is encrypted and securely stored.
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button class="btnStyle btn-block">Place Order</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- END: Step 2 -->

@endsection
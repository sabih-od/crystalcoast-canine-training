@extends('front.layout.app')
@section('content')
 <!-- Begin: Main Slider -->
 <div class="innerBan galleryInner">
    <img src="front/images/innerbnr1.webp" class="w-100" alt="">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main Slider -->



<!-- Begin: Step 2 -->
<div class="checkOutStyle">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-12 p-md-0">
                <div class="title">
                    <h2 class="section-heading">Confirm Your Purchase</h2>
                </div>
            </div>
        </div> -->
        <div class="row cartItemCard">
            <div class="col-sm-2">
                <img src="front/images/img1.webp" alt="">
            </div>
            <div class="col-md-5 col-sm-4">
                <h4>SPECIALTY
                    REMEDIATION</h4>
            </div>
            <div class="col-sm-2">
                <strong class="price">$50</strong>
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="proCounter">
                    <span class="minus">-</span>
                    <input type="text" value="1" />
                    <span class="plus">+</span>
                </div>
            </div>
            <div class="col-sm-1">
                <a href="#" class="delete"><i class="far fa-trash-alt"></i></a>
            </div>
        </div>

        <div class="row cartItemCard">
            <div class="col-sm-2">
                <img src="front/images/img1.webp" alt="">
            </div>
            <div class="col-md-5 col-sm-4">
                <h4>SPECIALTY
                    PUPPY TRAINING</h4>
            </div>
            <div class="col-sm-2">
                <strong class="price">$2800</strong>
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="proCounter">
                    <span class="minus">-</span>
                    <input type="text" value="1" />
                    <span class="plus">+</span>
                </div>
            </div>
            <div class="col-sm-1">
                <a href="#" class="delete"><i class="far fa-trash-alt"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <button class="btnStyle btn-block" onclick="window.location.href='{{ route('front.checkout') }}'">proceed to
                    pay</button>
                <ul class="shipping-billing-col">
                    <li>
                        <p><i class="fas fa-map-marker-alt"></i>127 J H Batts Road, Surf City, North Carolina 28445,
                            United States <a href="" class="edit">edit</a></p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone"></i> <a href="tel:+2527250674">(252) 725-0674</a> <a href="#"
                                class="edit">edit</a></p>
                    </li>
                    <li>
                        <p><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a><a
                                href="#" class="edit">edit</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Step 2 -->


@endsection
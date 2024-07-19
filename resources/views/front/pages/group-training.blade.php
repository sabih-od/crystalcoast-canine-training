@extends('front.layout.app')
@section('content')

   <!-- Begin: Main Slider -->
   <div class="innerBan">
    <img src="front/images/innerbnr1.webp" class="w-100" alt="">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Group training</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main Slider -->

<section class="trainInner">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-md-6">
                <figure>
                    <img src="front/images/img3.webp" class="img-fluid" alt="">
                </figure>
            </div>
            <div class="col-md-6">
                <div class="trainText">
                   <p>
                        Group lessons can be very beneficial for dogs.
                    </p>
                    <p>
                        1. Socialization for your dog- Dogs are social animals! Most love to be around other dogs,
                        but have to learn how to do it appropriately.
                    </p>
                    <p>
                        2. Handling Distractions- With the distractions of other people and dogs, your dog will
                        develop the discipline to respond to you when out and about.
                    </p>
                    <p>
                        3. Socialization for you- Other participants can be great sources of motivation and
                        inspiration. You can also learn from them what works and doesn't work for them.
                    </p>
                    <p>
                        4. Location- Group classes can be held in a variety of places and will help your dog become
                        more comfortable in those places.
                    </p>
                    <p>
                        You will need to bring the basic items for your dog including a leash, collar, and water/
                        bowl.
                    </p>
                    <p>
                        Age requirement is 12 weeks old.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricingSect">
    <div class="container">
        <h2 class="mainHead text-center mb-5">Our Pricing</h2>
        <!-- <h4>Friday Nights at the Beach</h4> -->
        <p class="begavioralPara">See our Social Media pages for detailed information or send us a text</p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="pricingBox box2" onClick="window.location = '{{ route('front.cart') }}' ">
                    <h3>1 Dog</h3>
                    <a href="#"><span>$40</span></a>
                    <!-- <a href="#" class="themeBtn">reserve your spot today</a> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricingBox box2" onClick="window.location = '{{ route('front.cart') }}' ">
                    <h3>Additional Dog</h3>
                    <a href="#"><span>$20</span></a>
                    <p>Must be from the same household</p>
                    <!-- <a href="#" class="themeBtn">reserve your spot today</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="scheduleSec scheduleSec-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="scheduleContnt" data-aos="fade-up">
                    <h2>Schedule an in-person evaluation TODAY</h2>
                    <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                        EVALUATION</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
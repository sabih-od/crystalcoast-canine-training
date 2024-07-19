@extends('front.layout.app')
@section('content')


    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="front/images/innerbnr1.webp" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>Board and Train</h2>
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
                        <img src="front/images/img1.webp" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="trainText">
                        <p>The Board and Train program is available to dogs 4 months and older. This program varies but
                            can be 3 to 5 weeks in length and includes training, essential care, and board. Your dog
                            must be fully vaccinated prior to training and their food must be provided. Every dog must
                            be on a monthly fea, tick, and heart worm preventative.</p>
                        <p>Each day your pup will receive training, exercise, socialization, and exposure to a wide
                            range of stimuli. If the course you have chosen includes public interactions, we will
                            transport your dog to local dog-friendly stores, restaurants, and parks to ensure he/she
                            receives adequate exposure.</p>
                        <p>During this board and train, we will provide photos and videos throughout the training, so
                            that you can stay updated on what your pup is learning.</p>
                        <p>This course targets older puppies and adult dogs. Taking a dog in public, going on car rides,
                            and daily life can become much easier if your dog is trained. This course will help your dog
                            learn social manners and obedience in public and at home.</p>
                        <p>Age requirement for puppies is 5 months. <br>
                            Dogs 4 months and older must be fully vaccinated including Rabies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricingSect">
        <div class="container">
            <h2 class="mainHead text-center">Our Pricing</h2>
            <h3 class="heading-sm text-center mb-5">Specialty</h3>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Remediation</h3>
                        <a href="#"><span>$50</span>(Per Day)</a>
                        <p>This course focuses on leash walking, going out in public, sit, and down. It is designed
                            to
                            give your pup an expedited training experience that helps them go to the beach, outdoor
                            restaurants/ breweries, and the park while be well behaved.</p>
                        <p>This course is not suitable for dogs with reactivity or high anxiety. An evaluation is
                            not
                            required, however if your dog shows signs of reactivity or high anxiety, we will
                            recommend
                            an alternate course.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Puppy Training</h3>
                        <a href="#"><span>$2800</span>(4 Weeks) <span class="d-block">Ages 4-9 Months</span></a>
                        <p>Basic Commands, Leash Walking, Socialization with people and dogs, Beach Walks, and Public
                            Exposure</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricingSect obedienceSect">
        <div class="container">
            <h2 class="mainHead text-center mb-5">Obedience</h2>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Manners</h3>
                        <a href="#"><span>$1000</span>(10 days)</a>
                        <p>This course focuses on leash walking, going out in public, sit, and down. It is designed to
                            give your pup an expedited training experience that helps them go to the beach, outdoor
                            restaurants/ breweries, and the park while be well behaved.</p>
                        <p>This course is not suitable for dogs with reactivity or high anxiety. An evaluation is not
                            required, however if your dog shows signs of reactivity or high anxiety, we will recommend
                            an alternate course.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Basic Obedience</h3>
                        <a href="#"><span>$2100</span>(3 Weeks)</a>
                        <p>Basic Commands (sit, down, place, heel, no off, come), Leash Walking, Socialization, and
                             Public Exposure. This course goes more in depth with training than our Expedited Manners
                            Course.</p>
                        <p>Tools included: pinch collar and/or slip leash</p>
                        <p>Evaluation required</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Advanced Obedience</h3>
                        <a href="#"><span>$4200</span>(5 Weeks)</a>
                        <p>Advanced Commands with duration and precision implemented with Public Exposure and
                            Distractions, Socialization, skills work around other dogs, and Off Leash Obedience.</p>
                        <p>Tools included: Mini-Educator e-collar, slip leash, and/or pinch collar</p>
                        <p>Evaluation required</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricingSect obedienceSect">
        <div class="container">
            <h2 class="mainHead text-center">Behavioral</h2>
            <p class="begavioralPara">Each dog's situation is different and will be handled according to their needs</p>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Mild</h3>
                        <a href="#"><span>$2100-3150</span>(3 Weeks)</a>
                        <p>Issues such as rough play with children, aggression toward inanimate objects, or anxiety.
                            This course may also cover extreme jumping issues, mild separation anxiety, fearful behavior
                            in public settings or with new people.</p>
                        <p>Tools included: pinch collar and/or slip </p>
                        <p>Evaluation required</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Extreme</h3>
                        <a href="#"><span>$4200-5250</span>(5 Weeks)</a>
                        <p>Issues such as aggression or anxiety causing fear or aggression and resource guarding. This.
                            Course may also include fear reactivity, extreme separation anxiety, aggression toward owner
                            or other dogs/ people.</p>
                        <p>Tools included will vary: e-collar, pinch collar, and/or slip leash</p>
                        <p>Evaluation required</p>
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="pricingBar">
                        <p>Prices are based on a daily rate which includes training, board, and essential care. Proof of
                            vaccines is required prior to Board and Train.</p>
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

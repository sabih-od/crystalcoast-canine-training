@extends('front.layout.app')
@section('content')
  <!-- Begin: Main Slider -->
  <div class="innerBan">
    <img src="{{ asset('front/images/innerbnr1.webp') }}" class="w-100" alt="">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">0
                    <h2>CONTACT US</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main Slider -->
<section class="contactSec">
    <div class="container">
        <div class="abthead mb-3">
            <h2 class="mainHead" data-aos="fade-up">Get In Touch</h2>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6">
                <form class="contactForms">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" name="fname">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" name="lname">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email*" name="email">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" name="msg"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="viewWork">
                                <button type="submit" class="themeBtn">Send Now</button>
                                <div id="contactFormsResult"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="contactBoxs">
                    <figure><i class="fas fa-map-marker-alt"></i></figure>
                    <a href="https://maps.app.goo.gl/Pq9QG2mp2bCe9oyMA" target="_blank"><span>Location: </span>127 J
                        H Batts Road, Surf City, North Carolina 28445, United States</a>
                </div>
                <div class="contactBoxs">
                    <figure><i class="fas fa-phone-alt"></i></figure>
                    <a href="tel:2527250674"><span>Phone:</span>(252) 725-0674</a>
                </div>
                <div class="contactBoxs">
                    <figure><i class="fas fa-clock"></i></figure>
                    <div class="div">
                        <a href="#"><span>Hours:</span></a>
                        <ul class="clockList">
                            <li>Mon 09:00 am – 05:00 pm</li>
                            <li> Tue 09:00 am – 05:00 pm</li>
                            <li> Wed 09:00 am – 05:00 pm</li>
                            <li> Thu 09:00 am – 05:00 pm</li>
                            <li> Fri 09:00 am – 05:00 pm</li>
                            <li> Sat 09:00 am – 05:00 pm</li>
                            <li> Sun 09:00 am – 05:00 pm</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="mapSec">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.463558300061!2d-77.5621941236712!3d34.44037889713528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89a9a28184d8ef7b%3A0x958d944d273b3c01!2s127%20J%20H%20Batts%20Rd%2C%20Hampstead%2C%20NC%2028443%2C%20USA!5e0!3m2!1sen!2s!4v1717454112060!5m2!1sen!2s" width="100%" height="580" style="border:0;" allowfullscreen=""referrerpolicy="no-referrer-when-downgrade">
    </iframe>  
    </section>

<section class="contactabout">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6" data-aos="fade-right">
                <div class="aboutwrap">
                    <figure>
                        <img src="{{ asset('front/images/contactpage1.webp') }}" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="aboutcntnt">
                    <h3>Join Our Team</h3>
                    <p class="pb-3">Crystal Coast Canine Training is now accepting applications for our recently
                        open Part Time
                        (15-20 hours per week) Kennel Technician position. This is an opportunity for someone
                        looking for a part time job working with dogs. This position is not that of a trainer, but
                        if the applicant has a desire and shows potential, they may be trained and transitioned into
                        a trainer position.</p>
                    <p>Requirement: Must have reliable transportation to Surf City daily, must be able to lift 50
                        lbs, must be able to control/ walk a variety of dogs, must be comfortable with facing new
                        challenges, must work well with others, must be professional and tidy at all times.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactSec hirringsec">
    <div class="container">
        <div class="row justify-content-center bgClr">
            <div class="abthead text-center mb-3">
                <h2 class="mainHead" data-aos="fade-up">FILL OUT THE FORM</h2>
            </div>
            <div class="col-md-8">
                <form class="contactForms">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone *">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email*">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group atchFite">
                                <input type="file" class="form-control" placeholder="Your Email*">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="viewWork text-center">
                                <button class="themeBtn ">Submit Application</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>
@endsection

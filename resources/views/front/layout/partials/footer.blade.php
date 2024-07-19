   <!-- Begin: Footer -->
   <footer>
       <div class="container">
           <div class="row justify-content-between">
               <div class="col-md-3">
                   <div class="text-center">
                       <a href="#" class="footerLogo"><img src="{{ asset('front/images/footerlogo.webp') }}"
                               class="img-fluid" alt="img"></a>
                       <ul class="footerSocial">
                           <li><a href="https://www.facebook.com/CrystalCoastCanines/" target="_blank"><i
                                       class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://www.instagram.com/cc.canine.training?igsh=MXgwd243Y2JkZml3ZA=="
                                   target="_blank"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="https://www.yelp.com/biz/crystal-coast-canine-training-surf-city-2"
                                   target="_blank"><i class="fab fa-yelp"></i></a></li>
                           <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li> -->
                           <!-- <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> -->
                       </ul>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="quickList">
                       <h2>QUICK LINKS</h2>
                       <ul>
                           <li><a href="{{ route('front.about') }}">About Us</a></li>
                           <li><a href="{{ route('front.training') }}">Training</a></li>
                           <li><a href="{{ route('front.gallery') }}">Graduates</a></li>
                           <li><a href="{{ route('front.blogs') }}">Blogs and Articles</a></li>
                           <li><a href="{{ route('front.faq') }}">FAQs</a></li>
                           <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="quickList">
                       <h2>Contact Us</h2>
                   </div>
                   <div class="calFoter">
                       <ul>
                           <li><a href="https://maps.app.goo.gl/Pq9QG2mp2bCe9oyMA" target="_blank"><img
                                       src="{{ asset('front/images/loc.webp') }}" class="img-fluid"
                                       alt="img"><span>Get Direction On
                                       Google map</span></a></li>
                           <li><a href="mailto:info@example.com"><img src="{{ asset('front/images/email.webp') }}"
                                       class="img-fluid" alt="img"><span>Email : info@example.com</span></a></li>
                           <li><a href="tel:+2527250674"><img src="{{ asset('front/images/call.webp') }}"
                                       class="img-fluid" alt="img"><span>24/7
                                       Call : (252) 725-0674</span></a></li>
                       </ul>
                   </div>
               </div>
               <!-- <div class="col-md-3">
                <div class="quickList">
                    <h2>Newsletter</h2>
                </div>
                <div class="newsleter">
                    <p>Subscribe to our Newsletter to be updated,
                        we promise not to spam.</p>
                    <form>
                        <input type="text" placeholder="Email address">
                        <button class="themeBtn">Subscribe</button>
                    </form>
                </div>
            </div> -->
           </div>
           <div class="row copyRight">
               <div class="col-md-12">
                   <p>Copyright © 2024 CRYSTAL COAST CANINE Training - All Rights Reserved.</p>
               </div>
           </div>
       </div>
   </footer>
   <!-- END: Footer -->





   <div class="schedule-evalution">
       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
           aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">

                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
                   <div class="modal-body">
                       <h2>Schedule an In-Person Evaluation</h2>
                       <form class="schedule-form">
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="fullName">Owner's Name</label>
                                       <input type="text" class="form-control" id="ownerName"
                                           placeholder="Enter your name" name="ownername">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="dogName">Dog's Name</label>
                                       <input type="text" class="form-control" id="dogName"
                                           placeholder="Enter your dog's name" name="dogname">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="dogBreed">Dog's Breed</label>
                                       <input type="text" class="form-control" id="dogBreed"
                                           placeholder="Enter your dog's breed" name="dogbreed">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="dogAge">Dog's Age</label>
                                       <input type="tel" class="form-control" id="dogAge"
                                           placeholder="Enter your dog's age" name="dogage">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="email">Email Address</label>
                                       <input type="email" class="form-control" id="email"
                                           placeholder="Enter your email address" name="email">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="phone">Phone Number</label>
                                       <input type="tel" class="form-control" id="phone"
                                           placeholder="Enter your phone number" name="phone">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="evaluationDate">Preferred Appointment Date</label>
                                       <input type="date" class="form-control" id="evaluationDate"
                                           name="date">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="evaluationTime">Preferred Time for Evaluation</label>
                                       <input type="time" class="form-control" id="evaluationTime"
                                           name="time">
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <label for="message">Additional Details</label>
                                   <textarea class="form-control" id="message" rows="4" placeholder="Enter any additional details"
                                       name="msg"></textarea>
                                   <button type="submit" class="themeBtn">Submit</button>
                                   <div id="schedule-formResult"></div>
                               </div>
                           </div>
                       </form>
                   </div>
                   <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
               </div>
           </div>
       </div>
   </div>




   <!-- ALL JS LIBRARIES -->
   <script src="{{ asset('front/js/all.min.js') }}"></script>
   <script src="{{ asset('front/js/validate.min.js') }}"></script>
   <script src="{{ asset('front/js/email-script.js') }}"></script>
   <!-- CUSTOM JS -->
   <script src="{{ asset('front/js/custom.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
   <script>
       $(document).ready(function() {
           toastr.options.timeOut = 10000;
           @if (Session::has('error'))
               toastr.error('{{ Session::get('error') }}');
           @elseif (Session::has('success'))
               toastr.success('{{ Session::get('success') }}');
           @endif
       });
   </script>

   </body>

   </html>

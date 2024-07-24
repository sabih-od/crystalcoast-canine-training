@extends('front.layout.app')
@section('content')
    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="{{ $page->cmsImages('background_banner_image') ?? '' }}" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>{{ $page->content['banner_heading'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="faqSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="faqHeading">
                        <h2 class="mainHead">{{ $page->content['st_heading'] ?? '' }}</h2>
                        <p>{{ $page->content['st_des'] ?? '' }}</p>
                    </div>
                    <div id="accordion">
                        @foreach ($faqs as $item)
                        <div class="card">
                          <div id="heading{{ $item->id }}">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $item->id }}"
                                aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                                {{ $item->title }}
                                <i class="fas fa-plus"></i>
                              </button>
                            </h5>
                          </div>
                          <div id="collapse{{ $item->id }}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $item->id }}"
                            data-parent="#accordion">
                            <div class="card-body">
                              <p>{!! $item->description !!}</p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                        {{-- <div class="card ">
                            <div id="headingTwo ">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What type of training do you offer?
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        We offer a variety of training programs that are customized to you and your pup.
                                        These courses are Obedience, Behavioral Modification, and Puppy Bootcamp. The
                                        lengths will vary or the level of training you are requesting and if you would
                                        like a Board and Train or Private Lessons.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">
                                        What are some items I may need to bring with my dog for a Board and Train?
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        <strong>Collar and Leash</strong>- Please bring, with your dog, an appropriate
                                        collar and leash. If you have questions about what is appropriate, please let us
                                        know.
                                    </p>
                                    <p>
                                        <strong>Food</strong>- Dog food that your dog is currently eating, if their diet
                                        changes while in
                                        our care, it will make training more difficult if they have stomach issues.
                                        Please send enough to last the entire course or additional charges may be
                                        applied.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        What are some items I may need for when I bring my new puppy home?
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        <strong>Collar and Leash</strong>- Although puppies are fairly clingy in the
                                        first few weeks,
                                        having a collar and leash will help prevent your pup from getting too far away.
                                        Let your pup wear the collar around the house to get used to the feeling.
                                    </p>

                                    <p>
                                        <strong>Crate</strong>- We recommend having your pup sleep in a crate and stay
                                        in
                                        the crate when
                                        you are away. This will give your pup a safe place to go and prevent them from
                                        getting into anything while you aren't around.
                                    </p>

                                    <p>
                                        <strong>Food and Water bowls</strong>- Having designated food and water bowls
                                        will help your pup
                                        learn that his food is in that one place and not on the table.
                                    </p>

                                    <p>
                                        <strong>Bed</strong>- A bed is definitely optional. It can be used for comfort
                                        and also when
                                        teaching "place."
                                    </p>

                                    <p>
                                        <strong>Treats</strong>- When training your pup you can begin working with "food
                                        drive." Some use
                                        dry food and some, small treats.
                                    </p>

                                    <p>
                                        <strong>Dry Food</strong>- When you pick up your pup he will already be weaned
                                        to dry food. You
                                        will receive a puppy pack that includes two days' worth of food for your puppy.
                                        If you plan on feeding something other than what the pup already eats, please
                                        let us know so that we can make proper preparations.
                                    </p>

                                    <p>
                                        <strong>Baby Gates</strong>- If there are any areas in your home where you do
                                        not want a puppy to
                                        go, having baby gates can help prevent accidents on carpets and even keep them
                                        out of small children's rooms until they are trained.
                                    </p>

                                    <p>
                                        Not all of these items are needed, but they may make life easier with your new
                                        pup.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="headingfive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        Where will my dog be trained?
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        We accommodate you and your pup to the best of our ability. Whether you need a
                                        private lesson in home or would like to meet at a mutual location, we are more
                                        than happy to work with you. We do like to work with your pup in a place where
                                        he will be comfortable and where there is little distractions, at least for the
                                        first few sessions. Board and Train dogs will be kept at our Facility and will
                                        have the privacy of their own kennel that is disinfected daily.
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

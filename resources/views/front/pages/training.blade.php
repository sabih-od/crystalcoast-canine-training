@extends('front.layout.app')
@section('content')
     <!-- Begin: Main Slider -->
     <div class="innerBan">
        <img src="front/images/innerbnr1.webp" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>Training</h2>
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
                        <h2 class="mainHead">Board and Train</h2>
                        <p>
                            During this board and train, we will provide photos and videos throughout the training, so
                            that you can stay updated on what your pup is learning.
                        </p>
                        <p>
                            This course targets older puppies and adult dogs. Taking a dog in public, going on car
                            rides, and daily life can become much easier if your dog is trained. This course will help
                            your dog learn social manners and obedience in public and at home.
                        </p>
                        <p>
                            Age requirement for puppies is 5 months.
                            <br>
                            Dogs 4 months and older must be fully vaccinated including Rabies
                        </p>
                        <a href="board-and-train.php" class="themeBtn">read more</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse mt-5">
                <div class="col-md-6">
                    <figure>
                        <img src="front/images/img2.webp" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="trainText">
                        <h2 class="mainHead">PRIVATE LESSONS</h2>
                        <p>
                            Private lessons offer a one-on-one atmosphere for you and your pup to work with a trainer in
                            a controlled environment. Lessons may take place in your home, at a park, or at a
                            dog-friendly establishment. You and your dog will meet with a trainer once a week. Our
                            trainer will teach you and your pup commands and work with behavior
                        </p>
                        <p>
                            If there are any behavioral issues that arise during training, the trainer will discuss what
                            is happening and provide advice on solutions.
                        </p>
                        <p>
                            Age requirement for private lessons is 12 weeks old
                        </p>
                        <a href="private-lesson.php" class="themeBtn">read more</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6">
                    <figure>
                        <img src="front/images/img3.webp" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="trainText">
                        <h2 class="mainHead">GROUP TRAINING</h2>
                        <p>
                            Group Classes can be very beneficial. They offer a controlled environment for socialization
                            for you and your dog and create a level of distraction that your pup can learn to be
                            comfortable in.
                        </p>
                        <p>
                            You will need to bring the basic items for your dog including a leash, collar, and water/
                            bowl.
                        </p>
                        <p>
                            Age requirement is 12 weeks old.
                        </p>
                        <a href="group-training.php" class="themeBtn">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

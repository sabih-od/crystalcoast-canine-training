<section class="contactSec">
    <div class="container">
        <div class="aboutcntnt text-center mb-5" data-aos="fade-up">
            <h2 class="mainHead">Contact</h2>
            <p><em>I’d love to hear from you. Let’s collaborate! <span class="font--autography">Susan</span></em></p>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-12">
                <form class="contactForm" action="{{ route('front.contactForm') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input type="text" class="form-control  @error('first_name') is-invalid @enderror"
                                    name="first_name">
                            </div>
                        </div>
                        @error('first_name')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    name="last_name">
                            </div>
                        </div>
                        @error('last_name')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email">
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="form-group">
                                <label>Phone Number*</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone">
                            </div>
                        </div>
                        @error('phone')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-12" data-aos="fade-up">
                            <div class="form-group">
                                <label>Subject*</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject">
                            </div>
                        </div>
                        @error('subject')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-12" data-aos="fade-up">
                            <div class="form-group">
                                <label>"Let’s Discuss Your Project*"</label>
                                <div class="radioField">
                                    <input type="radio" name="client_type" id="investor" value="Investor">
                                    <label for="investor">Investor</label>
                                </div>
                                <div class="radioField">
                                    <input type="radio" name="client_type" id="design" value="Design Client">
                                    <label for="design">Design Client</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up">
                            <div class="form-group">
                                <label>Please describe your project*</label>
                                <textarea type="text" class="form-control @error('message') is-invalid @enderror" rows="5" name="message"></textarea>
                            </div>
                        </div>
                        @error('message')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-12" data-aos="fade-up">
                            <div class="form-group">
                                <input type="file" class="form-control" name="photo" id="firstimageInput">
                            </div>
                        </div>
                        <img id="firstimagePreview" src="{{( asset('upload/placeholder.png'))}}"
                        alt="Profile Preview"
                        style="width: 200px; height: 150px; margin-top: 10px;">
                        <div class="col-md-12 text-center " data-aos="fade-up">
                            <button class="themeBtn borderBtn">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
    function showImagePreview(input, previewId) {
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    const imageInput = document.getElementById('firstimageInput');
    imageInput.addEventListener('change', function () {
        showImagePreview(this, 'firstimagePreview');
    });
</script>
</section>

@extends('layouts.app')

@section('content')

  <!-- Video Modal Start -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
              allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal End -->


  <!-- Header Start -->
  <div class="container-fluid bg-color-a d-flex align-items-center py-5" id="home" style="min-height: 100vh;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
          <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/pfp.jpg" alt="">
        </div>
        <div class="col-lg-7 text-center text-lg-left">
          <h3 class="color-b font-weight-normal mb-3">I'm</h3>
          <h1 class="display-3 text-uppercase text-secondary mb-2" style="-webkit-text-stroke: 2px #35274A;">
            {{ $user?->name }}</h1>
          <h1 class="typed-text-output d-inline font-weight-lighter color-b"></h1>
          <div class="typed-text d-none">{{ $user?->job }}</div>
          <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
            <a download="JEAN-CEDEÑO-CV.pdf" href="JEAN-CEDEÑO-CV.pdf" class="btn bg-white color-b mr-5">Download CV</a>
            {{-- <button type="button" class="btn-play secondary" data-toggle="modal"
                            data-src="{{$setting->video_url }}" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->


  <!-- About Start -->
  <div class="container-fluid py-5 bg-color-b" id="about">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-1 text-uppercase color-a" style="-webkit-text-stroke: 1px #dee2e6;">About Me</h1>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 pb-4 pb-lg-0">
          <img class="img-fluid rounded w-100" src="img/profile.jpg" alt="">
        </div>
        <div class="col-lg-7">
          <h3 class="mb-4 color-a">{{ $setting->about_title }}</h3>
          <p class="color-a">{{ $setting->about_description }}</p>
          <div class="row mb-3">
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Name: <span class="color-a font-weight-bold">{{ $user?->name }}</span></h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Birthday: <span class="color-a font-weight-bold">{{ $user?->birth_day }}</span></h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Degree: <span class="color-a font-weight-bold">{{ $user?->degree }}</span></h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Experience: <span class="color-a font-weight-bold">{{ $user?->experience }} Years</span></h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Phone: <span class="color-a font-weight-bold"><a href="tel:{{ $user?->phone }}">{{ $user?->phone }}</a></span>
              </h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Email: <span class="color-a font-weight-bold"><a
                    href="mailto:{{ $user?->email }}">{{ $user?->email }}</a></span></h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Address: <span class="color-a font-weight-bold">{{ $user?->address }}</span></h6>
            </div>
            <div class="col-sm-6 py-2">
              <h6 class="color-a">Freelance: <span class="color-a font-weight-bold">Available</span></h6>
            </div>
          </div>
          <a href="mailto:{{ $user?->email }}" class="btn btn-outline-secondary mr-4">Hire Me</a>
          {{-- <a href="" class="btn btn-outline-secondary">Learn More</a> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Qualification Start -->
  <div class="container-fluid py-5 bg-color-a" id="qualification">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-1 text-uppercase color-b" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h3 class="mb-4 color-b">My Education</h3>
          <div class="border-left border-secondary pt-2 pl-4 ml-2">
            @foreach ($educations as $education)
              <div class="position-relative mb-4">
                <i class="far fa-dot-circle text-secondary position-absolute" style="top: 2px; left: -32px;"></i>
                <h5 class="font-weight-bold mb-1 color-b">{{ $education->title }}</h5>
                <p class="mb-2 color-b"><strong>{{ $education->association }}</strong> | <small>{{ $education->from }} -
                    {{ $education->to }}</small></p>
                <p>{{ $education->description }} </p>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="mb-4 color-b">My Expericence</h3>
          <div class="border-left border-secondary pt-2 pl-4 ml-2">
            @foreach ($experiences as $experience)
              <div class="position-relative mb-4">
                <i class="far fa-dot-circle text-secondary position-absolute" style="top: 2px; left: -32px;"></i>
                <h5 class="font-weight-bold mb-1 color-b">{{ $experience->title }}</h5>
                <p class="mb-2 color-b"><strong>{{ $experience->association }}</strong> | <small>{{ $experience->from }} -
                    {{ $experience->to }}</small></p>
                <p>{{ $experience->description }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Qualification End -->

  <!-- Services Start -->
  <div class="container-fluid pt-5 bg-color-b" id="service">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-1 text-uppercase color-a" style="-webkit-text-stroke: 1px #dee2e6;"> My Services</h1>
      </div>
      <div class="row pb-3">
        @foreach ($services as $service)
          <div class="col-lg-4 col-md-6 text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-4">
              <i class="{{ $service->icon }} service-icon bg-color-a color-b mr-3"></i>
              <h4 class="font-weight-bold m-0 color-a">{{ $service->name }}</h4>
            </div>
            <p class="color-a">{{ $service->description }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Services End -->

  <!-- Skill Start -->
  <div class="container-fluid py-5 bg-color-a" id="skill">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-1 text-uppercase color-b" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
      </div>
      <div class="row align-items-center">
        @foreach ($skills->split($skills->count() / 3) as $row)
          <div class="col-md-6">
            @foreach ($row as $skill)
              <div class="skill mb-4">
                <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold color-b">{{ $skill->name }}</h6>
                  <h6 class="font-weight-bold color-b">{{ $skill->percent }}%</h6>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percent }}"
                    aria-valuemin="0" aria-valuemax="100" style="background-color: {{ $skill->color }}"></div>
                </div>
              </div>
            @endforeach
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Skill End -->

  <!-- Portfolio Start -->
  <div class="container-fluid pt-5 pb-3 bg-color-b" id="portfolio">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-1 text-uppercase color-a" style="-webkit-text-stroke: 1px #dee2e6;">Portfolio</h1>
      </div>
      <div class="row">
        <div class="col-12 text-center mb-2">
          <ul class="list-inline mb-4" id="portfolio-flters">
            <li class="btn btn-sm btn-outline-secondary m-1 active" data-filter="*">All</li>
            @foreach ($categories as $category)
              <li class="btn btn-sm btn-outline-secondary m-1" data-filter=".{{ $category->name }}">
                {{ $category->name }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row portfolio-container">
        @foreach ($portfolios as $portfolio)
          <div class="col-lg-12 col-md-12 mb-4 portfolio-item {{ $portfolio->category->name }}">
            <div class="position-relative overflow-hidden">
              <h2 class="color-b">{{ $portfolio->title }}</h2>
              <img src="{{ $portfolio->image }}" class="img-fluid border-gray-200 shadow-sm" alt="image">
              <a target="_blank" href="{{ $portfolio->project_url }}">
                <button class="btn btn-outline-secondary btn-sm">View</button>
              </a>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </div>
  <!-- Portfolio End -->


  <!-- Testimonial Start -->
  <div class="container-fluid py-5 bg-color-a" id="testimonial">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-1 text-uppercase color-b" style="-webkit-text-stroke: 1px #dee2e6;">Clients Say</h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="owl-carousel testimonial-carousel">
            @foreach ($reviewers as $review)
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-light mb-4 color-b">{{ $review->description }}</h4>
                <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset("./$review->image") }}"
                  style="width: 80px; height: 80px;">
                <h5 class="font-weight-bold m-0 color-b">{{ $review->name }} </h5>
                <span>{{ $review->job }}</span>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

  <!-- Contact Start
            <div class="container-fluid py-5" id="contact">
                <div class="container">
                    <div class="position-relative d-flex align-items-center justify-content-center">
                        <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                        <h1 class="position-absolute text-uppercase text-secondary">Contact Me</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="contact-form text-center">
                                @if (Session::has('message'))
  <div class="alert alert-secondary" role="alert">
                                  {{ Session::get('message') }}
                                </div>
                                <br>
  @endif
                                <form id="contactForm" method="POST" action="{{ route('contact') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="control-group col-sm-6">
                                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                                required name="name" value="{{ old('name') }}"/>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group col-sm-6">
                                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" value="{{ old('email') }}"
                                                required name="email" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject" value="{{ old('subject_mail') }}"
                                            required name="subject_mail"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" name="content"
                                          required>{{ old('content') }}</textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-secondary" type="submit" id="sendMessageButton">Send
                                            Message</button>
                                    </div>
                                    @if ($errors->any())
  <br>
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
                                        </ul>
                                    </div>
  @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            Contact End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-color-b text-white py-5 px-sm-3 px-md-5">
    <div class="container text-center py-5">
      <div class="d-flex justify-content-center mb-4">
        <a target="_blank" class="btn btn-secondary btn-social mr-2 color-b" href="{{ $setting->github_url }}"><i
            class="fab fa-github"></i></a>
        <a target="_blank" class="btn btn-secondary btn-social mr-2 color-b" href="{{ $setting->fb_url }}"><i
            class="fa-brands fa-instagram"></i></a>
        <a target="_blank" class="btn btn-secondary btn-social mr-2 color-b" href="{{ $setting->linkedin_url }}"><i
            class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="d-flex justify-content-center mb-3">
        <a class="color-a" href="#">Privacy</a>
        <span class="px-3">|</span>
        <a class="color-a" href="#">Terms</a>
        <span class="px-3">|</span>
        <a class="color-a" href="#">FAQs</a>
        <span class="px-3">|</span>
        <a class="color-a" href="#">Help</a>
      </div>
      <p class="m-0">&copy; <a class="color-a font-weight-bold" href="#">JacoJean.pro</a>. All Rights
        Reserved. Designed by <a class="color-a font-weight-bold" target="_blank"
          href="https://github.com/JacoJean07">JacoJean07</a>
      </p>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Scroll to Bottom -->
  <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

  <!-- Back to Top -->
  <a href="#" class="btn btn-outline-light px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

@endsection

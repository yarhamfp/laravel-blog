@extends('layouts.app')
@section('title')
    Home | BakeBlog
@endsection
@section('content')
<header class="page-header page-header-dark bg-primary">
  <div class="page-header-content pt-10">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6" data-aos="fade-up">
                  <h1 class="page-header-title">Build your next project faster with SB UI Kit Pro</h1>
                  <p class="page-header-text mb-5">Welcome to SB UI Kit Pro, a toolkit for building
                      beautiful web interfaces, created by the developmet team at Start Bootstrap</p>
                  <a class="btn btn-teal btn-marketing rounded-pill lift lift-sm"
                      href="#">View Demo<i
                          class="fas fa-arrow-right ml-1"></i></a><a
                      class="btn btn-link btn-marketing"
                      href="#">Documentation</a>
              </div>
              <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-delay="50"><img
                      class="img-fluid"
                      src="{{url('frontend/assets/img/drawkit/color/drawkit-content-man-color.svg')}}" /></div>
          </div>
      </div>
  </div>
  <div class="svg-border-rounded text-white">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
          fill="currentColor">
          <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
</header>
<section class="bg-white py-10">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center mb-10">
                  <div class="badge badge-pill badge-primary-soft text-primary badge-marketing mb-3">
                      12 Demos!</div>
                  <h2>Landing Pages</h2>
                  <p class="lead">When you purchase this UI Kit, you get access to a robust suite of
                      powerful landing page demos to help you get started.</p>
              </div>
          </div>
      </div>
      <div class="row text-center">
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 1 - Multipurpose</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-multipurpose.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-multipurpose.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 2 - Mobile App</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-app-mobile.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-app-mobile.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 3 - Desktop App</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-app-desktop.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-app-desktop.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 4 - Agency</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-agency.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-agency.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 5 - Lead Capture</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-lead-capture.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-lead-capture.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 6 - Press</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-press.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-press.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 7 - Directory</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-directory.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-directory.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 8 - Rental</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-rental.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-rental.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 9 - Real Estate</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-real-estate.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-real-estate.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 10 - Classifieds</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-classifieds.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-classifieds.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 11 - Resume</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-resume.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-resume.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 12 - Portfolio</h6>
              <a class="d-block rounded-lg lift lift-lg" href="landing-portfolio.html"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/landing-portfolio.jpg') }}" /></a>
          </div>
      </div>
  </div>
  <div class="svg-border-rounded text-light">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
          fill="currentColor">
          <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
</section>
<section class="bg-light py-10">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center mb-10">
                  <div class="badge badge-pill badge-primary-soft text-primary badge-marketing mb-3">
                      19 Pages!</div>
                  <h2>Inner Pages</h2>
                  <p class="lead">A group of pre-build inner page demos are available to get your
                      started when building out the rest of your project!</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Company Pages</h6>
              <div class="list-group small shadow mb-5">
                  <a class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Basic Page<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">About Page<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Pricing Page<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Contact Page<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Terms Page<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a>
              </div>
              <h6 class="mb-3">Careers Pages</h6>
              <div class="list-group small shadow">
                  <a class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Careers List<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Position Details<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a>
              </div>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Support Pages</h6>
              <div class="list-group small shadow mb-5">
                  <a class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Help Center<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Knowledgebase<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Message Center<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Support Ticket<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a>
              </div>
              <h6 class="mb-3">Blog Pages</h6>
              <div class="list-group small shadow">
                  <a class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Overview<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Post<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Archive<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a>
              </div>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Portfolio Pages</h6>
              <div class="list-group small shadow">
                  <a class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Grid<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Large Grid<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Masonry<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Case Study<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a><a
                      class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
                      href="#">Project<i
                          class="fas fa-arrow-right fa-xs text-gray-400"></i></a>
              </div>
          </div>
      </div>
  </div>
  <div class="svg-border-rounded text-white">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
          fill="currentColor">
          <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
</section>
<section class="bg-white py-10">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center mb-10">
                  <div class="badge badge-pill badge-primary-soft text-primary badge-marketing mb-3">
                      Customizable!</div>
                  <h2>Header Examples</h2>
                  <p class="lead">Build your own landing page by starting with one of these
                      customizable header examples! You can customize the colors, content, borders,
                      and more!</p>
              </div>
          </div>
      </div>
      <div class="row text-center">
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 1 - Basic</h6>
              <a class="d-block rounded-lg lift lift-lg" href="#"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/header-basic.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 2 - Basic (Signup)</h6>
              <a class="d-block rounded-lg lift lift-lg" href="#"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/header-basic-signup.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 3 - Graphic</h6>
              <a class="d-block rounded-lg lift lift-lg" href="#"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/header-graphic.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 4 - Graphic (Signup)</h6>
              <a class="d-block rounded-lg lift lift-lg" href="#"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/header-graphic-signup.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 5 - Inner Page</h6>
              <a class="d-block rounded-lg lift lift-lg" href="#"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/header-inner-page.jpg') }}" /></a>
          </div>
          <div class="col-lg-4 mb-5">
              <h6 class="mb-3">Demo 6 - Nav Only</h6>
              <a class="d-block rounded-lg lift lift-lg" href="#"><img
                      class="img-fluid rounded-lg"
                      src="{{ url('frontend/assets/img/screenshots/header-nav-only.jpg') }}" /></a>
          </div>
      </div>
  </div>
  <div class="svg-border-rounded text-light">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
          fill="currentColor">
          <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
</section>
<section class="bg-light py-10">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center mb-10">
                  <h2>Documentation</h2>
                  <p class="lead">Comprehensive documentation includes usage instructions, component
                      reference, and utility class usage instructions</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4 text-center mb-5">
              <div class="display-1 font-weight-bold text-gray-400">70+</div>
              <div class="h5">Custom/Extended Components</div>
              <p>We&apos;ve extended and restyled Bootstrap&apos;s default components, and built a
                  suite of new custom components.</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
              <div class="display-1 font-weight-bold text-gray-400">35+</div>
              <div class="h5">Pre-Built Page Examples</div>
              <p>Our pre-built page examples are a perfect way to get inspired for creating new pages
                  and views.</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
              <div class="display-1 font-weight-bold text-gray-400">100+</div>
              <div class="h5">Custom/Extended Utilites</div>
              <p>We&apos;ve extended and created new utility classes to give you more control over
                  your content with minimal custom CSS.</p>
          </div>
      </div>
      <div class="text-center"><a class="btn btn-marketing btn-primary rounded-pill lift lift-sm"
              href="#">View Documentation</a>
      </div>
  </div>
  <div class="svg-border-rounded text-white">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
          fill="currentColor">
          <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
</section>
@endsection
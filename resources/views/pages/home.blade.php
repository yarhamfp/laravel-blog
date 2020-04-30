@extends('layouts.app')
@section('title')
    Home | BakeBlog
@endsection
@section('content')
<div class="site-section py-0">
  <div class="owl-carousel hero-slide owl-style">
      <div class="site-section">
          <div class="container">
              <div class="half-post-entry d-block d-lg-flex bg-light">
                  <div class="img-bg" style="
                              background-image: url('{{url('frontend/images/big_img_1.jpg')}}');
                          "></div>
                  <div class="contents">
                      <span class="caption">Editor's Pick</span>
                      <h2>
                          <a href="blog-single.html">News Needs to Meet Its Audiences
                              Where They Are</a>
                      </h2>
                      <p class="mb-3">
                          Lorem ipsum dolor sit amet, consectetur
                          adipisicing elit. Voluptate vero
                          obcaecati natus adipisci necessitatibus
                          eius, enim vel sit ad reiciendis. Enim
                          praesentium magni delectus cum, tempore
                          deserunt aliquid quaerat culpa nemo
                          veritatis, iste adipisci excepturi
                          consectetur doloribus aliquam
                          accusantium beatae?
                      </p>

                      <div class="post-meta">
                          <span class="d-block"><a href="#">Dave Rogers</a> in
                              <a href="#">Food</a></span>
                          <span class="date-read">Jun 14
                              <span class="mx-1">&bullet;</span> 3
                              min read
                              <span class="icon-star2"></span></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="site-section">
          <div class="container">
              <div class="half-post-entry d-block d-lg-flex bg-light">
                  <div class="img-bg" style="
                              background-image: url('{{url('frontend/images/big_img_1.jpg')}}');
                          "></div>
                  <div class="contents">
                      <span class="caption">Editor's Pick</span>
                      <h2>
                          <a href="blog-single.html">News Needs to Meet Its Audiences
                              Where They Are</a>
                      </h2>
                      <p class="mb-3">
                          Lorem ipsum dolor sit amet, consectetur
                          adipisicing elit. Voluptate vero
                          obcaecati natus adipisci necessitatibus
                          eius, enim vel sit ad reiciendis. Enim
                          praesentium magni delectus cum, tempore
                          deserunt aliquid quaerat culpa nemo
                          veritatis, iste adipisci excepturi
                          consectetur doloribus aliquam
                          accusantium beatae?
                      </p>

                      <div class="post-meta">
                          <span class="d-block"><a href="#">Dave Rogers</a> in
                              <a href="#">Food</a></span>
                          <span class="date-read">Jun 14
                              <span class="mx-1">&bullet;</span> 3
                              min read
                              <span class="icon-star2"></span></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('frontend/images/big_img_1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('frontend/images/img_h_1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('frontend/images/big_img_1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}


  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <h2>Editor's Pick</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="post-entry-1">
                <a href="post-single.html"><img src="{{ url('frontend/images/img_h_1.jpg') }}" alt="Image" class="img-fluid"></a>
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="post-entry-2 d-flex bg-light">
                <div class="thumbnail" style="background-image: url('{{url('frontend/images/img_v_1.jpg')}}')"></div>
                <div class="contents">
                  <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                  <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                  </div>
                </div>
              </div>

              <div class="post-entry-2 d-flex">
                <div class="thumbnail" style="background-image: url('{{ url('frontend/images/img_v_2.jpg') }}')"></div>
                <div class="contents">
                  <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                  <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                  </div>
                </div>
              </div>

              <div class="post-entry-2 d-flex">
                <div class="thumbnail" style="background-image: url('{{ url('frontend/images/img_v_3.jpg') }}')"></div>
                <div class="contents">
                  <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                  <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="section-title">
            <h2>Trending</h2>
          </div>

          <div class="trend-entry d-flex">
            <div class="number align-self-start">01</div>
            <div class="trend-contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>

          <div class="trend-entry d-flex">
            <div class="number align-self-start">02</div>
            <div class="trend-contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>

          <div class="trend-entry d-flex">
            <div class="number align-self-start">03</div>
            <div class="trend-contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>

          <div class="trend-entry d-flex">
            <div class="number align-self-start">04</div>
            <div class="trend-contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
          
          <p>
            <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
          </p>

        </div>
      </div>
    </div>
  </div>
  <!-- END section -->

  <div class="py-0">
    <div class="container">
      <div class="half-post-entry d-block d-lg-flex bg-light">
        <div class="img-bg" style="background-image: url('{{ url('frontend/images/big_img_1.jpg') }}')"></div>
        <div class="contents">
          <span class="caption">Editor's Pick</span>
          <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
          
          <div class="post-meta">
            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
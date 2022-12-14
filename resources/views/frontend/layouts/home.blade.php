@extends('frontend.layouts.master')
@section('main')
<main>
  <div class="container">
    <div class="row">
      <!-- ARTICLES -->
      <div class="col-lg-8 col-xs-12">
        <section class="articles">
          <article class="blue-article">
            <div class="articles-header">
              <time datetime="2022-10-11">12 hours ago</time>
              <span class="articles-header-tag-blue">Hot</span>
              <span class="articles-header-category">
                <a href="#" class="blue" title="">CSS</a>
              </span>
            </div>
            <div class="articles-content">
              <h2>
                <a href="blog_post.html" title="">
                  10 Interview Questions Every JavaScript Developer Should Know
                </a>
              </h2>
              <p class="font-secondary articles-content-text">
                  I was young, single, and freshly employed to direct National Journal’s Presentation
                  Center, a searchable library of white-label
                  PowerPoint presentations on political and policy developments. By day, I led a team of
                  fellows in creating data
                  visualizations...
              </p>
            </div>
            <div class="articles-footer d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row-reverse">
              <ul class="articles-footer-info d-flex align-items-center">
                <li>
                  <a href="#" class="light-link d-flex align-items-center" title="">
                    <i class="pe-7s-comment"></i>
                    7 Response
                  </a>
                </li>
                <li>
                  <a href="#" class="light-link d-flex align-items-center" title="">
                    <i class="pe-7s-like"></i> 
                    1221
                  </a>
                </li>
              </ul>
              <a title="" class="btn" href="blog_post.html">Read more</a>
            </div>
          </article>

          <article class="red-article">
            <div class="articles-header">
              <time datetime="2022-10-11">January 16, 2022</time>
              <span class="articles-header-category">
                <a href="#" class="red" title="">Javascript</a>
              </span>
            </div>
            <div class="articles-content">
              <h2>
                <a href="blog_post.html" title="">State of the Art JavaScript in 2022</a>
              </h2>
              <p class="font-secondary articles-content-text">
                  Class in JS is not harmless sugar for prototypal OO. Class is a virus that infects
                  everything it touches. It came to us formally
                  in
                  JavaScript with ES6, and at the same time, React was taking off. Lots of people started
                  using classes for React components...
              </p>
            </div>
            <div class="articles-footer d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row-reverse">
              <ul class="articles-footer-info d-flex align-items-center">
                <li>
                  <a title="" href="#" class="light-link d-flex align-items-center">
                    <i class="pe-7s-comment"></i>
                    7 Response
                  </a>
                </li>
                <li>
                  <a title="" href="#" class="light-link d-flex align-items-center">
                    <i class="pe-7s-like"></i>  1221
                  </a>
                </li>
              </ul>
              <a title="" class="btn" href="blog_post.html">Read more</a>
            </div>
          </article>

          <article class="yellow-article">
            <div class="articles-header">
              <time datetime="2022-10-11">12 hours ago</time>
              <span class="articles-header-category"><a title="" href="#" class="yellow">CSS</a></span>
            </div>
            <div class="articles-content">
              <h2>
                <a title="" href="#">Want to learn JavaScript in 2022?</a>
              </h2>
              <p class="font-secondary articles-content-text">
                  This is a walk-through of the steps I personally took in a single year, to begin
                  learning JavaScript. My goal was to be able to
                  get
                  a job in a position where Javascript would be at the forefront of what I do on a daily
                  basis...
              </p>
            </div>
            <div class="articles-footer d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row-reverse">
              <ul class="articles-footer-info d-flex align-items-center">
                <li>
                  <a title="" href="#" class="light-link d-flex align-items-center">
                    <i class="pe-7s-comment"></i>
                    7 Response
                  </a>
                </li>
                <li>
                  <a title="" href="#" class="light-link d-flex align-items-center">
                    <i class="pe-7s-like"></i>  1221
                  </a>
                </li>
              </ul>
              <a title="" class="btn" href="blog_post.html">Read more</a>
            </div>
          </article>

          <article>
            <div class="articles-header">
              <time datetime="2022-10-11">12 hours ago</time>
              <span class="articles-header-category"><a title="" href="#" class="grey">Other</a></span>
            </div>
            <div class="articles-content">
              <h2>
                <a title="" href="blog_post.html">Want to learn JavaScript in 2022?</a>
              </h2>
              <p class="font-secondary articles-content-text">
                This is a walk-through of the steps I personally took in a single year, to begin
                learning JavaScript. My goal was to be able to
                get
                a job in a position where Javascript would be at the forefront of what I do on a daily
                basis...
              </p>
            </div>
            <div class="articles-footer d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row-reverse">
              <ul class="articles-footer-info d-flex align-items-center">
                <li>
                  <a title="" href="#" class="light-link d-flex align-items-center">
                    <i class="pe-7s-comment"></i>
                    7 Response
                  </a>
                </li>
                <li>
                  <a title="" href="#" class="light-link d-flex align-items-center">
                    <i class="pe-7s-like"></i>  1221
                  </a>
                </li>
              </ul>
              <a title="" class="btn" href="blog_post.html">Read more</a>
            </div>
          </article>

          <!-- PAGINATION -->
          <nav class="articles-navigation d-flex justify-content-between align-items-center" aria-label="...">
            <a title="" href="#" class="btn-small-white pagination-back">Back</a>
            <ul class="pagination d-none d-md-flex">
              <li class="page-item active">
                  <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item page-item-more"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">25</a></li>
            </ul>
            <a title="" href="blog_post.html" class="btn-small-white pagination-next">Next</a>
          </nav>
        </section>
      </div>

      <!-- AUTHOR -->
      <div class="aside-blocks col-lg-4 col-xs-12">
        <section class="author">
          <img src="{{ url('public/frontend/img/webp/profile-picture_2x.html')}}" alt="Profile picture" width="100" height="100">
          <h2>Bill Gates</h2>
          <span class="author-info">Front-End Developer</span>
          <span class="author-info">Microsoft Company</span>
          <div class="author-social d-flex align-items-center justify-content-center">
            <a href="#" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon" title="Github"><i class="fab fa-git"></i></a>
            <a href="#" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <ul class="author-nav">
            <li><a class="d-flex align-items-center" href="#" title=""><i class="pe-7s-bookmarks"></i> Download my CV</a></li>
            <li><a class="d-flex align-items-center" href="#" title=""><i class="pe-7s-paper-plane"></i> Write message</a></li>
          </ul>
        </section>

        <section class="categories">
          <h2 class="aside-blocks-title">Categories</h2>
          <ul>
            <li class="nav-elipse-blue"><a href="#" title="Blog CSS articles">CSS</a></li>
            <li class="nav-elipse-red"><a href="#" title="Blog HTML articles">HTML</a></li>
            <li class="nav-elipse-yellow"><a href="#" title="Blog Javascript articles">Javascript</a></li>
            <li class="nav-elipse-green"><a href="#" title="Blog raphic articles">Graphic</a></li>
            <li><a href="#" title="Blog other articles">Other</a></li>
          </ul>
        </section>

        <section class="advertisement">
          <a href="#">
            <img srcset="{{ url('public/frontend/img/webp/advertisement.webp 767w')}}" src="{{ url('public/frontend/img/webp/advertisement_2x.html') }}" alt="Advertisement">
          </a>
        </section>

        <section class="last-project">
          <h2 class="aside-blocks-title">Last Project</h2>
          <div class="last-project-one">
            <h3 class="h4"><a href="#">Microsoft TypeScript</a></h3>
            <time datetime="2022-12-31T23:59:59Z">January 18, 2022</time>
            <p class="mt-2 last-project-one-text">TypeScript starts from the same syntax and semantics that millions of
                JavaScript developers know... </p>
            <a href="#" title="Watch it" class="btn btn-small">Watch it</a>
          </div>
        </section>

        <section class="tags">
          <h2 class="aside-blocks-title">Tags</h2>
          <ul class="tags-content">
            <li class="badge rounded-pill"><a href="#">graphic</a></li>
            <li class="badge rounded-pill"><a href="#">angular2</a></li>
            <li class="badge rounded-pill"><a href="#">graphic</a></li>
            <li class="badge rounded-pill"><a href="#">react</a></li>
            <li class="badge rounded-pill"><a href="#">it</a></li>
            <li class="badge rounded-pill"><a href="#">science</a></li>
          </ul>
        </section>
      </div>
    </div>
  </div>
</main>
@endsection
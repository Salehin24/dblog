<header>
  <div class="container">
    <div class="header-top d-flex justify-content-between align-items-center">
      <div class="header-top-logo">
        <a href="{{ url('/') }}">
          <img width="32" height="32" src="{{ url('public/frontend/img/webp/logo_2x.html') }}" alt="Dblog logo">
        </a>
      </div>
{{--       <div class="header-top-text d-none d-lg-block">
        <p class="font-secondary">
          <span class="fst-italic">“Modern Javascript”</span>
          <span>book is available!</span>
          <a class="header-top-text-link" href="shop.html" title="Modern Javascript Book">Check out</a>
        </p>
      </div> --}}
      <div class="d-flex align-items-center d-lg-block position-relative">
        <div class="header-top-search">
          <div class="header-top-search-btn">
            <i class="pe-7s-search"></i>
          </div>
          <form id="search-form" action="#" method="get">
            <input type="text" class="form-control" placeholder="Search...">
            <button class="btn" type="submit"><i class="pe-7s-search"></i></button>
          </form>
        </div>
        <a href="#" class="light-link d-block d-lg-none" title="Menu">
          <div id="menu-animate-icon" class="header-top-nav-menu-icon">
              <span></span>
              <span></span>
              <span></span>
          </div>
        </a>
      </div>
    </div>
    <nav class="header-nav d-none d-lg-block">
      <ul class="d-block d-lg-flex">
        <li class="active"><a href="#" title="Start page">Start page</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" title="Blog articles">Blog articles</a>
          <ul class="dropdown-menu">
            <li class="nav-elipse-blue"><a href="#" title="Blog CSS articles">CSS</a></li>
            <li class="nav-elipse-red"><a href="#" title="Blog HTML articles">HTML</a></li>
            <li class="nav-elipse-yellow"><a href="#" title="Blog Javascript articles">Javascript</a></li>
            <li class="nav-elipse-green"><a href="#" title="Blog raphic articles">Graphic</a></li>
            <li><a href="#" title="Blog Post">Blog Post</a></li>
          </ul>
        </li>
        <li><a href="#" title="About me">About me</a></li>
        <li><a href="#" title="My projects">My projects</a></li>
        <li><a href="#" title="Contact me">Contact me</a></li>
        <li class="buyproducts-link d-flex align-items-center">
          <i class="pe-7s-cart"></i>
          <a href="#" title="Buy products">Buy products</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<!-- MOBILE NAVIGATION -->
<nav class="mobile-nav header-nav">
  <div class="container">
      <div class="row">
          <div id="mobile-menu" class="col-lg-12">
              <!-- Auto Copy Header Navigation -->
          </div>
      </div>
  </div>
</nav>
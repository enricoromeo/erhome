

<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
  <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu <i class="fa fa-bars"></i>
      </button>
      @if (Auth::check())
        <a class="navbar-brand" href="index.html">#{{ Auth::user()->name }}</a>
      @else
        <a class="navbar-brand" href="index.html">#romeoenrico</a>
      @endif
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a href="#">Contact</a>
              </li>
              <li class="nav-item">
                  <a href="#">Posts</a>
              </li>
          </ul>
      </div>
  </div>
</nav>

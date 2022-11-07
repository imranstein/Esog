<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary">
            <i class="fa fa-user-doctor  text-secondary me-3"></i>ESOG
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="{{ route('front.index') }}" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('front.about') }}" class="dropdown-item">About Us</a>
                    {{-- <a href="detail.html" class="dropdown-item">Blog Detail</a> --}}
                    <a href="{{ route('front.team') }}" class="dropdown-item">The Team</a>
                    <a href="{{ route('front.testimonial') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>

            <a href="{{ route('front.news') }}" class="nav-item nav-link">News</a>
            <a href="{{ route('front.publication') }}" class="nav-item nav-link">Publication</a>
            <a href="{{ route('front.guidelines') }}" class="nav-item nav-link">Guidelines</a>
            <a href="{{ route('front.advocacy') }}" class="nav-item nav-link">Advocacy</a>
            <a href="{{ route('front.member') }}" class="nav-item nav-link">Become a Member</a>



            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    <a href="team.html" class="dropdown-item">The Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div> --}}
            <a href="{{ route('front.contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <div class="d-none d-lg-flex align-items-center ps-4">
            <i class="fa fa-2x fa-user-alt text-secondary me-3"></i>
            <div>
                <a href="{{ route('dashboard') }}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
            </div>
        </div>
    </div>
</nav>

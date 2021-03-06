@section('template')

    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1>Hello, I'm <span class="name">Abhishek Gupta</span></h1>
                        <p>Full Stack Developer</p>
                        <a href="#about" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <div id="nav">
        <nav class="navbar navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Abhishek Gupta</a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"> <a href="#page-top"></a> </li>
                        <li> <a class="page-scroll" href="#about">About</a> </li>
                        <li> <a class="page-scroll" href="#skills">Skills</a> </li>
                        <li> <a class="page-scroll" href="#portfolio">Portfolio</a> </li>
                        <li> <a class="page-scroll" href="#resume">Resume</a> </li>
                        <li> <a class="page-scroll" href="#contact">Contact</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    @yield('content')

    <div id="footer">
        <div class="container text-center">
            <div class="fnav">
                <p>Copyright &copy; 2018 Abhishek Gupta.</p>
            </div>
        </div>
    </div>

@endsection

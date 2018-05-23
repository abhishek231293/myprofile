@extends('myprofile.index')
@extends('myprofile.template')
@section('content')

    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="section-title text-center center">
                <h2>About Me</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"><img src="img/about.jpg" class="img-responsive"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-text">
                        <p>Software engineer with more than 3 year experience in analysis, design, development, testing
                            and implementation of web based application. Proficient in variety of platform and language.
                            Productive in both team-based and self-managed project.</p>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>--}}
                        <p class="text-center"><a class="btn btn-primary" download="" href="docs/Resume.pdf"><i class="fa fa-download"></i> Download Resume</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Skills Section -->
    <div id="skills" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Skills</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="95"> <span class="percent">95</span> </span>
                    <h4>HTML5</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
                    <h4>CSS3</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                    <h4>jQuery</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                    <h4>WordPress</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
                    <h4>Photoshop</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
                    <h4>Illustrator</h4>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Portfolio</h2>
                <hr>
            </div>
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".web">Web Design</a></li>
                            <li><a href="#" data-filter=".app">App Development</a></li>
                            <li><a href="#" data-filter=".branding">Branding</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>Web Design</small> </div>
                                    <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>App Development</small> </div>
                                    <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>Web Design</small> </div>
                                    <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>Web Design</small> </div>
                                    <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>App Development</small> </div>
                                    <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 branding">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>Branding</small> </div>
                                    <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 branding app">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>App Development, Branding</small> </div>
                                    <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project description" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Project Title</h4>
                                        <small>Web Design</small> </div>
                                    <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Achievements Section -->
    <div id="achievements" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Some Stats</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
                    <div class="achievement-box"> <span class="count">310</span>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
                    <div class="achievement-box"> <span class="count">4700</span>
                        <h4>Hours of Work</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
                    <div class="achievement-box"> <span class="count">30</span>
                        <h4>Awards Won</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
                    <div class="achievement-box"> <span class="count">8</span>
                        <h4>Years of Experience</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Resume Section -->
    <div id="resume" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Experience</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <h4>Feb 2013 <br>
                                    - <br>
                                    Present </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Creative Agency</h4>
                                    <h4 class="subheading">UX Developer</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Nov 2011 <br>
                                    - <br>
                                    Jan 2013 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Creative Agency</h4>
                                    <h4 class="subheading">Front-end Developer</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <h4>Dec 2009 <br>
                                    - <br>
                                    May 2011 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Creative Agency</h4>
                                    <h4 class="subheading">UX Designer</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-title center">
                <h2>Education</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">

                        <!-- Education Section-->

                        <li>
                            <div class="timeline-image">
                                <h4>2010 <br>
                                    - <br>
                                    2011 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Design University</h4>
                                    <h4 class="subheading">Master Degree of Design</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>2007 <br>
                                    - <br>
                                    2010 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Design University</h4>
                                    <h4 class="subheading">Bachelor Degree of Design</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <h4>2004 <br>
                                    - <br>
                                    2007 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>School Name</h4>
                                    <h4 class="subheading">High School Degree</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Contact</h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
                    <p>4321 California St,<br>
                        San Francisco, CA 12345</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
                    <p>info@company.com</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
                    <p> +1 123 456 1234</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h3>Leave me a message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                </form>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection


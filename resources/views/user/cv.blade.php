<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orbit - Bootstrap 5 Resume/CV Template for Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="{{ asset('resume') }}/favicon.ico">
    <!-- Google Font -->
    <link
        href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('resume') }}/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('resume') }}/plugins/bootstrap/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('backend') }}/css/demo_2/style.css"> --}}

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('resume') }}/css/orbit-1.css">
</head>

<body>
    <div class="wrapper mt-lg-5">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile rounded-circle" style="height: 150px; width: 120px"
                    src="{{ asset('frontend') }}/img/momin.png" alt="" />
                <h4 class="">Momin Munnaf <span style="color: tomato"></span><span style="color: #acf5a4"></span>
                </h4>
                <h3 class="tagline">Full Stack Developer</h3>
                <a href="{{ route('home') }}" class="btn btn-sm btn-warning mt-3" style="text-decoration: none">Visit my
                    site</a>
                {{-- <button type="button" class="btn btn-inverse-info">Success</button> --}}


            </div><!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa-solid fa-envelope"></i><a
                            href="mominmunnaf1983@gmail.com">mominmunnaf1983@gmail.com</a></li>
                    <li class="phone"><i class="fa-solid fa-phone"></i><a href="tel:0123 456 789">0123 456 789</a></li>
                    <li class="website"><i class="fa-solid fa-globe"></i><a href="https://www.munnaf.xyz"
                            target="_blank">https://www.munnaf.xyz</a></li>
                    <li class="linkedin"><i class="fa-brands fa-linkedin-in"></i><a href="#"
                            target="_blank">linkedin.com/in/alandoe</a></li>
                    <li class="github"><i class="fa-brands fa-github"></i><a href="https://github.com/mominmunnaf"
                            target="_blank">github.com/mominmunnaf</a></li>
                    <li class="twitter"><i class="fa-brands fa-twitter"></i><a href="https://twitter.com/3rdwave_themes"
                            target="_blank">@twittername</a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree">Masters in Information Technology</h4>
                    <h5 class="meta">Islamic University</h5>
                    <h4 class="meta">Kushtia, Bangladesh</h4>
                    <div class="time">2014 - 2015</div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">MTIS in Al Hadith</h4>
                    <h5 class="meta">Islamic University</h5>
                    <h4 class="meta">Kushtia, Bangladesh</h4>
                    <div class="time">2004 - 2005</div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">BTIS in Al Hadith</h4>
                    <h5 class="meta">Islamic University</h5>
                    <h4 class="meta">Kushtia, Bangladesh</h4>
                    <div class="time">2019 - 2004</div>
                </div><!--//item-->
            </div><!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Professional)</span></li>
                    <li>Arabic <span class="lang-desc">(Professional)</span></li>
                    <li>Bengali <span class="lang-desc">(Native)</span></li>
                </ul>
            </div><!--//interests-->



        </div><!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-user"></i></span>Career
                    Profile</h2>
                <div class="summary">
                    <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                            target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget
                        dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i
                            class="fa-solid fa-briefcase"></i></span>Experiences</h2>

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Lead Developer</h3>
                            <div class="time">2023 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Startup Hubs, San Francisco</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                            pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. </p>
                    </div><!--//details-->
                </div><!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Senior Software Engineer</h3>
                            <div class="time">2018 - 2023</div>
                        </div><!--//upper-row-->
                        <div class="company">Google, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                            pretium quis, sem.</p>

                    </div><!--//details-->
                </div><!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">UI Developer</h3>
                            <div class="time">2016 - 2018</div>
                        </div><!--//upper-row-->
                        <div class="company">Amazon, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                            pretium quis, sem.</p>
                    </div><!--//details-->
                </div><!--//item-->

            </section><!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i
                            class="fa-solid fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p>I have completed some projects. You may check my projects mentioned below:</p>
                </div>
                <!--//intro-->
                <div class="item">
                    <a href="https://www.momin.xyz/nextlevel" target="_blank"
                        class="btn btn-sm btn-outline-success mb-2" style="text-decoration: none">Project 01:
                        NextLevel</a><br>

                    <div class="row">
                        <div class="col-lg-9 m-0">
                            <ul>
                                <li>
                                    <span class="project-tagline">
                                        An e-Commerce website that is created through <span
                                            class="text-danger">Laravel</span>.
                                    </span>
                                </li>
                                <li>It is a multy authenticated site. Users are:
                                    <ul>
                                        <li>admin: Features of admin:
                                            <ul>
                                                <li>Maintain category</li>
                                                <li>Maintain sub-category</li>
                                                <li>Maintain products based on category and sub-category</li>
                                                <li>
                                                    <a href="">Check admin dashboard</a>
                                                    using <br><b>User: </b>munif@gmail.com <br> <b>Password:
                                                    </b>12345678
                                                </li>
                                            </ul>
                                        </li>
                                        <li>Seller: Features of Seller
                                            <ul>
                                                <li>Maintain orders</li>
                                                <li>Approve pending orders</li>
                                                <li>
                                                    <a href="">Check Seller dashboard</a>
                                                    using <br><b>User: </b>maimuna@gmail.com <br> <b>Password:
                                                    </b>12345678
                                                </li>
                                            </ul>
                                        </li>
                                        <li>Visitor/Cleint: Feautures of client</li>
                                        <ul>
                                            <li>Visit the site without authentiation</li>
                                            <li>Maintain authentication</li>
                                            <li>After registration <i>Add to Cart</i> option is applicable</li>
                                            <li>Place an order for purchasing</li>
                                        </ul>
                                </li>
                            </ul>
                            </li>
                            <li>
                                Use breeze package for multi-auth.
                            </li>
                            <li>
                                Payment system only applied for "Cash on delivery"
                            </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 wrapper bg bg-light rounded d-flex flex-wrap align-items-center"
                            style="height: 400px"><a href="https://www.momin.xyz/nextlevel" target="_blank"><img
                                    src="{{ asset('frontend/img') }}/nextLevel.png" alt=""
                                    class="align-middle"
                                    style="width: 95%; height: 95%; vertical-align: middle; display:block; margin:auto"></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <a href="https://www.momin.xyz/nextlevel" target="_blank"
                        class="btn btn-sm btn-outline-success mb-2" style="text-decoration: none">Project 02:
                        Munnaf</a><br>

                    <div class="row">
                        <div class="col-lg-9 m-0">
                            <ul>
                                <li>
                                    <span class="project-tagline">
                                        An personal portfolio website also created through <span
                                            class="text-danger">Laravel</span>.
                                    </span>
                                </li>
                                <li>It is a multy authenticated site too. Users are:
                                    <ul>
                                        <li>admin: Features of admin:
                                            <ul>
                                                <li>Maintain category</li>
                                                <li>Maintain sub-category</li>
                                                <li>Maintain products based on category and sub-category</li>

                                            </ul>
                                        </li>

                                        <li>Visitor/Cleint: Feautures of client</li>
                                        <ul>
                                            <li>Visit the site without authentiation</li>
                                            <li>Maintain authentication</li>
                                            <li>After registration <i>Add to Cart</i> option is applicable</li>
                                            <li>Place an order for purchasing</li>
                                        </ul>
                                </li>
                            </ul>
                            </li>

                            </ul>
                        </div>
                        <div class="col-lg-3 wrapper bg bg-light rounded d-flex flex-wrap align-items-center"
                            style="height: 450px"><a href="https://www.momin.xyz/nextlevel" target="_blank"><img
                                    src="{{ asset('frontend/img') }}/munnaf.png" alt="" class="align-middle"
                                    style="width: 95%; height: 95%; vertical-align: middle; display:block; margin:auto"></a>
                        </div>
                    </div>

                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-5-template-for-saas-businesses/"
                            target="_blank">Launch</a></span> - <span class="project-tagline">A responsive website
                        template designed to help startups promote their products or services.</span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-5-vcard-portfolio-template-for-software-developers/"
                            target="_blank">DevCard</a></span> - <span class="project-tagline">A portfolio website
                        template designed for software developers.</span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/"
                            target="_blank">Nova Pro</a></span> - <span class="project-tagline">A responsive Bootstrap
                        theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/"
                            target="_blank">DevStudio</a></span> -
                    <span class="project-tagline">A responsive website template designed to help web
                        developers/designers market their services. </span>
                </div><!--//item-->
            </section><!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-rocket"></i></span>Skills
                    &amp; Proficiency</h2>
                <div class="skillset">
                    <div class="item">
                        <h3 class="level-title">PHP &amp; Laravel</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%"
                                aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%"
                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">React &amp; Angular</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%"
                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">Ruby on Rails</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--//item-->

                </div>
            </section><!--//skills-section-->

        </div><!--//main-body-->
    </div>

    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fa-solid fa-heart"></i> by <a
                    href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->

</body>

</html>

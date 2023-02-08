<?php $this->load->view('elearning/includes/header');?>
   <div class="mdk-header-layout__content page-content ">

               <div class="page-section bg-alt border-bottom-2">
                    <div class="container page__container">

                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="d-flex flex-column flex-md-row align-items-center flex mb-16pt mb-lg-0 text-center text-md-left">
                                <div class="avatar avatar mb-16pt mb-md-0 mr-md-16pt">
                                    <img src="<?=base_url().'assets/front/'?>images/course/python.jpg"
                                         class="avatar-img rounded"
                                         alt="lesson">
                                </div>
                                <div class="flex">
                                    <h1 class="h2 m-0">Python Programming</h1>
                                    <div class="rating mb-8pt d-inline-flex">
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star_border</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-lg-16pt">
                                <a href="<?=base_url().'elearning/courses'?>"
                                   class="btn btn-light">Courses</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="page-section border-bottom-2">
                    <div class="container page__container">

                        <div class="row">
                            <div class="col-lg-8">

                                <div class="js-player card bg-primary text-center embed-responsive embed-responsive-16by9 mb-24pt">
                                    <div class="player embed-responsive-item">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <p class="lead text-white-70 measure-lead">It’s not every day that one of the most important front-end libraries in web development gets a complete overhaul. Keep your skills relevant and up-to-date with this comprehensive introduction to Google’s popular community project.</p>

                                            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                                <a href="student-take-lesson.html"
                                                   class="btn btn-white">Resume course</a>
                                            </div>
                                        </div>
                                        <div class="player__embed d-none">
                                            <iframe class="embed-responsive-item"
                                                    src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                                    allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-24pt">
                                    <span class="chip chip-outline-secondary d-inline-flex align-items-center">
                                        <i class="material-icons icon--left">schedule</i>
                                        2h 46m
                                    </span>
                                    <span class="chip chip-outline-secondary d-inline-flex align-items-center">
                                        <i class="material-icons icon--left">assessment</i>
                                        Beginner
                                    </span>
                                </div>

                                <div class="border-left-2 page-section pl-32pt mb-32pt">

                                    <div class="d-flex align-items-center page-num-container">
                                        <div class="page-num">1</div>
                                        <h4>Getting Started With Angular</h4>
                                    </div>

                                    <p class="text-70 measure-paragraph-max mb-24pt">Good tools make application development quick*er and easier to maintain than* if you did everything by hand. The goal in this guide is to build and run a simple Angular application in TypeScript, using the Angular CLI while adhering to the Style Guide recommendations that benefit every Angular project.</p>

                                    <ul class="accordion accordion--boxed js-accordion measure-paragraph-max mb-32pt mb-lg-64pt"
                                        id="toc-1">
                                        <li class="accordion__item open">
                                            <a class="accordion__toggle"
                                               data-toggle="collapse"
                                               data-parent="#toc-1"
                                               href="#toc-content-1">
                                                <span class="flex">1 of 4 Steps</span>
                                                <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                            </a>
                                            <div class="accordion__menu">
                                                <ul class="list-unstyled collapse show"
                                                    id="toc-content-1">
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">check_circle</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Introduction</a>
                                                        <span class="text-muted">8m 42s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Introduction to TypeScript</a>
                                                        <span class="text-muted">50m 13s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Comparing Python to Rust</a>
                                                        <span class="text-muted">12m 10s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-50">hourglass_empty</span>
                                                        <a class="flex"
                                                           href="student-take-quiz.html">Quiz: Getting Started With Python</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="d-flex align-items-center page-num-container">
                                        <div class="page-num">2</div>
                                        <h4 class="measure-paragraph-max">Creating and Communicating Between Python Components</h4>
                                    </div>
                                    <p class="text-70 measure-paragraph-max mb-24pt">Data sharing is an essential concept to understand before diving into your first Angular project. In this section, you will learn four different methods for sharing data between Angular components.</p>

                                    <ul class="accordion accordion--boxed js-accordion measure-paragraph-max mb-0"
                                        id="toc-2">
                                        <li class="accordion__item">
                                            <a class="accordion__toggle"
                                               data-toggle="collapse"
                                               data-parent="#toc-2"
                                               href="#toc-content-2">
                                                <span class="flex">6 Steps</span>
                                                <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                            </a>
                                            <div class="accordion__menu">
                                                <ul class="list-unstyled collapse"
                                                    id="toc-content-2">
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">check_circle</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Introduction</a>
                                                        <span class="text-muted">8m 42s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Introduction to TypeScript</a>
                                                        <span class="text-muted">50m 13s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Comparing Python to Python</a>
                                                        <span class="text-muted">12m 10s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-50">hourglass_empty</span>
                                                        <a class="flex"
                                                           href="student-take-quiz.html">Quiz: Getting Started With Python</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <div class="page-separator">
                                    <div class="page-separator__text">Author</div>
                                </div>

                                <div class="media align-items-center mb-16pt">
                                    <span class="media-left mr-16pt">
                                        <img src="<?=base_url().'assets/front/'?>images/members/costansia.png"
                                             width="40"
                                             alt="avatar"
                                             class="rounded-circle">
                                    </span>
                                    <div class="media-body">
                                        <a class="card-title m-0"
                                           href="">Bryan</a>
                                        <p class="text-50 lh-1 mb-0">Instructor</p>
                                    </div>
                                </div>
                                <p class="text-70">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>

                                <a href=""
                                   class="btn btn-white mb-24pt">Follow</a>

                                <div class="page-separator">
                                    <div class="page-separator__text">Recommended</div>
                                </div>

                                <div class="mb-8pt d-flex align-items-center">
                                    <a href="student-course.html"
                                       class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                        <img src="<?=base_url().'assets/elearning/'?>images/paths/angular_routing_200x168.png"
                                             alt="Angular Routing In-Depth"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="student-course.html">Angular Routing In-Depth</a>
                                        <div class="d-flex align-items-center">
                                            <div class="rating mr-8pt">

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star_border</span></span>

                                                <span class="rating__item"><span class="material-icons">star_border</span></span>

                                            </div>
                                            <small class="text-muted">3/5</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-16pt d-flex align-items-center">
                                    <a href="student-course.html"
                                       class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                        <img src="<?=base_url().'assets/elearning/'?>images/paths/angular_testing_200x168.png"
                                             alt="Angular Unit Testing"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="student-course.html">Angular Unit Testing</a>
                                        <div class="d-flex align-items-center">
                                            <div class="rating mr-8pt">

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star</span></span>

                                                <span class="rating__item"><span class="material-icons">star_border</span></span>

                                            </div>
                                            <small class="text-muted">4/5</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="page-section bg-alt">
                    <div class="container page__container">

                        <div class="page-separator">
                            <div class="page-separator__text">Feedback</div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6 col-md-4">

                                <div class="card card-feedback card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                    </blockquote>
                                </div>
                                <div class="media ml-12pt">
                                    <div class="media-left mr-12pt">
                                        <a href="student-profile.html"
                                           class="avatar avatar-sm">
                                            <!-- <img src="public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">U</span>
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <a href="student-profile.html"
                                           class="card-title">User</a>
                                        <div class="rating mt-4pt">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 col-md-4">

                                <div class="card card-feedback card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                    </blockquote>
                                </div>
                                <div class="media ml-12pt">
                                    <div class="media-left mr-12pt">
                                        <a href="student-profile.html"
                                           class="avatar avatar-sm">
                                            <!-- <img src="public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">U</span>
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <a href="student-profile.html"
                                           class="card-title">User</a>
                                        <div class="rating mt-4pt">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 col-md-4">

                                <div class="card card-feedback card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                    </blockquote>
                                </div>
                                <div class="media ml-12pt">
                                    <div class="media-left mr-12pt">
                                        <a href="student-profile.html"
                                           class="avatar avatar-sm">
                                            <!-- <img src="public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">U</span>
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <a href="student-profile.html"
                                           class="card-title">User</a>
                                        <div class="rating mt-4pt">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
<?php $this->load->view('elearning/includes/footer');?>
<?php $this->load->view('elearning/includes/search');?>
<?php $this->load->view('elearning/includes/drawer');?>

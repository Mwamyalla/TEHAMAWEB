<?php $this->load->view('elearning/includes/header');?>
 <div class="mdk-header-layout__content page-content ">

                <div class="page-section bg-alt border-bottom-2">
                    <div class="container page__container">

                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="d-flex flex-column align-items-center align-items-lg-start flex mb-16pt mb-lg-0 text-center text-lg-left">
                                <h1 class="h2 mb-4pt">Courses</h1>
                                <div class="lead measure-lead text-70">Browse through thousands of courses.</div>
                            </div>
                            <div class="ml-lg-16pt">
                                <a href="#"
                                   data-target="#library-drawer"
                                   data-toggle="sidebar"
                                   class="btn btn-light">
                                    <i class="material-icons icon--left">tune</i> Filters
                                    <span class="badge badge-notifications badge-accent icon--right">2</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="page-section border-bottom-2">
                    <div class="container page__container">

                        <div class="row">
                            <div class="col-lg-8">

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center mb-24pt"
                                     style="white-space: nowrap;">
                                    <small class="flex text-muted text-headings text-uppercase mr-3 mb-2 mb-sm-0">Displaying 3 out of 10 courses</small>
                                    <div class="w-auto ml-sm-auto table d-flex align-items-center mb-2 mb-sm-0">
                                        <small class="text-muted text-headings text-uppercase mr-3 d-none d-sm-block">Sort by</small>

                                        <a href="#"
                                           class="sort desc small text-headings text-uppercase">Newest</a>

                                        <a href="#"
                                           class="sort small text-headings text-uppercase ml-2">Popularity</a>

                                    </div>

                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Popular Courses</div>
                                </div>

                                <div class="row card-group-row">

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                             data-overlay-onload-show
                                             data-popover-onload-show
                                             data-force-reveal
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?=base_url().'assets/front/'?>images/course/python.jpg"
                                                     alt="course" style="max-height:166px;height:166px;">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="<?=base_url()?>elearning/course_preview">python programming</a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                        </div>
                                                        <a href="<?=base_url()?>elearning/course_preview"
                                                           data-toggle="tooltip"
                                                           data-title="Remove Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="rating flex">
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                        </div>
                                                        <small class="text-50">6 hours</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/front/'?>images/course/python.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">python programming</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with python and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with python</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete python applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the python CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with python</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/xd_430x168.png"
                                                     alt="course" style="max-height:166px;height:166px;">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="<?=base_url()?>elearning/course_preview">Adobe XD</a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                        </div>
                                                        <a href="<?=base_url()?>elearning/course_preview"
                                                           data-toggle="tooltip"
                                                           data-title="Add Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="rating flex">
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                        </div>
                                                        <small class="text-50">6 hours</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/xd_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Adobe XD</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Adobe XD and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Adobe XD</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Adobe XD applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Adobe XD</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Adobe XD</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?=base_url().'assets/front/'?>images/course/flutter.jpg"
                                                     alt="course" style="max-height:166px;height:166px;">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="<?=base_url()?>elearning/course_preview">Flutter App</a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                        </div>
                                                        <a href="<?=base_url()?>elearning/course_preview"
                                                           data-toggle="tooltip"
                                                           data-title="Add Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="rating flex">
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                        </div>
                                                        <small class="text-50">6 hours</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/front/'?>images/course/flutter.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Flutter App</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Flutter and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Flutter</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Flutter applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Flutter CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Flutter</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="mb-32pt">

                                    <ul class="pagination justify-content-start pagination-xsm m-0">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Previous">
                                                <span aria-hidden="true"
                                                      class="material-icons">chevron_left</span>
                                                <span>Prev</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Page 1">
                                                <span>1</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Page 2">
                                                <span>2</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Next">
                                                <span>Next</span>
                                                <span aria-hidden="true"
                                                      class="material-icons">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Development Courses</div>
                                </div>

                                <div class="row card-group-row">

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/angular_430x168.png"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="<?=base_url()?>elearning/course_preview">Learn Angular fundamentals</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                    </div>
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <!-- <small class="text-50">6 hours</small> -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/angular_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Learn Angular fundamentals</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/swift_430x168.png"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="<?=base_url()?>elearning/course_preview">Build an iOS Application in Swift</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                    </div>
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <!-- <small class="text-50">6 hours</small> -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/swift_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Build an iOS Application in Swift</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/wordpress_430x168.png"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="<?=base_url()?>elearning/course_preview">Build a WordPress Website</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                    </div>
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <!-- <small class="text-50">6 hours</small> -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/wordpress_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Build a WordPress Website</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="mb-32pt">

                                    <ul class="pagination justify-content-start pagination-xsm m-0">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Previous">
                                                <span aria-hidden="true"
                                                      class="material-icons">chevron_left</span>
                                                <span>Prev</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Page 1">
                                                <span>1</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Page 2">
                                                <span>2</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Next">
                                                <span>Next</span>
                                                <span aria-hidden="true"
                                                      class="material-icons">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Design Courses</div>
                                </div>

                                <div class="row card-group-row">

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/sketch_430x168.png"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="<?=base_url()?>elearning/course_preview">Learn Sketch</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                    </div>
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <!-- <small class="text-50">6 hours</small> -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/sketch_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Learn Sketch</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/flinto_430x168.png"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="<?=base_url()?>elearning/course_preview">Learn Flinto</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                    </div>
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <!-- <small class="text-50">6 hours</small> -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/flinto_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Learn Flinto</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-xl card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?=base_url()?>elearning/course_preview"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?=base_url().'assets/elearning/'?>images/paths/photoshop_430x168.png"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="<?=base_url()?>elearning/course_preview">Learn Photoshop</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Mchone</small>
                                                    </div>
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <!-- <small class="text-50">6 hours</small> -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?=base_url().'assets/elearning/'?>images/paths/photoshop_40x40@2x.png"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Learn Photoshop</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Mchone</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                            <div class="mb-16pt">
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?=base_url()?>elearning/course_preview"
                                                       class="btn btn-primary">Preview</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Previous">
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Page 1">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Page 2">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-4">

                                <div class="card">
                                    <div class="card-body py-16pt text-center">
                                        <span class="icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-8pt">
                                            <i class="material-icons">timer</i>
                                        </span>
                                        <h4 class="card-title"><strong>Unlock Course</strong></h4>
                                        <p class="card-subtitle text-70 mb-24pt">Get access to all videos in the Course</p>
                                        <a href="pricing.html"
                                           class="btn btn-default mb-8pt">Tsh 50000</a><br>
										<a href="pricing.html"
                                           class="btn btn-primary mb-8pt">Add to Cart</a>
										<a href="pricing.html"
                                           class="btn btn-primary mb-8pt">Enroll</a>
                                    </div>
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Recommended</div>
                                </div>

                                <div class="mb-8pt d-flex align-items-center">
                                    <a href="<?=base_url()?>elearning/course_preview"
                                       class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                        <img src="<?=base_url().'assets/elearning/'?>images/paths/angular_routing_200x168.png"
                                             alt="Angular Routing In-Depth"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="<?=base_url()?>elearning/course_preview">Angular Routing In-Depth</a>
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
                                    <a href="<?=base_url()?>elearning/course_preview"
                                       class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                        <img src="<?=base_url().'assets/elearning/'?>images/paths/angular_testing_200x168.png"
                                             alt="Angular Unit Testing"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="<?=base_url()?>elearning/course_preview">Angular Unit Testing</a>
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

                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <a href="<?=base_url()?>elearning/course_preview"
                                           class="card-title mb-4pt">Angular Best Practices</a>
                                        <p class="lh-1 mb-0">
                                            <small class="text-muted mr-8pt">6h 40m</small>
                                            <small class="text-muted mr-8pt">13,876 Views</small>
                                            <small class="text-muted">13 May 2018</small>
                                        </p>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <a href="<?=base_url()?>elearning/course_preview"
                                           class="card-title mb-4pt">Unit Testing in Angular</a>
                                        <p class="lh-1 mb-0">
                                            <small class="text-muted mr-8pt">6h 40m</small>
                                            <small class="text-muted mr-8pt">13,876 Views</small>
                                            <small class="text-muted">13 May 2018</small>
                                        </p>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <a href="<?=base_url()?>elearning/course_preview"
                                           class="card-title mb-4pt">Migrating Applications from AngularJS to Angular</a>
                                        <p class="lh-1 mb-0">
                                            <small class="text-muted mr-8pt">6h 40m</small>
                                            <small class="text-muted mr-8pt">13,876 Views</small>
                                            <small class="text-muted">13 May 2018</small>
                                        </p>
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

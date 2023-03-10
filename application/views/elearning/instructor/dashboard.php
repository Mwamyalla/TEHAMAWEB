<?php $this->load->view('elearning/includes/header');?>
 <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">
                <div class="page-section bg-alt border-bottom-2">
                    <div class="container page__container">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="flex d-flex flex-column align-items-center align-items-lg-start mb-16pt mb-lg-0 text-center text-lg-left">
                                <h1 class="h2 mb-8pt">Dashboard</h1>
                                <div>
                                    <span
                                        class="chip chip-outline-secondary d-inline-flex align-items-center"
                                        data-toggle="tooltip"
                                        data-title="Earnings"
                                        data-placement="bottom"
                                    >
                                        <i class="material-icons icon--left">trending_up</i>
                                        &dollar;12.3k
                                    </span>
                                    <span
                                        class="chip chip-outline-secondary d-inline-flex align-items-center"
                                        data-toggle="tooltip"
                                        data-title="Sales"
                                        data-placement="bottom"
                                    >
                                        <i class="material-icons icon--left">receipt</i>
                                        264
                                    </span>
                                </div>
                            </div>
                            <div class="ml-lg-16pt">
                                <a href="teacher-profile.html" class="btn btn-light">My Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-section">
                    <div class="container page__container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-24pt">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card border-1 border-left-3 border-left-accent text-center mb-lg-0">
                                                <div class="card-body">
                                                    <h4 class="h2 mb-0">&dollar;1,569.00</h4>
                                                    <div>Earnings this month</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center mb-lg-0">
                                                <div class="card-body">
                                                    <h4 class="h2 mb-0">&dollar;3,917.80</h4>
                                                    <div>Account Balance</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center mb-lg-0">
                                                <div class="card-body">
                                                    <h4 class="h2 mb-0">&dollar;10,211.50</h4>
                                                    <div>Total Sales</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-separator">
                                    <div class="page-separator__text">Earnings</div>
                                </div>
                                <div class="card card-body mb-32pt">
                                    <div id="legend" class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                                    <div class="chart" style="height: 320px;">
                                        <canvas
                                            id="earningsChart"
                                            class="chart-canvas js-update-chart-bar"
                                            data-chart-legend="#legend"
                                            data-chart-line-background-color="gradient:primary,gray"
                                            data-chart-prefix="$"
                                            data-chart-suffix="k"
                                        ></canvas>
                                    </div>
                                </div>
                                <div class="page-separator">
                                    <div class="page-separator__text">Transactions</div>
                                </div>
                                <div class="card">
                                    <div
                                        data-toggle="lists"
                                        data-lists-values='[
											"js-lists-values-course", 
											"js-lists-values-document",
											"js-lists-values-amount",
											"js-lists-values-date"
											]'
                                        data-lists-sort-by="js-lists-values-date"
                                        data-lists-sort-desc="true"
                                        class="table-responsive"
                                    >
                                        <table class="table table-flush table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Date</a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="<?=base_url().'assets/elearning'?>/images/paths/angular_routing_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Angular Routing In-Depth</a>
                                                                <small class="text-muted mr-1">
                                                                    Invoice
                                                                    <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8734</a>
                                                                    -
                                                                    &dollar;
                                                                    <span class="js-lists-values-amount">89</span>
                                                                    USD
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="<?=base_url().'assets/elearning'?>/images/paths/angular_testing_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Angular Unit Testing</a>
                                                                <small class="text-muted mr-1">
                                                                    Invoice
                                                                    <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8735</a>
                                                                    -
                                                                    &dollar;
                                                                    <span class="js-lists-values-amount">89</span>
                                                                    USD
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="<?=base_url().'assets/elearning'?>/images/paths/typescript_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Introduction to TypeScript</a>
                                                                <small class="text-muted mr-1">
                                                                    Invoice
                                                                    <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8736</a>
                                                                    -
                                                                    &dollar;
                                                                    <span class="js-lists-values-amount">89</span>
                                                                    USD
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="<?=base_url().'assets/elearning'?>/images/paths/angular_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Learn Angular Fundamentals</a>
                                                                <small class="text-muted mr-1">
                                                                    Invoice
                                                                    <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8737</a>
                                                                    -
                                                                    &dollar;
                                                                    <span class="js-lists-values-amount">89</span>
                                                                    USD
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="page-separator">
                                    <div class="page-separator__text">Comments</div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <a href="#" class="avatar avatar-sm">
                                                    <!-- <img src="<?=base_url().'assets/elearning'?>/images/people/110/guy-9.jpg" alt="Guy" class="avatar-img rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">LB</span>
                                                </a>
                                            </div>
                                            <div class="media-body d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <a href="profile.html" class="card-title">Laza Bogdan</a>
                                                    <small class="ml-auto text-muted">27 min ago</small>
                                                    <br>
                                                </div>
                                                <span class="text-muted">on
                                                    <a href="instructor-edit-course.html" class="text-50" style="text-decoration: underline;">Data Visualization With Chart.js</a>
                                                </span>
                                                <p class="mt-1 mb-0 text-70">How can I load Charts on a page?</p>
                                            </div>
                                        </div>
                                        <div class="media ml-sm-32pt mt-3 border rounded p-3 card mb-0 d-inline-flex measure-paragraph-max">
                                            <div class="media-left mr-12pt">
                                                <a href="#" class="avatar avatar-sm">
                                                    <!-- <img src="<?=base_url().'assets/elearning'?>/images/people/110/guy-6.jpg" alt="Guy" class="avatar-img rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">FM</span>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <a href="profile.html" class="card-title">FrontendMatter</a>
                                                    <small class="ml-auto text-muted">just now</small>
                                                </div>
                                                <p class="mt-1 mb-0 text-70">Hi Bogdan,
                                                    <br> Thank you for purchasing our course!
                                                    <br>
                                                    <br>Please have a look at the charts library documentation
                                                    <a href="#" class="text-underline">here</a> and follow the instructions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <form action="#" id="message-reply">
                                            <div class="input-group input-group-merge">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-appended"
                                                    required=""
                                                    placeholder="Quick Reply"
                                                >
                                                <div class="input-group-append">
                                                    <div class="input-group-text pr-2">
                                                        <button class="btn btn-flush" type="button">
                                                            <i class="material-icons">tag_faces</i>
                                                        </button>
                                                    </div>
                                                    <div class="input-group-text pl-0">
                                                        <div class="custom-file custom-file-naked d-flex" style="width: 24px; overflow: hidden;">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" style="color: inherit;" for="customFile">
                                                                <i class="material-icons">attach_file</i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-text pl-0">
                                                        <button class="btn btn-flush" type="button">
                                                            <i class="material-icons">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="accordion js-accordion accordion--boxed mb-24pt" id="instructor-accordion">
                                    <div class="accordion__item">
                                        <a
                                            href="#"
                                            class="accordion__toggle collapsed"
                                            data-toggle="collapse"
                                            data-target="#instructor-accordion-menu"
                                            data-parent="#instructor-accordion"
                                        >
                                            <span class="flex">My Account</span>
                                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                        </a>
                                        <div class="accordion__menu collapse" id="instructor-accordion-menu">
                                            <div class="accordion__menu-link active">
                                                <span class="icon-holder icon-holder--small icon-holder--light rounded-circle d-inline-flex icon--left">
                                                    <i class="material-icons icon-16pt">school</i>
                                                </span>
                                                <a class="flex" href="instructor-dashboard.html">Dashboard</a>
                                            </div>
                                            <div class="accordion__menu-link">
                                                <span class="icon-holder icon-holder--small icon-holder--light rounded-circle d-inline-flex icon--left">
                                                    <i class="material-icons icon-16pt">import_contacts</i>
                                                </span>
                                                <a class="flex" href="instructor-courses.html">Manage Courses</a>
                                            </div>
                                            <div class="accordion__menu-link">
                                                <span class="icon-holder icon-holder--small icon-holder--light rounded-circle d-inline-flex icon--left">
                                                    <i class="material-icons icon-16pt">help</i>
                                                </span>
                                                <a class="flex" href="instructor-quizzes.html">Manage Quizzes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-separator">
                                    <div class="page-separator__text">Advertisment</div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END Header Layout Content -->
<?php $this->load->view('elearning/includes/footer');?>
<?php $this->load->view('elearning/includes/drawer');?>

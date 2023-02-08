<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>E-learning</title>
        <meta name="description" content="digital innovative space">
        <meta name="keywords" content="Tehamaspace,Tehama,Csco,CCNA,CISSP,Python,FullStack Developer,HTML, CSS, JavaScript">
        <meta name="google-site-verification" content="TPZFEJr2WZAGrFy5zM6M7s7hO8FKqY-ET6AuuUhbXdk" />


        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

		<link rel="shortcut icon" href="<?=base_url().'assets/front'?>/images/newlogo.png" type="image/png">
        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="<?=base_url()?>assets/elearning/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="<?=base_url()?>assets/elearning/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="<?=base_url()?>assets/elearning/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?=base_url()?>assets/elearning/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="<?=base_url()?>assets/elearning/css/app.css"
              rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-learnly ">

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed
                 data-effects="waterfall">
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand navbar-light bg-white border-bottom"
                         id="default-navbar"
                         data-primary>
                        <div class="container page__container">

                            <!-- Navbar Brand -->
                            <a href="elearning/home"
                               class="navbar-brand mr-16pt">

                                <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                    <span class="avatar-title rounded bg-white"><img 
                                             alt="logo" src="<?=base_url()?>assets/front/images/newlogo.png"
                                             class="img-fluid" style="width:100px;"/></span>

                                </span>
                            </a>

                            <!-- Navbar toggler -->
                            <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                    type="button"
                                    data-toggle="sidebar">
                                <span class="material-icons">short_text</span>
                            </button>

                            <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                                <li class="nav-item">
                                    <a href="elearning/home"
                                       class="nav-link">Home</a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a href="#"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">Courses</a>
                                    <div class="dropdown-menu">
                                        <a href="courses.html"
                                           class="dropdown-item">Browse Courses</a>
                                        <a href="student-course.html"
                                           class="dropdown-item">Preview Course</a>
                                        <a href="student-lesson.html"
                                           class="dropdown-item">Preview Lesson</a>
                                        <a href="student-take-course.html"
                                           class="dropdown-item"><span class="mr-16pt">Take Course</span> <span class="badge badge-notifications badge-accent text-uppercase ml-auto">Pro</span></a>
                                        <a href="student-take-lesson.html"
                                           class="dropdown-item">Take Lesson</a>
                                        <a href="student-take-quiz.html"
                                           class="dropdown-item">Take Quiz</a>
                                        <a href="student-quiz-result-details.html"
                                           class="dropdown-item">Quiz Result</a>
                                        <a href="student-my-courses.html"
                                           class="dropdown-item">My Courses</a>
                                        <a href="student-quiz-results.html"
                                           class="dropdown-item">My Quizzes</a>
                                    
                                    </div>
                                </li>
                                <li class="nav-item dropdown"
                                    data-toggle="tooltip"
                                    data-title="Community"
                                    data-placement="bottom"
                                    data-boundary="window">
                                    <a href="#"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <i class="material-icons">people_outline</i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="teachers.html"
                                           class="dropdown-item">Browse Teachers</a>
                                        <a href="faq.html"
                                           class="dropdown-item">FAQ</a>
                                        <a href="help-center.html"
                                           class="dropdown-item">Help Center</a>
                                        <a href="discussions.html"
                                           class="dropdown-item">Discussions</a>
                                        <a href="discussion.html"
                                           class="dropdown-item">Discussion Details</a>
                                        <a href="discussions-ask.html"
                                           class="dropdown-item">Ask Question</a>
                                    </div>
                                </li>
                            </ul>

                            <form class="search-form form-control-rounded navbar-search d-none d-lg-flex mr-16pt"
                                  action="index.html"
                                  style="max-width: 230px">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search ...">
                            </form>

                            <div class="nav navbar-nav ml-auto mr-0 flex-nowrap d-flex">
                                <div class="nav-item dropdown">
                                    <a href="#"
                                       class="nav-link d-flex align-items-center dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">

                                        <span class="avatar avatar-sm mr-8pt2">

                                            <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                                        </span>

                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header"><strong>Account</strong></div>
                                        <a class="dropdown-item"
                                           href="edit-account.html">Edit Account</a>
                                        <a class="dropdown-item"
                                           href="billing.html">Billing</a>
                                        <a class="dropdown-item"
                                           href="billing-history.html">Payments</a>
                                        <a class="dropdown-item"
                                           href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

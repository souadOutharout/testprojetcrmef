<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.net/dunzo/template/knowledgebase.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 23:04:15 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Dunzo - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                                src="../assets/images/logo/logo-1.png" alt=""><img class="img-fluid for-dark"
                                src="../assets/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar">
                        <svg class="sidebar-toggle">
                            <use href="#">
                            </use>
                        </svg>
                    </div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li class="serchinput">
                            <div class="serchbox">
                                <svg>
                                    <use href="#">
                                    </use>
                                </svg>
                            </div>
                            <div class="form-group search-form">
                                <input type="text" placeholder="Search here...">
                            </div>
                        </li>
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="#">
                                    </use>
                                </svg>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown p-0">
                            <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40"
                                    src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : '../assets/images/user/7.jpg' }}"alt="">
                                <div class="flex-grow-1"><span>{{ auth()->user()->FirstName }}
                                        {{ auth()->user()->LastName }}</span>
                                    <p class="mb-0">{{ auth()->user()->role }} <i
                                            class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="{{ route('profil.index') }}"><i data-feather="user"></i><span>Account
                                        </span></a>
                                </li>
                                <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a>
                                </li>
                                <li><a href="{{ route('update.profile') }}"><i
                                            data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="{{ route('logout') }}"><i data-feather="log-in">
                                        </i><span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Souad</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-layout="fill-svg">
                <div>
                    <div class="logo-wrapper"><a href="{{ route('homepage') }}"><img class="img-fluid"
                                src="../assets/images/logo/logo.png" alt=""></a>
                        <div class="toggle-sidebar">
                            <svg class="sidebar-toggle">
                                <use href="#">
                                </use>
                            </svg>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{ route('homepage') }}"><img class="img-fluid"
                                src="../assets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="{{ route('homepage') }}"><img class="img-fluid"
                                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="pin-title sidebar-main-title">
                                    <div>
                                        <h6>Pinned</h6>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                        class="sidebar-link sidebar-title link-nav"
                                        href="{{ route('Annonce.pub') }}">
                                        <span>Account</span></a></li>
                                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                        class="sidebar-link sidebar-title link-nav"
                                        href="{{ route('Annonce.pub') }}">
                                        <span>Annonce</span></a></li>
                                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                        class="sidebar-link sidebar-title link-nav"
                                        href="{{ route('update.profile') }}">
                                        <span>settings</span></a></li>
                                @if (auth()->user()->role === 'admin')
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('admin.index') }}">
                                            <span>Statistique</span></a></li>
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('ListFormateur') }}">
                                            <span>List Formateur</span></a></li>
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('ListReclamation') }}">
                                            <span>List Reclamation</span></a></li>
                                @endif
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-8">Applications</h6>
                                    </div>
                                </li>
                                @if (auth()->user()->role === 'Formateur' || auth()->user()->role === 'admin')
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                            class="sidebar-link sidebar-title" href="#">
                                            <svg class="stroke-icon">
                                                <use href="#">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="#">
                                                </use>
                                            </svg><span>Etablissements</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{ route('profil.create') }}">Create Etablissements</a></li>
                                            <li><a href="{{ route('liste.index') }}">Etablissements List</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                            class="sidebar-link sidebar-title" href="#">
                                            <svg class="stroke-icon">
                                                <use href="#">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="#">
                                                </use>
                                            </svg><span>diplome</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{ route('diplome.create') }}">Create diplome</a></li>
                                            <li><a href="{{ route('liste.diplom') }}">diplome List</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('annonce.index') }}">
                                            <svg class="stroke-icon">
                                                <use href="#">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="{{ route('annonce.index') }}">
                                                </use>
                                            </svg><span>Create Annonce</span></a></li>
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('liste.create') }}">
                                            <svg class="stroke-icon">
                                                <use href="#">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="{{ route('liste.create') }}">
                                                </use>
                                            </svg><span>Emploi du temps</span></a></li>
                                @endif
                                @if (auth()->user()->role === 'Stagiaire' || auth()->user()->role === 'admin')
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('suivi.formation') }}">
                                            <svg class="stroke-icon">
                                                <use href="#">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="{{ route('suivi.formation') }}">
                                                </use>
                                            </svg><span>Suivi Formation</span></a>
                                    </li>
                                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                            class="sidebar-link sidebar-title link-nav"
                                            href="{{ route('reclamation') }}">
                                            <svg class="stroke-icon">
                                                <use href="#">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="{{ route('reclamation') }}">
                                                </use>
                                            </svg><span>Reclamation-Ge</span></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6 ps-0">
                                <h3>Knowledgebase</h3>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <svg class="stroke-icon">
                                                <use
                                                    href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home">
                                                </use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Knowledgebase</li>
                                    <li class="breadcrumb-item active">Knowledgebase</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid knowledgebase">
                    <div class="row">
                        <div class="col-12">
                            <div class="knowledgebase-bg"><img class="bg-img-cover bg-center"
                                    src="../assets/images/knowledgebase/bg_1.jpg" alt="looginpage"></div>
                            <div class="knowledgebase-search">
                                <div>
                                    <h3>How Can I help you?</h3>
                                    @if (session('success'))
                                        <script>
                                            alert("{{ session('success') }}");
                                        </script>
                                    @endif
                                    <form action="{{ route('reclamation.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="type" class="form-label">Type de Réclamation</label>
                                            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" placeholder="Entrez le type de réclamation">
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Décrivez votre réclamation"></textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Soumettre</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="d-flex faq-widgets">
                                        <div class="flex-grow-1">
                                            <h3>Articles</h3>
                                            <p>How little experience or technical knowledge you currently have. The web
                                                is a very big place, and if you are the typical internet user, you
                                                probably visit several websites every day.</p>
                                        </div><i data-feather="book-open"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="d-flex faq-widgets">
                                        <div class="flex-grow-1">
                                            <h3>Knowledgebase</h3>
                                            <p>A Website Designing course enables learners to use essential designing
                                                and programming tools required to do the job. The curriculum is a blend
                                                of various themes.</p>
                                        </div><i data-feather="aperture"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="d-flex faq-widgets">
                                        <div class="flex-grow-1">
                                            <h3>Support</h3>
                                            <p>The customer support industry is renaissance. Customer support as a
                                                specialty is coming into its own, offering companies a competitive
                                                advantage that’s difficult to copy.</p>
                                        </div><i data-feather="file-text"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-copyright">
                            <p class="mb-0">Copyright 2023 © Maroc theme by Souad.</p>
                        </div>
                        <div class="col-md-6 p-0">
                            <p class="heart mb-0">Hand crafted &amp; made with Maroc
                                <svg class="footer-icon">
                                    <use href="{{ route('homepage') }}">
                                    </use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/sidebar-pin.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.net/dunzo/template/knowledgebase.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 23:04:15 GMT -->

</html>
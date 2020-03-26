<!--[if IE ]><![endif]-->
<!DOCTYPE html>
<!--[if IE 8 ]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js lt-ie10 ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--> 
<html class="no-js" lang="en"> 
<!--<![endif]-->
    <head>
        <!-- 
        =============================================
        Meta Tags
        =============================================
        -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
        =============================================
        Title
        =============================================
        -->
        <title>SELVEDIN - PORTFOLIO</title>


        <!--
        =============================================  
        Stylesheets
        =============================================
        -->
        <link rel="shortcut icon" href="favicon.ico" />
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7-stroke.css">

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/lib/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" href="assets/lib/nivo-lightbox/nivo-lightbox-theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

        <link rel="stylesheet" type="text/css" href="assets/css/style.css">


        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    
    <body>

        <div id="preloader">
            <div id="spinner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="slider-nav">
                            <div>
                                <div class="icon-box">
                                    <span class="icon-box-wrapper">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <span>Who</span>
                            </div>
                            <div>
                                <span>what</span>
                            </div>
                            <div>
                                <span>How</span>
                            </div>
                            <div>
                                <span>work</span>
                            </div>
                            <div>
                                <div class="icon-box">
                                    <span class="icon-box-wrapper">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="appSelvedin" class="main-content">
            <div class="slider-for">

                <!-- =================================================
                        Home Page
                ================================================== -->

                <div>
                    <div class="home-page page-bg" id="home">
                        <div class="container">
                            <div class="page-wrapper">
                                <div class="page-wrapper-inner">
                                    <div class="logo">
                                        <img src="assets/image/logo.png" alt="Site Logo" class="img-responsive center-block wow animated  fadeInDown" data-wow-delay="3.5s">
                                    </div>
                                        
                                    <h3 class="site-title">
                                        give your business new <span>level</span>
                                    </h3>


                                    <div class="social-buttons center-block wow animated  fadeIn" data-wow-delay="4s">
                                        <ul class="share-button">
                                            <li>
                                                <a :href="links.twitter" class="icon-box" target="blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a :href="links.github" class="icon-box"  target="blank">
                                                    <i class="fa fa-github"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a :href="links.linkedin" class="icon-box"  target="blank">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a :href="links.pinterest" class="icon-box" target="blank">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <footer>
                                        <p class="copyright-text wow animated  fadeInUp" data-wow-delay="4.5s">
                                            <a href="https://selvedin.com/" target="_blank">selvedin</a> <?= date("Y") ?>.
                                        </p>
                                    </footer>
                                </div>
                            </div>
                        </div>  <!-- /.container -->
                    </div>  <!-- /.home-page -->
                </div>

                <!-- =================================================
                        About Page
                ================================================== -->

                <div>
                    <div class="about-page page-bg" id="about">
                        <div class="container">
                            <div class="page-wrapper">
                                <div class="page-wrapper-inner">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="page-intro">
                                                <h1>About Us</h1>
                                                <hr>
                                                <p>
                                                    {{ aboutus }}
                                                </p>
                                            </div> <!-- /.page-intro -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="content-box">
                                                <div class="content">
                                                    <h5>our approach</h5>
                                                    <hr>
                                                    <p>
                                                        {{ ourApproach }}
                                                    </p>
                                                </div>
                                            </div> <!-- /.content-box -->
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="content-box">
                                                <div class="content">
                                                    <h5>our mission</h5>
                                                    <hr>
                                                    <p>
                                                        {{ ourMission }}
                                                    </p>
                                                </div>
                                            </div> <!-- /.content-box -->
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="content-box">
                                                <div class="content">
                                                    <h5>our vision</h5>
                                                    <hr>
                                                    <p>
                                                        {{ ourVission }}
                                                    </p>
                                                </div>
                                            </div> <!-- /.content-box -->
                                        </div>
                                    </div>

                                    <footer class="row">
                                        <div class="col-md-12">
                                            <p class="copyright-text">
                                                <a href="https://selvedin.com/" target="_blank">selvedin</a> <?= date("Y") ?>.
                                            </p>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>  <!-- /.container -->
                    </div>  <!-- /.about-page -->
                </div>

                <!-- =================================================
                        Service Page
                ================================================== -->

                <div>
                    <div class="service-page page-bg" id="service">
                        <div class="container">
                            <div class="page-wrapper">
                                <div class="page-wrapper-inner">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="page-intro">
                                                <h1>What we do</h1>
                                                <hr>
                                                <p>
                                                    {{ whatWeDo }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-process-item">
                                                <div class="item-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="about-process-icon">
                                                                <i class="pe-7s-paint fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h2 class="about-process-item-heading">
                                                                ui/ux design
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="about-process-item-description">
                                                                {{ uiDesign }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="about-process-item">
                                                <div class="item-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="about-process-icon">
                                                                <i class="pe-7s-config fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h2 class="about-process-item-heading">
                                                                web development
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="about-process-item-description">
                                                                {{ webDevelopment }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="about-process-item">
                                                <div class="item-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="about-process-icon">
                                                                <i class="pe-7s-bicycle fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h2 class="about-process-item-heading">
                                                                marketing
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="about-process-item-description">
                                                                {{ marketing }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="about-process-item">
                                                <div class="item-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="about-process-icon">
                                                                <i class="pe-7s-camera fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h2 class="about-process-item-heading">
                                                                photography
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="about-process-item-description">
                                                                {{ photography }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="about-process-item">
                                                <div class="item-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="about-process-icon">
                                                                <i class="pe-7s-graph1 fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h2 class="about-process-item-heading">
                                                                SEO
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="about-process-item-description">
                                                                {{ seoEngine }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="about-process-item">
                                                <div class="item-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="about-process-icon">
                                                                <i class="pe-7s-comment fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h2 class="about-process-item-heading">
                                                                7/24 Support
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="about-process-item-description">
                                                                {{ support }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <footer class="row">
                                        <div class="col-md-12">
                                            <p class="copyright-text">
                                                <a href="https://selvedin.com/" target="_blank">selvedin</a> <?= date("Y") ?>.
                                            </p>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>  <!-- /.container -->
                    </div>  <!-- /.service-page -->
                </div>

                <!-- =================================================
                        Process Page
                ================================================== -->

                <div>
                    <div class="process-page page-bg" id="process">
                        <div class="container">
                            <div class="page-wrapper">
                                <div class="page-wrapper-inner">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="page-intro">
                                                <h1>How we do</h1>
                                                <hr>
                                                <p>
                                                    {{ howWeDo }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="process-step">
                                                <h5>1. connect</h5>
                                                <div class="process-icon">
                                                    <i class="pe-7s-plug"></i>
                                                </div>
                                                <p>
                                                    {{ firstStep }}
                                                </p>
                                            </div> <!-- /.process-step -->
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="process-step">
                                                <h5>2. brainstorming</h5>
                                                <div class="process-icon">
                                                    <i class="pe-7s-light"></i>
                                                </div>
                                                <p>
                                                    {{ secondStep }}
                                                </p>
                                            </div> <!-- /.process-step -->
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="process-step">
                                                <h5>3. sketch ideas</h5>
                                                <div class="process-icon">
                                                    <i class="pe-7s-diamond"></i>
                                                </div>
                                                <p>
                                                    {{ thirdStep }}
                                                </p>
                                            </div> <!-- /.process-step -->
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="process-step">
                                                <h5>4. research</h5>
                                                <div class="process-icon">
                                                    <i class="pe-7s-gleam"></i>
                                                </div>
                                                <p>
                                                    {{ fourthStep }}
                                                </p>
                                            </div> <!-- /.process-step -->
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="process-step">
                                                <h5>5. amplify with code</h5>
                                                <div class="process-icon">
                                                    <i class="pe-7s-crop"></i>
                                                </div>
                                                <p>
                                                    {{ fifthStep }}
                                                </p>
                                            </div> <!-- /.process-step -->
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="process-step">
                                                <h5>6. deployment</h5>
                                                <div class="process-icon">
                                                    <i class="pe-7s-rocket"></i>
                                                </div>
                                                <p>
                                                    {{ sixthStep }}
                                                </p>
                                            </div> <!-- /.process-step -->
                                        </div>
                                    </div>

                                    <footer class="row">
                                        <div class="col-md-12">
                                            <p class="copyright-text">
                                                <a href="https://selvedin.com/" target="_blank">selvedin</a> <?= date("Y") ?>.
                                            </p>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>  <!-- /.container -->
                    </div>  <!-- /.service-page -->
                </div>

                <!-- =================================================
                        Portfolio Page
                ================================================== -->

                <div>
                    <div class="portfolio-page page-bg" id="portfolio">
                        <div class="container">
                            <div class="page-wrapper">
                                <div class="page-wrapper-inner">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="page-intro">
                                                <h1>Portfolio</h1>
                                                <hr>
                                                <p>
                                                    {{ portfolio }}
                                                </p>
                                            </div> <!-- /.page-intro -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="portfolio-filter">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div  id="filterList" class="controls">
                                                    <button type="button" class="filter active" data-filter="all"> all </button>
                                                    <button v-for="(cat, index) in categories" type="button" class="filter" :data-filter="'.'+cat"> {{ cat }} </button>
                                                </div> <!-- @end /#filter-list -->
                                            </div>
                                        </div>
                                    </div> <!-- /.portfolio-filter -->

                                    <div class="row">
                                        <div id="portfolioItems" class="portfolio-items">
                                            
                                            <div v-for="project in projects" class="mix portfolio-item col-md-4 col-sm-6 col-xs-12" v-bind:class="project.category">
                                                <div class="item-img">
                                                    <a v-bind:href="'#'+project.id"  class="item-zoom" data-lightbox-type="inline">
                                                        <img v-bind:src="'assets/image/' +  project.image " class="img-responsive center-block" v-bind:alt="project.name">
                                                        <div>
                                                            <h3>{{ project.name }}</h3>
                                                            <span><i class="fa fa-long-arrow-right"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div> <!-- /.portfolio-item -->
                                            

                                            <!-- Nivo Lightbox Content -->

                                            <div v-for='project in projects' :id="project.id" class="nl-hide">
                                                <div class="img-lightbox">
                                                    <div class="container-fluid">
                                                        <div class="row no-gutter">
                                                            <div class="col-md-6">
                                                                <img :src="'assets/image/' + project.image" class="img-responsive center-block"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="img-sidebar">
                                                                    <div class="portfolio-description">

                                                                        <div class="sidebar-header">
                                                                            <div class="img-title">
                                                                                <h2>About this project</h2>
                                                                                <hr>
                                                                            </div>
                                                                        </div>

                                                                        <div class="sidebar-content">
                                                                            <p>
                                                                                 {{ descriptions[project.id] }}
                                                                            </p>
                                                                        </div>

                                                                        <div class="portfolio-details">
                                                                            <div class="sidebar-meta">
                                                                                <h3>Client</h3>
                                                                                <p> {{ project.client }} </p>
                                                                            </div>
                                                                            <div class="sidebar-meta">
                                                                                <h3>Date</h3>
                                                                                <p>{{ project.endDate }}</p>
                                                                            </div>
                                                                            <div class="sidebar-meta">
                                                                                <h3>Category</h3>
                                                                                <p>{{ project.category }}</p>
                                                                            </div>
                                                                            <div class="sidebar-meta">
                                                                                <h3>Link</h3>
                                                                                <p><a :href="project.link" target="blank">{{ project.link }}</a></p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="social-buttons">
                                                                            <ul class="share-button">
                                                                                <li>
                                                                                    <a :href="links.twitter" class="icon-box"  target="blank">
                                                                                        <i class="fa fa-twitter"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a :href="links.github" class="icon-box"  target="blank">
                                                                                        <i class="fa fa-github"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a :href="links.linkedin" class="icon-box"  target="blank">
                                                                                        <i class="fa fa-linkedin"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a :href="links.pinterest" class="icon-box"  target="blank">
                                                                                        <i class="fa fa-pinterest"></i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- /#portfolioItems .portfolio-items -->
                                    </div>

                                    <footer class="row">
                                        <div class="col-md-12">
                                            <p class="copyright-text">
                                                <a href="https://selvedin.com/" target="_blank">selvedin</a> <?= date("Y") ?>.
                                            </p>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>  <!-- /.container -->
                    </div>  <!-- /.portfolio-page -->
                </div>

                <!-- =================================================
                        Contact Page
                ================================================== -->

                <div>
                    <div class="contact-page page-bg" id="contact">
                        <div class="container">
                            <div class="page-wrapper">
                                <div class="page-wrapper-inner">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="page-intro">
                                                <h1>Say hello</h1>
                                                <hr>
                                                <p>
                                                    {{ sayHello }}
                                                </p>
                                            </div> <!-- /.page-intro -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="contact-info">
                                                <ul class="contact-address">
                                                    <li>
                                                        <a href='https://maps.google.com/?ll=44.1552458,17.7883153&z=15' class="icon-box" target="blank">
                                                            <i class="fa fa-map-marker"></i>
                                                        </a>
                                                        {{ contact.address }}
                                                    </li>
                                                    <li>
                                                        <a :href="'mailto:'+contact.email" class="icon-box">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                        {{ contact.email }}
                                                    </li>
                                                    <li>
                                                        <a :href="'tel:'+contact.phone" class="icon-box">
                                                            <i class="fa fa-phone"></i>
                                                        </a>
                                                        {{ contact.phone }}
                                                    </li>
                                                </ul>

                                                <div class="social-buttons">
                                                    <ul class="share-button">
                                                        <li>
                                                            <a :href="links.twitter" class="icon-box" target="blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a :href="links.github" class="icon-box" target="blank">
                                                                <i class="fa fa-github"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a :href="links.linkedin" class="icon-box" target="blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a :href="links.pinterest" class="icon-box" target="blank">
                                                                <i class="fa fa-pinterest"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="content-box">
                                                
                                            </div> <!-- /.content-box -->
                                        </div>
                                    </div>

                                    <footer class="row">
                                        <div class="col-md-12">
                                            <p class="copyright-text">
                                                <a href="https://selvedin.com/" target="_blank">selvedin</a> <?= date("Y") ?>.
                                            </p>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>  <!-- /.container -->
                    </div>  <!-- /.contact-page -->
                </div>
            </div>
        </div>
        
        <!--
        ============================================
        JavaScripts
        =============================================
        -->

        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/slick.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="assets/lib/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.browser.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>

        <script>
            if ( $.browser.msie ) {
                $(".page-bg").each(function () {
                    $(this).css("background-attachment", "scroll");
                });
            }else {
                $(".page-bg").each(function () {
                    $(this).css("background-attachment", "fixed");
                });
            }
            
            var app = new Vue({
              el: '#appSelvedin',
              data: {
                  aboutus: 'A wonderful serenity has taken possession of our entire soul, like these sweet mornings of spring which We enjoy with my whole heart. we all alone, and feel the charm of existence in this spot',
                  ourApproach: 'The 1st step to growing a brand online is to drive qualified leads to your website. Converting incoming traffic into a sale is the 2nd step to build a successful brand. The final step is to bring visitors and customers.',
                  ourMission: 'Our strategy services provide customized, digital solutions to turn you into an industry leader. Our team plans, designs, and develops stunning responsive websites that will increase conversion rates and overall traffic.',
                  ourVission: 'We believe in utilizing the power of the Internet to help clients grow their business, building results-driven digital solutions that perform with cutting-edge design, development, branding and marketing.',
                  whatWeDo:'A wonderful serenity has taken possession of our entire soul, like these sweet mornings of spring which We enjoy with my whole heart. we all alone, and feel the charm of existence in this spot',
                  uiDesign: 'We bring ideas to life with perfectly executed creative. Our websites, videos, campaigns and copywriting build a brand story that will resonate.',
                  webDevelopment: 'Using the best-in-class technology, we build websites and apps that perform. With a full team of developers working on cutting-edge solutions',
                  marketing: 'Our dynamic marketing team gets results. We apply a series of customized tactics to bring qualified traffic to your site and build relevant content that converts.',
                  photography: 'Interest in photography has exploded over the last 10 years, as the developments in digital photography like cameras, computer softwares &amp; printers.',
                  seoEngine: 'What you may see as being just the next buzzword in an industry is the present and future of SEO. Search engines are getting smarter and that’s a good thing.',
                  support: 'Chat with experts online or contact by email. You can also schedule a time for us to call when you’re ready. Ask your need and we’ll give the best options.',
                  howWeDo: 'A wonderful serenity has taken possession of our entire soul, like these sweet mornings of spring which We enjoy with my whole heart. we all alone, and feel the charm of existence in this spot',
                  firstStep: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected by humour',
                  secondStep: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected by humour',
                  thirdStep: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected by humour',
                  fourthStep: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected by humour',
                  fifthStep: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected by humour',
                  sixthStep: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected by humour',
                  portfolio: 'A wonderful serenity has taken possession of our entire soul, like these sweet mornings of spring which We enjoy with my whole heart. we all alone, and feel the charm of existence in this spot',
                  sayHello: 'A wonderful serenity has taken possession of our entire soul, like these sweet mornings of spring which We enjoy with my whole heart. we all alone, and feel the charm of existence in this spot',
                  descriptions:{
                        ayat:'Holy Quran with translation and reading. Development phase. Multilanguage. Multi Reciters. Search by: Sura, Ayah, Page, Word',
                        cards:'Purpose is to help memorize words while lerning foreign language. Using on mobile prefered.',
                        compliance:'Goal is to evaluate company\' compliance to regulatory rules. Define areas of focus, groups for areas, and elements for groups. Audits performed by request.',
                        elevator:'Administrate sales of Elevators. From client\' request to Purchase order and Project Management.',
                        furnitureSite:'Online presentation of goods. Customized for furniture.',
                        furnitureAdmin:'Admin panel for online presentation of furniture.',
                        pos:'Point of Sale - web application. Customize to touch screens. Multicustomers screes available. Statics and reports in prior.',
                        ppt:'Project Performance Tracker. Customized for German market. LV imported from excel sheet. Daily report of employees performance. Creating invoice based on period and performance. Reports available.',
                        ptms:'Projects Tasks Management System. Calendar of tasks. Assigning tasks and tracking performance. Workflow for projects. Preparation phase workflows (Phase, Subphase, Actions). Project performance Workflow. Scheduled tasks module available. Quick notes module. Notes by importance level.',
                        skymap:'Projects, Headquarters, Showrooms, Warehouses info on the Map. Brief info available by click on pin. Mor info available on project title click. Link to google maps, and call to number if used on mobile.',
                        tahfiz:'Goal is to track Quran memorizing process. Create new cycle of learning by page, or half a page. On learning ending timesheet of repetition created base on best practice.',
                        toyrent:'Keep records of rented toys in Malls. Multimall available. Unlimited nubmer of toys. Customized for touch screens and barcode scaners.',
                        estate:'Basic income/outcome tracker, and Real Estate records. Real Estate records can be presented through web page.'
                    },
                  projects:[
                      {id:'ayat',category:'multimedia',name:'Ayat',image:'portfolio-ayat.JPG',link:'http://ayat.selvedin.com',client:'Private',endDate:'2016'},
                      {id:'cards',category:'learning',name:'Memory Cards',image:'portfolio-cards.JPG',link:'http://cards.selvedin.com',client:'Private',endDate:'2019'},
                      {id:'compliance',category:'business',name:'Compliance',image:'portfolio-compliance.JPG',link:'http://compliance.selvedin.com',client:'Nesma Holding',endDate:'2019'},
                      {id:'elevator',category:'business',name:'Elevators',image:'portfolio-elevator.JPG',link:'http://elevator.selvedin.com',client:'Bright Solutions Ltd',endDate:'2015'},
                      {id:'furnitureSite',category:'web',name:'Furniture - web',image:'portfolio-furniture-site.JPG',link:'http://furniture.selvedin.com',client:'Bosna Wood d.o.o.',endDate:'2018'},
                      {id:'furnitureAdmin',category:'admin',name:'Furniture - Admin',image:'portfolio-furniture-admin.JPG',link:'http://adminfurniture.selvedin.com',client:'Bosna Wood d.o.o.',endDate:'2018'},
                      {id:'pos',category:'finance',name:'Point of Sales',image:'portfolio-pos.JPG',link:'http://pos.selvedin.com',client:'str Unsa',endDate:'2017'},
                      {id:'ppt',category:'business',name:'Project Performance Tracker',image:'portfolio-ppt.JPG',link:'http://ppt.selvedin.com',client:'INT BH d.o.o.',endDate:'2017'},
                      {id:'ptms',category:'business',name:'Projects Tasks Management System',image:'portfolio-ptms.JPG',link:'http://ptms.selvedin.com',client:'ATOM HOLDING',endDate:'2018'},
                      {id:'skymap',category:'business',name:'Projects Skymap',image:'portfolio-skymap.JPG',link:'http://skymap.selvedin.com',client:'Nesma Holding',endDate:'2018'},
                      {id:'tahfiz',category:'learning',name:'Tahfiz',image:'portfolio-tahfiz.JPG',link:'http://tahfiz.selvedin.com',client:'Private',endDate:'2019'},
                      {id:'toyrent',category:'finance',name:'Toyrent',image:'portfolio-toyrent.JPG',link:'http://toyrent.selvedin.com',client:'TOYRENT',endDate:'2014'},
                      {id:'estate',category:'finance',name:'Real Estate',image:'portfolio-estate.JPG',link:'http://estate.selvedin.com',client:'Almas Bosna d.o.o.',endDate:'2017'}
                  ],
                  categories:['web','admin','multimedia','business','learning', 'finance'],
                  links:{
                        twitter:'https://twitter.com/SelvedinHaskic',
                        github:'https://github.com/selvedin',
                        linkedin:'https://www.linkedin.com/in/selvedin-haskić-5920b591',
                        pinterest:'https://www.pinterest.com/selvedinhaskic/'
                    },
                    contact:{address:'72251 Vitez',email:'selvedinh@gmail.com',phone:'+387 62 7272 922'}
              }
            });
            
        </script>
    </body>
</html>
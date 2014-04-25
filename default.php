<!DOCTYPE html>

<html class="no-js">
<head>

    <?php Loader::element('header_required'); ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800|Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='<?php echo $this->getThemePath(); ?>/css/theme.css' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- Begin the Top Navigation -->
<a href="#navigation-menu" class="sr-only">Skip to Navigation</a>
<a href="#intro" class="sr-only">Skip to Content</a>
<header class="navbar navbar-inverse" role="navigation">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul id="navigation-menu" class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="https://robinbarnesmusic.com/buzz/">Products</a></li>
                <li><a href="https://robinbarnesmusic.com/gigs/">Press</a></li>
                <li><a href="https://robinbarnesmusic.com/music/">About</a></li>
                <li><a href="https://robinbarnesmusic.com/media/">Events</a></li>
                <li><a href="https://robinbarnesmusic.com/contact/">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</header>

<section id="intro">
    <div class="background-mask"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="banner-image">
                    <img src="<?php echo $this->getThemePath(); ?>/img/coffee-macaroons.jpg" alt="coffee & macaroons" />
                    <h1>Site Title</h1>
                </div>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolores enim facere illo, itaque mollitia non odit porro quaerat, repudiandae soluta tempora tempore? Deleniti, facilis ipsam! Exercitationem ipsa nulla praesentium!</p>
                <a class="btn btn-primary btn-lg">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
<!--            <div class="col-xs-12">-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-offset-5 col-sm-7 ">-->
<!--                        <h2>About Us</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-5 col-md-4">-->
<!--                <img src="--><?php //echo $this->getThemePath(); ?><!--/img/colin.jpg">-->
<!--            </div>-->
<!--            <div class="col-md-offset-1 col-sm-7 ">-->
<!--                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus ducimus enim, eveniet facilis, impedit in ipsam ipsum non odit officia perferendis quae quo reprehenderit repudiandae, saepe ut voluptatem voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti in iure quos sapiente tempora tempore vitae. Ipsam, magnam, quam! Assumenda aut commodi consectetur cupiditate dicta laboriosam, molestias nesciunt nulla rerum!</p>-->
<!--            </div>-->
            <div class="col-sm-5 col-lg-4 about-image">
                <img src="<?php echo $this->getThemePath(); ?>/img/colin.jpg">
            </div>
            <div class="col-lg-offset-1 col-sm-7 about-text">
                <h2>About Us</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus ducimus enim, eveniet facilis, impedit in ipsam ipsum non odit officia perferendis quae quo reprehenderit repudiandae, saepe ut voluptatem voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti in iure quos sapiente tempora tempore vitae. Ipsam, magnam, quam! Assumenda aut commodi consectetur cupiditate dicta laboriosam, molestias nesciunt nulla rerum!</p>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center major-icon"><span class="fa fa-coffee"></span></div>
                <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at consequuntur deserunt doloribus ducimus et maxime odit officia quas quisquam rem sequi sint soluta sunt, tempora ullam veniam. Minus, perspiciatis?</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
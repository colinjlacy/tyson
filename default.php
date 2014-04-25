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

</body>
</html>
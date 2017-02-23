<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Entol.net  - Freelance Web Developer</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css (blue color by default) -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
        <!-- custom css (green color ) -->
        <!--      <link href="css/style-green.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (red color ) -->
        <!--        <link href="css/style-red.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (yellow color ) -->
        <!--       <link href="css/style-yellow.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (sea-greean color ) -->
        <!--      <link href="css/style-sea-green.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (style-gold color ) -->
        <!--       <link href="css/style-gold.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- font awesome for icons -->
        <link href="<?php echo base_url();?>assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css" media="screen">
        <!--google fonts-->


        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <!--owl carousel css-->
        <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo base_url();?>assets/css/yamm.css" rel="stylesheet" type="text/css">
        <!--popups css-->
        <link href="<?php echo base_url();?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="header-top" class="hidden-xs">
            <div class="container">
                <div class="top-bar">
                    <div class="pull-left sample-1right">
                        <a><i class="fa fa-phone"></i> Any questions? Call us: <span class="colored-text"><?php echo phone;?></span> </a>
                         <a><i class="fa fa-envelope"></i> Mail us: <span class="colored-text"><?php echo mail;?></span> </a>
                    </div>
                    <div class="pull-right">
                        <ul class="list-inline top-social">
                            <li>Follow us:</li>
                            <li><a href="<?php echo facebook;?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo twitter;?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo google_plus;?>"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="<?php echo linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--top bar end hidden in small devices-->
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><img src="<?php echo base_url();?>/assets/img/entol_net.png" width="176" height="50" alt="entol.net"></a>
                </div>
                <div  class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php echo ($active_menu == "home") ? "active" : ""; ?>">
                            <a href="<?php echo base_url();?>" >Home </a>
                        </li>
                        <!--menu home li end here-->
                        <li class="<?php echo ($active_menu == "portofolio") ? "active" : ""; ?>">
                            <a href="<?php echo base_url();?>portofolio">Portofolio </a>
                        </li>
                        <!--menu Portfolio li end here-->
                        <li class="<?php echo ($active_menu == "blog") ? "active" : ""; ?>">
                            <a href="<?php echo base_url();?>blog">BLOG </a>
                        </li>
                        <!--menu blog li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="process.html">Our Process</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($active_menu == "shop") ? "active" : ""; ?>">
                            <a href="<?php echo base_url();?>blog">Shop </a>
                        </li>
                        <li class="<?php echo ($active_menu == "contact") ? "active" : ""; ?>">
                            <a href="<?php echo base_url();?>contact">Contact </a>
                        </li>
                        <li class="dropdown " data-animate="animated fadeInUp" style="z-index:500;">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu search-dropdown animated fadeInUp">
                                <li id="dropdownForm">
                                    <div class="dropdown-form">
                                        <form class=" form-inline">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="search...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-theme-bg" type="button">Go!</button>
                                                </span>
                                            </div><!--input group-->
                                        </form><!--form-->
                                    </div><!--.dropdown form-->
                                </li><!--.drop form search-->
                            </ul><!--.drop menu-->
                        </li> <!--menu search li end here-->
                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i></a>
                            <?php $attrib = array('class' => 'login-page'); echo form_open("auth/login",$attrib);?>
                            <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                                <form role="form">
                                    <h4>Signin</h4>

                                    <div class="form-group">
                                      <?php if($message) { echo "<div class=\"alert alert-info alert-error\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $message .  "</div>"; } ?>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <?php echo form_input($identity, '', 'class="form-control" placeholder="'.$this->lang->line("email_address").'" autofocus="autofocus"');?>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                             <?php echo form_input($password,  '', 'class="form-control" placeholder="'.$this->lang->line("pw").'"');?>
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                        <!--                                        <button type="submit" class="btn btn-theme pull-right">Login</button>                 -->
                                        <div class="clearfix"></div>
                                        <hr>
                                        <p>Don't have an account! <a href="#">Register Now</a></p>
                                    </div>
                                </form>
                            </div>
                        </li> <!--menu login li end here-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

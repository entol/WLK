<!--parallax background no slider-->
<section id="home-parallax" class="parallax" data-stellar-background-ratio="0.5">
    <div class="container text-center">
      <h1 class="typed-text">Entol.net Is
            <span class="element" data-elements="Dynamic, Modern,Creative,"></span>
        </h1>
        <p class="lead"> Our passion for design goes beyond beautiful imagery and into the mind of the consumer</p>
        <span class="parallax-buttons">
            <a href="#" class=" btn border-theme btn-lg">Purchase now</a>
            <a href="#" class=" btn border-white btn-lg">Contact us</a>
        </span>
    </div>
</section><!--parallax-background-->
<section class="intro-text">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-left">
                        <h2 class="wow animated fadeInDown">We are a <span class="rotate">Creative Team</span></h2>
                        <p class="lead animated fadeIn">
                          We are a creative team and make great web things since 2013 based in Banten, Indonesia. We've done many web Application And static projects, with expertise in building websites using Codeigniter Framework, also CMS like Wordpress,Joomla,Drupal ,Entol.net also offers to build websites using Responsive Web Design technology. Our passion for design goes beyond beautiful imagery and into the mind of the consumer, where we believe good design should solve problems and position a brand so it stands out as well as stands for something.
                        </p>

                         <a href="#" class=" btn border-black btn-lg">Contact us today</a>
                    </div>
                </div>
            </div>
        </section><!--intro section end-->


        <section class="services-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>What We Offer</h2>
                            <span class="center-line"></span>
                        </div>
                    </div>
                </div><!--center heading row-->
                <div class="row">
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
                            <div class="services-box-icon">
                                <i class="fa fa-pencil"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Web &AMP; Graphics Design</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                            <div class="services-box-icon">
                                <i class="fa fa-globe"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Web Development</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="services-box-icon">
                                <i class="fa fa-users"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Customer Support</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->

                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="services-box-icon">
                                <i class="fa fa-crop"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Pixel perfect design</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="services-box-icon">
                                <i class="fa fa-twitter"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Bootstrap 3.3.2</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                            <div class="services-box-icon">
                                <i class="fa fa-flag"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Font Awesome icons</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.

                                </p>

                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                </div><!--services row-->
            </div>
        </section><!--section services-->
        <div class="divide40"></div>
        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>Recent work</h2>
                            <span class="center-line"></span>
                        </div>
                    </div>
                </div><!--center heading row-->
                <div class="row">
                    <div class="col-md-12">
                        <div id="work-carousel" class="owl-carousel owl-spaced">
                        <?php foreach ($featured_work->result() as $data) { ?>
                            <div>
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url();?>uploads/<?php echo $data->image;?>" class="img-responsive" alt="workimg">
                                </div> <!--item img wrap-->
                                <div class="work-desc">
                                    <h3><a href="<?php echo base_url();?>portofolio/show/<?php echo $data->portofolio_id;?>/<?php echo $data->portofolio_title_url;?>"><?php echo $data->type_portofolio;?></a></h3>
                                    <span><?php echo $data->portofolio_title;?></span>
                                </div><!--work desc-->
                            </div><!--owl item-->
                          <?php }?>
                        </div>
                    </div>
                </div><!--row-->
                <div class="divide30"></div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="<?php echo base_url();?>portofolio" class="btn border-theme btn-lg wow animated fadeInUp"><i class="fa fa-bars"></i> Load More Projects</a>
                    </div>
                </div>
            </div><!--container-->
        </section><!--recent work section -->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h3 class="heading">About Company</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula.
                    </p>
                </div>
                <div class="col-sm-7">
                    <div class="skills-wrapper wow animated bounceIn animated" data-wow-delay="0.2s">
                        <h3 class="heading-progress">Web Design <span class="pull-right">88%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                            </div>
                        </div>
                        <h3 class="heading-progress">Web Development <span class="pull-right">78%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 78%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar">
                            </div>
                        </div>
                        <h3 class="heading-progress">Marketing <span class="pull-right">82%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar">
                            </div>
                        </div>
                    </div><!--skills-->
                </div>
            </div>
        </div><!--about and progress section end-->
        <div class="divide80"></div>
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>clients Says</h2>
                            <span class="center-line"></span>
                        </div>
                    </div>
                </div><!--center heading row-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div id="testi-carousel" class="owl-carousel owl-spaced">
                          <?php foreach ($client_say->result() as $data) { ?>
                            <div>
                                <img src="<?php echo base_url();?>uploads/<?php echo $data->foto;?>" class="img-responsive customer-img" alt="">
                                <h4>
                                    <i class="fa fa-quote-left"></i><?php echo $data->message;?>
                                </h4>
                                <p><a href="<?php echo base_url();?>?url=<?php echo $data->url ;?>">-<?php echo $data->name;?></a></p>
                            </div> <!--testimonials item like paragraph--><?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--testimonials-->
        <div class="divide80"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-7 margin40">
                    <h3 class="heading">Latest Post</h3>
                    <div id="news-carousel" class="owl-carousel owl-spaced">
                      <?php foreach ($latest_post->result() as $data) { ?>
                        <div>
                            <a href="<?php echo base_url();?>blog/read/<?php echo $data->id ;?>/<?php echo $data->judul_url;?>">
                                <div class="item-img-wrap">
                                    <img src="<?php echo base_url();?>uploads/<?php echo $data->foto;?>" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <span></span>
                                    </div>
                                </div>
                            </a><!--news link-->
                            <div class="news-desc">
                                <span><?php echo $data->category;?></span>
                                <h4><a href="<?php echo base_url();?>blog/read/<?php echo $data->id ;?>/<?php echo $data->judul_url;?>"><?php $ur_str=$data->judul; echo  $ur_str= (strlen($ur_str) > 20) ? substr($ur_str,0,20).'' :$ur_str;?></a></h4>
                                <span>By <a href="#"><?php echo $data->author;?></a> <?php echo $data->post_date;?></span> <span><a href="<?php echo base_url();?>blog/read/<?php echo $data->id ;?>/<?php echo $data->judul_url;?>">Read more...</a></span>
                            </div><!--news desc-->
                        </div>
                        <?php  }?>
                    </div>
                </div><!--col 7 end use for latest news owl carousel slide-->
                <div class="col-md-5 margin20">
                    <h3 class="heading">Why Us?</h3>
                    <!--bootstrap collapse-->
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <i class="fa fa-desktop"></i>    100% Responsive Design
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <i class="fa fa-crop"></i>    Pixel Perfect Design
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        <i class="fa fa-cogs"></i>    Full Support
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--collapse end-->
                </div>
            </div>
        </div><!--latest news and why us container end-->

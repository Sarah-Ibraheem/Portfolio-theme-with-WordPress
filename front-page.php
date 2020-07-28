<!-- home page -->
<?php get_header(); ?>
    
    <!--
    ===================
        HOME 
    ===================
    -->
    <section class="mh-home" id="mh-home">
        <div class="home-ovimg">
            <div class="container">
                <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                    <div class="col-sm-6">
                        <div class="mh-header-info">
                            <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <span>Hello I'm</span>
                            </div>
                            
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">Sarah Ibraheem</h2>
                            <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">Back-End Developer</h4>
                            
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="img-border">
                                <img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/avatar.png"?> alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
    <!--
    ==================
        ABOUT
    =================
    -->
    <section class="mh-about" id="mh-about">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/ab-img.png"?> alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-inner">
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: fadeInUp;">About Me</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">Hello, I’m Sarah Ibraheem, web-developer based on Alex. 
                        I have rich experience in web site development &amp; building 
                        and customization. Also I am good at</p>
                        <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <ul>
                                <li><span>php</span></li>
                                <li><span>html</span></li>
                                <li><span>css</span></li>
                                <li><span>php</span></li>
                                <li><span>wordpress</span></li>
                                <li><span>Javascript</span></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!--
    ===================
       EXPERIENCES
    ===================
    -->
    <section class="mh-experince" id="mh-experience">
        <div class="bolor-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-work">
                             <h3>Work Experience</h3>
                             <?php
                                    $args = array(
                                        "post_type" => ["experiences"],
                                        "posts_per_page" => 3
                                    );
                                    $query = new WP_Query($args);
                                    if($query->have_posts(  )){
                                        while($query->have_posts(  )){ $query->the_post(); ?>

                                    <div class="mh-experience-deatils">
                                <!-- Education Institutes-->
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <h4> <?php echo(get_field( "company_name" )); ?></h4>
                                    <div class="mh-eduyear"><?php echo get_field("start_date"); ?> : <?php echo get_field("end_date"); ?></div>
                                    <!-- <span>Responsibility :</span>
                                    <ul class="work-responsibility">
                                        <li><i class="fa fa-circle"></i>Validate CSS</li>
                                        <li><i class="fa fa-circle"></i>Project Management</li>
                                    </ul> -->
                                </div>                                
                            </div>
                                    <?php 
                                        }
                                    }

                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
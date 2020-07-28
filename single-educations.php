<?php get_header(); ?>
<section class="mh-experince" id="mh-experience">
        <div class="bolor-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-work">
                             <?php if(have_posts(  )){{the_post(); ?>
                                    <h3>Education : <?php the_title();?></h3>
                                    <div class="mh-experience-deatils">
                                            <!-- Education Institutes-->
                                            <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <h4>faculty: <?php echo(get_field( "faculty_name" )); ?></h4>
                                                </a>
                                                    <div class="mh-eduyear"><h4>duration : <?php echo get_field("start_date"); ?> : <?php echo get_field("end_date"); ?></h4></div>
                                                    <h4>grade : <?php echo get_field("grade"); ?></h4>                            
                                            </div>   
                                    </div>
                              <?php 
                                }}
                              ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>

<?php get_header(); ?>
<section class="mh-experince" id="mh-experience">
        <div class="bolor-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-work">
                             <?php if(have_posts(  )){{the_post(); ?>
                                <h5>Work Experience - <?php the_title();?></h5>
                                    <div class="mh-experience-deatils">
                                        <!-- Education Institutes-->
                                        <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInUp;">
                                            <a href="<?php echo get_the_permalink(); ?>">
                                                 <h5> Company Name : <?php echo(get_field( "company_name" )); ?></h5>
                                            </a>
                                                <div class="mh-eduyear"><h4>Duration : </h4><?php echo get_field("start_date"); ?> : <?php echo get_field("end_date"); ?></div>
                                                <h4><i class="fa fa-circle"></i>Role : <?php echo get_field("role"); ?></h4>
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

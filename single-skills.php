<?php get_header(); ?>
<!--
    ===================
       SKILLS
    ===================
    -->
    <section class="mh-skills " id="mh-skills">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                    <!--<h2>Skills</h2>-->
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-skills-inner">
                        <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <h3>Technical Skills</h3>
                            <div class="each-skills">
                            <?php if(have_posts(  )){{the_post(); ?>
                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="nome">
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </div>
                                            <div class="percentagem-num"><?php echo get_field("range"); ?></div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width: 86%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }}
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                   
    </section>
<?php get_footer(); ?>

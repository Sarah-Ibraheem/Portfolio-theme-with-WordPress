
   <?php get_header(); ?>
   <div class="container">
   <?php
        if(have_posts(  )){
            while(have_posts(  )){ the_post(); ?>
        <div class="post-item">

            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                </div>
                <div class="col-sm-6">
                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                </div>
            </div>
        </div>    

        <?php 
            }
        }

        ?>
   </div>
    
                
                
   
   <?php get_footer(); ?>
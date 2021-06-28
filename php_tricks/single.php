<?php 
    get_header();

    while(have_posts()){
        the_post() 
?>
        <div class="bgP0">
            <div class="row justify-content-center">
                <div class="bgImg"></div>
                <div class="" algin="center">
                    <h1 class="postTitle">
                        <?php the_title();?>
                    </h1>
                </div>
                <div class="post-intro">

                </div>
            </div>
        </div>

        <div class="bgP1">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="metabox">
                        <p>
                            <a href="<?php echo site_url('/blog') ?>">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Blog Home
                            </a>
                            <span class="metabox_main">
                                <p>
                                    Posted by 
                                    <span class="tag"><?php the_author_posts_link(); ?></span>
                                    on
                                    <?php the_time('F, d, Y'); ?>
                                    in 
                                    <span class="tag"><?php echo get_the_category_list(', '); ?></span>
                                </p>
                            </span>
                        </p>
                    </div>
                    <div class="generic-content">
                        <?php the_content(); ?> 
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <?php
    }
?>



<?php 
    get_footer();
?> 

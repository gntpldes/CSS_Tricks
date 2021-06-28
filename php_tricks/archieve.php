<?php
    get_header();
?>

<main>
    <section class="bl0">
        <div class="row">
            <div class="bgImg"></div>
                <h1 class="postTitle">
                    <?php if(is_category()){
                        single_cat_title(); 
                    }
                    if(is_author()){
                        echo 'Posts by '; the_author(); 
                    }
                    ?>
                </h1>
                <div class="post-intro">
                    <p>
                        <?php the_archieve_description(); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bl1">
        <div class="row">
        
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php
                while(have_posts()){
                    the_post(); ?>
                    <div class="post-item">
                        <h2 class="headline headline-post-title">
                            <a href="<?php the_permalink(); ?> ">
                                <?php the_title(); ?> 
                            </a>
                        </h2>
                        <div class="metabox1">
                            <p>
                                Posted by 
                                <?php the_author_posts_link(); ?>
                                on
                                <?php the_time('F, d, Y'); ?>
                                in 
                                <?php echo get_the_category_list(', '); ?>
                            </p>
                            <div class="generic-content">
                                <?php the_excerpt(); ?>
                                <p>
                                    <a class="btn btn-grey" href="<?php the_permalink();?>">
                                        Continue reading &raquo; 
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }
                echo paginate_links();
            ?>
        </div>
        <div class="col-md-1"></div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>

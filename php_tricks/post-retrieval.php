<?php 
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 2
            )); 
            while($homepagePosts->have_posts()){
                $homepagePosts-> the_post(); ?>
                <div class="event-summary">
                    <a class="event-summary__date event-summary__date--beige c-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month">
                            <?php the_time('M'); ?>
                        </span>
                        <span class="event-summary__day">
                            <?php the_time('d'); ?>
                        </span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny">
                            <a href="<?php the_permalink(); ?>"></a>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 18) ?> <br>
                            <button class="btn btn-mp0">
                                <a href="<?php the_permalink(); ?>" class=nu-grey> Read More</a>
                            </button>
                        </p>
                    </div>
                </div>
            <?php } wp_reset_postdata(); 
        ?>

<?php get_header();?>
    <div id="banner">
        <h1>Book Arena</h1>
        <h3>Get reviews about books</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/reviews');?>">
            <h2 class="section-heading">All Reviews</h2>
        </a>
        <!--Section review posts-->
        <section>
            <?php
                $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                );

                $blogposts = new WP_Query($args);
                while ($blogposts->have_posts()) {
                    $blogposts->the_post();
                
            ?>
            <!-- 1 Section -->
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="720" height="390" alt="">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php echo the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <!-- 2 Section -->
                <?php }
            wp_reset_query();
        ?>
        </section>

        <!-- Project -->
        <a href="<?php echo site_url('/projects') ?>">
            <h2 class="section-heading">All Project</h2>
        </a>
        <!--Section project-->
        <section>
            <?php
                $args = array (
                    'post_type' => 'project',
                    'posts_per_page' => 2,
                );

                $blogposts = new WP_Query($args);
                while ($blogposts->have_posts()) {
                    $blogposts->the_post();
                
            ?>
            <!-- 1 Section -->
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="720" height="390" alt="">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php echo the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <!-- 2 Section -->
                <?php }
                wp_reset_query();
            ?>
        </section>
       
<?php get_footer(); ?>
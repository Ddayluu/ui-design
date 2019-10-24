<?php get_header();?>
    <h2 class="page-heading"><?php the_archive_title() ?></h2>
        <!--Section review posts-->
        <section>
            <?php
                while (have_posts()) {
                   the_post();
                
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
                    <div class="card-meta">
                        Posted by <?php the_author();?> on <?php the_time('F j, Y')?> 
                    </div>
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

       <div class="pagination">
            <?php echo paginate_links() ?>
       </div>
<?php get_footer(); ?>
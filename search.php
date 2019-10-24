<?php get_header();?>
        
        <h2 class="page-heading">Search Result for "<?php echo get_search_query(); ?>"</h2>
        <!--Section review posts-->

        <?php if (have_posts()) {?>
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
                        <?php if(get_post_type()=='post') 
                        	{?>
                        	in <a><?php echo get_the_category_list(', ') ?></a>
                        <?php }?>
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
	    <?php } else { ?>
	    	<div id="no-res" class="no-res">
	    		<h1>
	    			<font>Could not find anything :((</font>
	    		</h1>
	    	</div>
	    <?php }?>
       <div class="pagination">
            <?php echo paginate_links() ?>
       </div>
<?php get_footer(); ?>
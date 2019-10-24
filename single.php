<?php get_header(); 
    while (have_posts()) {
        the_post();
?>
        <h2 class="page-heading"><?php the_title(); ?></h2>
        <div class="post-container">
            <section id="reviewpost">
                <div class="card">
                    <div class="card-meta-reviewpost">
                        Posted by <?php the_author();?> on <?php the_time('F j, Y')?> 
                        <?php if(get_post_type()=='post') {?>
                        in <a><?php echo get_the_category_list(', ') ?></a>
                        <?php }?>
                    </div>
                    <div class="card-image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                    </div>
                    <div class="card-description">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div id="comments-section">
                    <?php
                    $fields =  array(

                    'author' =>
                        '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" size="30"' . $aria_req . ' />',

                    'email' =>
                        '<input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" size="30"' . $aria_req . ' />',        
                    );

                    $args = array (
                        'title_reply' => 'Share Your Thoughts',
                        'fields' => $fields,
                        'comment_field' => '<textarea placeholder="Your Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .'</textarea>',
                        'comment_notes_before' => '<p class="comment-notes">Your email address will not be published. All fields are required</p>'
                    );
                    comment_form($args); 
                    $commennts_number = get_comments_number();
                    if ($commennts_number != 0) {
                        ?>
                        <div class="comments">
                        <h3>What others says</h3>
                        <ol class='all-comments'>
                            <?php
                            $comments = get_comments(array(
                                'post_id' => $post->ID,
                                'status' => 'approve'
                            ));
                            wp_list_comments(array(
                                'per_page' => 15
                            ), $comments);
                            ?>
                        </ol>
                        <?php
                    }
                    ?>
                </div>
            </section>

    <?php } ?>
            <aside id="sidebar">
                <?php 
                dynamic_sidebar('main_sidebar');
                ?>
            </aside>
        </div>
 
    <?php get_footer(); ?>
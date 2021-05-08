<section class="section section--home-news">
    <div class="container">
        <div class="content-holder home-news">
            <div class="row home-news__title">
                <?php $section_title = devwp_split_last_word_from_string( get_field( 'news_title' ) ) ?>
    			<h2 class="section-title section-title--dark-mix">
    				<?php esc_html_e( $section_title[ 'all_but_last_word' ] ); ?>
    				<span class="section-title-colored"><?php esc_html_e( $section_title[ 'last_word' ] ); ?></span>
    			</h2>
            </div>
            <div class="row home-news__posts">
                <?php
                $posts = new WP_Query( array(
					'post_type'      => 'post',
                    'posts_per_page' => 3,
				) );
				if ( $posts->have_posts() ) :
                	while( $posts->have_posts() ) : $posts->the_post();
	                ?>
                        <a class="post-item" href="<?php the_permalink(); ?>">
                            <div class="post-item-image">
                                <figure class="media-holder">
                                    <?php
        							if( has_post_thumbnail() && !post_password_required() ) :
        								the_post_thumbnail( 'wp-devwp-post' );
        							else:
        								echo '<img data-src="' . get_template_directory_uri() . '/assets/images/picture_placeholder_2.jpg" data-src="' . get_template_directory_uri() . '/assets/images/picture_placeholder_2.jpg" width="350" height="280" >';
        							endif;
        							?>
                                </figure>
                            </div>
                            <div class="post-item-caption">
                                <div class="caption-category">
                                    <?php $category = get_the_category(); ?>
                                    <?php esc_html_e( $category[0]->name ); ?>
                                </div>
                                <h4 class="post-item-heading"><?php the_title(); ?></h4>
                            </div>
                        </a>
                        <?php
                    endwhile;
    				wp_reset_postdata();
				endif;
                ?>
            </div>
        </div>
    </div>
</section>

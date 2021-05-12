<?php

/**
 * Display custom breadcrumbs in hero image.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_breadcrumbs' ) ) :
    function devwp_breadcrumbs() {
    	if ( is_front_page() || is_404() ) return;

    	$sep = ' - ';
        $list = '<ul class="page-breadcrumbs">';

    	// start with  with a link to homepage
    	$list .= '<li class="breadcrumb-page">' .
                    '<a href="' . get_home_url() . '" class="breadcrumb-link">Home</a>' .
                '</li>' . $sep;

    	// static page
    	if ( is_page() ) {
            $list .= '<li class="breadcrumb-page">' . get_the_title() . '</li>';
    	}
        // single page
        elseif ( is_single() ) {
            $list .= '<li class="breadcrumb-page">' . get_the_title() . '</li>';
        }
    	// blog
    	elseif ( is_home() ) {
            $list .= '<li class="breadcrumb-page">Blog</li>';
    	}
        // search
    	elseif ( is_search() ) {
    		$list .= '<li class="breadcrumb-search-query">' . get_search_query() . '</li>';
    	}
        // archive
        elseif ( is_archive() ) {
            // category
    		if ( is_category() ) {
    			$list .= '<li class="breadcrumb-taxonomy">' . single_cat_title('', false) . '</li>';
    		}
    		// tag
    		if ( is_tag() ) {
    			$list .= '<li class="breadcrumb-taxonomy">' . single_tag_title('', false) . '</li>';
    		}
            // author
    		if ( is_author() ) {
                global $author;
                $userdata = get_userdata( $author );
    			$list .= '<li class="breadcrumb-author">' . $userdata->display_name . '</li>';
    		}
    		// date
    		if ( is_date() ) {
    			// day
    			if ( is_day() ) {
    				$list .= '<li class="breadcrumb-date">' .
    				            '<a href="' . get_year_link( get_the_time('Y') ) . '" class="breadcrumb-link">' . get_the_time('Y') . '/</a>' .
    				            '<a href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" class="breadcrumb-link">' . get_the_time('m') . '/</a>' .
    				            get_the_time('j') .
    				        '</li>';
    			}
    			// month
    			if ( is_month() ) {
    				$list .= '<li class="breadcrumb-date">' .
    				            '<a href="' . get_year_link( get_the_time('Y') ) . '" class="breadcrumb-link">' . get_the_time('Y') . '/</a>' .
    				            get_the_time('m') .
    				        '</li>';
    			}
    			// year
    			if ( is_year() ) {
    				$list .= '<li class="breadcrumb-date">' . get_the_time('Y') . '</li>';
    			}
    		}

        }



        $list .= '</ul>';
        echo $list;


        // taxonomy
        if ( is_tax('media-categories') ) {
            echo '<span class="breadcrumb-page">';
            echo '<a href="' . esc_url(get_permalink(get_page_by_path('gallery'))) . '">' . get_the_title(get_page_by_path('gallery')) . '</a>';
            echo '</span>' . $sep;
            echo '<span class="breadcrumb-queried-object">' . esc_html(get_queried_object()->name) . '</span>';
        }


    }
endif;

<?php

/**
 * Display custom breadcrumbs in hero image.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_breadcrumbs' ) ) :
    function devwp_breadcrumbs() {

        // if front_page or 404 - early return
    	if ( is_front_page() || is_404() ) return;

        // start with list
        $list = '<ul class="page-breadcrumbs">';
        $sep = ' - ';

    	// first set link to homepage
    	$list .= '<li class="breadcrumb-page">' .
                    '<a href="' . get_home_url() . '" class="breadcrumb-link">Home</a>' .
                '</li>' . $sep;

    	// static page
    	if ( is_page() ) {
            $list .= '<li class="breadcrumb-page">' . get_the_title() . '</li>';
    	}
        // single
        elseif ( is_single() ) {
            $list .= '<li class="breadcrumb-page breadcrumb-post">' . get_the_title() . '</li>';
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
    		elseif ( is_tag() ) {
    			$list .= '<li class="breadcrumb-taxonomy">' . single_tag_title('', false) . '</li>';
    		}
            // author
    		elseif ( is_author() ) {
                global $author;
                $userdata = get_userdata( $author );
    			$list .= '<li class="breadcrumb-author">' . $userdata->display_name . '</li>';
    		}
    		// date
    		elseif ( is_date() ) {
    			// day
    			if ( is_day() ) {
    				$list .= '<li class="breadcrumb-date">' .
    				            '<a href="' . get_year_link( get_the_time('Y') ) . '" class="breadcrumb-link">' . get_the_time('Y') . '/</a>' .
    				            '<a href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" class="breadcrumb-link">' . get_the_time('m') . '/</a>' .
    				            get_the_time('j') .
    				        '</li>';
    			}
    			// month
    			elseif ( is_month() ) {
    				$list .= '<li class="breadcrumb-date">' .
    				            '<a href="' . get_year_link( get_the_time('Y') ) . '" class="breadcrumb-link">' . get_the_time('Y') . '/</a>' .
    				            get_the_time('m') .
    				        '</li>';
    			}
    			// year
    			elseif ( is_year() ) {
    				$list .= '<li class="breadcrumb-date">' . get_the_time('Y') . '</li>';
    			}
    		}

        }


        $list .= '</ul>';
        echo $list;

    }
endif;

<?php

/**
 * Split last word from the rest of string string.
 *
 * @param string $string = text from which to extract last word
 * @return array
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_split_last_word_from_string' ) ) :
    function devwp_split_last_word_from_string( $string ) {

        $string = trim( $string) ;
        $last_word_start = strripos( $string, ' ' ) + 1;
        $last_word = substr( $string, $last_word_start );
        $all_but_last_word = substr( $string, 0, $last_word_start-1 );

        return [
            'all_but_last_word' => $all_but_last_word,
            'last_word' => $last_word
        ];
    }
endif;

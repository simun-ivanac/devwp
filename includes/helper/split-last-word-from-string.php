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

        // remove empty spaces at beginning and ending
        $string = trim( $string) ;

        // if only 1 word present, return it early
        if ( str_word_count( $string ) < 2 ) {
            return [
                'all_but_last_word' => $string,
                'last_word' => ''
            ];
        }

        // beginning of last word
        $last_word_start = strripos( $string, ' ' ) + 1;

        // get last word
        $last_word = substr( $string, $last_word_start);

        // get all but last word
        $all_but_last_word = substr( $string, 0, $last_word_start-1 );

        return [
            'all_but_last_word' => $all_but_last_word,
            'last_word' => $last_word
        ];
    }
endif;

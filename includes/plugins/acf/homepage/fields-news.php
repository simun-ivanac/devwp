<?php
acf_add_local_field_group(array(
    'key' => 'group_5df16664342ee',
    'title' => 'Newest posts',
    'fields' => array(
        array(
            'key' => 'field_5df1667fb9dfe',
            'label' => 'Title',
            'name' => 'home_news_title',
            'type' => 'text',
            'instructions' => 'Short section title (max 2-3 words)',
            'required' => 1,
            'default_value' => 'Newest posts',
            'maxlength' => 30,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
    ),
    'menu_order' => 70,
    'hide_on_screen' => array(
        0  => 'permalink',
        1  => 'the_content',
        2  => 'excerpt',
        3  => 'discussion',
        4  => 'comments',
        5  => 'revisions',
        6  => 'slug',
        7  => 'author',
        8  => 'format',
        9  => 'featured_image',
        10 => 'categories',
        11 => 'tags',
        12 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => 'Edit (homepage)',
));

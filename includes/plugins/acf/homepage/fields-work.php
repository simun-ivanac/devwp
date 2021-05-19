<?php
acf_add_local_field_group(array(
    'key' => 'group_5df15c8816102',
    'title' => 'Work',
    'fields' => array(
        array(
            'key' => 'field_5df15c967f3ae',
            'label' => 'Title',
            'name' => 'home_work_title',
            'type' => 'text',
            'instructions' => 'Short section title (max 2-3 words)',
            'required' => 1,
            'default_value' => 'Our work',
            'maxlength' => 30,
        ),
        array(
            'key' => 'field_5df15cb57f3af',
            'label' => 'Description',
            'name' => 'home_work_description',
            'type' => 'textarea',
            'instructions' => 'Short description in 3-4 sentences.',
            'required' => 1,
            'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy. Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
            'maxlength' => 700,
            'rows' => 4,
        ),
        array(
            'key' => 'field_5df15d077f3b0',
            'label' => 'Image',
            'name' => 'home_work_image',
            'type' => 'image',
            'instructions' => 'Add image for content explanation (ideal size <b>550x470px</b>)',
            'required' => 1,
            'preview_size' => 'medium',
            'max_size' => '1,5',
            'mime_types' => 'jpg, jpeg, png',
        ),
        array(
            'key' => 'field_5e3aa73e1dfcb',
            'label' => 'Link',
            'name' => 'home_work_link',
            'type' => 'page_link',
            'instructions' => 'URL of page',
            'post_type' => array(
                'page',
            ),
            'allow_archives' => 1,
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
    'menu_order' => 50,
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
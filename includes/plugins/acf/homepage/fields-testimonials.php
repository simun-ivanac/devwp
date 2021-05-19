<?php
acf_add_local_field_group(array(
    'key' => 'group_5df160c5ba263',
    'title' => 'Testimonials',
    'fields' => array(
        array(
            'key' => 'field_5df160e1ed46f',
            'label' => 'Title',
            'name' => 'home_testimonials_title',
            'type' => 'text',
            'instructions' => 'Short section title (max 2-3 words)',
            'required' => 1,
            'default_value' => 'Testimonials',
            'maxlength' => 30,
        ),
        array(
            'key' => 'field_5df161dd696f5',
            'label' => 'Background image',
            'name' => 'home_testimonials_backgrounds',
            'type' => 'group',
            'instructions' => 'Add background image',
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_5e19ffc187e84',
                    'label' => 'Background image - desktop',
                    'name' => 'home_testimonials_backgrounds_desktop',
                    'type' => 'image',
                    'instructions' => 'Add desktop background image (ideal size <b>1920x510px</b>)',
                    'required' => 1,
                    'preview_size' => 'medium',
                    'max_size' => '1,5',
                    'mime_types' => 'jpg, jpeg, png',
                ),
                array(
                    'key' => 'field_5e19ffed87e85',
                    'label' => 'Background image - tablet',
                    'name' => 'home_testimonials_backgrounds_tablet',
                    'type' => 'image',
                    'instructions' => 'Add tablet background image (ideal size <b>800x550px</b>)',
                    'preview_size' => 'medium',
                    'max_size' => '1,5',
                    'mime_types' => 'jpg, jpeg, png',
                ),
                array(
                    'key' => 'field_5e1a000287e86',
                    'label' => 'Background image - mobile',
                    'name' => 'home_testimonials_backgrounds_mobile',
                    'type' => 'image',
                    'instructions' => 'Add mobile background image (ideal size <b>500x550px</b>)',
                    'preview_size' => 'medium',
                    'max_size' => '1,5',
                    'mime_types' => 'jpg, jpeg, png',
                ),
            ),
        ),
        array(
            'key' => 'field_5df5651aaaa39',
            'label' => 'Comment 1',
            'name' => 'home_testimonials_comment_1',
            'type' => 'group',
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5df5653baaa3a',
                    'label' => 'Text',
                    'name' => 'home_testimonials_comment_1_text',
                    'type' => 'textarea',
                    'instructions' => 'Short client comment (2-3 sentences)',
                    'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.',
                    'maxlength' => 390,
                    'rows' => 3,
                ),
                array(
                    'key' => 'field_5df56579aaa3b',
                    'label' => 'Author',
                    'name' => 'home_testimonials_comment_1_author',
                    'type' => 'text',
                    'instructions' => 'Name of author',
                    'default_value' => 'John Hedge',
                    'maxlength' => 35,
                ),
                array(
                    'key' => 'field_5f8c798a348ad',
                    'label' => 'Show',
                    'name' => 'home_testimonials_comment_1_checkbox',
                    'type' => 'checkbox',
                    'choices' => array(
                        '<b>Show</b>' => '<b>Show</b>',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_5df566bae53b2',
            'label' => 'Comment 2',
            'name' => 'home_testimonials_comment_2',
            'type' => 'group',
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5df566bae53b3',
                    'label' => 'Text',
                    'name' => 'home_testimonials_comment_2_text',
                    'type' => 'textarea',
                    'instructions' => 'Short client comment (2-3 sentences)',
                    'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctu. Invidunt ut labore et dolore magna aliquyam erat sed diam nonumy eirmod.',
                    'maxlength' => 390,
                    'rows' => 3,
                ),
                array(
                    'key' => 'field_5df566bae53b4',
                    'label' => 'Author',
                    'name' => 'home_testimonials_comment_2_author',
                    'type' => 'text',
                    'instructions' => 'Name of author',
                    'default_value' => 'Sally Garden',
                    'maxlength' => 35,
                ),
                array(
                    'key' => 'field_5f8c79b8348ae',
                    'label' => 'Show',
                    'name' => 'home_testimonials_comment_2_checkbox',
                    'type' => 'checkbox',
                    'choices' => array(
                        '<b>Show</b>' => '<b>Show</b>',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_5df566dee53b5',
            'label' => 'Comment 3',
            'name' => 'home_testimonials_comment_3',
            'type' => 'group',
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5df566dee53b6',
                    'label' => 'Text',
                    'name' => 'home_testimonials_comment_3_text',
                    'type' => 'textarea',
                    'instructions' => 'Short client comment (2-3 sentences)',
                    'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanct. vero eos et accusam et justo duo dolores et ea rebum consetetur sadipscing elitr sed diam nonumy sea takimata sanct.',
                    'maxlength' => 390,
                    'rows' => 3,
                ),
                array(
                    'key' => 'field_5df566dee53b7',
                    'label' => 'Author',
                    'name' => 'home_testimonials_comment_3_author',
                    'type' => 'text',
                    'instructions' => 'Name of author',
                    'default_value' => 'Ryen Anderson',
                    'maxlength' => 35,
                ),
                array(
                    'key' => 'field_5f8c79d0348af',
                    'label' => 'Show',
                    'name' => 'home_testimonials_comment_3_checkbox',
                    'type' => 'checkbox',
                    'choices' => array(
                        '<b>Show</b>' => '<b>Show</b>',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_5f8c754b66aed',
            'label' => 'Comment 4',
            'name' => 'home_testimonials_comment_4',
            'type' => 'group',
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5f8c754b66aee',
                    'label' => 'Text',
                    'name' => 'home_testimonials_comment_4_text',
                    'type' => 'textarea',
                    'instructions' => 'Short client comment (2-3 sentences)',
                    'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanct.',
                    'maxlength' => 390,
                    'rows' => 3,
                ),
                array(
                    'key' => 'field_5f8c754b66aef',
                    'label' => 'Author',
                    'name' => 'home_testimonials_comment_4_author',
                    'type' => 'text',
                    'instructions' => 'Name of author',
                    'default_value' => 'Firstname Lastname',
                    'maxlength' => 35,
                ),
                array(
                    'key' => 'field_5f8c79e9348b0',
                    'label' => 'Show',
                    'name' => 'home_testimonials_comment_4_checkbox',
                    'type' => 'checkbox',
                    'choices' => array(
                        '<b>Show</b>' => '<b>Show</b>',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_5f8c755b66af0',
            'label' => 'Comment 5',
            'name' => 'home_testimonials_comment_5',
            'type' => 'group',
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5f8c755c66af1',
                    'label' => 'Text',
                    'name' => 'home_testimonials_comment_5_text',
                    'type' => 'textarea',
                    'instructions' => 'Short client comment (2-3 sentences)',
                    'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanct.',
                    'maxlength' => 390,
                    'rows' => 3,
                ),
                array(
                    'key' => 'field_5f8c755c66af2',
                    'label' => 'Author',
                    'name' => 'home_testimonials_comment_5_author',
                    'type' => 'text',
                    'instructions' => 'Name of author',
                    'default_value' => 'Firstname Lastname',
                    'maxlength' => 35,
                ),
                array(
                    'key' => 'field_5f8c7a01348b1',
                    'label' => 'Show',
                    'name' => 'home_testimonials_comment_5_checkbox',
                    'type' => 'checkbox',
                    'choices' => array(
                        '<b>Show</b>' => '<b>Show</b>',
                    ),
                ),
            ),
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
    'menu_order' => 60,
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
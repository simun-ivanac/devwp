<?php
acf_add_local_field_group(array(
    'key' => 'group_60a0406bc8d22',
    'title' => 'Schedule',
    'fields' => array(
        array(
            'key' => 'field_60a0408be2f3e',
            'label' => 'Title',
            'name' => 'home_schedule_title',
            'type' => 'text',
            'instructions' => 'Short section title (max 2-3 words)',
            'required' => 1,
            'default_value' => 'Work schedule',
            'maxlength' => 30,
        ),
        array(
            'key' => 'field_60a040e31f390',
            'label' => 'Work hours',
            'name' => 'home_schedule_table',
            'type' => 'table',
            'instructions' => 'Select time and add value',
            'use_header' => 1,
            'use_caption' => 2,
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
    'menu_order' => 30,
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

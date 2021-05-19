<?php
acf_add_local_field_group(array(
    'key' => 'group_607f01e794fc7',
    'title' => 'Location',
    'fields' => array(
        array(
            'key' => 'field_607f01e7d5afe',
            'label' => 'Title',
            'name' => 'contact_location_title',
            'type' => 'text',
            'instructions' => 'Short section title (max 2-3 words)',
            'required' => 1,
            'default_value' => 'Our location',
            'maxlength' => 30,
        ),
        array(
            'key' => 'field_609808d69435d',
            'label' => 'Address',
            'name' => 'contact_location_address',
            'type' => 'text',
            'default_value' => 'Address 20, Virovitica',
        ),
        array(
            'key' => 'field_609ff2663aa3b',
            'label' => 'Latitude',
            'name' => 'contact_location_latitude',
            'type' => 'number',
            'default_value' => '45.83381143',
        ),
        array(
            'key' => 'field_609ff28e3aa3c',
            'label' => 'Longitude',
            'name' => 'contact_location_longitude',
            'type' => 'number',
            'default_value' => '17.38545184',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/contact.php',
            ),
        ),
    ),
    'menu_order' => 100,
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
    'description' => 'Edit (contact)',
));

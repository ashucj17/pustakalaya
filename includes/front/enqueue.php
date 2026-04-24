<?php

function p_enqueue(){
    wp_register_style(
        'p_font_rubik_and_pacifico',
        'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100..900&family=Pacifico&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"',
        [],
        null
    );
    wp_register_style(
        'p_font_awesome_cdn',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css'
    );
    wp_register_style(
        'p_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    wp_enqueue_style('p_font_rubik_and_pacifico');
    wp_enqueue_style('p_font_awesome_cdn');
    wp_enqueue_style('p_theme');
}
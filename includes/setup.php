<?php


function p_setup_theme(){
    add_theme_support('editor-style');

    add_editor_style([
        'p_font_rubik_and_pacifico',
        'p_font_awesome_cdn',
        'p_theme'
    ]);
}
<?php

// on reset les emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// on enlève la version
remove_action('wp_head', 'wp_generator');

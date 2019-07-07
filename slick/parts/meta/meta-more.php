<?php

$url = get_the_permalink($post->ID);
$title = get_the_title($post->ID);
$icon_more = '<i class="far fa-fw fa-long-arrow-right"></i>';


echo '<a class="meta meta-more" rel="bookmark" href="'.esc_url($url).'" title="'.esc_attr($title).'"><span class="meta__value">View</span>'.$icon_more.'</a>';

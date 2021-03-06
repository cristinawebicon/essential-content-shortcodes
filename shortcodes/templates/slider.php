<?php
$classes = '';

if (!empty($type)) {
    if ($type === 'carousel') {
        $classes .= 'acidcode__carousel--default';
    } else if ($type === 'carousel-slider') {
        $classes .= 'carousel-slider acidcode__carousel--full-width';
    }
}

$data_duration = '';
$data_padding = '';
$data_shift = '';
$data_autoplay = '';

if (!empty($slider_duration)) {
    $data_duration = $slider_duration;
}

if (!empty($slider_padding)) {
    $data_padding = $slider_padding;
}

if (!empty($shift)) {
    $data_shift = $shift;
}
if (!empty($autoplay)) {
    $data_autoplay = $autoplay;
}


$return_string = '<div class="acidcode__carousel carousel ' . $classes . '" data-duration="' . $data_duration . '" data-padding="' . $data_padding . '" data-shift="' . $data_shift . '"data-autoplay="' . $data_autoplay . '">';

$new_stringed_array = rtrim($url, ',');

$arr = explode(',', $new_stringed_array);

foreach ($arr as $item) {
    $return_string .= '<a class="carousel-item acidcode__carousel-item"><img class="acidcode__carousel-img" src="' . $item . '"></a>';
}
$return_string .= '</div>';
echo $return_string;

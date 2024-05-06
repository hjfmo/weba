<?php

function classify_img($img_path){
    $result = array(
        'class_name' => 'fake',
        'prob_fake'  => 0.89 ,
        'prob_real' => .11
    );
    return $result;
}
?>
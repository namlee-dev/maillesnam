<?php

function excerpt()
{
    $excerpt = substr(get_the_excerpt(), 0, 300);
    $space = strrpos($excerpt, ' ');
    $newExcerpt=substr($excerpt,0,$space)." ...";
    return $newExcerpt;
}
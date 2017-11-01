<?php

function remove_cnt($content) {
    return str_replace('remove_word', '', $content);
}
add_filter( 'the_content', 'remove_cnt', 6); 

?>

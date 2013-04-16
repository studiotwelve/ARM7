<?php //strip the garbage out of search-block-form
$search_text_field = preg_match("/<input(.*)type=\"search\"(.*)\>/i", $search['search_block_form'], $matches);
$search_submit_button = preg_match("/<input(.*)type=\"submit\"(.*)\>/i", $search['actions'], $matches_two);
print $matches[0];
print $matches_two[0];
print $search['hidden'];
?>
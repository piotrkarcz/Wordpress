<?php

// display category name + link (without list)

foreach((get_the_category()) as $category) { 
   echo '<a href="'; 
   echo get_category_link($category->cat_ID); 
   echo '">'; 
   echo $category->cat_name . ' '; 
   echo '</a>'; 
}

// display category name

foreach((get_the_category()) as $category) { 
   echo $category->cat_name . ' '; 
}

?>

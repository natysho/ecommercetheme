<form action="/" method="get">
   
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class ="search-button" type="image" alt="Search" src="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/search.png" />
</form>
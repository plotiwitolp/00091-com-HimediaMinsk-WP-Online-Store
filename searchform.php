<form role="search" method="get" id="search" action="<?php home_url('/search.php'); ?>">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Поиск в каталоге" />
    <input type="hidden" name="post_type" value="product">
</form>
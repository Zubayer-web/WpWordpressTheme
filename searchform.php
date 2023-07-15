<div>
    <form action="<?php echo home_url( "/" ) ?>" method="get">
        <fieldset>
            <legend>Quick Search:</legend>
            <input type="search" name="s" value="<?php echo get_search_query(); ?>"
                placeholder="<?php echo esc_attr_x( "search...", "placeholder", "wp_theme" ); ?>">
            <button type="submit"><i class="fas fa-search"></i></button>
        </fieldset>
    </form>
</div>
<!-- <input type="search" name="Enter search term&hellip;" id=""> -->
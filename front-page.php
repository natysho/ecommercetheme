<?php get_header();?>

<div id="mainimg">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <h1>Welcome To Our Shop</h1>

    </div>
</div>
<div class="content">
    <div class="container">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
    </div>
    
</div>

<?php get_footer();?>
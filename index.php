<?php get_header();?>

<div class="content">
    <div class="container">

    <div class="row">
        <div class="col-lg-3">
            <div class="sticky-top" style="top:50px">
                <?php get_sidebar();?>
            </div>
            
        </div>
        <div class="col-lg-9">
            
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <div <?php post_class('custom-class'); ?>>
            <div class="blog-post">
                <h1><?php the_title();?></h1>
                <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('post_image');?>"alt="<?php the_title()?>"class="img-fluid mb-5">
                <?php endif;?>
                <?php the_excerpt ()?></p>
                            <div class="mb-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php  _e('Read more', 'velvet');?>
                                </a>
                            </div>
            </div>
            </div>
            
            
            <?php endwhile; else: endif;?>
            <nav>
                    <ul class="nav">
                        <li><?php next_posts_link(); ?></li>
                        &nbsp;
                        <li><?php previous_posts_link();?></li>
                    </ul>
                </nav>
        </div>
    </div>
    

        
    </div>
    
</div>

<?php get_footer();?>

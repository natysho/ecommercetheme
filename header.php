<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class('test')?>>
<header>
    <div class="container d-flex align-items-center justify-content-between">
        
        <img src="<?php echo esc_url( get_template_directory_uri() ) ;?>/assets/images/divider-purple.png" class="img-fluid logo">
        <?php wp_nav_menu(
            array(
                'theme_location'=>'top-menu',
                'menu_class'=>'top-menu d-flex'
            )
        )?>
       
       

        
    </div>
    
</header>
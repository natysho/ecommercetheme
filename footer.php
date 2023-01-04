<footer class='site-footer'>
<div class="footer_widgets">
    <?php if(is_active_sidebar( 'footer-area1' )):?>
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-area1' )?>
        </div>
    <?php endif; ?>
    <?php if(is_active_sidebar( 'footer-area2' )):?>
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-area2' )?>
        </div>
    <?php endif; ?>
    <?php if(is_active_sidebar( 'footer-area3' )):?>
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-area3' )?>
        </div>
    <?php endif; ?>
    <?php if(is_active_sidebar( 'footer-area4' )):?>
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-area4' )?>
        </div>
    <?php endif; ?>
</div>
    <p>E-commerce Theme Develpment - &copy; <?php echo date('Y'); ?></p>
</footer>
<?php wp_footer();?>
</body>
</html>
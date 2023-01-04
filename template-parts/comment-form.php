<?php
    $args = array(
        'title_reply' => '<div class="py-3">Comment</div>',
        'comment_field' => '<div class="form-group">
            <label for="comment"> Comment *</label>
            <br/>
            <textarea id="comment" name="comment" class="form-control"></textarea>
        </div> ',
        'submit_button'=> '<button type="submit" class="btn btn-primary">Submit</button>',
        'fields'=> apply_filters('comment_form_default_fields', array(
            'author' => '<div class="form-group">
            <label for="author">Your Name *</label>
            <input id="author" name="author" type="text" class="form-control">
            </div>',
            'email' => '<div class="form-group">
            <label for="email">Your Email *</label>
            <input id="email" name="email" type="text" class="form-control">
            </div>',
            
        ))

    );
    comment_form($args);
?>
<form action="<?php esc_url( home_url('siteurl')); ?>" id="searchform" method="get">
    <div>
        <label for="s" class="screen-reader-text"> <?php esc_html_e('Search for','creatividad'); ?>:</label>
        <input type="text" placeholder="<?php esc_html_e('Search', 'creatividad'); ?>"  id="s" name="s" value="" />
        <input type="submit" value="<?php echo esc_attr('Search','creatividad');  ?>" id="searchsubmit" />
    </div>
</form>
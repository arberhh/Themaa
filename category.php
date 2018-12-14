<?php get_header(); ?>

<section class="bg-light" id="portfolio">
    <div id="container">
        <div class="row posts">
        <?php
        // get the current category id  
        $categories = get_the_category();   
        $category_id = $categories[0]->cat_ID;
        // $paged = $_POST["page"];
        // wp query parameters
        ?>
        </div>
    </div><!-- #container -->
</section>

<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
var page = 1;
// we take this piece of data from the php code above and pass it to the data variable
var category = "<?php echo $category_id ?>";
// jquery infinite setup
$(window).scroll(function() {
    if ($(window).scrollTop() == $(window).height() - $(document).height()) {
        var data = {
            'action': 'category',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>',
            'category' : category
        };
        // pass the data to backend
        $.post(ajaxurl, data, function(response) {
            $('.posts').append(response);   
            page++;
        });
    }
});
</script>
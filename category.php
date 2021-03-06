<?php get_header(); ?>
<?php 
    $categories = get_the_category();   
    $category_id = $categories[0]->cat_ID;
?>
<br>
<div class="container">
</div>
<section class="bg-light" id="portfolio">
    <div id="container">
        <div id="row" ></div>
            <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"></h2>
            <h3 class="section-subheading text-muted">Scroll to load more from the <?php echo single_cat_title(); ?> category .</h3>
            </div>
        </div>
        <div class="row posts">  
        <?php
        // get the current category id  

        // $paged = $_POST["page"];
        // wp query parameters
        ?>
        </div>
    </div><!-- #container -->
</section>
<?php get_footer(); ?>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
var page = 1;
// we take this piece of data from the php code above and pass it to the data variable
var category = "<?php echo $category_id ?>";
// jquery infinite setup
$(window).scroll(function() {
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
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
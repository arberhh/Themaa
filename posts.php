<?php
/*
    Template Name: posts
 */
get_header(); ?>

<section class="bg-light" id="portfolio">
<div id="container">
        <div id="row" >
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Poosts</h2>
            <h3 class="section-subheading text-muted">Hereyou can find the posts we've published.</h3>
          </div>
        </div>
   
        <div class="row posts">
        </div>
</div><!-- #container -->
</section>

<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
var page =1;
$(window).scroll(function() {
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };
 
        $.post(ajaxurl, data, function(response) {
            $('.posts').append(response);
            page++;
        });
    }
});
</script>
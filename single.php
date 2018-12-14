<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Themaa
 * @since Themaa 1.0
 */
get_header() ?>
	
<main id="main" class="col-lg-12 text-center" role="main">
	<?php
		global $post;
		// Start the loop.
		while ( have_posts() ) : the_post();

			$thumb = the_post_thumbnail('');?>
			<style>
			
				#main img{
					background-repeat:no-repeat;
					background-attachment:scroll;
					background-position:center center;
					height:650px;
					background-size:cover
				}
				@media only screen and (max-width: 600px) {
				#main img {
					height:100%;
				}
				}
			</style>
			<header class="myClass" style="background-image: url('<?php echo $thumb;?>');">
				<!-- <div class="container header">
				<div class="intro-text">
					<div class="intro-lead-in">Welcome To Our Newsletter!</div>
					<div class="intro-heading text-uppercase">Its Nice To Meet You</div>
					<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Subscribe for daily reading!</a>
				</div>
				</div> -->
				<br>
				<br>
				<br>
				<br>
			</header>
			
			<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script>
				$(document).ready(function() {
					$('.masthead').replaceWith('');
				});
			</script>
			<hr>
			<div class="container">
			<h4><?php the_title(); ?></h4> 
			<hr>
			<?php 
			the_content();
			echo get_the_date();?>
			
			<!--  Previous/next post navigation. -->
			<nav class="" role="navigation">
			<?php	
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'Themaa' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'Themaa' ) . '&nbsp; </span> ' .
					'<span class="post-title">&nbsp; %title &nbsp;</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'Themaa' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'Themaa' ) . '&nbsp; </span> ' .
					'<span class="post-title">&nbsp;  %title &nbsp;</span>',
				)); ?>
			</nav>
			</div>
			 <?php
		// End the loop.
		endwhile;
	?>
</main><!-- .site-main -->
	
<?php
/*
    Template Name: Categories
*/ 

get_header(); ?>

        <div class="jumbotron">
	    <div class="container" role="main">
            <div class="list-group">
                <?php wp_list_categories(); ?>
            </div>
            <!--             
            <h2>Archives by Subject:</h2>
            <ul>

            </ul> -->

	    </div><!-- #content -->
        </div><!-- #container -->
        <?php get_footer() ?>
<?php
/*
    Template Name: monthlyArchives 
*/ 

get_header(); ?>

        <div class="jumbotron">
	    <div class="container" role="main">
            <ul class="list-group">
                <?php wp_list_categories(); ?>
            </ul>
            <!--             
            <h2>Archives by Subject:</h2>
            <ul>

            </ul> -->

	    </div><!-- #content -->
        </div><!-- #container -->
        <?php get_footer() ?>
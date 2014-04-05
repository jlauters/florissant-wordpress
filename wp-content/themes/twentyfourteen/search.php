<?php 

/* Search Results template */

get_header(); 

?>

	<section>
		<div class="row">

			<?php if ( have_posts() ) : ?>

				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>

                <div id="search-results">
                    <ul class="media-list col-xs-12">
				    <?php
				    	while ( have_posts()) {
                            the_post();

                            $link = get_permalink(get_the_ID());
                            $thumb = get_the_post_thumbnail(get_the_ID(), array(300,300), array('class' => 'media-object img-responsive'));
                            $title = get_the_title();
                            $desc  = get_the_content();

                            echo <<<EOHTML
<li class="media">
    <a class="pull-left" href="{$link}">{$thumb}</a>

    <div class="media-body">
        <span class="media-heading">{$title}</span>
        <div class="excerpt">{$desc}</div>
    </div>
</li>
EOHTML;

					    }
                    ?>
                    </ul>
                </div>	
			<?php else : ?>
            
            <article id="post-0" class="post no-results not-found col-xs-12" style="margin-top: 15px;">
                <h1 class="entry-title"><?php _e('Nothing Found', 'twentyfourteen'); ?></h1>

                <div class="entry-content">
                    <p><?php _e('Sorry, but nothing matched your search criteria. Pleasae try again with some different keywords.', 'twentyfourteen'); ?></p>
                    <?php get_search_form(); ?>
                </div>

            </article>
					
			<?php endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();

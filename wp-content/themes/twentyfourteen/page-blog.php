<?php
/*
 Template Name: Blog List 
*/
get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

            <ul class="media-list">
			<?php
			    $args = array(
                    'post_type' => 'post'
                   ,'post_status' => 'publish'
                   ,'posts_per_page' => -1
                );	

                $html = '';
                $query = new WP_Query($args);
                if($query->posts) {
                    foreach($query->posts as $post) {

                        $date = date('m/d/Y', strtotime($post->post_date));

				        $html .= <<<EOHTML
<li class="media">
    <div class="media-body">
        <h4 class="media-heading">{$post->post_title} - {$date}</h4>
        <div class="media-content">{$post->post_content}</div>
    </div>
</li>
EOHTML;
			}
		}

        echo $html;

		unset($args);
		wp_reset_query();
	?>
            </ul>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();

<?php

/*
Template Name: Special layout*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">

  <?php

      if ( has_children() OR $post->post_parent > 0) { ?>

  <nav class="site-nav children_links clearfix">
  <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>

<ul>

  <?php
              $args = array(
                  'child_of' => get_top_ancestor_id(),
                  'title_li' => ' '
              );
      ?>
            	<?php wp_list_pages($args); ?>

</ul>
</nav>
<?php   }  ?>

      <h2><?php the_title(); ?></h2>

      <!-- info-box -->
      <div class="info-box">
          <h4>Waarschuwing</h4>
          <p>Bij het betreden van deze website kan het zijn dat er enkele fouten in voor komen i.v.m. de ervaring van de eigenaar van deze website, daarom wil ik u vragen niet te kritisch te zijn over de layout, user experience design, bij voorbaat dank! groetjes Thomas</p>
      </div><!-- /info-box -->



      <?php the_content(); ?>
    </article>


  	<?php endwhile;

    else :
        echo '<p>No conect found</p>';

    endif;

    get_footer();
?>

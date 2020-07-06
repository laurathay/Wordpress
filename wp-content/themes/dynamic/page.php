<?php get_header(); ?>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
     <!-- TODO - En autonomie - Ajouter un attribut style à la section "page-header"
     pour lui ajouter une image de fond correspondant à la vignette de la page.
     Penser à vérifier si la vignette est bien définie.
     Utiliser la fonction the_post_thumbnail_url() -->
  <?php if(has_post_thumbnail()) : ?>
  <section class="page-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <?php else : ?>
  <section class="page-header">
  <?php endif; ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section>
  <main class="container site-content">
      <article class="entry page">
        <section class="entry-content">
          <?php the_content(); ?>
      </section>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
  <?php get_footer(); ?>

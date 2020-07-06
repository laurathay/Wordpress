<?php get_header(); ?>
  <main class="container site-content">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <article class="entry single">
        <header class="entry-header">
          <section class="entry-metadata">
            <section class="entry-data">
              <h4 class="author">
                <!-- Quand on clique sur le nom de l'auteur, on veut rediriger vers
              la page de l'auteur (c'est-à-dire page des articles écrits par l'auteur)
              - get_author_posts_url() : récupère l'URL de la page de l'auteur.
                                      Cette fonction prend l'identifiant de l'auteur en paramètre
              - get_the_author_meta('ID') : permet de récupérer parmi toutes les informations
                                      de l'auteur, son identifiant. On précise donc 'ID' en argument.
                -->
                <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                  <!-- the_author() : on récupère le nom de l'auteur (chaine de caractères) -->
                <?php the_author(); ?></a>
              </h4>
              <h6 class="publish-date"><?php the_time('d M Y'); ?></h6>
              <?php
              $categories = get_the_category();
              $separator = " ";
              $output = '';

              if($categories) {
                forEach($categories as $category) {
                  $output .= '<h5 class="entry-category"><a href="'.get_category_link($category
                  ->term_id).'">'.$category->cat_name .'</a></h5>' . $separator;
                }
              }
              echo trim($output, $separator);
              ?>
            <h4 class="comments-number">
              <!-- TODO Afficher dynamiquement le nombre de commentaire en
                    faisant appel à comments_number() -
               voir https://developer.wordpress.org/reference/functions/comments_number/#user-contributed-notes -->
               <?php comments_number('Aucun commentaire', '1 commentaire',
             '% commentaires'); ?>
            </h4>
            </section>
            <h2 class="entry-title">
              <?php the_title(); ?>
            </h2>
          </section>
          <?php
          if(has_post_thumbnail()) :
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $thumbnail_title = get_the_title($thumbnail_id);
            the_post_thumbnail('full', ['class' => 'featured-image', 'title' => $thumbnail_title,
            'alt' => $thumbnail_alt]);
           endif;
           ?>
        </header>
        <section class="entry-content">
          <?php the_content(); ?>
        </section>
        <footer class="entry-footer">
          <?php
          // Structure du tableau d'arguments : https://developer.wordpress.org/reference/functions/get_the_post_navigation/
          // %title : indique à WP qu'il faut inclure le nom de l'article suivant/ précédent
          the_post_navigation(
            array(
              'prev_text'          => '<i class="fas fa-arrow-left"></i> %title',
              'next_text'          => '%title <i class="fas fa-arrow-right"></i>'
            )
          );
          ?>
          <?php comments_template(); ?>
        </footer>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php get_sidebar(); ?>
  </main>
  <?php get_footer(); ?>

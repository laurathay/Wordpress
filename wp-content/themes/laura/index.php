<?php get_header(); ?>
  <main class="container site-content">
    <section class="main-content">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

      <article class="entry post">
        <header class="entry-header">

          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', ['class' => 'featured-image', 'title' => 'Vignette']); ?>
          <?php endif; ?>

          <!-- <img src="./assets/images/joey-thompson-unsplash.jpg" alt="Foule"
          class="featured-image"> -->
          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date"><?php the_time('F j, Y'); ?></h6>

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

              <!-- <h5 class="entry-category"><a href="#">Actualité</a></h5>
              <h4 class="comments-number"><i class="fas fa-comment"></i> 3</h4> -->
            </section>
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <?php the_excerpt(); ?>
          <!-- <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p> -->
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="<?php the_permalink(); ?>"><?php _e('Lire la suite', 'laura'); ?></a>
          </div>
        </footer>
      </article>
    <?php endwhile; ?>
   <?php endif; ?>

      <nav class="navigation pagination">
        <?php
          // Structure du tableau d'arguments : https://developer.wordpress.org/reference/functions/paginate_links/
          the_posts_pagination(
            array(
              'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent',
              'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
            )
          );
        ?>
        <!-- <ul>
          <li><a href="#"><i class="fas fa-arrow-left"></i> Précédent</a></li>
          <li><a href="#">Suivant <i class="fas fa-arrow-right"></i></a></li>
        </ul> -->
      </nav>
    </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

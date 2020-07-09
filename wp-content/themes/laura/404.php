<?php get_header(); ?>
  <main class="container site-content">
    <section class="error-404">
      <h2 class="entry-title">
        <?php _e( 'Erreur 404', 'laura' ); ?>&nbsp<i class="fas fa-search"></i>
      </h2>
      <h3>
        <?php
  		get_search_form(
  			array(
  				'label' => __( 'Erreur 404', 'laura' )
  			)
  		);
  		  ?>
      </h3>
      <div class="intro-text">
        <h3 class="error-page">
          <?php _e( 'La page que vous cherchez n\'existe pas 😬 ...', 'laura' ); ?>
        </h3>
      </div>
      <a href="<?php echo get_bloginfo('url') . '/' ; ?>">
        <button type="button" class="call-to-action">
          <i class="far fa-smile-wink">
          </i>&nbsp Retourner à l'accueil du site ? &nbsp
          <i class="fas fa-home">
          </i>
        </button>
      </a>
    </section>
  </main>
<?php get_footer();?>

<section class="comments">
  <h3 class="comments-title"><?php comments_number('No comments', '1 comment', '% comments'); ?>  pour <?php the_title(); ?></h3>
  <?php
  wp_list_comments();

  paginate_comments_links(
    array(
      'prev_text'          => '<i class="fas fa-arrow-left"></i> Prédédent',
      'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
    )
  );

  comment_form(
    array(
      'title_reply' => 'Laisser un commentaire',
      'label_submit' => 'Publier mon commentaire'

    )
  );
   ?>
</section>

<div id="commentaires" class="comments">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments__title">
            <?php echo get_comments_number(); // Nombre de commentaires ?> Commentaire(s)
        </h2>

        <ol class="comment__list">
            <?php
            	// La fonction qui liste les commentaires publiés
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol>

        <?php
    		// S'il n'y a pas de commentaires
    		if ( ! comments_open() && get_comments_number() ) :
    	?>
        <p class="comments__none">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
    	</p>
        <?php endif; ?>
    <?php endif; ?>

    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>
</div>

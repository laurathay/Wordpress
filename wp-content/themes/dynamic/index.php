<!--
On sépare l'en-tête et le corps de la page en créant un fichier header.php
L'intérêt du fichier header.php est de factoriser le code de l'en-tête.
C'est-à-dire éviter de répéter le même bout code dans plusieurs fichiers
différents ayant le même en-tête.
On appelle donc la fonction get_header(); pour inclure ce fichier header.php.
-->
<?php get_header(); ?>
<!-- TODO En autonomie - En vous référant à page.php, ajouter un attribut style
à la section "page-header" pour lui ajouter une image de fond provenant du
Customizer.
Penser à vérifier si la vignette est bien définie.
Utiliser la fonction get_theme_mod() - ne passer que le premier argument
 -->
 <section class="page-header" style="background-image: url('<?php echo get_theme_mod('banner_image'); ?>');">
    <h1 class="page-title">Blog</h1>
    <!-- TODO Volontaire - Déclarer une zone de menu "Menu des catégories" et
    l'insérer dynamiquement ci-après -->
    <nav class="navigation navigation-blog" id="navigation-blog">
      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'secondary'
        )
      );
       ?>
    </nav>
  </section>
  <main class="container site-content">
    <section class="main-content">
      <!-- Pour afficher la liste des articles publiés, on utilise une boucle -->
      <!-- On vérifie d'abord s'il y a des articles publiés sur le site -->
      <?php if(have_posts()) : ?>
        <!-- Si oui (have_posts() renvoie true) alors
        - while(have_posts()) : on boucle à travers les articles publiés et pour chaque article
        - the_post() on sélectionne l'article en question et on affiche l'affiche
        dans un bloc <article> comme suit : -->
        <?php while(have_posts()) : the_post(); ?>
      <article class="entry post">
        <header class="entry-header">
          <!-- has_post_thumbnail() on vérifie si l'article a une vignette -->
          <?php if(has_post_thumbnail()) : ?>
            <!-- Si oui (has_post_thumbnail() renvoie true) on affiche cette image
          grâce à la fonction the_post_thumbnail(). -->
          <!-- the_post_thumbnail() crée uen balsie <img> avec :
          - paramètre 1 : une taille (voir valeurs possibles dans la documenttaion)
          - paramètre 2 : un tableau contenant notmment les classes CSS à inclure à la balise <img> -->
            <?php the_post_thumbnail('full', ['class' => 'featured-image', 'title' => 'Vignette']); ?>
          <?php endif; ?>
          <section class="entry-metadata">
            <section class="entry-data">
              <!-- the_time('F j, Y') : permet de récupérer la date de publication de l'article.
            On passe en paramètre le format d'affichage de la date. Ici : F (mois) j (jour), Y (année)-->
              <h6 class="publish-date"><?php the_time('F j, Y'); ?></h6>
              <!-- On récupère la liste des catégories de l'article, puisqu'un article peut se trouver
            dans plusieurs catégories. -->
              <?php
              // get_the_category() : renvoie un tableau contenant les catégories de l'article
              // voir la documentation pour connaître la structure de ce tableau
              $categories = get_the_category();
              $separator = " ";
              $output = '';

              // on teste si le tableau est défini (= non vide).
              // Les bonnes pratiques de programmation recommandent d'utiliser isset() ou empty()
              if($categories) {
                // pour chaque catégorie du tableau, l'afficher selon une certaine mise en forme
                forEach($categories as $category) {
                  // get_category_link() : on récupère le lien URL vers la page de la catégorie
                  // cliquer sur ce lien nous redirigera vers une page listant les articles
                  // apartenant à la catégorie donnée (dont l'identifiant est passé en paramètre)

                  // on récupère le nom de la catégorie avec $category->cat_name et son identifiant
                  // avec $category->term_id pour le passer en paramètre de get_category_link()
                  $output .= '<h5 class="entry-category"><a href="'.get_category_link($category
                  ->term_id).'">'.$category->cat_name .'</a></h5>' . $separator;
                }
              }
              // on affiche les catégories formattées correctement
              echo trim($output, $separator);
              ?>
            </section>
            <h2 class="entry-title">
              <!-- the_permalink() : permet de récupérer le lien URL unique d'un article -->
              <!-- the_title() : permet de récupérer le titre d'un article -->
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <!-- the_excerpt() : permet de récupérer l'extrait d'un article -->
          <?php the_excerpt(); ?>
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="<?php the_permalink(); ?>">Lire la suite</a>
          </div>
        </footer>
      </article>
      <!-- On pense à bien fermer if() et while() -->
    <?php endwhile; ?>
  <?php endif; ?>
  <!-- TODO Volontaire - Pagination de l'ensemble des articles - utiliser the_posts_pagination()
  Structure du tableau d'arguments : https://developer.wordpress.org/reference/functions/paginate_links/ -->
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
      </nav>
    </section>
<?php get_sidebar(); ?>
  </main>
  <!-- De la même manière que pour l'en-tête. On déplace le contenu du pied de
  page dans un fichier footer.php pour factoriser le code. Le pied de page est
  en effet le même sur chaque page de notre thème.
  On inclut ce fichier footer.php grâce à la fonction get_footer(). -->
  <?php get_footer(); ?>

<?php get_header(); ?>

  <main class="container site-content">
      <article class="entry single">
        <header class="entry-header">
          <section class="entry-metadata">
            <section class="entry-data">
              <h4 class="author"><a href="#">Ada Lovelace</a></h4>
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Actualité</a></h5>
            </section>
            <h2 class="entry-title">
              <a href="single.html">Les visiteurs retrouvent La Joconde</a>
            </h2>
          </section>
          <img src="./assets/images/louvre-alicia-steels-unsplash.jpg" alt="Foule"
          class="featured-image">
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>

          <p>
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
            aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem i
            psum quia dolor sit amet, consectetur, adipisci velit, sed quia
            non numquam eius modi tempora incidunt ut labore et dolore magnam
            aliquam quaerat voluptatem.
          </p>

          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
            quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
          </p>
        </section>
        <footer class="entry-footer">
          <nav class="navigation pagination entry-pagination">
            <ul>
              <li><a href="#"><i class="fas fa-arrow-left"></i> 5 statues à voir absolument au Louvre</a></li>
              <li><a href="#">La Joconde victime de son succès <i class="fas fa-arrow-right"></i></a></li>
            </ul>
          </nav>
          <section class="comments">
            <h3 class="comments-title">Laisser un commentaire</h3>
            <form class="comment-form" action="index.html" method="post">
              <label for="name">Nom</label>
              <input type="text" name="name" required>
              <label for="email">E-mail</label>
              <input type="email" name="email" required>
              <label for="comment">Commentaire</label>
              <input type="textarea" rows="10" cols="80" name="comment" required>
              <input type="submit" name="submit" value="Envoyer">
            </form>
          </section>
        </footer>
      </article>
    <aside class="sidebar">
      <div class="widget">
        <h3 class="widget-title">Zone de widgets</h3>
        <p>Ajout dynamique des titres et contenus des widgets.</p>
      </div>
    </aside>
  </main>
<?php get_footer() ?>

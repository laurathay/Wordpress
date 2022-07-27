<?php get_header() ?>
<!-- elle prend en parametre un separateur et recupere le titre modifier -->
Hello world : <?php wp_title() ?> 

<?php if (have_posts()): ?>
    <ul>
        <!-- pour avoir le post qui change dans le dashboard WP -->
    <?php while(have_posts()): the_post(); ?> 
        <li>
            <a href="<?php the_permalink() ?>">
            <?php the_title() ?> 
            </a>
            -
            <?php the_author() ?>
        </li>

        <div class="card-group">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_content() ?></p>
                <p class="card-text"><small class="text-muted"><?php the_category() ?></small></p>
                </div>
            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_content() ?></p>
                <p class="card-text"><small class="text-muted"><?php the_category() ?></small></p>
                </div>
            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"> <?php the_title() ?></h5>
                <p class="card-text"><?php the_content() ?></p>
                <p class="card-text"><small class="text-muted"><?php the_category() ?></small></p>
                </div>
            </div>
            </div>



    <?php endwhile ?>
    </ul>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>
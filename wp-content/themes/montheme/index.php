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
    <?php endwhile ?>
    </ul>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>
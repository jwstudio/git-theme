<?php get_header(); ?>

<main>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                        Posted on <?php the_date(); ?> by <?php the_author(); ?>
                    </div>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <hr>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
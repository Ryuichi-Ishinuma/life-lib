<?php get_header(); ?>

<?php get_template_part("templates/component/selected"); ?>

<main class="lfl-o-main">
    <?php get_template_part("templates/component/loop-content"); ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>


                <!-- <a href="<?php //the_permalink();  ?>">
                    <figure class="lfl-m-main__content__list__item__thumbnail">
                        <p class="lfl-m-main__content__list__item__label">
                            <span class="lfl-m-main__content__list__item__label__title"><?php //the_category(); ?></span>
                        </p>
                        <?php if (has_post_thumbnail() ): ?>
                        <a href="<?php //the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                        <?php else: ?>
                        <a href="<?php //the_permalink(); ?>">
                            <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="noimage">
                        </a>
                        <?php endif; ?>
                    </figure>
                </a> -->
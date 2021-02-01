<?php get_header(); ?>

<?php get_template_part("templates/component/selected"); ?>

<main class="lfl-o-main">
    <section class="lfl-m-main__content">
        <div class="lfl-m-main__content__list">
        <?php if (have_posts() ) : while(have_posts() ) : the_post(); ?>
            <article class="lfl-m-main__content__list__item">
                <a href="<?php the_permalink();  ?>">
                    <figure class="lfl-m-main__content__list__item__thumbnail">
                        <p class="lfl-m-main__content__list__item__label">
                            <span class="lfl-m-main__content__list__item__label__title"><?php the_category(); ?></span>
                        </p>
                        <?php if (has_post_thumbnail() ): ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="noimage">
                        </a>
                        <?php endif; ?>
                    </figure>
                </a>
                <div class="lfl-m-main__content__list__item__detail">
                    <a href="<?php the_permalink(); ?>">
                        <h1 class="lfl-m-main__content__list__item__detail__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <div class="lfl-m-main__content__list__item__detail__date">
                            <span class="lfl-m-main__content__list__item__detail__date__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_clock@2x.png" alt="clock">
                            </span>
                            <p class="lfl-m-main__content__list__item__detail__date__time"><?php the_time('Y/m/d'); ?></p>
                        </div>
                    </a>
                </div>
            </article>
        <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
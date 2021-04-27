<section class="lfl-m-main__content">
    <?php if (have_posts() ) : ?>
        <ul class="lfl-m-main__content__list">
            <?php while(have_posts() ) : the_post(); ?>
                <li class="lfl-m-main__content__list__item">
                        <figure class="lfl-m-main__content__list__item__thumbnail">
                            <?php if (has_post_thumbnail() ): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="noimage">
                                </a>
                            <?php endif; ?>
                        </figure>
                            <ul class="lfl-m-main__content__list__item__categories">
                                <?php categories_label(); ?>
                            </ul>
                        <div class="lfl-m-main__content__list__item__detail">
                            <h2 class="lfl-m-main__content__list__item__detail__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="lfl-m-main__content__list__item__detail__date">
                                <span class="lfl-m-main__content__list__item__detail__date__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_clock@2x.png" alt="clock">
                                </span>
                                <p class="lfl-m-main__content__list__item--detail__date__time">
                                    <time detetime="<?php echo get_the_date('Y/m/d'); ?>">
                                        <?php echo get_the_date('Y/m/d'); ?>
                                    </time>
                            </div>
                        </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>
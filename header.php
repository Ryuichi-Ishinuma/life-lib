<?php get_template_part('templates/header/head');?>
</head>

<header class="lfl-o-header">
    <div class="lfl-m-header">
        <div class="lfl-m-header__title">
            <a href="<?php home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lifelib.svg" alt="LIFE LIB">
            </a>
        </div>
        <div class="lfl-m-header__subtitle">
            <a href="<?php home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub_title.svg" alt="〜人生を彩るお役立ち情報ライブラリ〜">
            </a>
        </div>
        <?php get_template_part("templates/component/nav"); ?>
    </div>
</header>
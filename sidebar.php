<section class="lfl-o-sidebar">
    <ul class="lfl-o-sidebar__widget">
        <li class="lfl-o-sidebar__widget__item">
            <div class="lfl-o-sidebar__widget__item__head">
                <p class="lfl-o-sidebar__widget__item__head__title">ぬまっちのプロフィール</p>
            </div>
            <div class="lfl-o-sidebar__widget__item__box">
                <p class="lfl-o-sidebar__widget__item__box__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_profile.jpg">
                </p>
                <p class="lfl-o-sidebar__widget__item__box__name">ぬまっち</p>
                <p class="lfl-o-sidebar__widget__item__box__career">Webディレクター兼デザイナー／ブロガー</p>
                <p class="lfl-o-sidebar__widget__item__box__profile">デジタルエージェンシー(デジタル広告の代理店)でWebデザイナーとして働きながらブログの運営をしています。<br>
                <br>
                新卒で銀行員になるも金融系の資格勉強よりオリジナル雑誌の制作に没頭してしまい、デザインや発信に興味を持つ。4ヶ月の猛勉強を経て、未経験でWebデザイナーとしてキャリアチェンジし現職に至る。<br>
                本ブログの他、Web系情報ブログ<a href="https://numablog.net" target="_blank">numablog</a>を運営中。<br>
                <br>
                趣味は映画・写真・旅。普段はビールばかり飲んでいます。<br>
                最近、書道と筋トレをはじめました。
                </p>
                <ul class="lfl-o-sidebar__widget__item__box__sns">
                    <li class="lfl-o-sidebar__widget__item__box__sns__list">
                        <a class="lfl-o-sidebar__widget__item__box__sns__list--twitter" href="">
                            <img class="lfl-o-sidebar__widget__item__box__sns__list__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_twitter.svg" alt="Twitter">
                            <span class="lfl-o-sidebar__widget__item__box__sns__list__name">Twitter</span>
                        </a>
                    </li>
                    <li class="lfl-o-sidebar__widget__item__box__sns__list">
                        <a class="lfl-o-sidebar__widget__item__box__sns__list--facebook" href="">
                            <img class="lfl-o-sidebar__widget__item__box__sns__list__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_facebook.svg" alt="Facebook">
                            <span class="lfl-o-sidebar__widget__item__box__sns__list__name">Facebook</span>
                        </a>
                    </li>
                    <li class="lfl-o-sidebar__widget__item__box__sns__list">
                        <a class="lfl-o-sidebar__widget__item__box__sns__list--feedly" href="">
                            <img class="lfl-o-sidebar__widget__item__box__sns__list__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_feedly.svg" alt="Feedly">
                            <span class="lfl-o-sidebar__widget__item__box__sns__list__name">Feedly</span>
                        </a>
                    </li>
                    <li class="lfl-o-sidebar__widget__item__box__sns__list">
                        <a class="lfl-o-sidebar__widget__item__box__sns__list--contact" href="">
                            <img class="lfl-o-sidebar__widget__item__box__sns__list__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_mail.svg" alt="Contact">
                            <span class="lfl-o-sidebar__widget__item__box__sns__list__name">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="lfl-o-sidebar__widget__item">
            <div class="lfl-o-sidebar__widget__item__head">
                <p class="lfl-o-sidebar__widget__item__head__title">検索はこちら</p>
            </div>
            <form class="lfl-o-sidebar__widget__item__searchform" action="https://lifelib.net" method="get">
                <input type="text" name="s" placeholder="検索はこちら">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_search@2x.png" alt="送信する">
            </form>
        </li>


        <li class="lfl-o-sidebar__widget__item">
            <div class="lfl-o-sidebar__widget__item__head">
                <p class="lfl-o-sidebar__widget__item__head__title">カテゴリー</p>
            </div>
            <div class="lfl-o-sidebar__widget__item__box lfl-o-sidebar__widget__item__box--categories">
                <ul class="lfl-o-sidebar__widget__item__box__list">
                    <?php
                    $args = array(
                        'title_li' => '',
                        'show_count' => 1,
                        'hide_empty' => false,
                    );
                    wp_list_categories($args); ?>
                </ul>
            </div>
        </li>


        <li class="lfl-o-sidebar__widget__item">
            <div class="lfl-o-sidebar__widget__item__head">
                <p class="lfl-o-sidebar__widget__item__head__title">月別アーカイブ</p>
            </div>
            <div class="lfl-o-sidebar__widget__item__box lfl-o-sidebar__widget__item__box--archives">
                <ul class="lfl-o-sidebar__widget__item__box__list">
                    <?php
                    $args = array(
                        'type' => 'monthly',
                        'show_post_count' => true,
                    );
                    wp_get_archives($args); ?>
                </ul>
            </div>
        </li>

        <!-- <li class="lfl-o-sidebar__widget__item">
            <div class="lfl-o-sidebar__widget__item__head">
                <p class="lfl-o-sidebar__widget__item__head__title">別運営ブログ人気記事 - numablog -</p>
            </div>
            <div class="lfl-o-sidebar__widget__item__box">
                <a class="lfl-o-sidebar__widget__item__box__link" href="https://numablog.net/techacademy-webdesign-course/" target="_blank" alt="別運営ブログ人気記事 - numablog -">
                    <div class="lfl-o-sidebar__widget__item__box__thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/techacademy_webdesign_course.png" alt="【体験談】テックアカデミー Webデザインコースを受講してみて">
                    </div>
                    <p class="lfl-o-sidebar__widget__item__box__title">【体験談】テックアカデミー Webデザインコースを受講してみて</p>
                </a>
            </div>
        </li> -->
    </ul>
</section>
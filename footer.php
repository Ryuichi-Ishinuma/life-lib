
<footer class="lfl-o-footer">
    <div class="lfl-m-footer">
        <ul class="lfl-m-footer__link">
            <li class="lfl-m-footer__link__list">
                <a href="<?php echo home_url(); ?>">ホーム</a>
            </li>
            <li class="lfl-m-footer__link__list">
                <a href="<?php echo home_url('/terms'); ?>">利用規約</a>
            </li>
            <li class="lfl-m-footer__link__list">
                <a href="<?php echo home_url('/privacy-policy'); ?>">プライバシーポリシー</a>
            </li>
            <li class="lfl-m-footer__link__list">
                <a href="">お問い合わせ</a>
            </li>
        </ul>
        <small class="lfl-m-footer__small">Copyright &copy; 2020 - <?php echo date("Y"); ?> LIFELIB All Rights Reserved.</small>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

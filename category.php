<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/clearfix.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/common.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/list.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>whitebear</title>
    </head>
    <body>
        <?php if(have_posts()) : //もし、記事が1件以上あったら ?>
            <?php
                while(have_posts()) : // 記事がある間は繰り返す
                    the_post(); //記事データセット
                if(has_post_thumbnail()){
                    $src = the_post_thumbnail();
                }
                else{
                    $src = esc_url(get_template_directory_uri())./img/no_image.png;
                }
                ?>
        <div class="firstview">
            <h1 class="fv_title"><?php the_archive_title(); ?></h1>
        </div>
        <div class="content_wrap">
            <div class="content_col clf">
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="./img/at_img.png" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title">BLOG TITLE</h3>
                        <p class="at_date">2017/xx/xx</p>
                    </div>
                    <a href="#" class="at_link"></a>
                </article>
            <?php endwhile; //ここまでが新着 ?>
            <?php else; ?>
                <h3 class="at_title">まだ記事がありません。</h3>
            <?php endif; ?>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="./img/at_img.png" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title">BLOG TITLE</h3>
                        <p class="at_date">2017/xx/xx</p>
                    </div>
                    <a href="#" class="at_link"></a>
                </article>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="./img/at_img.png" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title">BLOG TITLE</h3>
                        <p class="at_date">2017/xx/xx</p>
                    </div>
                    <a href="#" class="at_link"></a>
                </article>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="./img/at_img.png" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title">BLOG TITLE</h3>
                        <p class="at_date">2017/xx/xx</p>
                    </div>
                    <a href="#" class="at_link"></a>
                </article>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="./img/at_img.png" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title">BLOG TITLE</h3>
                        <p class="at_date">2017/xx/xx</p>
                    </div>
                    <a href="#" class="at_link"></a>
                </article>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="./img/at_img.png" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title">BLOG TITLE</h3>
                        <p class="at_date">2017/xx/xx</p>
                    </div>
                    <a href="#" class="at_link"></a>
                </article>
                <p class="link_wrap"><a href="#" class="list_link">次のページ ></a></p>
            </div>
        </div>
        <footer class="footer clf">
            <p class="writtenby">Written By White Bear</p>
        </footer>
        <!-- SCRIPT RESOURCE -->
        <script src="./js/jquery-3.1.1.min.js" charset="utf-8"></script>
        <script src="./js/main.js" charset="utf-8"></script>
    </body>
</html>

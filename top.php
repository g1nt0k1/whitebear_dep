<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta <?php bloginfo('charset') ?>>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/clearfix.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/common.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/top.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>whitebear</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="firstview">
            <h1 class="fv_title">WHITE BEAR</h1>
            <img src="<?php echo esc_url(get_template_directory_uri())?>/img/whitebear.png" alt="" class="fv_img">
            <p class="fv_subtitle">フリーランスなりたて男のプログラム奮闘記</p>
        </div>
        <div class="content_wrap">
            <div class="content_col clf">
                <h2 class="blog_heading">新着記事</h2>
                <?php if(have_posts()) : //もし、記事が1件以上あったら ?>
                    <?php
                        $arr = $arrayName = array(
                            'posts_per_page' => 2
                        );
                        $mypost = get_posts($arr)
                        foreach($mypost as $post) : // 記事がある間は繰り返す
                            setup_postdata($post); //記事データセット
                        if(has_post_thumbnail()){
                            $src = the_post_thumbnail();
                        }
                        else{
                            $src = esc_url(get_template_directory_uri())./img/no_image.png;
                        }
                        ?>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="<?php echo $src ?>" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title"><?php the_title() ?></h3>
                        <p class="at_date"><?php the_time('Y/n/j') ?></p>
                    </div>
                    <a href="<?php the_permalink() ?>" class="at_link"></a>
                </article>
            <?php endforeach; //ここまでが新着 ?>
            <?php else; ?>
                <h3 class="at_title">まだ記事がありません。</h3>
            <?php endif; ?>
                <p class="link_wrap"><a href="#" class="list_link">もっと見る ></a></p>
            </div>
            <div class="content_col clf">
                <?php if(have_posts()) : //もし、記事が1件以上あったら ?>
                    <?php
                        $arr = $arrayName = array(
                            'posts_per_page' => 2,
                            'category_name'  => "プログラミング"
                        );
                        $mypost = get_posts($arr)
                        foreach($mypost as $post) : // 記事がある間は繰り返す
                            setup_postdata($post); //記事データセット
                        if(has_post_thumbnail()){
                            $src = the_post_thumbnail();
                        }
                        else{
                            $src = esc_url(get_template_directory_uri())./img/no_image.png;
                        }
                        ?>
                <h2 class="blog_heading">プログラミング</h2>
                <article class="article_wrap">
                    <p class="at_img_wrap"><img src="<?php echo $src ?>" alt="article_image" class="at_img"></p>
                    <div class="text_wrap">
                        <h3 class="at_title"><?php the_title() ?></h3>
                        <p class="at_date"><?php the_time('Y/n/j') ?></p>
                    </div>
                    <a href="<?php the_permalink() ?>" class="at_link"></a>
                </article>
            <?php endforeach; ?>
            <?php else; ?>
                <h3 class="at_title">まだ記事がありません。</h3>
            <?php endif; ?>
                <p class="link_wrap"><a href="#" class="list_link">もっと見る</a></p>
            </div>
        </div>
        <footer class="footer clf">
            <p class="writtenby">Written By White Bear</p>
        </footer>
        <!-- SCRIPT RESOURCE -->
        <script src="<?php echo esc_url(get_template_directory_uri())?>/js/jquery-3.1.1.min.js" charset="utf-8"></script>
        <script src="<?php echo esc_url(get_template_directory_uri())?>/js/main.js" charset="utf-8"></script>
        <?php wp_footer(); ?>
    </body>
</html>

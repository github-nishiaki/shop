<?php get_header() ?>
    <main>

        <div id="top" class="wrapper">
            <div>
                <div class="main-visual">
                    <?php
                    if (has_post_thumbnail()) {
                        $id = get_post_thumbnail_id();//アイキャッチ画像のIDを取得
                        $image = wp_get_attachment_image_src($id, 'full'); //IDから画像のURLを取得
                    }else{
                        $image = array(get_template_directory_uri() . '/img/main.jpg');
                    }
                    ?>
                    <img class="main-img-shot"
                         src="<?php echo $image[0]?>" alt="">
                </div>
            </div>
            <section id="news" class="wrapper">


                <h2 class="section-title">
                    <span class="en">NEWS</span>
                    <span class="ja">ニュース</span>
                </h2>
                <?php while (have_posts()):the_post(); ?>
                <time><?php echo get_the_date()?></time>

                    <h1><?php the_title(); ?></h1>


                    <p><?php the_content(); ?></p>


                <?php endwhile; ?>
            </section>


        </div>


    </main>

<?php get_footer() ?>
<?php get_header() ?>
    <main>

        <div id="top" class="wrapper">
            <div>
                <div class="main-visual">
                    <img class="main-img-shot"
                         src="<?php the_post_thumbnail()?>">
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
<?php get_header() ?>
    <main>
        <section id="top" class="wrapper">

            <div>
                <h2 class="section-title">
                    <span class="en">Contact</span>
                    <span class="ja">お問合せ</span>
                </h2>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

            </div>
            <a href="<?php echo esc_url(home_url('/'));?>" class="btnshine">戻る</a>

        </section>
    </main>


<?php get_footer() ?>
<?php get_header(); ?>


<div class="l_content">
    <div class="p_hc">
        <?php get_template_part("inc/header"); ?>
    </div>

    <main>
        <section class="p_news">
            <h3 class="section_ttl">NEWS</h3>
            <div class="tab_wrap">
                <ul>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="news_list">
                                <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                                <a class="news_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <?php endif; ?>
                </ul>

            </div>

            <div class="btnarea">
                <?php
                $link = get_previous_posts_link("< 前へ");
                if ($link) {
                    $link = str_replace("<a", "<a class='button'", $link);
                    echo $link;
                }
                $link = get_next_posts_link("次へ >");
                if ($link) {
                    $link = str_replace("<a", "<a class='button'", $link);
                    echo $link;
                }
                ?>
            </div>
        </section>
    </main>

</div>


<?php get_footer(); ?>
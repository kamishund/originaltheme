<?php get_header(); ?>


<div class="l_content">
    <div class="p_hc">
        <?php get_template_part("inc/header"); ?>
    </div>



    <main>
        <section class="p_news">
            <h3 class="section_ttl">NEWS</h3>
            <div class="p_single">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h4 class="news_title"><?php the_title(); ?></h4>
                        <div class="p_single_flex">
                            <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                            <p class="news_cat">
                                <?php
                                $cat = get_the_category();
                                $cat = $cat[0];
                                echo $cat->name;
                                ?>
                            </p>
                        </div>


                        <div class="p_news_content">
                            <?php the_content(); ?>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </section>
    </main>

</div>


<?php get_footer(); ?>
<?php get_header(); ?>


<div class="l_content">
    <?php get_template_part("inc/header"); ?>
    <div class="sec_inner">
        <?php
        $args = array(
            'post_type' => 'main', // 投稿タイプスラッグ
            'posts_per_page' => 6
        );
        $the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）				
        ?>
        <div class="slider">
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="main_wrap">
                        <img src="<?php echo CFS()->get('image'); ?>">
                        <?php echo CFS()->get('link'); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>


    <div class="p_about">
        <p>
            UIを実装したホームページです<br>
            スライドはカスタム投稿タイプで管理しているため<br>
            更新するのがとても楽になっています。
        </p>
    </div>

    <div class="tab_wrap">
        <ul class="tab">
            <li><a href="#lunch">ニュース</a></li>
            <li><a href="#drink">最新情報</a></li>
        </ul>

        <div id="lunch" class="area">
            <ul>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name'  => 'news', // 投稿タイプスラッグ
                    'posts_per_page' => 6
                );
                $the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）				
                ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="news_list">
                            <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                            <a class="news_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>
            </ul>
            <!--/area-->
        </div>
        <div id="drink" class="area">
            <ul>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name'  => 'newrelease',
                    'posts_per_page' => 6
                );
                $the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）				
                ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="news_list">
                            <p class=" news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                            <a class="news_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>
            </ul>
            <!--/area-->
        </div>
        <a class="mbtn" href="/news">もっと見る</a>
    </div>

    <section class="qanda">
        <div class="wrapper">
            <h2>FAQ</h2>
            <dl>
                <dt>
                    <a href="#acc1">
                        <span class="Qbtn">Q</span>
                        <span>最短何日で納品可能でしょうか？</span>
                    </a>
                </dt>
                <dd id="acc1"><span class="Qbtn">A</span><span>最短5営業日での納品実績がございます</span></dd>
            </dl>

            <dl>
                <dt>
                    <a href="#acc2">
                        <span class="Qbtn">Q</span>
                        <span>最短何日で納品可能でしょうか？</span>
                    </a>
                </dt>
                <dd id="acc2"><span class="Qbtn">A</span><span>最短5営業日での納品実績がございます</span></dd>
            </dl>

            <dl>
                <dt>
                    <a href="#acc3">
                        <span class="Qbtn">Q</span>
                        <span>最短何日で納品可能でしょうか？</span>
                    </a>
                </dt>
                <dd id="acc3"><span class="Qbtn">A</span><span>最短5営業日での納品実績がございます</span></dd>
            </dl>


        </div>
    </section>

    <section class="contact" id="contactform">
        <div class="wrapper">
            <h2>CONTACT</h2>
            <button id="contactbtn">お問合わせはこちら</button>
        </div>

        <div id="bg">
            <div id="contactbox">
                <div class="plus"></div>
                <h3>お問い合わせ</h3>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h4 class="news_title"><?php the_content(); ?></h4>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>

            </div>
        </div>

    </section>
</div>


<?php get_footer(); ?>
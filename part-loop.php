<?php if( have_posts() ) : ?>
    <div class="post-list">

        <?php while( have_posts() ) : the_post(); ?>

            <article <?php post_class() ?>>
                <div class="">

                    <?php if( has_post_thumbnail() ) : ?>
                        <div class="">

                            <div class="article-thumbnail">
                                <?php the_post_thumbnail(is_single() ? 'large' : 'medium') ?>
                            </div>

                        </div>
                    <?php endif; ?>

                    <div class="">

                        <?php
                        the_title(
                            is_single() ? '<h1>' : '<h2>',
                            is_single() ? '</h1>' : '</h2>'
                        )
                        ?>

                        <div class="article-content">
                            <?php is_single() ? the_content() : the_excerpt(); ?>
                        </div>

                        <a class="" href="<?php the_permalink() ?>"><?php the_permalink() ?></a>

                    </div>
                </div>
            </article>

        <?php endwhile; ?>

        <div class="">
            <?php echo paginate_links([
                'type' => 'list',
                'end_size' => 2,
                'mid_size' => 2,
                'prev_text' => __('Prev'),
                'next_text' => __('Next'),
            ]); ?>
        </div>

    </div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
    <div class="qodef-post-content" <?php suprema_qodef_inline_style($holder_style); ?>>
        <span class="qodef-post-content-overlay"></span>
        <div class="qodef-post-content-inner">
            <div class="qodef-post-text">
                <div class="qodef-post-text-inner">
                    <div class="qodef-post-info">
                        <?php suprema_qodef_post_info(array('date' => 'yes', 'author' => 'no', 'category' => 'no', 'comments' => 'no', 'share' => 'no', 'like' => 'no')) ?>
                    </div>
                    <div class="qodef-post-title">
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), "qodef_post_quote_text_meta", true)); ?></a>
                        </h3>
                        <span class="quote_author">&ndash; <?php the_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
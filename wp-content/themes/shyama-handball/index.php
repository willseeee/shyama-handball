<?php
get_header();
?>

<!-- Simple Header -->
<section class="hero-slider-section" style="height: 40vh; min-height: 300px; display: flex; align-items: center; justify-content: center; background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png') top center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(11, 17, 32, 0.6), rgba(11, 17, 32, 0.9));"></div>
    <div style="position: relative; z-index: 10; text-align: center; padding: 0 20px;">
        <h1 style="color: #fff; font-size: 3rem; font-weight: 900; margin-bottom: 15px; letter-spacing: 2px;">
            <?php 
            if ( is_home() && ! is_front_page() ) {
                single_post_title();
            } else {
                the_archive_title();
            }
            ?>
        </h1>
        <div style="width: 80px; height: 4px; background: #f59e0b; margin: 0 auto 20px;"></div>
    </div>
</section>

<section class="section light-section" style="padding: 80px 20px;">
    <div class="footer-container" style="max-width: 1000px; margin: 0 auto; display: block;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 50px; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 20px; border-radius: 8px; overflow: hidden;">
                        <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto;' ) ); ?>
                    </div>
                <?php endif; ?>
                
                <h2 style="font-size: 2rem; margin-bottom: 15px;">
                    <a href="<?php the_permalink(); ?>" style="color: #0f172a; text-decoration: none;"><?php the_title(); ?></a>
                </h2>
                
                <div class="post-meta" style="color: #64748b; font-size: 0.9rem; margin-bottom: 20px;">
                    <span><i class="far fa-calendar"></i> <?php echo get_the_date(); ?></span> | 
                    <span><i class="far fa-user"></i> <?php the_author(); ?></span>
                </div>
                
                <div class="post-content" style="color: #475569; line-height: 1.7; font-size: 1.1rem;">
                    <?php the_excerpt(); ?>
                </div>
                
                <a href="<?php the_permalink(); ?>" class="btn-gold" style="display: inline-block; margin-top: 20px; font-size: 0.9rem; padding: 10px 20px;">Read More</a>
            </article>
        <?php endwhile; 
            the_posts_navigation();
        else : ?>
            <p>No content found.</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
?>

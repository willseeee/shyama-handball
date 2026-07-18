<?php
get_header();
?>

<!-- Header -->
<section class="hero-slider-section" style="height: 40vh; min-height: 300px; display: flex; align-items: center; justify-content: center; background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png') top center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(11, 17, 32, 0.6), rgba(11, 17, 32, 0.9));"></div>
    <div style="position: relative; z-index: 10; text-align: center; padding: 0 20px;">
        <h1 style="color: #fff; font-size: 3rem; font-weight: 900; margin-bottom: 15px; letter-spacing: 2px;"><?php the_title(); ?></h1>
        <div style="width: 80px; height: 4px; background: #f59e0b; margin: 0 auto 20px;"></div>
        <div style="color: #cbd5e1; font-size: 0.9rem;">
            <span><i class="far fa-calendar"></i> <?php echo get_the_date(); ?></span> | 
            <span><i class="far fa-user"></i> <?php the_author(); ?></span>
        </div>
    </div>
</section>

<section class="section light-section" style="padding: 80px 20px;">
    <div style="max-width: 1000px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); color: #0f172a; line-height: 1.8; font-size: 1.1rem;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin-bottom: 30px; border-radius: 8px; overflow: hidden; text-align: center;">
                    <?php the_post_thumbnail( 'large', array( 'style' => 'max-width:100%; height:auto;' ) ); ?>
                </div>
            <?php endif; ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php
get_footer();
?>

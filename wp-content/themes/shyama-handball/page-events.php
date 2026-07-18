<?php
/**
 * Template Name: Events Page
 */
get_header();
?>

<style>
/* Custom styles for Events Page */
.events-hero {
    background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/events_hero.png') no-repeat center center/cover;
    position: relative;
    height: 50vh;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 20px;
}
.events-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.95));
}
.eh-content {
    position: relative;
    z-index: 2;
    color: var(--white);
    padding: 0 20px;
}
.eh-title {
    font-size: clamp(3rem, 7vw, 5.5rem);
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    letter-spacing: 2px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.6);
    margin-bottom: 1rem;
    line-height: 1.1;
}
.eh-title span { color: var(--accent-color); }
.eh-desc {
    max-width: 700px;
    margin: 0 auto;
    color: rgba(255,255,255,0.9);
    line-height: 1.7;
    font-size: 1.2rem;
}

/* Sections */
.ev-section {
    padding: 5rem 5%;
    background: var(--primary-color);
    color: var(--white);
}
.ev-section.alt {
    background: #1e293b;
}

/* Featured Event */
.featured-event-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0.01));
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 3rem;
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 3rem;
    align-items: center;
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    position: relative;
    overflow: hidden;
}
.featured-event-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 4px; height: 100%;
    background: var(--accent-color);
}
@media(max-width: 900px) {
    .featured-event-card { grid-template-columns: 1fr; padding: 2rem; gap: 2rem; text-align: center; }
    .featured-event-card::before { width: 100%; height: 4px; }
}
.fe-date-block {
    background: rgba(15, 23, 42, 0.8);
    border: 1px solid rgba(255,255,255,0.1);
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
}
.fe-date-block .day {
    font-size: 4.5rem;
    font-weight: 800;
    color: var(--accent-color);
    line-height: 1;
    font-family: 'Montserrat', sans-serif;
}
.fe-date-block .month {
    font-size: 1.5rem;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.fe-info h3 {
    font-size: 2.2rem;
    font-family: 'Montserrat', sans-serif;
    color: #fff;
    margin-bottom: 1rem;
}
.fe-info p {
    color: #94a3b8;
    font-size: 1.05rem;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}
.fe-meta {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}
@media(max-width: 900px) {
    .fe-meta { justify-content: center; }
}
.fe-meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #e2e8f0;
    font-weight: 500;
}
.fe-meta-item i { color: var(--accent-color); font-size: 1.2rem; }

/* Schedule List */
.schedule-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    max-width: 900px;
    margin: 0 auto;
}
.schedule-row {
    display: grid;
    grid-template-columns: 120px 1fr auto;
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 12px;
    padding: 1.5rem 2rem;
    align-items: center;
    gap: 2rem;
    transition: transform 0.3s ease, border-color 0.3s ease;
}
.schedule-row:hover {
    transform: translateX(10px);
    border-color: var(--accent-color);
    background: rgba(255,255,255,0.05);
}
@media(max-width: 768px) {
    .schedule-row { grid-template-columns: 1fr; text-align: center; gap: 1rem; }
}
.sr-date {
    text-align: center;
    border-right: 1px solid rgba(255,255,255,0.1);
    padding-right: 1.5rem;
}
@media(max-width: 768px) {
    .sr-date { border-right: none; padding-right: 0; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem; }
}
.sr-date .day { font-size: 2.2rem; font-weight: 800; color: var(--white); font-family: 'Montserrat', sans-serif; line-height: 1; }
.sr-date .month { font-size: 0.9rem; color: var(--accent-color); text-transform: uppercase; font-weight: 600; letter-spacing: 1px; }
.sr-info h4 { font-size: 1.3rem; color: #fff; margin-bottom: 0.5rem; }
.sr-info p { color: #94a3b8; font-size: 0.95rem; }
.sr-teams {
    font-size: 1.1rem;
    font-weight: 600;
    color: #e2e8f0;
    background: rgba(0,0,0,0.3);
    padding: 10px 20px;
    border-radius: 8px;
}

/* Results Grid */
.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2.5rem;
}
.result-card {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 16px;
    overflow: hidden;
    transition: transform 0.3s ease;
}
.result-card:hover {
    transform: translateY(-8px);
    border-color: var(--accent-color);
}
.rc-header {
    background: rgba(0,0,0,0.2);
    padding: 1rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(255,255,255,0.05);
}
.rc-date { font-size: 0.85rem; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
.rc-badge { background: rgba(34,197,94,0.15); color: #22C55E; padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(34,197,94,0.3); }
.rc-badge.loss { background: rgba(239,68,68,0.15); color: #ef4444; border-color: rgba(239,68,68,0.3); }
.rc-body {
    padding: 2rem 1.5rem;
    text-align: center;
}
.rc-tournament { font-size: 0.9rem; color: var(--accent-color); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 1rem; font-weight: 600; }
.rc-score {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}
.rc-team { font-size: 1.1rem; font-weight: 600; color: #fff; width: 100px; }
.rc-points { font-size: 2.5rem; font-weight: 800; font-family: 'Montserrat', sans-serif; }
.rc-points.win { color: var(--accent-color); }
.rc-points.lose { color: #94a3b8; }
.rc-divider { font-size: 1.5rem; color: #475569; }

.btn-solid-gold {
    background: var(--accent-color);
    color: #000;
    padding: 14px 35px;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}
.btn-solid-gold:hover {
    background: #d97706;
    box-shadow: 0 10px 20px rgba(245, 158, 11, 0.3);
    transform: translateY(-2px);
}
.btn-outline {
    background: transparent;
    border: 2px solid rgba(255,255,255,0.2);
    color: #fff;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}
.btn-outline:hover {
    border-color: var(--accent-color);
    color: var(--accent-color);
}
</style>

<header class="events-hero">
    <div class="eh-content">
        <h1 class="eh-title">EVENTS & <span>TOURNAMENTS</span></h1>
        <p class="eh-desc">Stay updated with the latest matches, upcoming tournaments, and recent achievements of Shyama Handball Academy.</p>
    </div>
</header>

<!-- Featured Upcoming Event -->
<section class="ev-section">
    <div class="center-header" style="margin-bottom: 4rem;">
        <h2 class="section-title-center">FEATURED <span class="gold-text">EVENT</span></h2>
        <div class="title-divider-gold-center"></div>
    </div>
    
    <div class="featured-event-card">
        <div class="fe-date-block">
            <div class="day">15</div>
            <div class="month">NOV 2026</div>
        </div>
        <div class="fe-info">
            <h3>National Club Handball Championship</h3>
            <p>Join us to support the Shyama Handball Academy senior team as they compete against the top clubs from across the country in this prestigious 5-day tournament.</p>
            <div class="fe-meta">
                <div class="fe-meta-item"><i class="fas fa-map-marker-alt"></i> Indoor Stadium, Varanasi</div>
                <div class="fe-meta-item"><i class="far fa-clock"></i> 10:00 AM Onwards</div>
                <div class="fe-meta-item"><i class="fas fa-ticket-alt"></i> Free Entry</div>
            </div>
            <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-solid-gold">View Details</a>
        </div>
    </div>
</section>

<!-- Match Schedule -->
<section class="ev-section alt">
    <div class="center-header" style="margin-bottom: 4rem;">
        <h2 class="section-title-center">UPCOMING <span class="gold-text">MATCHES</span></h2>
        <div class="title-divider-gold-center"></div>
        <p style="text-align: center; color: #cbd5e1; font-size: 1.1rem;">Check out where our teams are playing next.</p>
    </div>
    
    <div class="schedule-list">
        <?php
        $all_events_query = new WP_Query( array(
            'post_type'      => 'event',
            'posts_per_page' => 15,
            'orderby'        => 'meta_value',
            'meta_key'       => 'event_date',
            'order'          => 'ASC',
        ) );

        if ( $all_events_query->have_posts() ) :
            while ( $all_events_query->have_posts() ) : $all_events_query->the_post();
                $date_meta = get_post_meta( get_the_ID(), 'event_date', true );
                $venue = get_post_meta( get_the_ID(), 'event_venue', true );
                $time = get_post_meta( get_the_ID(), 'event_time', true );
                $category = get_post_meta( get_the_ID(), 'event_category', true );
                
                $day = '01';
                $month = 'JAN';
                if ( $date_meta ) {
                    $timestamp = strtotime( $date_meta );
                    $day = date( 'd', $timestamp );
                    $month = strtoupper( date( 'M', $timestamp ) );
                }
                ?>
                <div class="schedule-row">
                    <div class="sr-date">
                        <div class="day"><?php echo esc_html( $day ); ?></div>
                        <div class="month"><?php echo esc_html( $month ); ?></div>
                    </div>
                    <div class="sr-info">
                        <h4><?php the_title(); ?></h4>
                        <p><i class="fas fa-map-pin" style="color:var(--accent-color); margin-right:5px;"></i> <?php echo esc_html( $venue ?: 'Varanasi' ); ?> | <?php echo esc_html( $time ?: '10:00 AM Onwards' ); ?></p>
                    </div>
                    <div class="sr-teams">
                        <?php echo esc_html( $category ?: 'Seniors VS Opponents' ); ?>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else :
            // Static Fallback
            ?>
            <div class="schedule-row">
                <div class="sr-date">
                    <div class="day">20</div>
                    <div class="month">NOV</div>
                </div>
                <div class="sr-info">
                    <h4>U-19 State League - Match 1</h4>
                    <p><i class="fas fa-map-pin" style="color:var(--accent-color); margin-right:5px;"></i> Sports Authority Ground, Lucknow</p>
                </div>
                <div class="sr-teams">
                    SHA U-19 <span style="color:var(--accent-color); margin:0 10px;">VS</span> Lucknow HC
                </div>
            </div>
            
            <div class="schedule-row">
                <div class="sr-date">
                    <div class="day">22</div>
                    <div class="month">NOV</div>
                </div>
                <div class="sr-info">
                    <h4>U-19 State League - Match 2</h4>
                    <p><i class="fas fa-map-pin" style="color:var(--accent-color); margin-right:5px;"></i> Sports Authority Ground, Lucknow</p>
                </div>
                <div class="sr-teams">
                    SHA U-19 <span style="color:var(--accent-color); margin:0 10px;">VS</span> Kanpur Royals
                </div>
            </div>
            
            <div class="schedule-row">
                <div class="sr-date">
                    <div class="day">05</div>
                    <div class="month">DEC</div>
                </div>
                <div class="sr-info">
                    <h4>Varanasi District Championship</h4>
                    <p><i class="fas fa-map-pin" style="color:var(--accent-color); margin-right:5px;"></i> SHA Home Court</p>
                </div>
                <div class="sr-teams">
                    Academy Seniors <span style="color:var(--accent-color); margin:0 10px;">VS</span> City Club
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
    <div style="text-align: center; margin-top: 3rem;">
        <a href="#" class="btn-outline">Download Full Schedule</a>
    </div>
</section>

<!-- Recent Results -->
<section class="ev-section">
    <div class="center-header" style="margin-bottom: 4rem;">
        <h2 class="section-title-center">RECENT <span class="gold-text">RESULTS</span></h2>
        <div class="title-divider-gold-center"></div>
    </div>
    
    <div class="results-grid">
        <div class="result-card">
            <div class="rc-header">
                <span class="rc-date">Oct 12, 2026</span>
                <span class="rc-badge">VICTORY</span>
            </div>
            <div class="rc-body">
                <div class="rc-tournament">UP State Championship Final</div>
                <div class="rc-score">
                    <div class="rc-team" style="text-align: right;">SHA Seniors</div>
                    <div class="rc-points win">32</div>
                    <div class="rc-divider">-</div>
                    <div class="rc-points lose">28</div>
                    <div class="rc-team" style="text-align: left;">Agra Kings</div>
                </div>
                <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem;">A thrilling final match where our seniors secured the state title for the 3rd consecutive year!</p>
                <a href="<?php echo esc_url( home_url('/gallery') ); ?>" class="btn-outline" style="padding: 8px 20px; font-size: 0.85rem;">View Photos</a>
            </div>
        </div>
        
        <div class="result-card">
            <div class="rc-header">
                <span class="rc-date">Sep 28, 2026</span>
                <span class="rc-badge">VICTORY</span>
            </div>
            <div class="rc-body">
                <div class="rc-tournament">U-14 Inter-Academy Cup</div>
                <div class="rc-score">
                    <div class="rc-team" style="text-align: right;">SHA U-14</div>
                    <div class="rc-points win">24</div>
                    <div class="rc-divider">-</div>
                    <div class="rc-points lose">15</div>
                    <div class="rc-team" style="text-align: left;">Delhi Stars</div>
                </div>
                <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem;">Our youngest squad dominated the court and brought home the gold medal.</p>
                <a href="<?php echo esc_url( home_url('/gallery') ); ?>" class="btn-outline" style="padding: 8px 20px; font-size: 0.85rem;">View Photos</a>
            </div>
        </div>
        
        <div class="result-card">
            <div class="rc-header">
                <span class="rc-date">Sep 15, 2026</span>
                <span class="rc-badge loss">NARROW LOSS</span>
            </div>
            <div class="rc-body">
                <div class="rc-tournament">National Invitational Cup</div>
                <div class="rc-score">
                    <div class="rc-team" style="text-align: right;">SHA Seniors</div>
                    <div class="rc-points lose">30</div>
                    <div class="rc-divider">-</div>
                    <div class="rc-points win">31</div>
                    <div class="rc-team" style="text-align: left;">Punjab Police</div>
                </div>
                <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem;">A hard-fought semi-final battle that ended in the final seconds of extra time.</p>
                <a href="<?php echo esc_url( home_url('/gallery') ); ?>" class="btn-outline" style="padding: 8px 20px; font-size: 0.85rem;">View Photos</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

<?php
get_header();
?>

    <!-- Hero Banner Slider -->
    <section class="hero-slider-section">
        <div class="hero-slider-container">
            <!-- Slide 1 -->
            <div class="hero-slide active">
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Videos/Hero Video.mp4" type="video/mp4">
                </video>
            </div>
            <!-- Slide 2 -->
            <div class="hero-slide">
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Videos/Hero Video.mp4" type="video/mp4">
                </video>
            </div>
            <!-- Slide 3 -->
            <div class="hero-slide">
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Videos/Hero Video.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- Static Overlay & Content -->
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Shyama Handball Academy</h1>
            <p>Join Varanasi's premier handball academy and take your game to the next level.</p>
        </div>

        <!-- Dots -->
        <div class="hero-dots-container">
            <span class="hero-dot active" data-index="0"></span>
            <span class="hero-dot" data-index="1"></span>
            <span class="hero-dot" data-index="2"></span>
        </div>
    </section>

    <!-- Academy Introduction (Featured Programs Style) -->
    <section class="section light-section">
        <div class="center-header">
            <span class="gold-subtitle-center">ACADEMY HIGHLIGHTS</span>
            <h2 class="section-title-center">WELCOME TO <span class="gold-text">OUR ACADEMY</span></h2>
            <div class="title-divider-gold-center"></div>
            <p class="center-desc" style="max-width: 800px;">Dedicated grassroots initiatives driving athletic mastery, corporate collaborations, and youth leadership in the sport of handball.</p>
        </div>
        
        <div class="grid-5 impact-grid">
            <!-- Card 1 -->
            <div class="impact-card">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="Handball Coaching">
                <div class="impact-card-content">
                    <span class="category">ATHLETIC CORE</span>
                    <h3>Handball Coaching</h3>
                    <p>Professional training leagues under national-level coaches for junior and senior levels.</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="impact-card">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" alt="State Tournaments">
                <div class="impact-card-content">
                    <span class="category">COMPETITIONS</span>
                    <h3>State Tournaments</h3>
                    <p>Organizing annual tournaments under sports federations to provide competitive experience.</p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="impact-card">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" alt="Village Sports Camps">
                <div class="impact-card-content">
                    <span class="category">COMMUNITY OUTREACH</span>
                    <h3>Village Sports Camps</h3>
                    <p>7-day intensive coaching bootcamps in remote locations supplying free handball kits.</p>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="impact-card">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png" alt="Educational Support">
                <div class="impact-card-content">
                    <span class="category">EMPOWERMENT</span>
                    <h3>Educational Support</h3>
                    <p>Offering scholarships, books, and study aids to ensure zero educational drops.</p>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="impact-card">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="CSR Partnerships">
                <div class="impact-card-content">
                    <span class="category">ALLIANCES</span>
                    <h3>CSR Partnerships</h3>
                    <p>Collaborating with companies to sponsor athletic grounds and clean water setups.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: About the Academy (Built for Champions) -->
    <section class="section dark-section">
        <div class="center-header">
            <span class="gold-subtitle-center">ABOUT THE ACADEMY</span>
            <h2 class="section-title-center">BUILT FOR <span class="gold-text">CHAMPIONS</span></h2>
            <div class="title-divider-gold-center"></div>
        </div>
        <div class="grid-2-col">
            <!-- Left Side -->
            <div class="about-left">
                
                <p class="dark-section-desc">
                    Elite Handball Academy has been a beacon of sporting excellence since 2012. We combine world-class coaching methodology with state-of-the-art facilities to develop players at every level — from beginners to national competitors.
                </p>
                <p class="dark-section-desc" style="margin-bottom: 30px;">
                    Our holistic approach integrates technical skill, tactical intelligence, physical conditioning, and mental resilience to produce complete athletes who excel on every court.
                </p>
                
                <div class="feature-list-grid">
                    <div class="feature-item"><span class="gold-dot"></span> Professional-grade indoor courts</div>
                    <div class="feature-item"><span class="gold-dot"></span> National & state certified coaches</div>
                    <div class="feature-item"><span class="gold-dot"></span> Age-group specific programs</div>
                    <div class="feature-item"><span class="gold-dot"></span> Video analysis & tech support</div>
                    <div class="feature-item"><span class="gold-dot"></span> Nutrition & fitness guidance</div>
                    <div class="feature-item"><span class="gold-dot"></span> Scholarship opportunities</div>
                </div>
                
                <a href="<?php echo esc_url( home_url('/training') ); ?>" class="btn-gold">EXPLORE PROGRAMS</a>
            </div>
            
            <!-- Right Side -->
            <div class="about-right">
                <div class="mission-card">
                    <div class="mission-header">
                        <div class="medal-icon">🏅</div>
                        <h3>OUR MISSION</h3>
                        <p>To nurture athletic potential, instill discipline, and build future handball champions who represent their region and country with pride on every stage.</p>
                    </div>
                    
                    <div class="batch-grid">
                        <div class="batch-card">
                            <h4>U-12</h4>
                            <span>JUNIOR BATCH</span>
                        </div>
                        <div class="batch-card">
                            <h4>U-17</h4>
                            <span>YOUTH BATCH</span>
                        </div>
                        <div class="batch-card">
                            <h4>U-21</h4>
                            <span>SENIOR BATCH</span>
                        </div>
                        <div class="batch-card">
                            <h4>OPEN</h4>
                            <span>ELITE SQUAD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Training Highlights -->
    <section class="section light-section">
        <div class="center-header">
            <span class="gold-subtitle-center">TRAINING PROGRAMS</span>
            <h2 class="section-title-center">TRAINING <span class="gold-text">HIGHLIGHTS</span></h2>
            <div class="title-divider-gold-center"></div>
            <p class="center-desc">Our structured training curriculum is designed to develop every facet of a handball player — from raw skill to championship mentality.</p>
        </div>
        
        <div class="grid-6">
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="Skill Mastery" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">01</div>
                    <h4>Technical Skill Mastery</h4>
                    <p>Passing, dribbling, shooting mechanics – perfected through repetition drills, shadow play, and real-match simulations with immediate feedback.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" alt="Tactical Intelligence" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">02</div>
                    <h4>Tactical Intelligence</h4>
                    <p>Game IQ development, positional awareness, and team strategy. Players learn to read the court and make split-second decisions under pressure.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" alt="Physical Conditioning" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">03</div>
                    <h4>Physical Conditioning</h4>
                    <p>Sport-specific fitness: explosive speed, endurance, agility, and strength training tailored to age groups and competitive demands.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="Goalkeeper Excellence" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">04</div>
                    <h4>Goalkeeper Excellence</h4>
                    <p>Dedicated goalkeeper sessions covering positioning, reflex training, distribution, and the psychological demands of the last line of defence.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" alt="Video Data Analysis" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">05</div>
                    <h4>Video & Data Analysis</h4>
                    <p>Match footage breakdowns, performance metrics tracking, and personalised reports help athletes understand and accelerate their development.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" alt="Mental Toughness" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">06</div>
                    <h4>Mental Toughness</h4>
                    <p>Visualisation, pressure simulation, and resilience coaching to ensure athletes perform at their peak in high-stakes championship moments.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="Nutrition Planning" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">07</div>
                    <h4>Nutrition Planning</h4>
                    <p>Customised dietary regimes and hydration plans crafted by certified sports nutritionists to ensure peak match-day performance.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-img-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" alt="Injury Prevention" class="highlight-img">
                </div>
                <div class="highlight-content">
                    <div class="card-number">08</div>
                    <h4>Injury Prevention</h4>
                    <p>Proactive physical therapy, recovery sessions, and biomechanical corrections designed to maximize player longevity and health.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Achievements & Awards -->
    <section class="section dark-section-alt">
        <div class="center-header">
            <span class="gold-subtitle-center">OUR RECORD</span>
            <h2 class="section-title-center">ACHIEVEMENTS <span class="gold-text">& AWARDS</span></h2>
            <div class="title-divider-gold-center"></div>
        </div>
        <div class="grid-4 stat-grid">
            <div class="stat-card">
                <div class="stat-content">
                    <h3>48</h3>
                    <p>CHAMPIONSHIP TITLES</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>20+</h3>
                    <p>NATIONAL PLAYERS</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>150+</h3>
                    <p>MEDALS WON</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>12</h3>
                    <p>YEARS OF EXCELLENCE</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>15+</h3>
                    <p>CERTIFIED COACHES</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>10+</h3>
                    <p>INTERNATIONAL TOURS</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>500+</h3>
                    <p>SUCCESSFUL ALUMNI</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-content">
                    <h3>3</h3>
                    <p>INDOOR ARENAS</p>
                </div>
            </div>
        </div>
        <div class="award-highlight">
            <h3>"BEST HANDBALL ACADEMY – NORTH INDIA 2023"</h3>
            <p>Awarded by the Sports Authority of India at the National Sports Excellence Conclave, New Delhi</p>
        </div>
    </section>

    <!-- Section 4: Upcoming Events -->
    <section class="section light-section">
        <div class="gallery-header-container">
            <div class="center-header" style="text-align: left; margin-bottom: 0;">
                <span class="gold-subtitle-center" style="text-align: left;">CALENDAR</span>
                <h2 class="section-title-center">UPCOMING <span class="gold-text">EVENTS</span></h2>
                <div class="title-divider-gold-center" style="margin: 0 0 20px 0;"></div>
            </div>
            <div>
                <a href="<?php echo esc_url( home_url('/events') ); ?>" class="btn-outline-white" style="color: #0f172a; border-color: #0f172a;">VIEW ALL EVENTS</a>
            </div>
        </div>
        
        <div class="events-list">
            <?php
            $events_query = new WP_Query( array(
                'post_type'      => 'event',
                'posts_per_page' => 4,
                'orderby'        => 'meta_value',
                'meta_key'       => 'event_date',
                'order'          => 'ASC',
            ) );

            if ( $events_query->have_posts() ) :
                while ( $events_query->have_posts() ) : $events_query->the_post();
                    $evt_date = get_post_meta( get_the_ID(), 'event_date', true );
                    $evt_venue = get_post_meta( get_the_ID(), 'event_venue', true );
                    $evt_time = get_post_meta( get_the_ID(), 'event_time', true );
                    $evt_category = get_post_meta( get_the_ID(), 'event_category', true );
                    $evt_reg = get_post_meta( get_the_ID(), 'event_reg_link', true );
                    
                    $day = '01';
                    $month_year = 'JAN ' . date('Y');
                    if ( $evt_date ) {
                        $timestamp = strtotime( $evt_date );
                        $day = date( 'd', $timestamp );
                        $month_year = strtoupper( date( 'M Y', $timestamp ) );
                    }
                    ?>
                    <!-- Event Row -->
                    <div class="event-row">
                        <div class="event-date">
                            <span class="date-num text-gold"><?php echo esc_html( $day ); ?></span>
                            <span class="date-month"><?php echo esc_html( $month_year ); ?></span>
                        </div>
                        <div class="event-details">
                            <h4>🥅 <?php the_title(); ?></h4>
                            <p>📍 <?php echo esc_html( $evt_venue ?: 'Varanasi' ); ?> | ⏰ <?php echo esc_html( $evt_time ?: '8:00 AM - 6:00 PM' ); ?> | <?php echo esc_html( $evt_category ?: 'All Categories' ); ?></p>
                        </div>
                        <div class="event-status">
                            <a href="<?php echo esc_url( $evt_reg ?: home_url('/join') ); ?>" class="status-tag tag-green-outline" style="text-decoration: none; display: inline-block; padding: 8px 20px; font-weight: 700;">Registration Form</a>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Static Fallback
                ?>
                <!-- Event 1 -->
                <div class="event-row">
                    <div class="event-date">
                        <span class="date-num text-gold">14</span>
                        <span class="date-month">JUN 2025</span>
                    </div>
                    <div class="event-details">
                        <h4>🥅 Inter-District Handball Championship</h4>
                        <p>📍 Indoor Stadium, Varanasi | ⏰ 8:00 AM - 6:00 PM | U-17 & U-21 Categories</p>
                    </div>
                    <div class="event-status">
                        <a href="<?php echo esc_url( home_url('/join') ); ?>" class="status-tag tag-green-outline" style="text-decoration: none; display: inline-block; padding: 8px 20px; font-weight: 700;">Registration Form</a>
                    </div>
                </div>
                
                <!-- Event 2 -->
                <div class="event-row">
                    <div class="event-date">
                        <span class="date-num text-gold">22</span>
                        <span class="date-month">JUN 2025</span>
                    </div>
                    <div class="event-details">
                        <h4>🏃 Summer Intensive Training Camp</h4>
                        <p>📍 Elite Handball Academy Grounds | ⏰ 6:00 AM - 9:00 AM | All Age Groups</p>
                    </div>
                    <div class="event-status">
                        <a href="<?php echo esc_url( home_url('/join') ); ?>" class="status-tag tag-green-outline" style="text-decoration: none; display: inline-block; padding: 8px 20px; font-weight: 700;">Registration Form</a>
                    </div>
                </div>
                
                <!-- Event 3 -->
                <div class="event-row">
                    <div class="event-date">
                        <span class="date-num text-gold">05</span>
                        <span class="date-month">JUL 2025</span>
                    </div>
                    <div class="event-details">
                        <h4>🏆 State Selection Trials – U-21</h4>
                        <p>📍 Sports Complex, Lucknow | ⏰ 9:00 AM - 5:00 PM | Registered Players Only</p>
                    </div>
                    <div class="event-status">
                        <a href="<?php echo esc_url( home_url('/join') ); ?>" class="status-tag tag-green-outline" style="text-decoration: none; display: inline-block; padding: 8px 20px; font-weight: 700;">Registration Form</a>
                    </div>
                </div>
                
                <!-- Event 4 -->
                <div class="event-row">
                    <div class="event-date">
                        <span class="date-num text-gold">18</span>
                        <span class="date-month">JUL 2025</span>
                    </div>
                    <div class="event-details">
                        <h4>🎓 Annual Prize Distribution Ceremony</h4>
                        <p>📍 Academy Auditorium | ⏰ 4:00 PM onwards | All Students & Parents</p>
                    </div>
                    <div class="event-status">
                        <a href="<?php echo esc_url( home_url('/join') ); ?>" class="status-tag tag-green-outline" style="text-decoration: none; display: inline-block; padding: 8px 20px; font-weight: 700;">Registration Form</a>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- Section 5: Meet The Coaches -->
    <section class="section dark-section">
        <div class="center-header">
            <span class="gold-subtitle-center">OUR TEAM</span>
            <h2 class="section-title-center">MEET THE <span class="gold-text">COACHES</span></h2>
            <div class="title-divider-gold-center"></div>
            <p class="center-desc">World-class mentors, certified trainers, and former champions — dedicated to shaping your game and your future.</p>
        </div>
        
        <div class="grid-4 coach-grid">
            <?php
            $coaches_query = new WP_Query( array(
                'post_type'      => 'coach',
                'posts_per_page' => 4,
            ) );

            if ( $coaches_query->have_posts() ) :
                $color_classes = array( 'circle-gold', 'circle-red', 'circle-yellow', 'circle-green' );
                $i = 0;
                while ( $coaches_query->have_posts() ) : $coaches_query->the_post();
                    $role = get_post_meta( get_the_ID(), 'coach_role', true );
                    $experience = get_post_meta( get_the_ID(), 'coach_experience', true );
                    $championships = get_post_meta( get_the_ID(), 'coach_championships', true );
                    $certification = get_post_meta( get_the_ID(), 'coach_certification', true );
                    
                    $color_class = $color_classes[ $i % 4 ];
                    $i++;
                    
                    $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) ?: 'https://i.pravatar.cc/150?img=' . (10 + $i);
                    ?>
                    <!-- Coach Card -->
                    <div class="coach-dark-card">
                        <div class="coach-circle <?php echo esc_attr( $color_class ); ?>">
                            <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php the_title_attribute(); ?>" class="coach-img">
                        </div>
                        <div class="coach-info">
                            <h3><?php the_title(); ?></h3>
                            <span class="coach-role"><?php echo esc_html( $role ?: 'COACH' ); ?></span>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="coach-stats">
                            <div class="stat-col">
                                <h4><?php echo esc_html( $experience ?: '0' ); ?></h4>
                                <span>YRS COACHING</span>
                            </div>
                            <div class="stat-col">
                                <h4><?php echo esc_html( $championships ?: '0' ); ?></h4>
                                <span>STATE CHAMPION</span>
                            </div>
                            <div class="stat-col">
                                <h4><?php echo esc_html( $certification ?: 'L1' ); ?></h4>
                                <span>HAI CERTIFIED</span>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Static Fallback
                ?>
                <!-- Coach 1 -->
                <div class="coach-dark-card">
                    <div class="coach-circle circle-gold">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Rajesh Kumar" class="coach-img">
                    </div>
                    <div class="coach-info">
                        <h3>Rajesh Kumar</h3>
                        <span class="coach-role">HEAD COACH & DIRECTOR</span>
                        <p>Former Indian National Team player with 14 years of coaching experience. Three-time State Championship winning coach and HAI certified Level 3 trainer.</p>
                    </div>
                    <div class="coach-stats">
                        <div class="stat-col">
                            <h4>14</h4>
                            <span>YRS COACHING</span>
                        </div>
                        <div class="stat-col">
                            <h4>3×</h4>
                            <span>STATE CHAMPION</span>
                        </div>
                        <div class="stat-col">
                            <h4>L3</h4>
                            <span>HAI CERTIFIED</span>
                        </div>
                    </div>
                </div>
                
                <!-- Coach 2 -->
                <div class="coach-dark-card">
                    <div class="coach-circle circle-red">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Priya Sharma" class="coach-img">
                    </div>
                    <div class="coach-info">
                        <h3>Priya Sharma</h3>
                        <span class="coach-role">WOMEN'S TEAM HEAD COACH</span>
                        <p>National-level women's handball champion. Specialises in tactical formations and has led our women's squad to 5 consecutive state titles.</p>
                    </div>
                    <div class="coach-stats">
                        <div class="stat-col">
                            <h4>10</h4>
                            <span>YRS COACHING</span>
                        </div>
                        <div class="stat-col">
                            <h4>5×</h4>
                            <span>STATE TITLES</span>
                        </div>
                        <div class="stat-col">
                            <h4>200+</h4>
                            <span>PLAYERS</span>
                        </div>
                    </div>
                </div>
                
                <!-- Coach 3 -->
                <div class="coach-dark-card">
                    <div class="coach-circle circle-yellow">
                        <img src="https://i.pravatar.cc/150?img=12" alt="Amit Singh" class="coach-img">
                    </div>
                    <div class="coach-info">
                        <h3>Amit Singh</h3>
                        <span class="coach-role">FITNESS & CONDITIONING COACH</span>
                        <p>BSc Sports Science, certified strength & conditioning specialist. Develops explosive athleticism and injury-prevention protocols for all age groups.</p>
                    </div>
                    <div class="coach-stats">
                        <div class="stat-col">
                            <h4>8</h4>
                            <span>YRS EXPERIENCE</span>
                        </div>
                        <div class="stat-col">
                            <h4>NSCA</h4>
                            <span>CERTIFIED</span>
                        </div>
                        <div class="stat-col">
                            <h4>0</h4>
                            <span>INJURIES</span>
                        </div>
                    </div>
                </div>
                
                <!-- Coach 4 -->
                <div class="coach-dark-card">
                    <div class="coach-circle circle-green">
                        <img src="https://i.pravatar.cc/150?img=8" alt="Vikram Thakur" class="coach-img">
                    </div>
                    <div class="coach-info">
                        <h3>Vikram Thakur</h3>
                        <span class="coach-role">GOALKEEPER SPECIALIST</span>
                        <p>Former state champion goalkeeper with 6 years dedicated to developing elite goalkeepers. Known for intense reflex and positioning methodology.</p>
                    </div>
                    <div class="coach-stats">
                        <div class="stat-col">
                            <h4>6</h4>
                            <span>YRS SPECIALTY</span>
                        </div>
                        <div class="stat-col">
                            <h4>40+</h4>
                            <span>GOALKEEPERS</span>
                        </div>
                        <div class="stat-col">
                            <h4>L2</h4>
                            <span>CERTIFIED</span>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- Section 6: Photo Gallery (Moments) -->
    <section class="light-section">
        <div class="center-header">
            <span class="gold-subtitle-center">MOMENTS</span>
            <h2 class="section-title-center">PHOTO <span class="gold-text">GALLERY</span></h2>
            <div class="title-divider-gold-center"></div>
            <a href="<?php echo esc_url( home_url('/gallery') ); ?>" class="btn-outline-white" style="color: #0f172a; border-color: #0f172a; margin-top: 15px; display: inline-block;">VIEW ALL PHOTOS</a>
        </div>

        <div class="bento-gallery">
            <div class="bento-item item-1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" alt="Match Action" class="bento-bg-img">
                <div class="bento-overlay"></div>
                <div class="bento-content">
                    <span>MATCH ACTION</span>
                </div>
            </div>
            <div class="bento-item item-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="Training Session" class="bento-bg-img">
                <div class="bento-overlay"></div>
                <div class="bento-content">
                    <span>TRAINING SESSION</span>
                </div>
            </div>
            <div class="bento-item item-3">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" alt="Trophy Ceremony" class="bento-bg-img">
                <div class="bento-overlay"></div>
                <div class="bento-content">
                    <span>TROPHY CEREMONY</span>
                </div>
            </div>
            <div class="bento-item item-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" alt="Award Night" class="bento-bg-img">
                <div class="bento-overlay"></div>
                <div class="bento-content">
                    <span>AWARD NIGHT</span>
                </div>
            </div>
            <div class="bento-item item-5">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" alt="Team Photo" class="bento-bg-img">
                <div class="bento-overlay"></div>
                <div class="bento-content">
                    <span>TEAM PHOTO</span>
                </div>
            </div>
            <div class="bento-item item-6">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" alt="Shooting Drill" class="bento-bg-img">
                <div class="bento-overlay"></div>
                <div class="bento-content">
                    <span>SHOOTING DRILL</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="dark-section-alt">
        <div class="center-header">
            <span class="gold-subtitle-center">WHAT THEY SAY</span>
            <h2 class="section-title-center">TESTIMONIALS</h2>
            <div class="title-divider-gold-center"></div>
        </div>

        <div class="testimonial-carousel-wrapper">
            <button class="carousel-btn prev-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
            
            <div class="testimonial-carousel" id="testimonialSlider">
                <?php
                $testimonials_query = new WP_Query( array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 10,
                ) );

                if ( $testimonials_query->have_posts() ) :
                    $i = 0;
                    $colors = array( 'circle-bg-yellow', 'circle-bg-green', 'circle-bg-red' );
                    while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                        $role = get_post_meta( get_the_ID(), 'testimonial_role', true );
                        $title = get_the_title();
                        // compute initials
                        $words = explode( ' ', $title );
                        $initials = '';
                        foreach ( $words as $w ) {
                            $initials .= isset($w[0]) ? strtoupper( $w[0] ) : '';
                        }
                        $initials = substr( $initials, 0, 2 );
                        if ( empty($initials) ) $initials = 'PP';

                        $color_class = $colors[ $i % 3 ];
                        $i++;
                        ?>
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="author-circle <?php echo esc_attr( $color_class ); ?>"><?php echo esc_html( $initials ); ?></div>
                                <div class="author-info">
                                    <h5 class="text-gold"><?php the_title(); ?></h5>
                                    <span><?php echo esc_html( $role ?: 'Player' ); ?></span>
                                </div>
                            </div>
                            <p>"<?php echo esc_html( get_the_content() ); ?>"</p>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Static Fallback
                    ?>
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="author-circle circle-bg-yellow">PP</div>
                            <div class="author-info">
                                <h5 class="text-gold">Priya Patel</h5>
                                <span>State Level Player</span>
                            </div>
                        </div>
                        <p>"Joining Shyama Handball Academy was the best decision of my career. The advanced tactical training prepared me perfectly for the national tournaments."</p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="author-circle circle-bg-green">RS</div>
                            <div class="author-info">
                                <h5 class="text-gold">Rahul Sharma</h5>
                                <span>School Team Captain</span>
                            </div>
                        </div>
                        <p>"The coaches focus on both physical endurance and mental toughness. This academy has not only made me a better player but also a disciplined student."</p>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="author-circle circle-bg-red">AK</div>
                            <div class="author-info">
                                <h5 class="text-gold">Arjun Kaushik</h5>
                                <span>State U-21 Player</span>
                            </div>
                        </div>
                        <p>"Within 18 months I went from a school-level player to representing the state. Coach Rajesh's methods are unlike anything I've experienced."</p>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="author-circle circle-bg-yellow">MM</div>
                            <div class="author-info">
                                <h5 class="text-gold">Meena Mishra</h5>
                                <span>Parent of U-14 Athlete</span>
                            </div>
                        </div>
                        <p>"As a parent I was worried about my daughter's time, but the discipline and confidence she has gained here is priceless. The coaches genuinely care."</p>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="author-circle circle-bg-green">SP</div>
                            <div class="author-info">
                                <h5 class="text-gold">Suresh Pandey</h5>
                                <span>Elite Squad</span>
                            </div>
                        </div>
                        <p>"The video analysis sessions alone are worth the fee. I never understood my own weaknesses until I saw myself on screen. Highly recommended!"</p>
                    </div>
                <?php
                endif;
                ?>
            </div>
            
            <button class="carousel-btn next-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
        </div>
        
        <!-- Testimonial Slider Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const slider = document.getElementById('testimonialSlider');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                if(slider && prevBtn && nextBtn) {
                    const getScrollAmount = () => {
                        return slider.children.length > 0 ? slider.children[0].offsetWidth + 30 : 400;
                    };
                    
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
                    });
                    
                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
                    });
                    
                    let autoSlideInterval;
                    const startAutoSlide = () => {
                        autoSlideInterval = setInterval(() => {
                            if(slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 10) {
                                slider.scrollTo({ left: 0, behavior: 'smooth' });
                            } else {
                                slider.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
                            }
                        }, 3000);
                    };
                    
                    const stopAutoSlide = () => clearInterval(autoSlideInterval);
                    startAutoSlide();
                    slider.addEventListener('mouseenter', stopAutoSlide);
                    slider.addEventListener('mouseleave', startAutoSlide);
                    slider.addEventListener('touchstart', stopAutoSlide);
                    slider.addEventListener('touchend', startAutoSlide);
                }
            });
        </script>
    </section>

    <!-- Section: Sponsors & Partners -->
    <section class="light-section" style="padding-bottom: 120px;">
        <div class="center-header">
            <span class="gold-subtitle-center">OUR PARTNERS</span>
            <h2 class="section-title-center">SPONSORS <span class="gold-text">& PARTNERS</span></h2>
            <div class="title-divider-gold-center"></div>
            <p class="center-desc">Proud to partner with organisations that share our commitment to sporting excellence and youth development.</p>
        </div>

        <div class="sponsors-ticker-container">
            <div class="sponsors-ticker-wrapper">
                <div class="sponsors-ticker-track">
                    <?php
                    $sponsors_query = new WP_Query( array(
                        'post_type'      => 'sponsor',
                        'posts_per_page' => 20,
                    ) );

                    if ( $sponsors_query->have_posts() ) :
                        while ( $sponsors_query->have_posts() ) : $sponsors_query->the_post();
                            $logo_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                            if ( $logo_url ) :
                                ?>
                                <div class="sponsor-ticker-item"><img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php the_title_attribute(); ?>"></div>
                                <?php
                            endif;
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Static Fallback
                        ?>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_1.png" alt="SPORTLINE"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_2.png" alt="ARYA SPORTS"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_3.png" alt="FITPRO"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_4.png" alt="KRAFT INDIA"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_5.png" alt="SAI"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_6.png" alt="YOUTH FOUNDATION"></div>
                        <!-- Duplicate for infinite scrolling -->
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_1.png" alt="SPORTLINE"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_2.png" alt="ARYA SPORTS"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_3.png" alt="FITPRO"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_4.png" alt="KRAFT INDIA"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_5.png" alt="SAI"></div>
                        <div class="sponsor-ticker-item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Logo/Sponsors/sponsor_6.png" alt="YOUTH FOUNDATION"></div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <p style="color: #94a3b8; font-size: 0.9rem;">Interested in sponsoring? <a href="<?php echo esc_url( home_url('/contact') ); ?>" style="color: #f59e0b; text-decoration: none; font-weight: 600;">Get in touch &rarr;</a></p>
        </div>
    </section>

<?php
get_footer();
?>

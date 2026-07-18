<?php
/**
 * Template Name: Gallery Page
 */
get_header();
?>

<style>
/* Custom style overrides for Gallery page */
:root {
  --red: #0f172a;
  --red-light: #3b82f6;
  --red-glow: rgba(15,23,42,0.1);
  --gold: #f59e0b;
  --gold-light: #fbbf24;
  --dark: #f7f8fc;
  --dark2: #e2e8f0;
  --dark3: #ffffff;
  --surface: #ffffff;
  --surface2: #f1f5f9;
  --border: rgba(0,0,0,0.1);
  --border2: rgba(0,0,0,0.15);
  --text: #0f172a;
  --muted: #475569;
  --dim: #64748b;
  --r:14px;
  --rlg:20px;
}

.hero-gallery {
  position:relative;min-height:380px;display:flex;align-items:center;justify-content:center;flex-direction:column;text-align:center;
  padding:80px 24px 64px;overflow:hidden;
  background:var(--dark2);
  border-bottom:1px solid var(--border);
}
.hero-bg {
  position:absolute;inset:0;
  background:
    radial-gradient(ellipse 60% 50% at 20% 50%, rgba(200,16,46,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 40% 60% at 80% 30%, rgba(212,160,23,0.07) 0%, transparent 60%);
}
.hero-grid {
  position:absolute;inset:0;
  background-image:linear-gradient(var(--border) 1px,transparent 1px),linear-gradient(90deg,var(--border) 1px,transparent 1px);
  background-size:60px 60px;
  mask-image:radial-gradient(ellipse 80% 80% at 50% 50%,black 30%,transparent 100%);
}
.hero-eyebrow {
  position:relative;
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(200,16,46,0.1);border:1px solid rgba(200,16,46,0.3);
  border-radius:999px;padding:6px 18px;
  font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:var(--red-light);
  margin-bottom:22px;
  animation:fadeUp .5s ease both;
}
.hero-title {
  position:relative;
  font-family:'Bebas Neue',sans-serif;
  font-size:clamp(56px,9vw,108px);letter-spacing:0.03em;line-height:.92;
  animation:fadeUp .55s .1s ease both;
}
.hero-title em{color:var(--red);font-style:normal}
.hero-rule {
  position:relative;
  width:60px;height:3px;margin:20px auto;
  background:linear-gradient(90deg,var(--red),var(--gold));border-radius:2px;
  animation:fadeUp .5s .2s ease both;
}
.hero-desc {
  position:relative;max-width:520px;margin:0 auto;
  font-size:15px;color:var(--muted);line-height:1.75;
  animation:fadeUp .55s .25s ease both;
}

/* ─── NAV TABS ─── */
.nav-sticky {
  position:sticky;top:0;z-index:100;
  background:rgba(255,255,255,.92);backdrop-filter:blur(16px);
  border-bottom:1px solid var(--border);
}
.nav-inner {
  max-width:1120px;margin:0 auto;padding:0 24px;
  display:flex;align-items:center;gap:4px;overflow-x:auto;
  scrollbar-width:none;
}
.nav-inner::-webkit-scrollbar{display:none}
.tab {
  flex-shrink:0;display:flex;align-items:center;gap:8px;
  padding:14px 20px;
  font-size:13px;font-weight:500;letter-spacing:0.04em;
  color:var(--muted);border-bottom:2px solid transparent;
  cursor:pointer;white-space:nowrap;
  transition:color .2s,border-color .2s;
  background:none;border-top:none;border-left:none;border-right:none;
  font-family:'DM Sans',sans-serif;
}
.tab i{font-size:17px}
.tab:hover{color:var(--text)}
.tab.active{color:var(--text);border-bottom-color:var(--red)}

/* ─── CONTAINER ─── */
.wrap {max-width:1120px;margin:0 auto;padding:0 24px}

/* ─── SECTION ─── */
.section {padding:72px 0;display:none;border-bottom:1px solid rgba(255,255,255,0.05); margin-bottom: 20px;}
.section.active {display:block}

.sec-header{margin-bottom:48px}
.sec-eyebrow {
  display:inline-flex;align-items:center;gap:8px;
  font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;
  color:var(--red);margin-bottom:12px;
}
.sec-eyebrow::before{content:'';display:inline-block;width:18px;height:2px;background:var(--red);border-radius:1px}
.sec-title {
  font-family:'Bebas Neue',sans-serif;font-size:clamp(36px,5vw,58px);letter-spacing:0.04em;line-height:1;
  color:var(--text);margin-bottom:10px;
}
.sec-desc{font-size:15px;color:var(--muted);max-width:600px;line-height:1.7}

/* ─── MASONRY GRID ─── */
.masonry {
  columns:3;column-gap:14px;
}
@media(max-width:900px){.masonry{columns:2}}
@media(max-width:560px){.masonry{columns:1}}

.photo-item {
  break-inside:avoid;margin-bottom:14px;
  position:relative;border-radius:var(--r);overflow:hidden;cursor:pointer;
  background:var(--surface);
}
.photo-item img {
  width:100%;display:block;
  transition:transform .5s cubic-bezier(.25,.46,.45,.94);
  object-fit:cover;
}
.photo-item:hover img{transform:scale(1.06)}
.photo-overlay {
  position:absolute;inset:0;
  background:linear-gradient(0deg,rgba(0,0,0,.75) 0%,transparent 55%);
  opacity:0;transition:opacity .3s;
  display:flex;align-items:flex-end;
  padding:18px 16px;
}
.photo-item:hover .photo-overlay{opacity:1}
.photo-caption{font-size:13px;font-weight:500;color:#fff;line-height:1.4}
.photo-tag {
  display:inline-block;margin-bottom:6px;
  background:var(--red);color:#fff;
  font-size:10px;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;
  padding:3px 9px;border-radius:4px;
}
.photo-zoom {
  position:absolute;top:12px;right:12px;
  width:32px;height:32px;border-radius:8px;
  background:rgba(0,0,0,.5);backdrop-filter:blur(6px);
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:16px;
  opacity:0;transition:opacity .3s;
}
.photo-item:hover .photo-zoom{opacity:1}

.ph {width:100%;display:block}

/* ─── TOURNAMENT GRID ─── */
.tour-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
  gap:20px;
}
.tour-card {
  position:relative;border-radius:var(--rlg);overflow:hidden;cursor:pointer;
  background:var(--surface);
  border:1px solid var(--border);
  transition:border-color .25s,transform .25s;
}
.tour-card:hover{border-color:rgba(200,16,46,.35);transform:translateY(-4px)}
.tour-img{position:relative;overflow:hidden}
.tour-img .ph{height:220px;object-fit:cover;transition:transform .5s}
.tour-card:hover .tour-img .ph{transform:scale(1.05)}
.tour-badge {
  position:absolute;top:14px;left:14px;
  background:var(--red);color:#fff;
  font-size:10px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;
  padding:5px 12px;border-radius:20px;z-index:2;
}
.tour-body {padding:22px}
.tour-body h3{font-size:16px;font-weight:600;color:var(--text);margin-bottom:8px;line-height:1.4}
.tour-body p{font-size:12.5px;color:var(--muted);line-height:1.6}
.tour-meta {
  display:flex;align-items:center;gap:12px;
  margin-top:16px;padding-top:14px;
  border-top:1px solid var(--border);
  font-size:11px;color:var(--dim);
}
.tour-meta i{font-size:14px;color:var(--red-light)}

/* ─── VIDEOS GRID ─── */
.video-grid {
  display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:24px;
}
.video-card {
  background:var(--surface);border:1px solid var(--border);border-radius:var(--rlg);
  overflow:hidden;cursor:pointer;box-shadow:0 4px 12px rgba(15,23,42,0.02);
  transition:border-color .25s,transform .25s;
}
.video-card:hover{border-color:rgba(200,16,46,.25);transform:translateY(-4px)}
.video-thumb {position:relative;overflow:hidden}
.video-thumb .ph{height:200px;object-fit:cover}
.play-btn {
  position:absolute;inset:0;margin:auto;
  width:56px;height:56px;border-radius:50%;
  background:rgba(255,255,255,.9);backdrop-filter:blur(4px);
  display:flex;align-items:center;justify-content:center;
  color:var(--red);font-size:22px;box-shadow:0 8px 24px rgba(0,0,0,.15);
  transition:transform .2s,background .2s;
}
.video-card:hover .play-btn{transform:scale(1.1);background:#fff}
.video-duration {
  position:absolute;bottom:12px;right:12px;
  background:rgba(0,0,0,.7);color:#fff;
  font-size:11px;font-weight:600;padding:3px 8px;border-radius:4px;
}
.video-body {padding:20px}
.video-body h3{font-size:15px;font-weight:600;color:var(--text);margin-bottom:8px;line-height:1.4}
.video-body p{font-size:12.5px;color:var(--muted);line-height:1.6}
.video-meta {
  display:flex;align-items:center;gap:12px;margin-top:16px;
  font-size:11px;color:var(--dim);
}
.video-meta i{font-size:14px;color:var(--dim)}
.yt-badge {
  display:inline-flex;align-items:center;gap:4px;
  background:#fee2e2;color:#b91c1c;
  font-size:10px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;
  padding:3px 10px;border-radius:4px;margin-left:auto;
}

/* ─── AWARDS ─── */
.award-hero {
  display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px;
}
@media(max-width:700px){.award-hero{grid-template-columns:1fr}}
.award-featured {
  position:relative;border-radius:var(--rlg);overflow:hidden;cursor:pointer;
  background:var(--surface);border:1px solid var(--border);
  transition:border-color .25s;
}
.award-featured:hover{border-color:rgba(212,160,23,.4)}
.award-featured .ph{height:340px;object-fit:cover;transition:transform .5s}
.award-featured:hover .ph{transform:scale(1.04)}
.award-feat-overlay {
  position:absolute;inset:0;
  background:linear-gradient(0deg,rgba(0,0,0,.8) 0%,transparent 50%);
  padding:24px;display:flex;flex-direction:column;justify-content:flex-end;
}
.gold-badge {
  display:inline-flex;align-items:center;gap:6px;
  background:rgba(212,160,23,.15);border:1px solid rgba(212,160,23,.4);
  color:var(--gold-light);font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;
  padding:5px 12px;border-radius:6px;margin-bottom:10px;width:fit-content;
}
.award-feat-title{font-size:20px;font-weight:600;color:#fff;margin-bottom:6px}
.award-feat-sub{font-size:13px;color:rgba(255,255,255,.6)}

.awards-list{display:flex;flex-direction:column;gap:14px}
.award-item {
  display:flex;gap:16px;align-items:center;
  background:var(--surface);border:1px solid var(--border);border-radius:var(--r);
  padding:16px 18px;cursor:pointer;
  transition:border-color .2s,transform .2s;
}
.award-item:hover{border-color:rgba(212,160,23,.3);transform:translateX(4px)}
.award-thumb {
  flex-shrink:0;width:72px;height:72px;border-radius:10px;overflow:hidden;
}
.award-thumb .ph{width:100%;height:100%;object-fit:cover}
.award-info h4{font-size:14px;font-weight:600;color:var(--text);margin-bottom:4px}
.award-info p{font-size:12px;color:var(--muted);line-height:1.5}
.award-trophy {
  margin-left:auto;flex-shrink:0;
  width:36px;height:36px;border-radius:8px;
  background:rgba(212,160,23,.1);
  display:flex;align-items:center;justify-content:center;
  color:var(--gold);font-size:18px;
}

.awards-row2 {
  display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:14px;margin-top:20px;
}
.award-small {
  position:relative;border-radius:var(--r);overflow:hidden;cursor:pointer;
  background:var(--surface);border:1px solid var(--border);
  transition:border-color .2s,transform .2s;
}
.award-small:hover{border-color:rgba(212,160,23,.3);transform:translateY(-3px)}
.award-small .ph{height:160px;object-fit:cover;transition:transform .5s}
.award-small:hover .ph{transform:scale(1.05)}
.award-small-body { padding: 16px; }
.award-small-body h4{font-size:13px;font-weight:600;color:var(--text);margin-bottom:3px}
.award-small-body p{font-size:11px;color:var(--muted)}

/* ─── STATS BAR ─── */
.stats-bar {
  background:var(--surface);border:1px solid var(--border);border-radius:var(--rlg);
  display:grid;grid-template-columns:repeat(4,1fr);
  margin-bottom:56px;overflow:hidden;
}
@media(max-width:640px){.stats-bar{grid-template-columns:repeat(2,1fr)}}
.stat-cell {
  padding:24px 20px;text-align:center;
  border-right:1px solid var(--border);
}
.stat-cell:last-child{border-right:none}
.stat-num {
  font-family:'Bebas Neue',sans-serif;font-size:42px;letter-spacing:.04em;
  color:var(--text);line-height:1;margin-bottom:4px;
}
.stat-num span{color:var(--red)}
.stat-lbl{font-size:11px;font-weight:500;letter-spacing:.08em;text-transform:uppercase;color:var(--muted)}

/* ─── LIGHTBOX ─── */
.lightbox {
  position:fixed;inset:0;z-index:1000;
  background:rgba(0,0,0,.95);backdrop-filter:blur(8px);
  display:flex;align-items:center;justify-content:center;
  opacity:0;pointer-events:none;transition:opacity .3s;
  padding:24px;
}
.lightbox.open{opacity:1;pointer-events:all}
.lb-inner {
  position:relative;max-width:860px;width:100%;
  animation:lbIn .3s ease;
}
@keyframes lbIn{from{transform:scale(.93);opacity:0}to{transform:scale(1);opacity:1}}
.lb-img{width:100%;border-radius:var(--r);display:block;max-height:75vh;object-fit:contain}
.lb-caption {
  margin-top:16px;text-align:center;
  font-family:'Playfair Display',serif;font-size:17px;color:#fff;font-style:italic;
}
.lb-close {
  position:absolute;top:-16px;right:-16px;
  width:40px;height:40px;border-radius:50%;
  background:var(--surface);border:1px solid var(--border);
  display:flex;align-items:center;justify-content:center;
  cursor:pointer;color:var(--text);font-size:20px;
  transition:background .2s;
  z-index: 1010;
}
.lb-close:hover{background:var(--red); color:#fff;}
.img-wrap{width:100%;overflow:hidden;display:block}
</style>

<!-- Hero Banner -->
<section class="hero-slider-section" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center; background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/gallery_hero.png') top center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(11, 17, 32, 0.6), rgba(11, 17, 32, 0.9));"></div>
    <div style="position: relative; z-index: 10; text-align: center; padding: 0 20px;">
        <h1 style="color: #fff; font-size: 3.5rem; font-weight: 900; margin-bottom: 15px; letter-spacing: 2px;">PHOTO <span class="gold-text">GALLERY</span></h1>
        <div style="width: 100px; height: 4px; background: #f59e0b; margin: 0 auto 20px;"></div>
        <p style="color: #e2e8f0; font-size: 1.2rem; max-width: 700px; margin: 0 auto; line-height: 1.6;">Every photograph, every clip &mdash; a testament to the sweat, spirit, and skill forged on the courts of Shyama Handball Academy.</p>
    </div>
</section>

<div style="background: var(--dark);">

<!-- STICKY TABS -->
<nav class="nav-sticky">
  <div class="nav-inner">
    <button class="tab active" onclick="switchTab(this,'training')"><i class="ti ti-barbell"></i>Training</button>
    <button class="tab" onclick="switchTab(this,'videos')"><i class="ti ti-video"></i>Videos</button>
    <button class="tab" onclick="switchTab(this,'awards')"><i class="ti ti-award"></i>Awards</button>
  </div>
</nav>

<!-- TRAINING SECTION -->
<section class="section active" id="training" aria-label="Training Photos">
<div class="wrap">

  <div class="sec-header">
    <div class="sec-eyebrow">Training Photos</div>
    <h2 class="sec-title">Where Champions<br>Are Forged</h2>
    <p class="sec-desc">From the very first drill to the last sprint of the day — our training sessions capture dedication, discipline, and the relentless pursuit of excellence.</p>
  </div>

  <!-- Stats -->
  <div class="stats-bar">
    <div class="stat-cell"><div class="stat-num" data-target="6">0<span>+</span></div><div class="stat-lbl">Hours Daily</div></div>
    <div class="stat-cell"><div class="stat-num" data-target="120">0<span>+</span></div><div class="stat-lbl">Active Players</div></div>
    <div class="stat-cell"><div class="stat-num" data-target="5">0</div><div class="stat-lbl">Head Coaches</div></div>
    <div class="stat-cell"><div class="stat-num" data-target="8">0<span>+</span></div><div class="stat-lbl">Years of Training</div></div>
  </div>

  <div class="masonry" id="training-grid">
    <!-- Row 1 -->
    <div class="photo-item" onclick="openLb(this, 'image', 'Morning warm-up drills — building agility and court awareness from day one.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" class="ph" alt="Morning Drills" style="height: 280px;" />
      <div class="photo-overlay">
        <div>
          <div class="photo-tag">Drills</div>
          <div class="photo-caption">Morning warm-up drills — building agility and court awareness from day one.</div>
        </div>
      </div>
      <div class="photo-zoom"><i class="ti ti-zoom-in" aria-hidden="true"></i></div>
    </div>

    <div class="photo-item" onclick="openLb(this, 'image', 'Goalkeeping technique session — precision, reflexes, and wall-like defence.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" class="ph" alt="Goalkeeper Training" style="height: 340px;" />
      <div class="photo-overlay">
        <div>
          <div class="photo-tag">Defence</div>
          <div class="photo-caption">Goalkeeping technique session — precision, reflexes, and wall-like defence.</div>
        </div>
      </div>
      <div class="photo-zoom"><i class="ti ti-zoom-in" aria-hidden="true"></i></div>
    </div>

    <div class="photo-item" onclick="openLb(this, 'image', 'Throwing technique clinic — mastering power and accuracy under pressure.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" class="ph" alt="Throwing Technique" style="height: 260px;" />
      <div class="photo-overlay">
        <div>
          <div class="photo-tag">Attack</div>
          <div class="photo-caption">Throwing technique clinic — mastering power and accuracy under pressure.</div>
        </div>
      </div>
      <div class="photo-zoom"><i class="ti ti-zoom-in" aria-hidden="true"></i></div>
    </div>

    <div class="photo-item" onclick="openLb(this, 'image', 'Strategy briefing — coaches mapping out tactical movements with the squad.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png" class="ph" alt="Strategy Session" style="height: 220px;" />
      <div class="photo-overlay">
        <div>
          <div class="photo-tag">Tactics</div>
          <div class="photo-caption">Strategy briefing — coaches mapping out tactical movements with the squad.</div>
        </div>
      </div>
      <div class="photo-zoom"><i class="ti ti-zoom-in" aria-hidden="true"></i></div>
    </div>
  </div>
</div>
</section>

<!-- VIDEOS SECTION -->
<section class="section" id="videos" aria-label="Videos">
<div class="wrap">
  <div class="sec-header">
    <div class="sec-eyebrow">Videos</div>
    <h2 class="sec-title">Action In Motion —<br>Watch & Learn</h2>
    <p class="sec-desc">Relive the greatest moments, study the finest techniques, and follow the journey of our players through our growing video library.</p>
  </div>

  <div class="video-grid">
    <div class="video-card" onclick="openLb(this, 'video', 'Match Highlights — Eastern UP Finals 2023')">
      <div class="video-thumb">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/coaches_hero.png" class="ph" />
        <div class="play-btn" aria-label="Play video"><i class="ti ti-player-play" aria-hidden="true"></i></div>
        <div class="video-duration">4:32</div>
      </div>
      <div class="video-body">
        <h3>Match Highlights — Eastern UP Finals 2023</h3>
        <p>Shyama Academy vs Kashi Sports Club — a breathtaking 7-goal performance in the regional final.</p>
        <div class="video-meta">
          <i class="ti ti-eye" aria-hidden="true"></i> 2.4k views
          <i class="ti ti-calendar" aria-hidden="true"></i> Oct 2023
          <span class="yt-badge"><i class="ti ti-brand-youtube" aria-hidden="true"></i> YouTube</span>
        </div>
      </div>
    </div>

    <div class="video-card" onclick="openLb(this, 'video', 'Coaching Masterclass — Advanced Techniques')">
      <div class="video-thumb">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png" class="ph" />
        <div class="play-btn" aria-label="Play video"><i class="ti ti-player-play" aria-hidden="true"></i></div>
        <div class="video-duration">12:18</div>
      </div>
      <div class="video-body">
        <h3>Coaching Masterclass — Advanced Techniques</h3>
        <p>Coach demonstrates advanced throwing mechanics and footwork patterns for competitive-level players.</p>
        <div class="video-meta">
          <i class="ti ti-eye" aria-hidden="true"></i> 1.1k views
          <i class="ti ti-calendar" aria-hidden="true"></i> Jan 2024
          <span class="yt-badge"><i class="ti ti-brand-youtube" aria-hidden="true"></i> YouTube</span>
        </div>
      </div>
    </div>

    <div class="video-card" onclick="openLb(this, 'video', 'Selection Trial Documentary 2024')">
      <div class="video-thumb">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" class="ph" />
        <div class="play-btn" aria-label="Play video"><i class="ti ti-player-play" aria-hidden="true"></i></div>
        <div class="video-duration">22:05</div>
      </div>
      <div class="video-body">
        <h3>Selection Trial Documentary 2024</h3>
        <p>An intimate look at the grit behind the journey — our juniors facing UP selection trials for national qualification.</p>
        <div class="video-meta">
          <i class="ti ti-eye" aria-hidden="true"></i> 3.8k views
          <i class="ti ti-calendar" aria-hidden="true"></i> Apr 2024
          <span class="yt-badge"><i class="ti ti-brand-youtube" aria-hidden="true"></i> YouTube</span>
        </div>
      </div>
    </div>

    <div class="video-card" onclick="openLb(this, 'video', 'Annual Day Ceremony 2023 — Full Event')">
      <div class="video-thumb">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" class="ph" />
        <div class="play-btn" aria-label="Play video"><i class="ti ti-player-play" aria-hidden="true"></i></div>
        <div class="video-duration">38:44</div>
      </div>
      <div class="video-body">
        <h3>Annual Day Ceremony 2023 — Full Event</h3>
        <p>Complete coverage of the Annual Day — felicitation of top athletes, inspiring speeches, and cultural performances.</p>
        <div class="video-meta">
          <i class="ti ti-eye" aria-hidden="true"></i> 5.2k views
          <i class="ti ti-calendar" aria-hidden="true"></i> Dec 2023
          <span class="yt-badge"><i class="ti ti-brand-youtube" aria-hidden="true"></i> YouTube</span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- AWARDS SECTION -->
<section class="section" id="awards" aria-label="Award Ceremony">
<div class="wrap">
  <div class="sec-header">
    <div class="sec-eyebrow">Award Ceremony</div>
    <h2 class="sec-title">Celebrating Excellence —<br>Our Hall of Honour</h2>
    <p class="sec-desc">Each award is a milestone etched in the history of Shyama Handball Academy — honouring the players, coaches, and supporters who made it possible.</p>
  </div>

  <div class="stats-bar">
    <div class="stat-cell"><div class="stat-num" data-target="48">0<span>+</span></div><div class="stat-lbl">Awards Given</div></div>
    <div class="stat-cell"><div class="stat-num" data-target="12">0</div><div class="stat-lbl">Best Player Titles</div></div>
    <div class="stat-cell"><div class="stat-num" data-target="6">0</div><div class="stat-lbl">Coaches Felicitated</div></div>
    <div class="stat-cell"><div class="stat-num" data-target="3">0</div><div class="stat-lbl">Annual Ceremonies</div></div>
  </div>

  <!-- Featured + list -->
  <div class="award-hero">
    <div class="award-featured" onclick="openLb(this, 'image', 'Annual Award Ceremony 2023 — Chief Guest felicitating the Best Player of the Year, the highest honour at Shyama Academy.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/players_hero.png" class="ph" />
      <div class="award-feat-overlay">
        <div class="gold-badge"><i class="ti ti-star" aria-hidden="true"></i> Annual Ceremony 2023</div>
        <div class="award-feat-title">Best Player of the Year — Felicitation</div>
        <div class="award-feat-sub">The academy's most prestigious night of recognition and celebration.</div>
      </div>
    </div>

    <div class="awards-list">
      <div class="award-item" onclick="openLb(this, 'image', 'Best Goalkeeper Award 2023 presented by the District Sports Officer — recognising exceptional saves in state competition.')">
        <div class="award-thumb">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/coaches_hero.png" class="ph" />
        </div>
        <div class="award-info">
          <h4>Best Goalkeeper — 2023</h4>
          <p>Presented by District Sports Officer for outstanding saves during the state championship.</p>
        </div>
        <div class="award-trophy"><i class="ti ti-medal" aria-hidden="true"></i></div>
      </div>

      <div class="award-item" onclick="openLb(this, 'image', 'Coach of the Year 2023 — honoring the head coach for transforming young talent into state-level competitors.')">
        <div class="award-thumb">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png" class="ph" />
        </div>
        <div class="award-info">
          <h4>Coach of the Year — 2023</h4>
          <p>Honouring the transformation of 40+ junior players into competitive athletes.</p>
        </div>
        <div class="award-trophy"><i class="ti ti-award" aria-hidden="true"></i></div>
      </div>

      <div class="award-item" onclick="openLb(this, 'image', 'Most Promising Player 2024 — recognizing the junior athlete who showed the most exceptional growth and potential.')">
        <div class="award-thumb">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png" class="ph" />
        </div>
        <div class="award-info">
          <h4>Most Promising Player — 2024</h4>
          <p>Awarded to the junior athlete with the highest growth trajectory in the 2024 batch.</p>
        </div>
        <div class="award-trophy"><i class="ti ti-star" aria-hidden="true"></i></div>
      </div>

      <div class="award-item" onclick="openLb(this, 'image', 'Spirit of Sport Award 2024 — presented to the player who best embodied sportsmanship, teamwork, and integrity.')">
        <div class="award-thumb">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png" class="ph" />
        </div>
        <div class="award-info">
          <h4>Spirit of Sport Award — 2024</h4>
          <p>Recognising the player who best embodied sportsmanship and integrity on and off the court.</p>
        </div>
        <div class="award-trophy"><i class="ti ti-heart" aria-hidden="true"></i></div>
      </div>
    </div>
  </div>

  <!-- Second row of smaller awards -->
  <div class="awards-row2">
    <div class="award-small" onclick="openLb(this, 'image', 'Group photo from Annual Award Night 2022 — the first formal ceremony held by Shyama Academy.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png" class="ph" />
      <div class="award-small-body">
        <h4>Annual Night 2022 — Inaugural</h4>
        <p>The first formal award ceremony in Shyama Academy's history.</p>
      </div>
    </div>

    <div class="award-small" onclick="openLb(this, 'image', 'Chief Guest — District Sports Officer presenting the Championship Shield to the captain of Shyama Academy.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/events_hero.png" class="ph" />
      <div class="award-small-body">
        <h4>Championship Shield Presentation</h4>
        <p>District Sports Officer presenting our historic Zonal Cup.</p>
      </div>
    </div>

    <div class="award-small" onclick="openLb(this, 'image', 'Youngest player to receive an award at Shyama Academy — 12-year-old prodigy felicitated for state selection.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/players_hero.png" class="ph" />
      <div class="award-small-body">
        <h4>Youngest Awardee — 2024</h4>
        <p>12-year-old prodigy felicitated for state selection at junior nationals.</p>
      </div>
    </div>

    <div class="award-small" onclick="openLb(this, 'image', 'Lifetime Achievement Award presented to the founding patron of Shyama Handball Academy for unwavering support since 2016.')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/coaches_hero.png" class="ph" />
      <div class="award-small-body">
        <h4>Lifetime Achievement Award</h4>
        <p>Honoring the founding patron's decade of unwavering support for the academy.</p>
      </div>
    </div>
  </div>
</div>
</section>

</div>

<!-- ─── LIGHTBOX ─── -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Photo viewer" onclick="closeLb(event)">
  <div class="lb-inner">
    <div class="lb-close" onclick="closeLb()" aria-label="Close lightbox" role="button" tabindex="0">
      <i class="ti ti-x" aria-hidden="true"></i>
    </div>
    <div id="lb-content" style="background:transparent; border-radius:var(--r); overflow:hidden; width:100%; display:flex; align-items:center; justify-content:center;">
      Loading…
    </div>
    <p class="lb-caption" id="lb-caption" style="color: #fff; text-align: center; margin-top: 15px; font-family: 'Inter', sans-serif; font-size: 1rem; line-height: 1.5; padding: 0 20px;"></p>
  </div>
</div>

<script>
function switchTab(el, id) {
  document.querySelectorAll('.tab').forEach(t => {t.classList.remove('active');t.setAttribute('aria-selected','false')});
  document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
  el.classList.add('active');
  el.setAttribute('aria-selected','true');
  document.getElementById(id).classList.add('active');
  window.scrollTo({top:0,behavior:'smooth'});
}

function openLb(el, type, caption) {
  let contentHtml = '';
  
  if (type === 'video') {
    contentHtml = '<div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden; width:100%;"><iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/n3c1k8H53Fw?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
  } else {
    let img = el.querySelector('img');
    if (img) {
      contentHtml = '<img src="' + img.src + '" class="lb-img" style="width:100%; display:block; object-fit:contain; max-height:75vh;">';
    } else {
      contentHtml = '<div style="padding: 40px; color:#fff;">Image not found</div>';
    }
  }

  document.getElementById('lb-content').innerHTML = contentHtml;
  document.getElementById('lb-caption').innerHTML = caption;
  document.getElementById('lightbox').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeLb(e) {
  if (!e || e.target === document.getElementById('lightbox') || e.target.closest('.lb-close')) {
    document.getElementById('lightbox').classList.remove('open');
    document.body.style.overflow = '';
  }
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLb({target: document.getElementById('lightbox')}) });

// Counter Animation Script
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.stat-num');
    const duration = 2000; // ms
    const frameRate = 30; // ms
    const totalFrames = duration / frameRate;

    const animateCounters = (counter) => {
        const target = +counter.getAttribute('data-target');
        if(!target) return; // skip if no target

        const hasPlus = counter.querySelector('span');
        let spanHtml = '';
        if (hasPlus) {
            spanHtml = '<span>' + hasPlus.innerText + '</span>';
        }

        const inc = target / totalFrames;
        let currentCount = 0;

        const updateCount = () => {
            currentCount += inc;
            
            if (currentCount < target) {
                counter.innerHTML = Math.ceil(currentCount) + spanHtml;
                setTimeout(updateCount, frameRate);
            } else {
                counter.innerHTML = target + spanHtml;
            }
        };
        updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        if(counter.hasAttribute('data-target')){
            observer.observe(counter);
        }
    });
});
</script>

<?php
get_footer();
?>

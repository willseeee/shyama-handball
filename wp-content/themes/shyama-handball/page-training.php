<?php
/**
 * Template Name: Training Page
 */
get_header();
?>

<style>
    :root {
      --navy: #0f172a;
      --navy2: #1e293b;
      --gold: #f59e0b;
      --gold2: #d97706;
      --white:  #ffffff;
      --off:    #f7f8fc;
      --muted:  #64748b;
      --border: #e2e8f0;
      --card:   #ffffff;
      --text:   #0f172a;
      --radius: 16px;
      --shadow: 0 4px 24px rgba(7,30,61,0.09);
    }

    /* ─── HERO ────────────────────────────────── */
    .hero {
      background: linear-gradient(135deg, var(--navy) 0%, #0d3060 55%, #112244 100%);
      padding: 5rem 2rem 4rem;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero-ring {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(245,197,24,0.1);
      pointer-events: none;
    }

    .hero-ring-1 { width: 500px; height: 500px; top: -200px; right: -150px; }
    .hero-ring-2 { width: 300px; height: 300px; bottom: -120px; left: -80px; border-color: rgba(245,197,24,0.07); }
    .hero-ring-3 { width: 200px; height: 200px; top: 30px; left: 10%; border-color: rgba(255,255,255,0.05); }

    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(245,197,24,0.12);
      border: 1px solid rgba(245,197,24,0.25);
      border-radius: 30px;
      padding: 6px 18px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 1.4rem;
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-family: 'Syne', sans-serif;
      font-size: clamp(2rem, 5vw, 3.4rem);
      font-weight: 800;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 1rem;
      position: relative;
      z-index: 1;
    }

    .hero h1 em {
      font-style: normal;
      color: var(--gold);
      position: relative;
    }

    .hero-sub {
      font-size: 1.05rem;
      color: rgba(255,255,255,0.68);
      font-weight: 300;
      max-width: 580px;
      margin: 0 auto 2.5rem;
      line-height: 1.7;
      position: relative;
      z-index: 1;
    }

    /* filter pills */
    .filter-bar {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      position: relative;
      z-index: 1;
    }

    .filter-pill {
      padding: 8px 20px;
      border-radius: 30px;
      border: 1px solid rgba(255,255,255,0.2);
      background: rgba(255,255,255,0.07);
      color: rgba(255,255,255,0.75);
      font-size: 13px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.22s;
      font-family: 'Outfit', sans-serif;
    }

    .filter-pill:hover,
    .filter-pill.active {
      background: var(--gold);
      color: var(--navy);
      border-color: var(--gold);
      font-weight: 600;
    }

    /* hero stats strip */
    .hero-stats {
      display: flex;
      justify-content: center;
      gap: 3rem;
      flex-wrap: wrap;
      margin-top: 3rem;
      padding-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      position: relative;
      z-index: 1;
    }

    .hs { text-align: center; }
    .hs-num {
      font-family: 'Syne', sans-serif;
      font-size: 2rem;
      font-weight: 800;
      color: var(--gold);
      display: block;
    }
    .hs-label {
      font-size: 12px;
      color: rgba(255,255,255,0.5);
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-top: 3px;
    }

    /* ─── MAIN WRAPPER ────────────────────────── */
    .main { max-width: 1060px; margin: 0 auto; padding: 3.5rem 1.5rem 5rem; }

    /* section divider label */
    .section-label {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 2rem;
      margin-top: 3.5rem;
    }

    .section-label:first-child { margin-top: 0; }

    .sl-line {
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    .sl-text {
      font-family: 'Syne', sans-serif;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--navy);
      background: var(--off);
      padding: 0 15px;
    }

    /* ─── PROGRAM CARD (1-Col Grid) ───────────── */
    .prog-card {
      display: grid;
      grid-template-columns: 360px 1fr;
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 2rem;
      overflow: hidden;
      transition: transform 0.25s, box-shadow 0.25s;
      animation: fadeUp 0.5s ease both;
    }

    .prog-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 32px rgba(7,30,61,0.13);
    }

    /* Visual Left */
    .prog-visual {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 2.25rem 2rem;
      color: var(--white);
      overflow: hidden;
    }

    .prog-visual-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
      transition: transform 0.35s ease;
    }

    .prog-card:hover .prog-visual-bg { transform: scale(1.04); }

    .prog-visual-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(7,20,41,0.92) 0%, rgba(7,20,41,0.5) 60%, rgba(7,20,41,0.1) 100%);
      z-index: 1;
    }

    .prog-level-badge {
      position: absolute;
      top: 1.5rem;
      left: 1.5rem;
      z-index: 2;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      padding: 5px 12px;
      border-radius: 20px;
    }

    .badge-green { background: #dcfce7; color: #15803d; }
    .badge-orange { background: #ffedd5; color: #c2410c; }
    .badge-blue { background: #dbeafe; color: #1d4ed8; }
    .badge-pink { background: #fce7f3; color: #be185d; }

    .prog-icon-wrap {
      width: 46px; height: 46px;
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 22px;
      color: var(--gold);
      margin-bottom: 1.25rem;
      position: relative;
      z-index: 2;
    }

    .prog-visual-title {
      font-family: 'Syne', sans-serif;
      font-size: 1.55rem;
      font-weight: 800;
      margin-bottom: 4px;
      position: relative;
      z-index: 2;
      line-height: 1.2;
    }

    .prog-visual-sub {
      font-size: 13px;
      color: rgba(255,255,255,0.7);
      position: relative;
      z-index: 2;
      font-weight: 300;
    }

    /* Content Right */
    .prog-content {
      padding: 2.25rem 2.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .prog-desc {
      font-size: 14.5px;
      line-height: 1.65;
      color: #334155;
      margin-bottom: 1.5rem;
    }

    /* Meta Details */
    .prog-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 1.5rem;
    }

    .meta-chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: var(--off);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 5px 12px;
      font-size: 12.5px;
      color: var(--text);
      font-weight: 500;
    }

    .meta-chip i { color: var(--navy2); font-size: 14px; }

    /* highlights */
    .prog-highlights {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px;
      margin-bottom: 1.5rem;
    }

    .hl-item {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      font-size: 13px;
      color: #334155;
      line-height: 1.5;
    }

    .hl-item i {
      font-size: 15px;
      color: #22c55e;
      flex-shrink: 0;
      margin-top: 1px;
    }

    /* CTA row */
    .prog-cta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: auto;
      padding-top: 1rem;
      border-top: 1px solid var(--border);
    }

    .prog-price {
      font-family: 'Syne', sans-serif;
      font-size: 0.9rem;
      font-weight: 700;
      color: var(--muted);
    }

    .prog-price strong {
      font-size: 1.3rem;
      color: var(--navy);
    }

    .btn-enroll {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--navy);
      color: var(--white);
      font-family: 'Outfit', sans-serif;
      font-size: 13.5px;
      font-weight: 600;
      padding: 10px 22px;
      border-radius: 10px;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: background 0.2s, transform 0.15s;
    }

    .btn-enroll:hover { background: var(--navy2); transform: translateY(-1px); }

    .btn-enroll-outline {
      background: transparent;
      color: var(--navy);
      border: 1.5px solid var(--navy);
    }

    .btn-enroll-outline:hover { background: var(--navy); color: var(--white); }

    /* ─── 2-COL GRID (for Boys/Girls) ──────────── */
    .dual-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin-bottom: 1.75rem;
    }

    .dual-card {
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      overflow: hidden;
      transition: transform 0.25s, box-shadow 0.25s;
      animation: fadeUp 0.5s ease both;
    }

    .dual-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 32px rgba(7,30,61,0.12);
    }

    .dual-visual {
      height: 200px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 1.5rem;
      color: var(--white);
    }

    .dual-visual-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
      transition: transform 0.35s ease;
    }

    .dual-card:hover .dual-visual-bg { transform: scale(1.04); }

    .dual-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(7,20,41,0.92) 0%, rgba(7,20,41,0.4) 100%);
      z-index: 1;
    }

    .dual-badge {
      position: absolute;
      top: 1.25rem;
      left: 1.25rem;
      z-index: 2;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      padding: 4px 10px;
      border-radius: 20px;
    }

    .dual-title-wrap { position: relative; z-index: 2; }
    .dual-title { font-family: 'Syne', sans-serif; font-size: 1.4rem; font-weight: 800; line-height: 1.2; margin-bottom: 2px; }
    .dual-sub   { font-size: 12.5px; color: rgba(255,255,255,0.7); font-weight: 300; }

    .dual-body { padding: 1.5rem 1.75rem; }
    .dual-desc { font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 1.25rem; }

    .dual-list { list-style: none; display: flex; flex-direction: column; gap: 8px; }
    .dual-list li { display: flex; align-items: flex-start; gap: 8px; font-size: 13px; color: #334155; }
    .dual-list li i { font-size: 15px; color: #22c55e; flex-shrink: 0; margin-top: 1px; }

    .dual-footer {
      border-top: 1px solid var(--border);
      padding: 1.25rem 1.75rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #fafafb;
    }

    .dual-age { font-size: 12.5px; color: var(--muted); }
    .dual-age strong { color: var(--navy); }

    /* ─── SUMMER CAMP CARD ────────────────────── */
    .summer-card {
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 1.75rem;
      overflow: hidden;
      animation: fadeUp 0.5s ease both;
    }

    .summer-bg {
      background: linear-gradient(135deg, #071e3d 0%, #0d3060 60%, #0c2040 100%);
      padding: 2.5rem 3rem;
      position: relative;
    }

    .summer-deco {
      position: absolute;
      width: 250px; height: 250px;
      border-radius: 50%;
      border: 1px solid rgba(245,197,24,0.06);
      right: -80px; top: -50px;
    }

    .summer-top {
      display: flex;
      justify-content: space-between;
      gap: 2rem;
      border-bottom: 1px solid rgba(255,255,255,0.12);
      padding-bottom: 2rem;
      position: relative;
      z-index: 1;
    }

    .summer-label {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(245,197,24,0.13);
      border: 1px solid rgba(245,197,24,0.22);
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 11px;
      font-weight: 700;
      color: var(--gold);
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-bottom: 1rem;
    }

    .summer-title {
      font-family: 'Syne', sans-serif;
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 8px;
    }

    .summer-title span { color: var(--gold); }

    .summer-desc {
      font-size: 14.5px;
      color: rgba(255,255,255,0.7);
      line-height: 1.75;
      max-width: 460px;
    }

    .summer-dates-box {
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(245,197,24,0.2);
      border-radius: 12px;
      padding: 1.25rem 1.5rem;
      min-width: 210px;
      flex-shrink: 0;
    }

    .summer-dates-box h4 {
      font-family: 'Syne', sans-serif;
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--gold);
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .date-row {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: rgba(255,255,255,0.8);
      margin-bottom: 7px;
    }

    .date-row i { color: var(--gold); font-size: 15px; }

    .summer-features {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      margin-top: 2rem;
      position: relative;
      z-index: 1;
    }

    .sf-item {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      transition: background 0.2s;
    }

    .sf-item:hover { background: rgba(245,197,24,0.1); border-color: rgba(245,197,24,0.25); }

    .sf-item i { font-size: 28px; color: var(--gold); display: block; margin-bottom: 8px; }

    .sf-item span {
      font-size: 12.5px;
      color: rgba(255,255,255,0.75);
      font-weight: 500;
      line-height: 1.4;
    }

    /* ─── FITNESS CARD ────────────────────────── */
    .fitness-card {
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 1.75rem;
      overflow: hidden;
      animation: fadeUp 0.5s ease both;
    }

    .fitness-header {
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy2) 100%);
      padding: 2rem;
      display: flex;
      align-items: center;
      gap: 1.5rem;
      position: relative;
      overflow: hidden;
    }

    .fitness-header::after {
      content: '';
      position: absolute;
      width: 200px; height: 200px;
      border-radius: 50%;
      background: rgba(245,197,24,0.06);
      top: -50px; right: -50px;
    }

    .fitness-icon {
      width: 54px; height: 54px;
      background: rgba(245,197,24,0.12);
      border: 1.5px solid rgba(245,197,24,0.3);
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 26px; color: var(--gold);
      flex-shrink: 0;
      position: relative; z-index: 1;
    }

    .fitness-header-text { position: relative; z-index: 1; }
    .fitness-header-text h3 { font-family: 'Syne', sans-serif; font-size: 1.5rem; color: var(--white); font-weight: 800; margin-bottom: 4px; }
    .fitness-header-text p { font-size: 13.5px; color: rgba(255,255,255,0.7); max-width: 650px; line-height: 1.5; }

    .fitness-body {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      padding: 2rem;
      gap: 1.5rem;
    }

    .ft-module {
      padding-right: 1rem;
      border-right: 1px solid var(--border);
    }

    .ft-module:last-child { border-right: none; }

    .ft-module-icon {
      width: 38px; height: 38px;
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 18px; margin-bottom: 12px;
    }

    .fmi-red   { background: #fee2e2; color: #ef4444; }
    .fmi-blue  { background: #dbeafe; color: #3b82f6; }
    .fmi-green { background: #dcfce7; color: #10b981; }

    .ft-module h4 { font-family: 'Syne', sans-serif; font-size: 1.05rem; font-weight: 700; color: var(--navy); margin-bottom: 8px; }
    .ft-module p { font-size: 13px; color: var(--muted); line-height: 1.6; }

    .fitness-footer {
      border-top: 1px solid var(--border);
      padding: 1.25rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fafafb;
    }

    .fitness-tags { display: flex; flex-wrap: wrap; gap: 10px; }
    .f-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #f1f5f9;
      border-radius: 6px;
      padding: 4px 10px;
      font-size: 12px;
      color: #334155;
      font-weight: 500;
    }

    /* ─── SCHOOL INTEGRATION CARD ──────────────── */
    .school-card {
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 1.75rem;
      overflow: hidden;
      animation: fadeUp 0.5s ease both;
    }

    .school-top {
      display: grid;
      grid-template-columns: 1fr 280px;
    }

    .school-info { padding: 2.5rem 3rem 2rem; }

    .school-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #eff6ff;
      border: 1px solid #bfdbfe;
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 11px;
      font-weight: 700;
      color: #1d4ed8;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .school-info h3 { font-family: 'Syne', sans-serif; font-size: 1.8rem; font-weight: 800; color: var(--navy); line-height: 1.25; margin-bottom: 12px; }
    .school-info p { font-size: 14.5px; color: #475569; line-height: 1.65; margin-bottom: 1.5rem; }

    .school-stats { display: flex; gap: 2.5rem; margin-top: 1.5rem; }
    .ss-item { text-align: center; }
    .ss-num {
      font-family: 'Syne', sans-serif;
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--navy);
      display: block;
    }
    .ss-label { font-size: 11px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.7px; }

    .school-visual { position: relative; overflow: hidden; }
    .school-visual-bg {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #071e3d, #0d3060);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      gap: 12px;
    }
    .school-visual-bg i { font-size: 5rem; color: var(--gold); opacity: 0.85; }
    .school-visual-bg p { font-family: 'Syne', sans-serif; font-size: 0.85rem; font-weight: 700; color: rgba(255,255,255,0.6); text-align: center; letter-spacing: 1px; text-transform: uppercase; }

    .school-deliverables {
      border-top: 1px solid var(--border);
      padding: 1.5rem 2rem;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      background: #fafafb;
    }

    .sd-item { display: flex; align-items: flex-start; gap: 10px; }
    .sd-icon {
      width: 34px; height: 34px;
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 17px; flex-shrink: 0;
    }
    .sd-item h5 { font-size: 13px; font-weight: 600; color: var(--text); margin-bottom: 3px; }
    .sd-item p  { font-size: 12px; color: var(--muted); line-height: 1.5; }

    /* ─── TOURNAMENT PREP ─────────────────────── */
    .tourn-card {
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 1.75rem;
      overflow: hidden;
      animation: fadeUp 0.5s ease both;
    }

    .tourn-hero {
      background: linear-gradient(135deg, #1a0533, #2d1060, #071e3d);
      padding: 2.5rem;
      position: relative;
      overflow: hidden;
    }

    .tourn-hero::before {
      content: '🏆';
      position: absolute;
      font-size: 9rem;
      right: 2rem;
      top: -10px;
      opacity: 0.1;
    }

    .tourn-hero-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 2rem;
      position: relative;
      z-index: 1;
    }

    .tourn-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(168,85,247,0.15);
      border: 1px solid rgba(168,85,247,0.3);
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 11px;
      font-weight: 700;
      color: #c084fc;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .tourn-title {
      font-family: 'Syne', sans-serif;
      font-size: 2rem;
      font-weight: 800;
      color: var(--white);
      line-height: 1.2;
      margin-bottom: 10px;
    }

    .tourn-title span { color: var(--gold); }
    .tourn-desc { font-size: 14.5px; color: rgba(255,255,255,0.7); max-width: 520px; line-height: 1.65; }

    .tourn-badge-stack { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; min-width: 320px; }
    .tb {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 8px;
      padding: 8px 12px;
      color: rgba(255,255,255,0.8);
      font-size: 12.5px;
      font-weight: 500;
      display: flex; align-items: center; gap: 8px;
    }
    .tb i { color: var(--gold); font-size: 15px; }

    .tourn-phases {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      border-top: 1px solid var(--border);
    }

    .tp-phase {
      padding: 2rem;
      border-right: 1px solid var(--border);
    }

    .tp-phase:last-child { border-right: none; }
    .tp-num { font-family: 'Syne', sans-serif; font-size: 2.2rem; font-weight: 800; color: rgba(15,23,42,0.1); line-height: 1; margin-bottom: 10px; }
    .tp-phase h4 { font-family: 'Syne', sans-serif; font-size: 1rem; font-weight: 700; color: var(--navy); margin-bottom: 8px; }
    .tp-phase p { font-size: 12.5px; color: var(--muted); line-height: 1.55; }

    /* ─── CTA BANNER ──────────────────────────── */
    .cta-banner {
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy2) 100%);
      border-radius: var(--radius);
      padding: 3rem;
      text-align: center;
      margin-top: 3rem;
      position: relative;
      overflow: hidden;
    }

    .cta-banner::before {
      content: '';
      position: absolute;
      width: 350px; height: 350px;
      border-radius: 50%;
      background: rgba(245,197,24,0.06);
      top: -120px; right: -80px;
    }

    .cta-banner h2 {
      font-family: 'Syne', sans-serif;
      font-size: 1.9rem;
      font-weight: 800;
      color: var(--white);
      margin-bottom: 10px;
      position: relative;
      z-index: 1;
    }

    .cta-banner h2 span { color: var(--gold); }
    .cta-banner p {
      font-size: 15px;
      color: rgba(255,255,255,0.65);
      max-width: 480px;
      margin: 0 auto 2rem;
      line-height: 1.7;
      position: relative;
      z-index: 1;
    }

    .cta-btns {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
      position: relative;
      z-index: 1;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--gold);
      color: var(--navy);
      font-family: 'Outfit', sans-serif;
      font-size: 14px;
      font-weight: 700;
      padding: 12px 28px;
      border-radius: 10px;
      text-decoration: none;
      transition: background 0.2s, transform 0.15s;
    }

    .btn-primary:hover { background: var(--gold2); transform: translateY(-2px); }

    .btn-ghost {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,255,255,0.1);
      color: var(--white);
      font-family: 'Outfit', sans-serif;
      font-size: 14px;
      font-weight: 600;
      padding: 12px 28px;
      border-radius: 10px;
      text-decoration: none;
      border: 1px solid rgba(255,255,255,0.2);
      transition: background 0.2s;
    }

    .btn-ghost:hover { background: rgba(255,255,255,0.18); }

    /* ─── RESPONSIVE ──────────────────────────── */
    @media (max-width: 768px) {
      .hero { padding: 3.5rem 1.25rem 3rem; }
      .main { padding: 2rem 1rem 4rem; }
      .prog-card { grid-template-columns: 1fr; }
      .prog-visual { min-height: 200px; }
      .dual-grid { grid-template-columns: 1fr; }
      .summer-features { grid-template-columns: repeat(2,1fr); }
      .summer-top { flex-direction: column; }
      .summer-dates-box { min-width: unset; width: 100%; }
      .prog-cta, .dual-footer, .fitness-footer { flex-direction: column; align-items: flex-start; gap: 15px; }
      .fitness-body { grid-template-columns: 1fr; }
      .ft-module { border-right: none; border-bottom: 1px solid var(--border); }
      .ft-module:last-child { border-bottom: none; }
      .school-top { grid-template-columns: 1fr; }
      .school-visual { display: none; }
      .school-deliverables { grid-template-columns: 1fr 1fr; }
      .tourn-hero-inner { flex-direction: column; }
      .tourn-phases { grid-template-columns: 1fr 1fr; }
      .tp-phase:nth-child(2) { border-right: none; }
      .tp-phase:nth-child(3) { border-right: 1px solid var(--border); border-top: 1px solid var(--border); }
      .tp-phase:nth-child(4) { border-right: none; border-top: 1px solid var(--border); }
      .hero-stats { gap: 1.5rem; }
      .cta-banner { padding: 2rem 1.25rem; }
      .cta-banner h2 { font-size: 1.4rem; }
    }
</style>

    <!-- Hero Banner -->
    <section class="hero-slider-section" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center; background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png') top center/cover no-repeat; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(11, 17, 32, 0.6), rgba(11, 17, 32, 0.9));"></div>
        <div style="position: relative; z-index: 10; text-align: center; padding: 0 20px;">
            <h1 style="color: #fff; font-size: 3.5rem; font-weight: 900; margin-bottom: 15px; letter-spacing: 2px;">TRAINING <span class="gold-text">PROGRAMS</span></h1>
            <div style="width: 100px; height: 4px; background: #f59e0b; margin: 0 auto 20px;"></div>
            <p style="color: #e2e8f0; font-size: 1.2rem; max-width: 700px; margin: 0 auto; line-height: 1.6;">From your very first step onto the court to competing on the national stage &mdash; we have a program designed precisely for you.</p>
        </div>
    </section>
    
<div class="main">
  <div class="filter-bar" style="margin-bottom: 30px;">
    <button class="filter-pill active" onclick="filterCards('all',this)">All Programs</button>
    <button class="filter-pill" onclick="filterCards('foundation',this)">Foundation</button>
    <button class="filter-pill" onclick="filterCards('teams',this)">Teams</button>
    <button class="filter-pill" onclick="filterCards('special',this)">Special Programs</button>
    <button class="filter-pill" onclick="filterCards('elite',this)">Elite & Competitive</button>
  </div>

  <!-- ── FOUNDATION PROGRAMS ── -->
  <div class="section-label">
    <div class="sl-line"></div>
    <div class="sl-text">Foundation Programs</div>
    <div class="sl-line"></div>
  </div>

  <!-- BEGINNER -->
  <div class="prog-card" data-category="foundation">
    <div class="prog-visual">
      <div class="prog-visual-bg" style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_1.png') center/cover no-repeat;"></div>
      <div class="prog-visual-overlay"></div>
      <span class="prog-level-badge badge-green">Beginner</span>
      <div class="prog-icon-wrap"><i class="ti ti-hand-stop"></i></div>
      <div class="prog-visual-title">Beginner Training</div>
      <div class="prog-visual-sub">Age 6–14 · All Backgrounds Welcome</div>
    </div>
    <div class="prog-content">
      <p class="prog-desc">Our Beginner Training Program is the perfect launchpad for young athletes discovering handball for the very first time. Designed by certified coaches, this program introduces the fundamentals of handball — ball handling, passing, footwork, and court awareness — in a safe, encouraging, and fun environment that builds genuine love for the sport.</p>
      <div class="prog-meta">
        <span class="meta-chip"><i class="ti ti-clock"></i> 5 days/week · 90 min/session</span>
        <span class="meta-chip"><i class="ti ti-users"></i> Batch size: 15 max</span>
        <span class="meta-chip"><i class="ti ti-calendar"></i> Rolling admissions</span>
        <span class="meta-chip"><i class="ti ti-certificate"></i> Progress certificates</span>
      </div>
      <div class="prog-highlights">
        <div class="hl-item"><i class="ti ti-circle-check"></i> Basic passing & catching drills</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Movement & agility fundamentals</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Introduction to game rules</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Team bonding & sportmanship</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Monthly skill assessments</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Parent progress updates</div>
      </div>
      <div class="prog-cta">
        <div class="prog-price">Starting at <strong>₹800/mo</strong></div>
        <div style="display:flex;gap:10px;">
          <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll btn-enroll-outline"><i class="ti ti-info-circle"></i> Learn More</a>
          <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll"><i class="ti ti-user-plus"></i> Enroll Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ADVANCED -->
  <div class="prog-card" data-category="foundation">
    <div class="prog-visual">
      <div class="prog-visual-bg" style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/training_2.png') center/cover no-repeat;"></div>
      <div class="prog-visual-overlay"></div>
      <span class="prog-level-badge badge-orange">Advanced</span>
      <div class="prog-icon-wrap"><i class="ti ti-flame"></i></div>
      <div class="prog-visual-title">Advanced Training</div>
      <div class="prog-visual-sub">Age 14–22 · Competitive Athletes</div>
    </div>
    <div class="prog-content">
      <p class="prog-desc">Designed for athletes who have mastered the basics and are ready to push their performance to the next level. The Advanced Training Program focuses on tactical intelligence, high-intensity conditioning, positional specialization, and competitive match simulation — preparing players for state and national tournaments.</p>
      <div class="prog-meta">
        <span class="meta-chip"><i class="ti ti-clock"></i> 6 days/week · 2.5 hrs/session</span>
        <span class="meta-chip"><i class="ti ti-users"></i> Batch size: 12 max</span>
        <span class="meta-chip"><i class="ti ti-chart-line"></i> Performance tracking</span>
        <span class="meta-chip"><i class="ti ti-video"></i> Video analysis included</span>
      </div>
      <div class="prog-highlights">
        <div class="hl-item"><i class="ti ti-circle-check"></i> Advanced tactical playbooks</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> High-intensity interval training</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Positional specialization</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Match strategy & game film</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Strength & power sessions</div>
        <div class="hl-item"><i class="ti ti-circle-check"></i> Tournament exposure</div>
      </div>
      <div class="prog-cta">
        <div class="prog-price">Starting at <strong>₹1,500/mo</strong></div>
        <div style="display:flex;gap:10px;">
          <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll btn-enroll-outline"><i class="ti ti-info-circle"></i> Learn More</a>
          <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll"><i class="ti ti-user-plus"></i> Enroll Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ── TEAM PROGRAMS ── -->
  <div class="section-label">
    <div class="sl-line"></div>
    <div class="sl-text">Team Programs</div>
    <div class="sl-line"></div>
  </div>

  <div class="dual-grid" data-category="teams">
    <!-- BOYS TEAM -->
    <div class="dual-card">
      <div class="dual-visual">
        <div class="dual-visual-bg" style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_banner_wide.png') center/cover no-repeat;"></div>
        <div class="dual-overlay"></div>
        <span class="dual-badge badge-blue">Boys Team</span>
        <div class="prog-icon-wrap" style="position: absolute; top: 12px; right: 12px; margin: 0; width: 40px; height: 40px; font-size: 20px;"><i class="fas fa-mars"></i></div>
        <div class="dual-title-wrap">
          <div class="dual-title">Boys Handball Team</div>
          <div class="dual-sub">Age 10–22 · Boys Only</div>
        </div>
      </div>
      <div class="dual-body">
        <p class="dual-desc">The Boys Team program is a structured, competitive squad environment for male players aged 10 to 22. Focused on discipline, tactical teamwork, and physical dominance, our boys regularly compete at district, state, and national levels under experienced coaching staff.</p>
        <ul class="dual-list">
          <li><i class="ti ti-circle-check"></i> Competitive squad selection process</li>
          <li><i class="ti ti-circle-check"></i> Inter-district & state tournament participation</li>
          <li><i class="ti ti-circle-check"></i> Strength-focused conditioning</li>
          <li><i class="ti ti-circle-check"></i> Leadership & captain mentorship</li>
          <li><i class="ti ti-circle-check"></i> Sports psychology sessions</li>
        </ul>
      </div>
      <div class="dual-footer">
        <div class="dual-age">Age: <strong>10–22 years</strong> | <strong>Male Athletes</strong></div>
        <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll" style="font-size:12.5px;padding:8px 16px;"><i class="ti ti-user-plus"></i> Join Team</a>
      </div>
    </div>

    <!-- GIRLS TEAM -->
    <div class="dual-card">
      <div class="dual-visual">
        <div class="dual-visual-bg" style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/hero_handball.png') center/cover no-repeat;"></div>
        <div class="dual-overlay"></div>
        <span class="dual-badge badge-pink">Girls Team</span>
        <div class="prog-icon-wrap" style="position: absolute; top: 12px; right: 12px; margin: 0; width: 40px; height: 40px; font-size: 20px;"><i class="fas fa-venus"></i></div>
        <div class="dual-title-wrap">
          <div class="dual-title">Girls Handball Team</div>
          <div class="dual-sub">Age 10–22 · Girls Only</div>
        </div>
      </div>
      <div class="dual-body">
        <p class="dual-desc">Our Girls Team is a dedicated, empowering space for female players to grow as athletes and leaders. With a focus on agility, coordination, and competitive excellence, our girls program has produced multiple state-level achievers in a supportive, all-women environment.</p>
        <ul class="dual-list">
          <li><i class="ti ti-circle-check"></i> Female-focused coaching methodology</li>
          <li><i class="ti ti-circle-check"></i> State & national competition exposure</li>
          <li><i class="ti ti-circle-check"></i> Agility & speed specialization</li>
          <li><i class="ti ti-circle-check"></i> Confidence & leadership building</li>
          <li><i class="ti ti-circle-check"></i> Safe, inclusive environment</li>
        </ul>
      </div>
      <div class="dual-footer">
        <div class="dual-age">Age: <strong>10–22 years</strong> | <strong>Female Athletes</strong></div>
        <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll" style="font-size:12.5px;padding:8px 16px;background:#be185d;"><i class="ti ti-user-plus"></i> Join Team</a>
      </div>
    </div>
  </div>

  <!-- ── SPECIAL PROGRAMS ── -->
  <div class="section-label">
    <div class="sl-line"></div>
    <div class="sl-text">Special Programs</div>
    <div class="sl-line"></div>
  </div>

  <!-- SUMMER CAMP -->
  <div class="summer-card" data-category="special">
    <div class="summer-bg">
      <div class="summer-deco"></div>
      <div class="summer-top">
        <div>
          <div class="summer-label"><i class="ti ti-sun"></i> Limited Seats — Summer 2025</div>
          <div class="summer-title">Annual <span>Summer</span><br/>Handball Camp</div>
          <p class="summer-desc">An immersive 21-day residential handball camp designed to fast-track skill development during summer break. Combining intensive court training, fitness conditioning, recreational activities, and team bonding in one unforgettable experience.</p>
        </div>
        <div class="summer-dates-box">
          <h4>Camp Details</h4>
          <div class="date-row"><i class="ti ti-calendar-event"></i> May 15 – June 5, 2025</div>
          <div class="date-row"><i class="ti ti-clock"></i> 8 AM – 6 PM daily</div>
          <div class="date-row"><i class="ti ti-users"></i> Age: 8–18 years</div>
          <div class="date-row"><i class="ti ti-home"></i> Residential & Day options</div>
          <div class="date-row"><i class="ti ti-ticket"></i> Seats: 40 only</div>
          <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll" style="margin-top:14px;width:100%;justify-content:center;background:var(--gold);color:var(--navy);"><i class="ti ti-bolt"></i> Register Now</a>
        </div>
      </div>
      <div class="summer-features">
        <div class="sf-item"><i class="ti ti-ball-handball"></i><span>Daily Court Training</span></div>
        <div class="sf-item"><i class="ti ti-barbell"></i><span>Fitness & Strength Sessions</span></div>
        <div class="sf-item"><i class="ti ti-trophy"></i><span>Mini Tournament Finals</span></div>
        <div class="sf-item"><i class="ti ti-friends"></i><span>Team Bonding Activities</span></div>
        <div class="sf-item"><i class="ti ti-salad"></i><span>Nutrition & Diet Guidance</span></div>
        <div class="sf-item"><i class="ti ti-video"></i><span>Video Analysis Sessions</span></div>
        <div class="sf-item"><i class="ti ti-certificate"></i><span>Merit Certificates</span></div>
        <div class="sf-item"><i class="ti ti-shirt"></i><span>Academy Kit Included</span></div>
      </div>
    </div>
  </div>

  <!-- SCHOOL PROGRAM -->
  <div class="school-card" data-category="special">
    <div class="school-top">
      <div class="school-info">
        <div class="school-eyebrow"><i class="ti ti-school"></i> Partnership Program</div>
        <h3>School Handball<br/>Integration Program</h3>
        <p>We partner directly with schools across Varanasi to bring professional handball coaching to students on-campus. Our certified coaches visit partner schools weekly to conduct structured sessions aligned with the annual sports calendar — making handball accessible without travel or cost barriers.</p>
        <div class="school-stats">
          <div class="ss-item"><span class="ss-num">20+</span><span class="ss-label">Partner Schools</span></div>
          <div class="ss-item"><span class="ss-num">3000+</span><span class="ss-label">Students Reached</span></div>
          <div class="ss-item"><span class="ss-num">Weekly</span><span class="ss-label">Coach Visits</span></div>
        </div>
      </div>
      <div class="school-visual">
        <div class="school-visual-bg">
          <i class="ti ti-school"></i>
          <p>Bringing handball<br/>to every school</p>
        </div>
      </div>
    </div>
    <div class="school-deliverables">
      <div class="sd-item">
        <div class="sd-icon" style="background:#dbeafe;color:#1d4ed8;"><i class="ti ti-users"></i></div>
        <div>
          <h5>Certified Coaching</h5>
          <p>Qualified coaches visit your school weekly</p>
        </div>
      </div>
      <div class="sd-item">
        <div class="sd-icon" style="background:#dcfce7;color:#15803d;"><i class="ti ti-certificate"></i></div>
        <div>
          <h5>Certifications</h5>
          <p>Participation & merit certificates for students</p>
        </div>
      </div>
      <div class="sd-item">
        <div class="sd-icon" style="background:#fef9c3;color:#a16207;"><i class="ti ti-trophy"></i></div>
        <div>
          <h5>Inter-School Competitions</h5>
          <p>Access to inter-school handball leagues</p>
        </div>
      </div>
      <div class="sd-item">
        <div class="sd-icon" style="background:#ede9fe;color:#6d28d9;"><i class="ti ti-chart-bar"></i></div>
        <div>
          <h5>Talent Identification</h5>
          <p>Top performers invited for academy trials</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ── ELITE PROGRAMS ── -->
  <div class="section-label">
    <div class="sl-line"></div>
    <div class="sl-text">Elite & Competitive</div>
    <div class="sl-line"></div>
  </div>

  <!-- FITNESS & CONDITIONING -->
  <div class="fitness-card" data-category="elite">
    <div class="fitness-header">
      <div class="fitness-icon"><i class="ti ti-barbell"></i></div>
      <div class="fitness-header-text">
        <h3>Fitness & Conditioning Program</h3>
        <p>Science-backed athletic conditioning designed specifically for handball players — building explosive power, endurance, agility, and injury resilience across three core modules.</p>
      </div>
    </div>
    <div class="fitness-body">
      <div class="ft-module">
        <div class="ft-module-icon fmi-red"><i class="ti ti-bolt"></i></div>
        <h4>Strength & Power</h4>
        <p>Periodized resistance training targeting explosive leg drive, throwing velocity, and core stability — the physical foundations of elite handball performance.</p>
      </div>
      <div class="ft-module">
        <div class="ft-module-icon fmi-blue"><i class="ti ti-run"></i></div>
        <h4>Speed & Agility</h4>
        <p>Ladder drills, reactive agility cones, and plyometrics designed to improve first-step quickness, directional change, and court-specific movement efficiency.</p>
      </div>
      <div class="ft-module">
        <div class="ft-module-icon fmi-green"><i class="ti ti-heart-rate-monitor"></i></div>
        <h4>Endurance & Recovery</h4>
        <p>Aerobic base building combined with active recovery protocols, flexibility work, and nutrition guidance to keep athletes performing at peak across full seasons.</p>
      </div>
    </div>
    <div class="fitness-footer">
      <div class="fitness-tags">
        <span class="f-tag"><i class="ti ti-clock" style="font-size:13px;color:var(--navy)"></i> 6 sessions/week</span>
        <span class="f-tag"><i class="ti ti-users" style="font-size:13px;color:var(--navy)"></i> Open to all enrolled athletes</span>
        <span class="f-tag"><i class="ti ti-salad" style="font-size:13px;color:var(--navy)"></i> Nutrition plan included</span>
        <span class="f-tag"><i class="ti ti-first-aid-kit" style="font-size:13px;color:var(--navy)"></i> Injury prevention protocol</span>
      </div>
      <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-enroll"><i class="ti ti-user-plus"></i> Join Program</a>
    </div>
  </div>

  <!-- TOURNAMENT PREP -->
  <div class="tourn-card" data-category="elite">
    <div class="tourn-hero">
      <div class="tourn-hero-inner">
        <div>
          <div class="tourn-eyebrow"><i class="ti ti-trophy"></i> Elite Competitive Track</div>
          <div class="tourn-title">Tournament <span>Preparation</span><br/>Program</div>
          <p class="tourn-desc">A focused, high-intensity program for athletes preparing for state, national, or inter-university handball competitions. Every aspect of preparation — physical, tactical, mental, and logistical — is covered under expert guidance.</p>
        </div>
        <div class="tourn-badge-stack">
          <div class="tb"><i class="ti ti-map-pin"></i> State-level tournaments</div>
          <div class="tb"><i class="ti ti-world"></i> National competitions</div>
          <div class="tb"><i class="ti ti-school"></i> Inter-university events</div>
          <div class="tb"><i class="ti ti-calendar"></i> 8-week intensive cycle</div>
        </div>
      </div>
    </div>
    <div class="tourn-phases">
      <div class="tp-phase">
        <div class="tp-num">01</div>
        <h4>Assessment & Goal Setting</h4>
        <p>Full physical & skill assessment. Tournament targets identified. Individual development plan built for each athlete.</p>
      </div>
      <div class="tp-phase">
        <div class="tp-num">02</div>
        <h4>Technical Refinement</h4>
        <p>Deep-dive into positional skills, set plays, and match-specific technique using video analysis and feedback loops.</p>
      </div>
      <div class="tp-phase">
        <div class="tp-num">03</div>
        <h4>Team Strategy & Simulations</h4>
        <p>Opponent scouting, formation drills, full-length match simulations, and real-time tactical adjustments.</p>
      </div>
      <div class="tp-phase">
        <div class="tp-num">04</div>
        <h4>Peak & Mental Readiness</h4>
        <p>Taper training, sports psychology, pre-competition routines, and confidence-building for match day performance.</p>
      </div>
    </div>
  </div>

  <!-- CTA BANNER -->
  <div class="cta-banner">
    <h2>Ready to Begin Your <span>Handball Journey?</span></h2>
    <p>Join hundreds of athletes training at Shyama Handball Academy. Choose your program and take the first step toward becoming a champion.</p>
    <div class="cta-btns">
      <a href="<?php echo esc_url( home_url('/join') ); ?>" class="btn-primary"><i class="ti ti-user-plus"></i> Enroll in a Program</a>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn-ghost"><i class="ti ti-phone"></i> Talk to a Coach</a>
    </div>
  </div>

</div><!-- /main -->

<script>
  function filterCards(category, btn) {
    document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');

    const cards = document.querySelectorAll('[data-category]');
    const labels = document.querySelectorAll('.section-label');

    if (category === 'all') {
      cards.forEach(c => { c.style.display = ''; });
      labels.forEach(l => { l.style.display = ''; });
    } else {
      const map = {
        'foundation': ['foundation'],
        'teams':      ['teams'],
        'special':    ['special'],
        'elite':      ['elite']
      };
      const allowed = map[category] || [];

      cards.forEach(c => {
        c.style.display = allowed.includes(c.dataset.category) ? '' : 'none';
      });

      // hide irrelevant section labels based on visible cards
      document.querySelectorAll('.section-label').forEach(label => {
        const next = label.nextElementSibling;
        if (!next) return;
        const hasVisible = [...label.parentElement.children].some((el, i, arr) => {
          const idx = arr.indexOf(label);
          if (i <= idx) return false;
          const next2 = arr[i];
          if (next2 && next2.classList.contains('section-label')) return false;
          return next2 && next2.style.display !== 'none' && next2.dataset;
        });
        label.style.display = hasVisible ? '' : 'none';
      });
    }
  }
</script>

<?php
get_footer();
?>

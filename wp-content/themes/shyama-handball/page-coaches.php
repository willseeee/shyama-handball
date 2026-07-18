<?php
/**
 * Template Name: Coaches Page
 */
get_header();
?>

  <style>
    :root {
      --primary-dark: #0b0f19;
      --secondary-dark: #111827;
      --navy:   #0f172a;
      --navy2:  #1e293b;
      --gold:   #f59e0b;
      --gold2:  #fbbf24;
      --gold3:  #fef3c7;
      --crimson: #e11d48;
      --crimson-hover: #be123c;
      --cream:  #f8fafc;
      --white:  #ffffff;
      --muted:  #64748b;
      --border: rgba(226, 232, 240, 0.8);
      --border-glowing: rgba(245, 158, 11, 0.25);
      --text:   #334155;
      --text-light: #94a3b8;
      --radius: 20px;
      --glass-bg: rgba(255, 255, 255, 0.7);
      --glass-border: rgba(255, 255, 255, 0.6);
      --glass-shadow: 0 10px 30px rgba(15, 23, 42, 0.04), inset 0 1px 2px rgba(255, 255, 255, 0.6);
      --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .hero-coaches {
      background: linear-gradient(rgba(11, 15, 25, 0.85), rgba(15, 23, 42, 0.96)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Images/coaches_hero.png') no-repeat center center/cover;
      position: relative;
      height: 50vh;
      min-height: 420px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0 24px;
      text-align: center;
      overflow: hidden;
    }
    .hero-noise {
      position: absolute; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
      pointer-events: none; opacity: .5;
    }
    .hero-arc {
      position: absolute; bottom: -2px; left: 0; right: 0;
      height: 80px; background: #f1f5f9;
      clip-path: ellipse(60% 100% at 50% 100%);
    }

    /* decorative floating blobs */
    .hero-blob {
      position: absolute;
      width: 400px; height: 400px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(245,158,11,0.08) 0%, rgba(245,158,11,0) 70%);
      top: -100px; right: -50px;
      filter: blur(40px);
      pointer-events: none;
    }
    .hero-blob-2 {
      position: absolute;
      width: 350px; height: 350px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(225,29,72,0.05) 0%, rgba(225,29,72,0) 70%);
      bottom: -80px; left: -100px;
      filter: blur(40px);
      pointer-events: none;
    }

    .hero-eyebrow {
      position: relative; z-index: 2;
      display: inline-flex; align-items: center; gap: 8px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 30px; padding: 8px 24px;
      font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
      color: var(--gold2); margin-bottom: 1.5rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }
    .hero-coaches h1 {
      position: relative; z-index: 2;
      font-family: 'Montserrat', sans-serif;
      font-size: clamp(2.6rem, 7vw, 4.2rem); font-weight: 900;
      color: #fff; line-height: 1.15; margin-bottom: 1.25rem;
      text-transform: uppercase;
      letter-spacing: -1px;
    }
    .hero-coaches h1 em { font-style: normal; color: var(--gold2); background: linear-gradient(to right, #fbbf24, #f59e0b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .hero-sub {
      position: relative; z-index: 2;
      font-size: 1.1rem; color: #cbd5e1; font-weight: 400;
      max-width: 700px; margin: 0 auto; line-height: 1.8;
    }

    /* ── STAFF STRIP (numbers) ── */
    .stats-strip {
      background: var(--navy);
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 1.5rem;
      max-width: 1200px;
      margin: -50px auto 0;
      padding: 2rem;
      border-radius: 24px;
      border: 1px solid rgba(255, 255, 255, 0.08);
      position: relative;
      z-index: 10;
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.3);
    }
    .hs { 
      text-align: center; 
      padding: 1rem;
      border-right: 1px solid rgba(255, 255, 255, 0.08);
      transition: var(--transition);
    }
    .hs:last-child { border-right: none; }
    .hs:hover {
      transform: translateY(-4px);
    }
    .hs-num {
      font-family: 'Montserrat', sans-serif;
      font-size: 2.8rem; font-weight: 800; color: var(--gold2); display: block;
      line-height: 1;
      text-shadow: 0 4px 12px rgba(245, 158, 11, 0.2);
    }
    .hs-label { font-size: 11px; color: #94a3b8; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 10px; font-weight: 700; }

    /* ── MAIN ── */
    .main { max-width: 1200px; margin: 0 auto; padding: 4.5rem 2rem 7rem; }

    /* section divider */
    .sec-divider {
      display: flex; align-items: center; gap: 20px;
      margin: 5rem 0 3rem;
    }
    .sec-divider:first-child { margin-top: 0; }
    .sd-ornament {
      display: flex; align-items: center; gap: 6px; flex-shrink: 0;
    }
    .sd-diamond {
      width: 10px; height: 10px; background: var(--crimson);
      transform: rotate(45deg); border-radius: 2px;
      box-shadow: 0 0 10px rgba(225, 29, 72, 0.4);
    }
    .sd-line { width: 40px; height: 2px; background: var(--crimson); opacity: .5; }
    .sd-text {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.25rem; font-weight: 800; letter-spacing: 2.5px;
      text-transform: uppercase; color: var(--navy); white-space: nowrap;
    }
    .sd-full-line { flex: 1; height: 1px; background: #cbd5e1; opacity: 0.6; }

    /* ══ HEAD COACH CARD ══ */
    .head-coach-card {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 28px;
      border: 1px solid var(--glass-border);
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.05), inset 0 1px 1px rgba(255, 255, 255, 0.8);
      overflow: hidden;
      display: grid; grid-template-columns: 360px 1fr;
      animation: fadeUp .8s cubic-bezier(0.16, 1, 0.3, 1) both;
      transition: var(--transition);
    }
    .head-coach-card:hover {
      box-shadow: 0 30px 60px rgba(15, 23, 42, 0.1);
      border-color: var(--border-glowing);
      transform: translateY(-4px);
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .hc-visual {
      background: linear-gradient(135deg, #0b0f19, #1e293b);
      padding: 5rem 3rem 4rem;
      display: flex; flex-direction: column; align-items: center; text-align: center;
      position: relative;
    }
    .hc-visual::before {
      content: ''; position: absolute; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.02'/%3E%3C/svg%3E");
      pointer-events: none;
    }
    .hc-avatar-frame {
      position: relative; margin-bottom: 2rem;
    }
    .hc-avatar-frame::after {
      content: ''; position: absolute; inset: -10px; border-radius: 50%;
      border: 2px dashed rgba(245,158,11,0.3);
      animation: rotateRing 20s linear infinite;
    }
    @keyframes rotateRing { to { transform: rotate(360deg); } }

    .hc-avatar {
      width: 140px; height: 140px; border-radius: 50%;
      background: linear-gradient(135deg, #1e293b, #0f172a);
      border: 4px solid var(--gold);
      display: flex; align-items: center; justify-content: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 3.2rem; font-weight: 800; color: var(--gold2);
      box-shadow: 0 10px 30px rgba(0,0,0,0.4), 0 0 0 10px rgba(245, 158, 11, 0.15);
    }
    .hc-role-badge {
      background: rgba(245,158,11,0.12); border: 1px solid rgba(245,158,11,0.3);
      color: var(--gold2); font-size: 11px; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase;
      padding: 6px 18px; border-radius: 20px;
      margin-bottom: 1.25rem;
    }
    .hc-visual h3 {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.5rem; font-weight: 800; color: #fff; margin-bottom: 6px;
    }
    .hc-subtitle { font-size: 12px; color: #94a3b8; font-weight: 500; line-height: 1.5; margin-bottom: 2rem; }

    .hc-social { display: flex; gap: 12px; }
    .hc-soc-btn {
      width: 38px; height: 38px; border-radius: 50%;
      background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(255,255,255,0.1);
      display: flex; align-items: center; justify-content: center;
      font-size: 16px; color: #cbd5e1; text-decoration: none;
      transition: var(--transition);
    }
    .hc-soc-btn:hover {
      background: var(--gold); border-color: var(--gold); color: var(--navy);
      transform: translateY(-2px);
    }

    .hc-content { padding: 4rem; display: flex; flex-direction: column; gap: 2rem; }
    .hc-header h2 { font-family: 'Montserrat', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--navy); margin-bottom: 12px; }
    .hc-header-meta { display: flex; flex-wrap: wrap; gap: 10px; }
    .hc-chip {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255, 255, 255, 0.8); border: 1px solid rgba(226, 232, 240, 0.8);
      border-radius: 10px; padding: 6px 14px;
      font-size: 12.5px; color: var(--text); font-weight: 600;
      box-shadow: 0 2px 6px rgba(0,0,0,0.02);
      transition: var(--transition);
    }
    .hc-chip:hover {
      border-color: var(--gold);
      background: #fff;
    }
    .hc-chip i { font-size: 15px; color: var(--crimson); }

    .hc-bio {
      font-size: 15px; color: #475569; line-height: 1.9;
    }

    /* stat blocks */
    .hc-stats {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 5px;
    }
    .hc-stat {
      background: linear-gradient(145deg, #ffffff, #f8fafc);
      padding: 1.4rem;
      border: 1px solid var(--border);
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.01);
      transition: var(--transition);
    }
    .hc-stat:hover {
      border-color: var(--crimson);
      background: #ffffff;
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(225, 29, 72, 0.06);
    }
    .hc-stat-num {
      font-family: 'Montserrat', sans-serif;
      font-size: 2rem; font-weight: 800; color: var(--navy);
      display: block; line-height: 1.1;
    }
    .hc-stat-label { font-size: 12px; color: var(--muted); margin-top: 6px; font-weight: 600; letter-spacing: 0.5px; }

    /* achievement list */
    .hc-ach-list { display: grid; gap: 12px; }
    .hc-ach {
      display: flex; align-items: flex-start; gap: 14px;
      font-size: 14.5px; color: var(--text); line-height: 1.7;
    }
    .hc-ach i { font-size: 18px; color: var(--gold); flex-shrink: 0; margin-top: 3px; }

    /* ── ASSISTANT COACHES GRID ── */
    .asst-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
    }

    .asst-card {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 24px;
      border: 1px solid var(--glass-border);
      box-shadow: var(--glass-shadow);
      overflow: hidden;
      transition: var(--transition);
      animation: fadeUp .6s cubic-bezier(0.16, 1, 0.3, 1) both;
    }
    .asst-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
      border-color: var(--border-glowing);
    }

    .ac-top {
      background: linear-gradient(135deg, #0b0f19, #1e293b);
      padding: 2.5rem 1.5rem;
      display: flex; flex-direction: column; align-items: center;
      position: relative; overflow: hidden;
    }
    .ac-top::before {
      content: ''; position: absolute;
      width: 180px; height: 180px; border-radius: 50%;
      background: radial-gradient(circle, rgba(245,158,11,0.05) 0%, transparent 70%);
      top: -60px; right: -50px;
    }
    .ac-avatar {
      width: 90px; height: 90px; border-radius: 50%;
      background: linear-gradient(135deg, #1e293b, #0f172a);
      border: 3px solid var(--gold);
      display: flex; align-items: center; justify-content: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 2rem; font-weight: 800; color: var(--gold2);
      margin-bottom: 1rem;
      position: relative; z-index: 1;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3), 0 0 0 6px rgba(245, 158, 11, 0.12);
      transition: var(--transition);
    }
    .asst-card:hover .ac-avatar {
      transform: scale(1.06) rotate(-5deg);
    }
    .ac-role {
      background: rgba(245, 158, 11, 0.12); border: 1px solid rgba(245, 158, 11, 0.3);
      color: var(--gold2); font-size: 10px; font-weight: 700;
      letter-spacing: 1.5px; text-transform: uppercase;
      padding: 4px 14px; border-radius: 20px;
      margin-bottom: 10px; position: relative; z-index: 1;
    }
    .ac-name {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.25rem; font-weight: 800; color: #fff;
      text-align: center; position: relative; z-index: 1;
    }
    .ac-spec {
      font-size: 12px; color: #94a3b8;
      margin-top: 6px; text-align: center;
      position: relative; z-index: 1;
      font-weight: 600;
    }

    .ac-body { padding: 1.8rem; display: flex; flex-direction: column; gap: 1.25rem; }
    .ac-bio { font-size: 14px; color: #475569; line-height: 1.8; }

    .ac-tags { display: flex; flex-wrap: wrap; gap: 8px; }
    .ac-tag {
      font-size: 11px; padding: 4px 12px; font-weight: 600;
      border-radius: 8px; border: 1px solid rgba(226, 232, 240, 0.8);
      color: var(--text); background: #ffffff;
      transition: var(--transition);
    }
    .asst-card:hover .ac-tag {
      border-color: var(--crimson);
      background: rgba(225, 29, 72, 0.02);
    }

    .ac-footer {
      padding: 1.2rem 1.8rem; border-top: 1px solid rgba(226, 232, 240, 0.8);
      display: flex; align-items: center; justify-content: space-between;
      background: rgba(248, 250, 252, 0.6);
    }
    .ac-exp { font-size: 12.5px; color: var(--muted); }
    .ac-exp strong { color: var(--navy); font-weight: 700; }

    /* ── GUEST COACHES ── */
    .guest-grid {
      display: grid; grid-template-columns: repeat(2, 1fr);
      gap: 2rem;
    }
    .guest-card {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 24px;
      border: 1px solid var(--glass-border);
      padding: 2rem;
      display: flex; gap: 1.5rem;
      box-shadow: var(--glass-shadow);
      transition: var(--transition);
      animation: fadeUp .6s cubic-bezier(0.16, 1, 0.3, 1) both;
    }
    .guest-card:hover { transform: translateY(-5px); border-color: var(--border-glowing); box-shadow: 0 15px 30px rgba(15, 23, 42, 0.06); }

    .guest-avatar-wrap { position: relative; flex-shrink: 0; }
    .guest-avatar {
      width: 76px; height: 76px; border-radius: 50%;
      background: linear-gradient(135deg, #1e293b, #0f172a);
      border: 3px solid var(--gold);
      display: flex; align-items: center; justify-content: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.7rem; font-weight: 800; color: var(--gold2);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .guest-status {
      position: absolute; bottom: 2px; right: 2px;
      width: 14px; height: 14px; border-radius: 50%;
      background: #22c55e; border: 2.5px solid #fff;
    }

    .guest-info { display: flex; flex-direction: column; }
    .guest-badge {
      display: inline-block; align-self: flex-start;
      background: rgba(225, 29, 72, 0.08); border: 1px solid rgba(225, 29, 72, 0.2);
      color: var(--crimson); font-size: 9px; font-weight: 700;
      letter-spacing: 1.2px; text-transform: uppercase;
      padding: 3px 10px; border-radius: 20px;
      margin-bottom: 8px;
    }
    .guest-name {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.3rem; font-weight: 800; color: var(--navy);
      margin-bottom: 4px;
    }
    .guest-org { font-size: 12.5px; color: var(--crimson); margin-bottom: 12px; font-weight: 600; }
    .guest-desc { font-size: 14px; color: #475569; line-height: 1.8; }
    .guest-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 14px; }
    .guest-tag {
      font-size: 11px; padding: 4px 12px; font-weight: 600;
      border-radius: 8px; background: #ffffff; border: 1px solid rgba(226, 232, 240, 0.8);
      color: var(--muted);
      transition: var(--transition);
    }
    .guest-card:hover .guest-tag {
      border-color: var(--gold);
    }

    /* ── Certifications & Accreditations ── */
    .cert-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }
    .cert-card {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 24px;
      border: 1px solid var(--glass-border);
      padding: 1.8rem;
      display: flex; flex-direction: column; gap: 1.25rem;
      box-shadow: var(--glass-shadow);
      transition: var(--transition);
      animation: fadeUp .6s cubic-bezier(0.16, 1, 0.3, 1) both;
    }
    .cert-card:hover { transform: translateY(-6px); border-color: var(--crimson); box-shadow: 0 15px 30px rgba(15, 23, 42, 0.06); }

    .cert-icon-wrap {
      width: 56px; height: 56px; border-radius: 16px;
      display: flex; align-items: center; justify-content: center;
      font-size: 26px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
      transition: var(--transition);
    }
    .cert-card:hover .cert-icon-wrap {
      transform: scale(1.1) rotate(5deg);
    }
    .ci-navy   { background: linear-gradient(135deg, #e0f2fe, #bae6fd); color:#0369a1; }
    .ci-gold   { background: linear-gradient(135deg, #fef9c3, #fef08a); color:#a16207; }
    .ci-green  { background: linear-gradient(135deg, #dcfce7, #bbf7d0); color:#15803d; }
    .ci-blue   { background: linear-gradient(135deg, #dbeafe, #bfdbfe); color:#1d4ed8; }
    .ci-red    { background: linear-gradient(135deg, #fee2e2, #fecaca); color:#dc2626; }
    .ci-purple { background: linear-gradient(135deg, #f3e8ff, #e9d5ff); color:#7e22ce; }

    .cert-body h4 { font-size: 15px; font-weight: 800; color: var(--navy); margin-bottom: 8px; line-height: 1.4; }
    .cert-body p  { font-size: 13.5px; color: #475569; line-height: 1.7; }
    .cert-issuer  {
      display: flex; align-items: center; gap: 8px;
      font-size: 12px; color: var(--muted);
      padding-top: 1rem; border-top: 1px solid rgba(226, 232, 240, 0.8);
      margin-top: auto;
    }
    .cert-issuer i { font-size: 15px; color: var(--gold); }
    .cert-issuer strong { color: var(--navy); font-weight: 700; }

    /* ── Timeline ── */
    .ach-layout {
      display: grid; grid-template-columns: 1fr 380px;
      gap: 2.5rem;
    }
    .timeline { position: relative; padding-left: 2.5rem; }
    .timeline::before {
      content: ''; position: absolute;
      left: 6px; top: 12px; bottom: 12px;
      width: 3px; background: linear-gradient(to bottom, var(--gold), rgba(226, 232, 240, 0.8));
      border-radius: 4px;
    }
    .tl-item { position: relative; margin-bottom: 2.5rem; }
    .tl-item:last-child { margin-bottom: 0; }
    .tl-dot {
      position: absolute; left: -2.5rem; top: 6px;
      width: 16px; height: 16px; border-radius: 50%;
      background: var(--white); border: 4px solid var(--gold);
      box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.25);
      transition: var(--transition);
      z-index: 2;
    }
    .tl-item:hover .tl-dot {
      background: var(--gold);
      box-shadow: 0 0 0 6px rgba(245, 158, 11, 0.4);
      transform: scale(1.2);
    }
    .tl-year {
      font-size: 12px; font-weight: 800; letter-spacing: 2px;
      text-transform: uppercase; color: var(--crimson);
      margin-bottom: 8px;
    }
    .tl-card {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 20px;
      border: 1px solid var(--glass-border);
      padding: 1.5rem 1.8rem;
      box-shadow: var(--glass-shadow);
      transition: var(--transition);
    }
    .tl-card:hover { border-color: var(--crimson); box-shadow: 0 15px 30px rgba(15, 23, 42, 0.05); transform: translateX(5px); }
    .tl-card h4 { font-size: 15px; font-weight: 800; color: var(--navy); margin-bottom: 8px; }
    .tl-card p  { font-size: 14px; color: #475569; line-height: 1.8; }
    .tl-badge {
      display: inline-block; margin-top: 12px;
      font-size: 10px; padding: 3px 14px; border-radius: 20px;
      background: #e0f2fe; border: 1px solid #bae6fd; color: #0369a1;
      font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;
    }

    .awards-col { display: flex; flex-direction: column; gap: 1.25rem; }
    .awards-header {
      background: linear-gradient(135deg, #0b0f19, #1e293b);
      border-radius: 24px; padding: 1.8rem;
      text-align: center; position: relative; overflow: hidden;
      box-shadow: 0 10px 30px rgba(15, 23, 42, 0.15);
    }
    .awards-header::before {
      content: '🏆'; font-size: 5rem; opacity: .12;
      position: absolute; right: -15px; top: -15px;
    }
    .awards-header h4 {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.25rem; font-weight: 800; color: #fff;
      margin-bottom: 6px; position: relative; z-index: 1;
    }
    .awards-header p { font-size: 13px; color: #94a3b8; position: relative; z-index: 1; }

    .award-item {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 20px;
      border: 1px solid var(--glass-border);
      padding: 1.25rem 1.5rem;
      display: flex; align-items: center; gap: 16px;
      box-shadow: var(--glass-shadow);
      transition: var(--transition);
    }
    .award-item:hover { border-color: var(--crimson); transform: translateX(6px); box-shadow: 0 15px 30px rgba(15, 23, 42, 0.05); }

    .award-medal {
      width: 48px; height: 48px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 22px; flex-shrink: 0;
      box-shadow: 0 6px 15px rgba(0,0,0,0.06);
    }
    .medal-gold   { background: linear-gradient(135deg, #fef9c3, #fef08a); }
    .medal-silver { background: linear-gradient(135deg, #f1f5f9, #e2e8f0); }
    .medal-bronze { background: linear-gradient(135deg, #ffe4e6, #fecdd3); }

    .award-info h5 { font-size: 14.5px; font-weight: 800; color: var(--navy); margin-bottom: 4px; }
    .award-info p  { font-size: 12px; color: var(--muted); }

    @media(max-width:1100px){
      .stats-strip { grid-template-columns: repeat(3, 1fr); margin-top: -30px; gap: 1rem; }
      .hs { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.08); }
      .hs:nth-child(4), .hs:nth-child(5) { border-bottom: none; }
    }
    @media(max-width:992px){
      .asst-grid { grid-template-columns: 1fr 1fr; }
      .cert-grid { grid-template-columns: 1fr 1fr; }
      .ach-layout { grid-template-columns: 1fr; }
    }
    @media(max-width:900px){
      .head-coach-card { grid-template-columns: 1fr; }
      .hc-visual { padding: 4rem 2rem; }
    }
    @media(max-width:600px){
      .stats-strip { grid-template-columns: repeat(2, 1fr); }
      .hs:nth-child(3) { border-bottom: 1px solid rgba(255,255,255,0.08); }
      .asst-grid  { grid-template-columns: 1fr; }
      .guest-grid { grid-template-columns: 1fr; }
      .cert-grid  { grid-template-columns: 1fr; }
      .main { padding: 3rem 1.25rem 4rem; }
      .hc-stats { grid-template-columns: 1fr; }
      .hc-content { padding: 2rem 1.5rem; }
    }
  </style>

<!-- Hero Section -->
<section class="hero-coaches">
  <div class="hero-noise"></div>
  <div class="hero-blob"></div>
  <div class="hero-blob-2"></div>
  <div class="hero-eyebrow"><i class="fas fa-users-cog"></i> Shyama Staff</div>
  <h1>Our <em>Coaches</em><br/>& Staff</h1>
  <p class="hero-sub">Every champion is shaped by the hands of great teachers. Meet the certified, experienced, and passionate coaching team behind Shyama Handball Academy's legacy of excellence.</p>
  <div class="hero-arc"></div>
</section>

<!-- Stats Strip Below Hero -->
<section class="stats-strip" id="stats-section">
  <div class="hs"><span class="hs-num"><span class="counter" data-target="18">0</span>+</span><div class="hs-label">Years Combined</div></div>
  <div class="hs"><span class="hs-num"><span class="counter" data-target="6">0</span></span><div class="hs-label">Certified Coaches</div></div>
  <div class="hs"><span class="hs-num"><span class="counter" data-target="40">0</span>+</span><div class="hs-label">State Medals Won</div></div>
  <div class="hs"><span class="hs-num"><span class="counter" data-target="4">0</span></span><div class="hs-label">Guest Experts</div></div>
  <div class="hs"><span class="hs-num"><span class="counter" data-target="12">0</span>+</span><div class="hs-label">Certifications Held</div></div>
</section>

<!-- ════ MAIN ════ -->
<div class="main">

  <!-- ── HEAD COACH ── -->
  <div class="sec-divider">
    <div class="sd-ornament"><div class="sd-diamond"></div><div class="sd-line"></div></div>
    <div class="sd-text">Head Coach</div>
    <div class="sd-full-line"></div>
  </div>

  <?php
  // Query for Head Coach specifically or display default
  $head_coach_query = new WP_Query( array(
      'post_type'      => 'coach',
      'posts_per_page' => 1,
      'meta_query'     => array(
          array(
              'key'     => 'coach_role',
              'value'   => 'Head Coach',
              'compare' => 'LIKE',
          )
      )
  ) );

  if ( $head_coach_query->have_posts() ) :
      while ( $head_coach_query->have_posts() ) : $head_coach_query->the_post();
          $role = get_post_meta( get_the_ID(), 'coach_role', true );
          $experience = get_post_meta( get_the_ID(), 'coach_experience', true );
          $championships = get_post_meta( get_the_ID(), 'coach_championships', true );
          $certification = get_post_meta( get_the_ID(), 'coach_certification', true );
          $trained = get_post_meta( get_the_ID(), 'coach_trained_count', true );
          $title_short = get_post_meta( get_the_ID(), 'coach_short_titles', true );
          
          $initials = 'RK';
          $words = explode( ' ', get_the_title() );
          if ( count($words) >= 2 ) {
              $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
          }
          ?>
          <div class="head-coach-card">
            <div class="hc-visual">
              <div class="hc-avatar-frame">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="<?php the_title_attribute(); ?>" style="width:140px; height:140px; border-radius:50%; object-fit:cover; border:4px solid var(--gold);">
                <?php else : ?>
                    <div class="hc-avatar"><?php echo esc_html( $initials ); ?></div>
                <?php endif; ?>
              </div>
              <div class="hc-role-badge"><?php echo esc_html( $role ); ?></div>
              <h3><?php the_title(); ?></h3>
              <div class="hc-subtitle"><?php echo esc_html( $title_short ?: 'National Level Coach' ); ?></div>
            </div>
            <div class="hc-content">
              <div class="hc-header">
                <h2><?php the_title(); ?></h2>
                <div class="hc-header-meta">
                  <span class="hc-chip"><i class="ti ti-map-pin"></i> Varanasi, U.P.</span>
                  <span class="hc-chip"><i class="ti ti-clock"></i> <?php echo esc_html( $experience ?: '18+' ); ?> Years Experience</span>
                  <span class="hc-chip"><i class="ti ti-certificate"></i> <?php echo esc_html( $certification ?: 'Level-3' ); ?></span>
                  <span class="hc-chip"><i class="ti ti-users"></i> <?php echo esc_html( $trained ?: '500+' ); ?> Athletes Trained</span>
                </div>
              </div>
              <div class="hc-bio"><?php the_content(); ?></div>
              <div class="hc-stats">
                <div class="hc-stat">
                  <span class="hc-stat-num"><?php echo esc_html( $experience ?: '18+' ); ?></span>
                  <div class="hc-stat-label">Years Coaching</div>
                </div>
                <div class="hc-stat">
                  <span class="hc-stat-num"><?php echo esc_html( $trained ?: '500+' ); ?></span>
                  <div class="hc-stat-label">Athletes Trained</div>
                </div>
                <div class="hc-stat">
                  <span class="hc-stat-num"><?php echo esc_html( $championships ?: '40+' ); ?></span>
                  <div class="hc-stat-label">State Medals</div>
                </div>
              </div>
            </div>
          </div>
          <?php
      endwhile;
      wp_reset_postdata();
  else :
      // Static Fallback
      ?>
      <div class="head-coach-card">
        <div class="hc-visual">
          <div class="hc-avatar-frame">
            <div class="hc-avatar">RK</div>
          </div>
          <div class="hc-role-badge">Head Coach & Director</div>
          <h3>Shri Rajesh Kumar Pandey</h3>
          <div class="hc-subtitle">Arjuna Awardee Nominee · National Level Coach</div>
          <div class="hc-social">
            <a href="#" class="hc-soc-btn"><i class="ti ti-brand-facebook"></i></a>
            <a href="#" class="hc-soc-btn"><i class="ti ti-brand-instagram"></i></a>
            <a href="#" class="hc-soc-btn"><i class="ti ti-mail"></i></a>
          </div>
        </div>
        <div class="hc-content">
          <div class="hc-header">
            <h2>Shri Rajesh Kumar Pandey</h2>
            <div class="hc-header-meta">
              <span class="hc-chip"><i class="ti ti-map-pin"></i> Varanasi, U.P.</span>
              <span class="hc-chip"><i class="ti ti-clock"></i> 18+ Years Experience</span>
              <span class="hc-chip"><i class="ti ti-certificate"></i> SAI Certified Level-3</span>
              <span class="hc-chip"><i class="ti ti-users"></i> 500+ Athletes Trained</span>
            </div>
          </div>

          <p class="hc-bio">Shri Rajesh Kumar Pandey is the founding head coach and driving force behind Shyama Handball Academy. With over 18 years of dedicated service to handball development in Uttar Pradesh, Coach Pandey has built a training methodology that seamlessly blends classical Indian coaching values with modern sport science principles. A former national-level player himself, he brings first-hand competitive experience to every session, understanding precisely what it takes to perform under pressure. His vision of accessible, world-class handball training for every child — regardless of background — is the very soul of this academy.</p>

          <div class="hc-stats">
            <div class="hc-stat">
              <span class="hc-stat-num">18+</span>
              <div class="hc-stat-label">Years Coaching</div>
            </div>
            <div class="hc-stat">
              <span class="hc-stat-num">500+</span>
              <div class="hc-stat-label">Athletes Trained</div>
            </div>
            <div class="hc-stat">
              <span class="hc-stat-num">40+</span>
              <div class="hc-stat-label">State Medals</div>
            </div>
          </div>

          <div class="hc-ach-list">
            <div class="hc-ach"><i class="ti ti-trophy"></i> Produced 12 state-level champions and 3 national-level players over career span</div>
            <div class="hc-ach"><i class="ti ti-certificate"></i> SAI (Sports Authority of India) Level-3 Coaching Certification holder</div>
            <div class="hc-ach"><i class="ti ti-medal"></i> Best Coach Award — U.P. Handball Association (2018, 2021)</div>
            <div class="hc-ach"><i class="ti ti-flag"></i> Chief coach for Varanasi District Handball team at State Championships (2015–2024)</div>
            <div class="hc-ach"><i class="ti ti-school"></i> Pioneered the School Integration Program reaching 20+ schools across Varanasi</div>
          </div>
        </div>
      </div>
  <?php
  endif;
  ?>

  <!-- ── ASSISTANT COACHES ── -->
  <div class="sec-divider">
    <div class="sd-ornament"><div class="sd-diamond"></div><div class="sd-line"></div></div>
    <div class="sd-text">Assistant Coaches</div>
    <div class="sd-full-line"></div>
  </div>

  <div class="asst-grid">
    <?php
    $assistants_query = new WP_Query( array(
        'post_type'      => 'coach',
        'posts_per_page' => 10,
        'meta_query'     => array(
            array(
                'key'     => 'coach_role',
                'value'   => 'Head Coach',
                'compare' => 'NOT LIKE',
            )
        )
    ) );

    if ( $assistants_query->have_posts() ) :
        while ( $assistants_query->have_posts() ) : $assistants_query->the_post();
            $role = get_post_meta( get_the_ID(), 'coach_role', true );
            $experience = get_post_meta( get_the_ID(), 'coach_experience', true );
            $certification = get_post_meta( get_the_ID(), 'coach_certification', true );
            $specialty = get_post_meta( get_the_ID(), 'coach_specialty', true );
            $tags = get_post_meta( get_the_ID(), 'coach_tags', true ); // comma separated tags
            $tags_arr = $tags ? explode(',', $tags) : array('Handball');
            
            $initials = 'CO';
            $words = explode( ' ', get_the_title() );
            if ( count($words) >= 2 ) {
                $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
            }
            ?>
            <!-- Coach Card -->
            <div class="asst-card">
              <div class="ac-top">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title_attribute(); ?>" style="width:90px; height:90px; border-radius:50%; object-fit:cover; border:3px solid var(--gold); margin-bottom:1rem;">
                <?php else : ?>
                    <div class="ac-avatar"><?php echo esc_html( $initials ); ?></div>
                <?php endif; ?>
                <div class="ac-role"><?php echo esc_html( $role ?: 'Assistant Coach' ); ?></div>
                <div class="ac-name"><?php the_title(); ?></div>
                <div class="ac-spec"><?php echo esc_html( $specialty ?: 'Tactics Expert' ); ?></div>
              </div>
              <div class="ac-body">
                <p class="ac-bio"><?php the_content(); ?></p>
                <div class="ac-tags">
                  <?php foreach ( $tags_arr as $t ) : ?>
                      <span class="ac-tag"><?php echo esc_html( trim( $t ) ); ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="ac-footer">
                <span class="ac-exp">Experience: <strong><?php echo esc_html( $experience ?: '5+' ); ?> Years</strong></span>
                <span class="ac-exp">SAI <strong><?php echo esc_html( $certification ?: 'Level-2' ); ?></strong></span>
              </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        // Static Fallback
        ?>
        <!-- Coach 1 -->
        <div class="asst-card">
          <div class="ac-top">
            <div class="ac-avatar">AM</div>
            <div class="ac-role">Asst. Coach – Boys</div>
            <div class="ac-name">Shri Arun Mishra</div>
            <div class="ac-spec">Goalkeeper Specialist · Tactics Expert</div>
          </div>
          <div class="ac-body">
            <p class="ac-bio">A former state-level goalkeeper, Coach Arun brings rare technical depth to goalkeeper training and team defensive systems. His tactical acumen has shaped the defensive identity of multiple championship-winning teams at district level.</p>
            <div class="ac-tags">
              <span class="ac-tag">Goalkeeping</span>
              <span class="ac-tag">Defense Systems</span>
              <span class="ac-tag">Set Plays</span>
              <span class="ac-tag">Youth Dev.</span>
            </div>
          </div>
          <div class="ac-footer">
            <span class="ac-exp">Experience: <strong>9 Years</strong></span>
            <span class="ac-exp">SAI <strong>Level-2</strong></span>
          </div>
        </div>

        <!-- Coach 2 -->
        <div class="asst-card">
          <div class="ac-top">
            <div class="ac-avatar">PS</div>
            <div class="ac-role">Asst. Coach – Girls</div>
            <div class="ac-name">Ms. Priya Srivastava</div>
            <div class="ac-spec">Female Athlete Development · Agility Coach</div>
          </div>
          <div class="ac-body">
            <p class="ac-bio">Coach Priya is a certified female athlete development specialist who has coached the Girls Team to four consecutive state titles. Her empathetic, high-energy coaching style creates a safe and fiercely competitive environment for young women in sport.</p>
            <div class="ac-tags">
              <span class="ac-tag">Agility Training</span>
              <span class="ac-tag">Women's Athletics</span>
              <span class="ac-tag">Speed & Footwork</span>
              <span class="ac-tag">Leadership</span>
            </div>
          </div>
          <div class="ac-footer">
            <span class="ac-exp">Experience: <strong>7 Years</strong></span>
            <span class="ac-exp">SAI <strong>Level-2</strong></span>
          </div>
        </div>

        <!-- Coach 3 -->
        <div class="asst-card">
          <div class="ac-top">
            <div class="ac-avatar">VT</div>
            <div class="ac-role">Fitness & Conditioning</div>
            <div class="ac-name">Shri Vikas Tiwari</div>
            <div class="ac-spec">Strength Coach · Sports Physiologist</div>
          </div>
          <div class="ac-body">
            <p class="ac-bio">Coach Vikas holds a degree in Sports Science and has developed the academy's comprehensive fitness curriculum from the ground up. He oversees strength training, injury prevention protocols, and sport-specific conditioning programs for all enrolled athletes.</p>
            <div class="ac-tags">
              <span class="ac-tag">Strength & Power</span>
              <span class="ac-tag">Injury Prevention</span>
              <span class="ac-tag">Sports Nutrition</span>
              <span class="ac-tag">Recovery</span>
            </div>
          </div>
          <div class="ac-footer">
            <span class="ac-exp">Experience: <strong>6 Years</strong></span>
            <span class="ac-exp">NSCA <strong>CSCS</strong></span>
          </div>
        </div>
    <?php
    endif;
    ?>
  </div>

  <!-- ── GUEST COACHES ── -->
  <div class="sec-divider">
    <div class="sd-ornament"><div class="sd-diamond"></div><div class="sd-line"></div></div>
    <div class="sd-text">Guest Coaches & Specialists</div>
    <div class="sd-full-line"></div>
  </div>

  <div class="guest-grid">
    <div class="guest-card">
      <div class="guest-avatar-wrap">
        <div class="guest-avatar">SK</div>
        <div class="guest-status"></div>
      </div>
      <div class="guest-info">
        <div class="guest-badge">Guest Expert</div>
        <div class="guest-name">Shri Suresh Kumar</div>
        <div class="guest-org">Former National Team Player · Sports Authority of India</div>
        <p class="guest-desc">A decorated former national handball player, Shri Suresh Kumar conducts intensive masterclasses for advanced and tournament-track athletes quarterly. His sessions on elite mental preparation and national-level match simulation are among the most valued at the academy.</p>
        <div class="guest-tags">
          <span class="guest-tag">National Level Experience</span>
          <span class="guest-tag">Mental Conditioning</span>
          <span class="guest-tag">Elite Technique</span>
        </div>
      </div>
    </div>

    <div class="guest-card">
      <div class="guest-avatar-wrap">
        <div class="guest-avatar">NV</div>
        <div class="guest-status"></div>
      </div>
      <div class="guest-info">
        <div class="guest-badge">Guest Expert</div>
        <div class="guest-name">Dr. Neha Varma</div>
        <div class="guest-org">Sports Psychologist · BHU Department of Sports Science</div>
        <p class="guest-desc">Dr. Neha Varma visits the academy monthly to conduct sports psychology workshops for both athletes and coaches. Her evidence-based interventions in performance anxiety management, focus training, and post-competition recovery have measurably improved team results.</p>
        <div class="guest-tags">
          <span class="guest-tag">Sports Psychology</span>
          <span class="guest-tag">Performance Anxiety</span>
          <span class="guest-tag">Focus & Mindset</span>
        </div>
      </div>
    </div>

    <div class="guest-card">
      <div class="guest-avatar-wrap">
        <div class="guest-avatar">MK</div>
        <div class="guest-status"></div>
      </div>
      <div class="guest-info">
        <div class="guest-badge">Guest Expert</div>
        <div class="guest-name">Shri Mahesh Keshari</div>
        <div class="guest-org">U.P. State Handball Association – Technical Director</div>
        <p class="guest-desc">As the Technical Director of U.P. Handball Association, Shri Mahesh Keshari provides strategic coaching clinics aligned with national federation standards. His guidance ensures our training methodology remains current with national and international handball evolution.</p>
        <div class="guest-tags">
          <span class="guest-tag">National Federation</span>
          <span class="guest-tag">Tactical Systems</span>
          <span class="guest-tag">Coaching Clinics</span>
        </div>
      </div>
    </div>

    <div class="guest-card">
      <div class="guest-avatar-wrap">
        <div class="guest-avatar">RD</div>
        <div class="guest-status"></div>
      </div>
      <div class="guest-info">
        <div class="guest-badge">Guest Expert</div>
        <div class="guest-name">Dr. Ranjit Das</div>
        <div class="guest-org">Sports Medicine Physician · Varanasi Sports Medicine Centre</div>
        <p class="guest-desc">Dr. Ranjit Das oversees the medical welfare of all academy athletes through bi-monthly health screenings, injury diagnosis, and rehabilitation planning. His proactive sports medicine approach has significantly reduced training-related injuries across all programs.</p>
        <div class="guest-tags">
          <span class="guest-tag">Sports Medicine</span>
          <span class="guest-tag">Injury Rehab</span>
          <span class="guest-tag">Athlete Health</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ── CERTIFICATIONS ── -->
  <div class="sec-divider">
    <div class="sd-ornament"><div class="sd-diamond"></div><div class="sd-line"></div></div>
    <div class="sd-text">Certifications & Accreditations</div>
    <div class="sd-full-line"></div>
  </div>

  <div class="cert-grid">
    <div class="cert-card">
      <div class="cert-icon-wrap ci-navy"><i class="ti ti-certificate"></i></div>
      <div class="cert-body">
        <h4>SAI Level-3 Coaching Certificate</h4>
        <p>The highest national coaching qualification issued by the Sports Authority of India — held by Head Coach Rajesh Kumar Pandey, recognizing elite-level coaching competence.</p>
      </div>
      <div class="cert-issuer"><i class="ti ti-building"></i> <strong>Sports Authority of India (SAI)</strong></div>
    </div>

    <div class="cert-card">
      <div class="cert-icon-wrap ci-gold"><i class="ti ti-award"></i></div>
      <div class="cert-body">
        <h4>SAI Level-2 Coaching Certificate</h4>
        <p>Intermediate coaching certification held by Assistant Coaches Arun Mishra and Priya Srivastava, validating professional-level handball coaching standards.</p>
      </div>
      <div class="cert-issuer"><i class="ti ti-building"></i> <strong>Sports Authority of India (SAI)</strong></div>
    </div>

    <div class="cert-card">
      <div class="cert-icon-wrap ci-green"><i class="ti ti-barbell"></i></div>
      <div class="cert-body">
        <h4>NSCA – CSCS (Certified Strength & Conditioning Specialist)</h4>
        <p>International certification in strength and conditioning science held by Coach Vikas Tiwari, ensuring our fitness programs meet global performance standards.</p>
      </div>
      <div class="cert-issuer"><i class="ti ti-world"></i> <strong>NSCA International</strong></div>
    </div>

    <div class="cert-card">
      <div class="cert-icon-wrap ci-blue"><i class="ti ti-flag"></i></div>
      <div class="cert-body">
        <h4>U.P. Handball Association – Affiliation Certificate</h4>
        <p>Shyama Handball Academy is officially affiliated with the Uttar Pradesh Handball Association, enabling athletes to compete in all state-recognised tournaments and leagues.</p>
      </div>
      <div class="cert-issuer"><i class="ti ti-building-community"></i> <strong>U.P. Handball Association</strong></div>
    </div>

    <div class="cert-card">
      <div class="cert-icon-wrap ci-red"><i class="ti ti-heart-rate-monitor"></i></div>
      <div class="cert-body">
        <h4>Sports First Aid & Emergency Response Certification</h4>
        <p>All full-time coaching staff hold current Sports First Aid certification, ensuring a medically prepared environment for every training session and competition.</p>
      </div>
      <div class="cert-issuer"><i class="ti ti-first-aid-kit"></i> <strong>Indian Red Cross Society</strong></div>
    </div>

    <div class="cert-card">
      <div class="cert-icon-wrap ci-purple"><i class="ti ti-school"></i></div>
      <div class="cert-body">
        <h4>Youth Athlete Development Program (YADP) Certification</h4>
        <p>Specialized certification in age-appropriate coaching methods for youth sports development, ensuring our beginner and school programs are built on sound developmental principles.</p>
      </div>
      <div class="cert-issuer"><i class="ti ti-building"></i> <strong>MYAS – Ministry of Youth Affairs & Sports</strong></div>
    </div>
  </div>

  <!-- ── EXPERIENCE & ACHIEVEMENTS ── -->
  <div class="sec-divider">
    <div class="sd-ornament"><div class="sd-diamond"></div><div class="sd-line"></div></div>
    <div class="sd-text">Experience & Achievements</div>
    <div class="sd-full-line"></div>
  </div>

  <div class="ach-layout">
    <div>
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-year">2025</div>
          <div class="tl-card">
            <h4>State U-19 Championship — Team Gold 🥇</h4>
            <p>The Boys U-19 team coached by Head Coach Pandey and Asst. Coach Arun Mishra clinched the state gold medal at the Uttar Pradesh U-19 Handball Championship, defeating the defending champion team in the final.</p>
            <span class="tl-badge">State Level · U-19 Boys</span>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-year">2023</div>
          <div class="tl-card">
            <h4>4 Athletes Selected for National Camp</h4>
            <p>Four athletes trained at Shyama Handball Academy were selected for the U.P. state squad that attended the National Sports Development Camp — the highest number from any single academy in the region.</p>
            <span class="tl-badge">National Level</span>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-year">2022</div>
          <div class="tl-card">
            <h4>Girls Team — Back-to-Back State Champions</h4>
            <p>Under Coach Priya Srivastava's guidance, the Girls Team won consecutive U.P. State Championships in 2021 and 2022, establishing the academy as the top girls' handball institution in the Varanasi division.</p>
            <span class="tl-badge">State Level · Girls Team</span>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-year">2021</div>
          <div class="tl-card">
            <h4>Best Coach Award — U.P. Handball Association</h4>
            <p>Head Coach Rajesh Kumar Pandey received the Best Coach of the Year Award from the Uttar Pradesh Handball Association for his outstanding contribution to grassroots handball development in the state.</p>
            <span class="tl-badge">Individual Award</span>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-year">2018</div>
          <div class="tl-card">
            <h4>School Integration Program Launched</h4>
            <p>Coach Pandey pioneered the School Handball Integration Program, partnering with 8 schools in Year 1. The program has since expanded to 20+ schools, reaching over 3,000 students annually across Varanasi.</p>
            <span class="tl-badge">Program Launch</span>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-year">2010</div>
          <div class="tl-card">
            <h4>Shyama Handball Academy Founded</h4>
            <p>Head Coach Rajesh Kumar Pandey founded the academy under the aegis of S.N. Pandey Khel Sansthan Trust with a founding batch of 22 students and a single outdoor court in Chandpur, Varanasi.</p>
            <span class="tl-badge">Academy Founded</span>
          </div>
        </div>
      </div>
    </div>

    <!-- AWARDS COLUMN -->
    <div class="awards-col">
      <div class="awards-header">
        <h4>Medals & Honours</h4>
        <p>A proud record of competitive excellence</p>
      </div>

      <div class="award-item">
        <div class="award-medal medal-gold">🥇</div>
        <div class="award-info">
          <h5>State Championship Gold × 6</h5>
          <p>Boys & Girls teams combined (2015–2025)</p>
        </div>
      </div>

      <div class="award-item">
        <div class="award-medal medal-silver">🥈</div>
        <div class="award-info">
          <h5>State Championship Silver × 8</h5>
          <p>Across age categories (2013–2024)</p>
        </div>
      </div>

      <div class="award-item">
        <div class="award-medal medal-bronze">🥉</div>
        <div class="award-info">
          <h5>State Championship Bronze × 12</h5>
          <p>Multiple categories over the years</p>
        </div>
      </div>

      <div class="award-item">
        <div class="award-medal" style="background:#ede9fe; font-size:18px;">🏅</div>
        <div class="award-info">
          <h5>Best Coach Award × 2</h5>
          <p>U.P. Handball Association (2018 & 2021)</p>
        </div>
      </div>

      <div class="award-item">
        <div class="award-medal" style="background:#fef3c7; font-size:18px;">⭐</div>
        <div class="award-info">
          <h5>4 National Camp Selections</h5>
          <p>Athletes selected for national-level camps (2023)</p>
        </div>
      </div>

      <div class="award-item">
        <div class="award-medal" style="background:#f0fdf4; font-size:18px;">🌟</div>
        <div class="award-info">
          <h5>3,000+ Students Reached</h5>
          <p>Via School Integration Program annually</p>
        </div>
      </div>

      <div class="award-item">
        <div class="award-medal" style="background:#dbeafe; font-size:18px;">🎖️</div>
        <div class="award-info">
          <h5>District Best Institution × 3</h5>
          <p>Varanasi District Sports Council (2019, 2022, 2024)</p>
        </div>
      </div>
    </div>
  </div>

</div><!-- /main -->

<script>
  // Counter Animation
  document.addEventListener("DOMContentLoaded", function() {
      const counters = document.querySelectorAll('.counter');
      const speed = 150; 

      const animateCounters = () => {
        counters.forEach(counter => {
          const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
              counter.innerText = Math.ceil(count + inc);
              setTimeout(updateCount, 20);
            } else {
              counter.innerText = target;
            }
          };
          updateCount();
        });
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      const statsSection = document.getElementById('stats-section');
      if (statsSection) {
        observer.observe(statsSection);
      }
  });
</script>

<?php
get_footer();
?>

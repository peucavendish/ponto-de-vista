<style>
  :root {
    --navy: #001845;
    --blue: #0466C8;
    --gold: #886B25;
    --gold-light: #FFC971;
    --bg: #EBEDF2;
    --white: #FFFFFF;
    --green: #7EC868;
    --red: #C8686D;
    --text: #1a1a2e;
    --muted: #6b7280;
    --border: #d1d5db;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    font-family: 'Inter', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
  }

  .portal-bar {
    background: #f4f6fb;
    border-bottom: 1px solid var(--border);
    padding: 0.65rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    font-size: 0.88rem;
  }

  .portal-bar a {
    color: var(--blue);
    font-weight: 700;
    text-decoration: none;
  }

  .portal-bar span {
    color: var(--muted);
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: 600;
  }

  .invest-cta-bar {
    max-width: 1100px;
    margin: 0 auto 28px;
    padding: 1rem 1.25rem;
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    box-shadow: 0 2px 10px rgba(0,24,69,0.06);
  }

  .invest-cta-bar p {
    margin: 0;
    font-size: 0.92rem;
    color: #374151;
    max-width: 52ch;
  }

  .invest-cta-bar a {
    text-decoration: none;
    background: var(--navy);
    color: var(--white);
    font-weight: 700;
    font-size: 0.88rem;
    padding: 0.7rem 1rem;
    border-radius: 8px;
    white-space: nowrap;
  }

  .invest-cta-bar a:hover { background: #0f326f; }

  .header {
    background: var(--navy);
    padding: 28px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 3px solid var(--gold);
  }

  .header-left { display: flex; align-items: center; gap: 20px; }
  .logo-svg { width: 44px; height: 44px; }
  .header-brand { color: var(--white); }
  .header-brand .firm { font-size: 18px; font-weight: 700; letter-spacing: -0.3px; }
  .header-brand .tagline { font-size: 11px; font-weight: 400; color: rgba(255,255,255,0.55); letter-spacing: 1.2px; text-transform: uppercase; margin-top: 2px; }
  .header-right { text-align: right; }
  .header-right .report-label { font-size: 11px; font-weight: 600; color: var(--gold-light); letter-spacing: 1.5px; text-transform: uppercase; }
  .header-right .report-date { font-size: 12px; color: rgba(255,255,255,0.5); margin-top: 3px; }

  .main { max-width: 1100px; margin: 0 auto; padding: 40px 24px 60px; }

  .title-block {
    background: var(--white);
    border-radius: 12px;
    padding: 36px 40px;
    margin-bottom: 28px;
    border-left: 5px solid var(--blue);
    box-shadow: 0 2px 12px rgba(0,24,69,0.07);
  }
  .title-block h1 { font-size: 26px; font-weight: 800; color: var(--navy); line-height: 1.25; letter-spacing: -0.5px; }
  .title-block h1 span { color: var(--blue); }
  .title-block .subtitle { margin-top: 12px; font-size: 14px; color: var(--muted); line-height: 1.65; max-width: 740px; }

  .cards-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 28px; }
  .card { background: var(--white); border-radius: 10px; padding: 22px 20px; box-shadow: 0 2px 10px rgba(0,24,69,0.06); border-top: 3px solid transparent; }
  .card.blue { border-top-color: var(--blue); }
  .card.gold { border-top-color: var(--gold); }
  .card.green { border-top-color: var(--green); }
  .card.red { border-top-color: var(--red); }
  .card .c-label { font-size: 10px; font-weight: 700; color: var(--muted); text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 10px; }
  .card .c-value { font-size: 28px; font-weight: 800; color: var(--navy); letter-spacing: -1px; line-height: 1; }
  .card .c-value.highlight-blue { color: var(--blue); }
  .card .c-value.highlight-red { color: var(--red); }
  .card .c-value.highlight-green { color: var(--green); }
  .card .c-desc { font-size: 11.5px; color: var(--muted); margin-top: 8px; line-height: 1.5; }

  .section-header { display: flex; align-items: center; gap: 12px; margin-bottom: 18px; margin-top: 36px; }
  .section-header .dot { width: 10px; height: 10px; border-radius: 50%; background: var(--blue); flex-shrink: 0; }
  .section-header h2 { font-size: 17px; font-weight: 700; color: var(--navy); letter-spacing: -0.3px; }
  .section-header .line { flex: 1; height: 1px; background: var(--border); }

  .chart-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
  .chart-row.full { grid-template-columns: 1fr; }
  .chart-box { background: var(--white); border-radius: 10px; padding: 24px; box-shadow: 0 2px 10px rgba(0,24,69,0.06); }
  .chart-box h3 { font-size: 13px; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
  .chart-box .chart-sub { font-size: 11px; color: var(--muted); margin-bottom: 18px; }
  .chart-box canvas { display: block; max-width: 100%; }

  .table-box { background: var(--white); border-radius: 10px; padding: 24px; box-shadow: 0 2px 10px rgba(0,24,69,0.06); margin-bottom: 20px; overflow-x: auto; }
  .table-box h3 { font-size: 13px; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
  .table-box .chart-sub { font-size: 11px; color: var(--muted); margin-bottom: 18px; }
  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  thead tr { background: var(--navy); }
  thead th { padding: 11px 14px; color: var(--white); font-weight: 600; text-align: left; font-size: 11px; letter-spacing: 0.5px; text-transform: uppercase; }
  tbody tr { border-bottom: 1px solid var(--bg); }
  tbody tr:hover { background: #f4f6fb; }
  tbody td { padding: 11px 14px; color: var(--text); vertical-align: middle; }
  .badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; }
  .badge-extreme { background: #fce8e8; color: var(--red); }
  .badge-strong { background: #fff3e0; color: #c47c00; }
  .badge-moderate { background: #e8f4fd; color: var(--blue); }
  .badge-weak { background: #e8f8e8; color: #3d8b3d; }
  .up { color: var(--red); font-weight: 700; }
  .dn { color: var(--green); font-weight: 700; }

  .analysis-box { background: var(--white); border-radius: 10px; padding: 28px 30px; box-shadow: 0 2px 10px rgba(0,24,69,0.06); margin-bottom: 20px; }
  .analysis-box p { font-size: 13.5px; line-height: 1.75; color: #374151; margin-bottom: 14px; }
  .analysis-box p:last-child { margin-bottom: 0; }
  .analysis-box strong { color: var(--navy); }

  .implication { background: var(--navy); border-radius: 10px; padding: 28px 30px; margin-bottom: 20px; color: var(--white); }
  .implication h3 { font-size: 14px; font-weight: 700; color: var(--gold-light); letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 18px; display: flex; align-items: center; gap: 8px; }
  .implication h3::before { content: ''; display: inline-block; width: 20px; height: 2px; background: var(--gold-light); }
  .impl-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
  .impl-item .impl-label { font-size: 10px; font-weight: 700; color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 8px; }
  .impl-item .impl-text { font-size: 13px; line-height: 1.65; color: rgba(255,255,255,0.88); }

  .proj-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 20px; }
  .proj-card { background: var(--white); border-radius: 10px; padding: 22px; box-shadow: 0 2px 10px rgba(0,24,69,0.06); border-bottom: 3px solid var(--border); text-align: center; }
  .proj-card.scenario-base { border-bottom-color: var(--blue); }
  .proj-card.scenario-alt { border-bottom-color: var(--gold); }
  .proj-card.scenario-risk { border-bottom-color: var(--red); }
  .proj-card .sc-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; color: var(--muted); margin-bottom: 12px; }
  .proj-card .sc-name { font-size: 15px; font-weight: 700; color: var(--navy); margin-bottom: 16px; }
  .proj-card .sc-metric { margin-bottom: 10px; }
  .proj-card .sc-metric .m-val { font-size: 22px; font-weight: 800; letter-spacing: -0.5px; }
  .proj-card .sc-metric .m-key { font-size: 11px; color: var(--muted); }
  .proj-card.scenario-base .m-val { color: var(--blue); }
  .proj-card.scenario-alt .m-val { color: var(--gold); }
  .proj-card.scenario-risk .m-val { color: var(--red); }
  .proj-card .sc-note { font-size: 11.5px; color: var(--muted); margin-top: 12px; line-height: 1.5; border-top: 1px solid var(--bg); padding-top: 10px; }

  .dual-shock-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 0; margin-top: 8px; font-size: 12px; }
  .dual-shock-col { display: flex; flex-direction: column; gap: 12px; }
  .dual-shock-col.left { padding-right: 16px; border-right: 2px dashed #d1d5db; }
  .dual-shock-col.center { padding: 0 20px; align-items: center; justify-content: center; }
  .dual-shock-col.right { padding-left: 16px; border-left: 2px dashed #d1d5db; }

  .footer { background: var(--navy); padding: 20px 40px; text-align: center; color: rgba(255,255,255,0.4); font-size: 11px; border-top: 2px solid var(--gold); }
  .footer strong { color: rgba(255,255,255,0.7); }

  @media (max-width: 768px) {
    .cards-grid { grid-template-columns: 1fr 1fr; }
    .chart-row { grid-template-columns: 1fr; }
    .impl-grid { grid-template-columns: 1fr; }
    .proj-grid { grid-template-columns: 1fr; }
    .dual-shock-grid { grid-template-columns: 1fr; }
    .dual-shock-col.left, .dual-shock-col.right { border: none; padding: 0; }
    .header { padding: 20px; flex-direction: column; align-items: flex-start; gap: 12px; }
    .header-right { text-align: left; }
    .main { padding: 24px 16px 40px; }
  }
</style>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El Niño, IPCA e Juros — Estudo Especial | Ponto de Vista</title>
    <meta name="description" content="Estudo de Guilherme Jung sobre o impacto do El Niño no IPCA brasileiro, o choque duplo com petróleo e implicações para a Selic em 2026.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/el-nino-ipca-juros-2026') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="El Niño, IPCA e Juros — O Canal Climático da Inflação Brasileira">
    <meta property="og:description" content="Análise histórica do El Niño sobre alimentos e IPCA, choque duplo com petróleo e cenários para Selic em 2026.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/el-nino-ipca-juros-2026') }}">
    <meta property="og:image" content="{{ url(asset('og-ponto-de-vista-1200x630.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-05-18">
    <meta property="article:section" content="Macroeconomia">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="El Niño, IPCA e Juros — Estudo Especial">
    <meta name="twitter:description" content="Canal climático da inflação, episódios históricos e projeções para 2026.">
    <meta name="twitter:image" content="{{ url(asset('og-ponto-de-vista-1200x630.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "El Niño, IPCA e Juros — O Canal Climático da Inflação Brasileira",
            "author": { "@@type": "Person", "name": "Guilherme Jung" },
            "publisher": { "@@type": "Organization", "name": "Alta Vista Investimentos" },
            "datePublished": "2026-05-18",
            "dateModified": "2026-05-18",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/el-nino-ipca-juros-2026') }}",
            "description": "Estudo macroeconômico sobre El Niño, IPCA, petróleo e política monetária no Brasil."
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js" defer></script>
    <style>
        :root {
            color-scheme: light;
            --bg: #f2f5fb;
            --surface: #ffffff;
            --text: #12284a;
            --muted: #5f7090;
            --line: #dde6f4;
            --brand: #163f88;
            --soft: #f7faff;
            --accent: #c59f38;
            --danger: #b42318;
            --success: #2d6a4f;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Inter, "Segoe UI", Roboto, system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.65;
        }

        .container { width: min(860px, 100% - 2rem); margin-inline: auto; }

        .top {
            padding: 1.1rem 0 0.6rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.7rem;
            flex-wrap: wrap;
        }

        .back { text-decoration: none; color: var(--brand); font-weight: 700; font-size: 0.92rem; }

        .section-chip {
            font-size: 0.78rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #3f547a;
            background: #f4f8ff;
            border: 1px solid #d7e3f9;
            border-radius: 999px;
            padding: 0.3rem 0.62rem;
            font-weight: 700;
        }

        article {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 1.55rem;
            box-shadow: 0 14px 30px rgba(13, 28, 57, 0.08);
        }

        .kicker { margin: 0 0 0.6rem; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.08em; color: #48618e; font-weight: 700; }
        h1 { margin: 0; font-size: clamp(1.45rem, 2.3vw + 0.75rem, 2.25rem); line-height: 1.2; letter-spacing: -0.01em; }
        .meta { margin: 0.8rem 0 0; color: var(--muted); font-size: 0.95rem; }
        .lead { margin: 1.1rem 0 0; padding: 0.85rem 1rem; border-left: 4px solid var(--accent); background: #fffaf1; border-radius: 10px; color: #32496f; font-size: 1.02rem; }

        .summary { margin-top: 1.2rem; background: var(--soft); border: 1px solid #d7e4f9; border-radius: 14px; padding: 1rem; }
        .summary h2 { margin: 0 0 0.55rem; font-size: 1rem; color: var(--brand); }
        .summary ul { margin: 0; padding-left: 1.1rem; display: grid; gap: 0.35rem; color: #2e4369; }

        .content { margin-top: 1.65rem; color: #23395f; font-size: 1.03rem; }
        .content h2 { margin: 1.65rem 0 0.62rem; font-size: 1.08rem; color: var(--brand); }
        .content > h2:first-of-type { margin-top: 0; }
        .content h2 + p { margin-top: 0; }
        .content p { margin: 0 0 1rem; }

        .metric-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 0.65rem;
            margin: 1rem 0 1.25rem;
        }

        .metric-card {
            background: var(--soft);
            border: 1px solid #d7e4f9;
            border-radius: 12px;
            padding: 0.85rem;
            border-top: 3px solid var(--brand);
        }

        .metric-card.accent { border-top-color: var(--accent); }
        .metric-card.danger { border-top-color: var(--danger); }
        .metric-card.success { border-top-color: var(--success); }

        .metric-card .m-label { display: block; font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: var(--muted); margin-bottom: 0.35rem; }
        .metric-card .m-value { font-size: 1.35rem; font-weight: 800; color: var(--brand); line-height: 1.1; }
        .metric-card.danger .m-value { color: var(--danger); }
        .metric-card.accent .m-value { color: #8a6d1f; }
        .metric-card.success .m-value { color: var(--success); }
        .metric-card .m-desc { margin-top: 0.4rem; font-size: 0.82rem; color: var(--muted); line-height: 1.45; }

        .chart-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin: 1.25rem 0; }
        .chart-row.single { grid-template-columns: 1fr; }

        .chart-panel {
            background: var(--soft);
            border: 1px solid #d7e4f9;
            border-radius: 14px;
            padding: 1rem;
        }

        .chart-panel h3 { margin: 0 0 0.25rem; font-size: 0.92rem; color: var(--brand); font-weight: 700; }
        .chart-panel .chart-note { margin: 0 0 0.75rem; font-size: 0.8rem; color: var(--muted); }
        .chart-panel canvas { display: block; max-width: 100%; }

        .data-table-wrap { overflow-x: auto; margin: 1.25rem 0; border: 1px solid #d7e4f9; border-radius: 14px; }
        .data-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; }
        .data-table thead tr { background: var(--brand); }
        .data-table thead th { padding: 0.65rem 0.75rem; color: #fff; font-weight: 600; text-align: left; font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.04em; }
        .data-table tbody tr { border-bottom: 1px solid var(--line); }
        .data-table tbody td { padding: 0.65rem 0.75rem; vertical-align: middle; }
        .data-table tbody tr:hover { background: #f4f8ff; }

        .badge { display: inline-block; padding: 0.15rem 0.5rem; border-radius: 999px; font-size: 0.72rem; font-weight: 700; }
        .badge-extreme { background: #fce8e8; color: var(--danger); }
        .badge-strong { background: #fff3e0; color: #9a5f00; }
        .badge-moderate { background: #e8f0fa; color: var(--brand); }
        .badge-weak { background: #e8f5ee; color: var(--success); }
        .val-up { color: var(--danger); font-weight: 700; }

        .highlight-box {
            background: var(--brand);
            color: #fff;
            border-radius: 14px;
            padding: 1.1rem 1.15rem;
            margin: 1.25rem 0;
        }

        .highlight-box h3 { margin: 0 0 0.85rem; font-size: 0.95rem; color: var(--accent); text-transform: uppercase; letter-spacing: 0.05em; }
        .highlight-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem; }
        .highlight-item .h-label { font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(255,255,255,0.55); margin-bottom: 0.35rem; }
        .highlight-item .h-text { font-size: 0.88rem; line-height: 1.6; color: rgba(255,255,255,0.9); }

        .scenario-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.65rem; margin: 1rem 0 1.25rem; }
        .scenario-card { background: var(--soft); border: 1px solid #d7e4f9; border-radius: 12px; padding: 0.9rem; text-align: center; border-bottom: 3px solid var(--line); }
        .scenario-card.base { border-bottom-color: var(--brand); }
        .scenario-card.alt { border-bottom-color: var(--accent); }
        .scenario-card.risk { border-bottom-color: var(--danger); }
        .scenario-card .sc-label { font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: var(--muted); margin-bottom: 0.4rem; }
        .scenario-card .sc-name { font-size: 0.92rem; font-weight: 700; color: var(--brand); margin-bottom: 0.65rem; }
        .scenario-card .sc-val { font-size: 1.25rem; font-weight: 800; color: var(--brand); }
        .scenario-card.alt .sc-val { color: #8a6d1f; }
        .scenario-card.risk .sc-val { color: var(--danger); }
        .scenario-card .sc-key { font-size: 0.75rem; color: var(--muted); margin-bottom: 0.5rem; }
        .scenario-card .sc-note { font-size: 0.78rem; color: var(--muted); line-height: 1.45; border-top: 1px solid var(--line); padding-top: 0.55rem; margin-top: 0.55rem; text-align: left; }

        .flow-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 0.75rem; margin-top: 0.75rem; font-size: 0.85rem; }
        .flow-col { display: flex; flex-direction: column; gap: 0.55rem; }
        .flow-col.center { align-items: stretch; justify-content: center; }
        .flow-box { border-radius: 10px; padding: 0.75rem; line-height: 1.5; border: 1px solid var(--line); background: #fff; }
        .flow-box strong { display: block; font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.25rem; }
        .flow-box.shock-oil { border-left: 3px solid var(--danger); background: #fff8f8; }
        .flow-box.shock-oil strong { color: var(--danger); }
        .flow-box.shock-climate { border-left: 3px solid var(--accent); background: #fffaf1; }
        .flow-box.shock-climate strong { color: #8a6d1f; }
        .flow-box.channel { border-color: #b8cce8; background: #f4f8ff; text-align: center; }
        .flow-box.channel strong { color: var(--brand); }
        .flow-box.result { background: var(--brand); color: #fff; border: none; text-align: center; }
        .flow-box.result strong { color: rgba(255,255,255,0.65); }
        .flow-box.result .big { font-size: 1.5rem; font-weight: 800; color: var(--accent); }
        .flow-arrow { text-align: center; color: var(--muted); font-size: 1.1rem; }

        .source-note { margin-top: 1rem; padding: 0.85rem 1rem; background: #f8fbff; border: 1px solid #d5e3f9; border-radius: 12px; font-size: 0.92rem; color: #334a71; }
        .source-note a { color: var(--brand); font-weight: 600; }

        .invest-cta {
            margin-top: 1.25rem;
            background: #f8fbff;
            border: 1px solid #d5e3f9;
            border-radius: 14px;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .invest-cta p { margin: 0; color: #334a71; font-size: 0.95rem; max-width: 53ch; }
        .btn-invest { text-decoration: none; padding: 0.72rem 1rem; border-radius: 10px; background: var(--brand); color: #fff; border: 1px solid var(--brand); font-weight: 700; font-size: 0.9rem; }
        .btn-invest:hover { background: #0f326f; }

        @media (max-width: 680px) {
            article { padding: 1.08rem; border-radius: 16px; }
            .content { font-size: 0.99rem; }
            .chart-row, .highlight-grid, .scenario-grid, .flow-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container top">
        <a class="back" href="{{ url('/') }}">← Voltar ao portal</a>
        <span class="section-chip">Série de análises</span>
    </div>

    <main class="container">
        <article itemscope itemtype="https://schema.org/Article">
            <p class="kicker">Estudo especial · Inflação</p>
            <h1>El Niño, IPCA e Juros — O Canal Climático da Inflação Brasileira</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-05-18" itemprop="datePublished">18/05/2026</time></p>

            <p class="lead">
                Análise histórica do impacto dos episódios de El Niño sobre o grupo Alimentação e Bebidas do IPCA e as implicações para a política monetária — dos episódios de 2015–16 e 2023–24 ao risco de um Super El Niño em 2026, em conjunto com o choque de petróleo.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>Desde 1950, houve <strong>3 episódios extremos</strong> de El Niño (1982/83, 1997/98, 2015/16); em 2024, a contribuição na inflação de alimentos chegou a <strong>+2,25 pp</strong> (LCA 4intelligence).</li>
                    <li>Cenário base Alta Vista/XP: <strong>IPCA de 5,3%</strong> e <strong>Selic terminal de 13,75%</strong> em 2026, com cortes limitados a 25 bp por reunião.</li>
                    <li>Petróleo e El Niño convergem pelo <strong>mesmo canal — frete e logística</strong> —, tornando a inflação de 2026 mais resistente do que o headline do IPCA sugere.</li>
                </ul>
            </section>

            <section class="content">
                <div class="metric-grid">
                    <div class="metric-card">
                        <span class="m-label">Episódios extremos (desde 1950)</span>
                        <span class="m-value">3</span>
                        <span class="m-desc">1982/83 · 1997/98 · 2015/16. O 4º pode vir em 2026.</span>
                    </div>
                    <div class="metric-card danger">
                        <span class="m-label">Impacto máx. em alimentos</span>
                        <span class="m-value">+2,25 pp</span>
                        <span class="m-desc">Contribuição do El Niño em 2024 (LCA 4intelligence).</span>
                    </div>
                    <div class="metric-card accent">
                        <span class="m-label">IPCA 2026 — Cenário Base AV</span>
                        <span class="m-value">5,3%</span>
                        <span class="m-desc">Choque duplo: petróleo + El Niño. Acima do teto de 4,5%.</span>
                    </div>
                    <div class="metric-card success">
                        <span class="m-label">Selic Terminal 2026 — Cenário AV</span>
                        <span class="m-value">13,75%</span>
                        <span class="m-desc">Cortes de 25 bp/reunião. Sem espaço para acelerar.</span>
                    </div>
                </div>

                <h2>1. O canal climático — como o El Niño chega ao IPCA</h2>
                <p>O El Niño ocorre quando as águas superficiais do Oceano Pacífico Equatorial se aquecem acima da média, alterando padrões atmosféricos globais. No Brasil, o fenômeno produz <strong>seca no Norte e Nordeste</strong> e <strong>chuvas intensas no Sul</strong>, afetando soja, milho, feijão, arroz e hortaliças.</p>
                <p>A transmissão para o IPCA acontece por três canais: <strong>(1) choque de oferta agrícola</strong>; <strong>(2) canal logístico</strong> — frete pode subir até 57% nos episódios mais severos; e <strong>(3) efeito de segunda ordem</strong> — ração mais cara pressiona proteínas e pode contaminar expectativas e serviços.</p>
                <p>Com o dólar em torno de R$5,00 — abaixo dos picos de 2024 — o canal de importados está mais benigno. O modelo do BC (2019), atualizado pela LCA 4intelligence, usa ONI, chuva (Inmet), IC-Br e hiato do produto para isolar o efeito climático líquido.</p>

                <h2>2. Episódios históricos — IPCA e alimentos</h2>

                <div class="chart-row">
                    <div class="chart-panel">
                        <h3>Contribuição do El Niño na inflação de alimentos (pp)</h3>
                        <p class="chart-note">Alimentação no domicílio · Fonte: BCB/LCA 4intelligence</p>
                        <canvas id="chartElNinoContrib" height="240"></canvas>
                    </div>
                    <div class="chart-panel">
                        <h3>IPCA geral vs. grupo Alimentos</h3>
                        <p class="chart-note">Variação anual em % · Fonte: IBGE/IPCA</p>
                        <canvas id="chartIPCA" height="240"></canvas>
                    </div>
                </div>

                <div class="data-table-wrap">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Episódio</th>
                                <th>Intensidade</th>
                                <th>Alimentos</th>
                                <th>Contrib. El Niño</th>
                                <th>IPCA geral</th>
                                <th>Selic final</th>
                                <th>BC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>2015</strong></td><td><span class="badge badge-extreme">Extremo</span></td><td class="val-up">+12,0%</td><td class="val-up">+3,5 pp</td><td class="val-up">10,67%</td><td><strong>14,25%</strong></td><td>Alta agressiva</td></tr>
                            <tr><td><strong>2016</strong></td><td><span class="badge badge-extreme">Extremo</span></td><td class="val-up">+9,5%</td><td class="val-up">+3,2 pp</td><td class="val-up">6,29%</td><td><strong>13,75%</strong></td><td>Início cortes</td></tr>
                            <tr><td><strong>2018/19</strong></td><td><span class="badge badge-weak">Fraco/Mod.</span></td><td class="val-up">+4,3%</td><td>+1,5 pp</td><td>3,75%</td><td><strong>6,50%</strong></td><td>Manutenção</td></tr>
                            <tr><td><strong>2023</strong></td><td><span class="badge badge-moderate">Moderado</span></td><td class="val-up">+5,8%</td><td>+1,55 pp</td><td>4,62%</td><td><strong>11,75%</strong></td><td>Início cortes</td></tr>
                            <tr><td><strong>2024</strong></td><td><span class="badge badge-strong">Forte</span></td><td class="val-up">+8,22%</td><td class="val-up"><strong>+2,25 pp</strong></td><td class="val-up">4,83%</td><td><strong>12,25%</strong></td><td>Pausa/alta</td></tr>
                            <tr><td><strong>2026 (proj.)</strong></td><td><span class="badge badge-extreme">Extremo?</span></td><td class="val-up">+4% a +4,5%</td><td class="val-up">+0,5 a +0,8 pp</td><td>4,89%</td><td><strong>—</strong></td><td>Risco altista</td></tr>
                        </tbody>
                    </table>
                </div>

                <h2>3. Grupos mais impactados dentro do IPCA</h2>

                <div class="chart-row">
                    <div class="chart-panel">
                        <h3>Subgrupos de alimentos mais pressionados</h3>
                        <p class="chart-note">Sensibilidade relativa ao choque climático</p>
                        <canvas id="chartSubgrupos" height="260"></canvas>
                    </div>
                    <div class="chart-panel">
                        <h3>Peso dos grupos no IPCA</h3>
                        <p class="chart-note">Estrutura IBGE POF 2017/2018</p>
                        <canvas id="chartPeso" height="260"></canvas>
                    </div>
                </div>

                <p><strong>Alimentos in natura</strong> reagem primeiro: hortaliças, frutas e tubérculos têm ciclos curtos. Em jan/2024, Alimentação e Bebidas saltou de +1,11% para +1,38%, contribuindo com 0,29 pp do IPCA de 0,42%.</p>
                <p><strong>Cereais e oleaginosas</strong> têm impacto defasado de 3 a 6 meses. <strong>Carnes</strong> respondem em segunda ordem via ração. <strong>Energia elétrica</strong> pode ser afetada indiretamente — em 2015, a crise hídrica ativou bandeiras tarifárias.</p>

                <h2>4. Canal de transmissão para juros — a lógica do Copom</h2>

                <div class="chart-row single">
                    <div class="chart-panel">
                        <h3>Selic x IPCA x Alimentos (2015–2024)</h3>
                        <p class="chart-note">Anos com fenômeno ativo · Fonte: BCB/IBGE</p>
                        <canvas id="chartSelic" height="280"></canvas>
                    </div>
                </div>

                <p>O Copom distingue choque de oferta de contaminação para núcleos e expectativas. Em <strong>2015/16</strong>, o choque extremo coincidiu com crise fiscal e desancoragem — Selic a 14,25%. Em <strong>2023/24</strong>, cortes foram retomados até núcleos surpreenderem; Selic voltou ao pico de 14,75%.</p>
                <p>Hoje, com Selic em <strong>14,50%</strong> e Focus em 13,00% para fim de 2026, o BC avalia <em>persistência</em>, <em>contaminação de núcleos</em> e <em>expectativas em 18–24 meses</em>. Os três sinais juntos podem pausar cortes — sem necessariamente reverter o ciclo.</p>

                <div class="highlight-box">
                    <h3>Implicações para política monetária</h3>
                    <div class="highlight-grid">
                        <div class="highlight-item">
                            <div class="h-label">Mecanismo</div>
                            <div class="h-text">El Niño → oferta agrícola → alimentos → IPCA cheio → expectativas → Copom. Prazo típico: 2 a 4 trimestres entre pico do fenômeno e pico inflacionário.</div>
                        </div>
                        <div class="highlight-item">
                            <div class="h-label">Regra de bolso</div>
                            <div class="h-text">Moderado: +1,0 a +1,5 pp em alimentos. Forte/extremo: +2,0 a +3,5 pp em alimentos, +0,5 a +0,8 pp no IPCA geral.</div>
                        </div>
                        <div class="highlight-item">
                            <div class="h-label">Fator atenuante 2026</div>
                            <div class="h-text">Câmbio em R$5,00 e Selic restritiva limitam repasse cambial e demanda, criando espaço para absorver o choque sem nova aceleração.</div>
                        </div>
                        <div class="highlight-item">
                            <div class="h-label">O que monitorar</div>
                            <div class="h-text">ONI (NOAA), safra IBGE (mai/jun), IPCA-15 (jul/ago) e Focus 12 e 24 meses.</div>
                        </div>
                    </div>
                </div>

                <h2>5. O choque duplo — petróleo + El Niño</h2>
                <p>O petróleo explica cerca de <strong>60% do IPCA acumulado no 1T26</strong> (Daycoval). Brent entre US$80–100 pressiona combustíveis; no médio prazo, contamina serviços via frete. <strong>Diesel mais caro encarece o escoamento da safra; El Niño reduz a safra a escoar.</strong></p>
                <p>XP projeta IPCA <strong>5,3%</strong> e Selic <strong>13,75%</strong> em 2026. Itaú: 5,2% com risco para cima. O debate migrou de “quanto acelerar cortes” para “onde parar”.</p>

                <div class="chart-panel">
                    <h3>O canal do choque duplo</h3>
                    <p class="chart-note">Como petróleo e El Niño se encontram no IPCA · elaboração Alta Vista</p>
                    <div class="flow-grid">
                        <div class="flow-col">
                            <div class="flow-box shock-oil"><strong>Choque petróleo</strong>Brent US$80–100 · guerra Irã · repasse a gasolina e diesel</div>
                            <div class="flow-box shock-climate"><strong>Choque El Niño</strong>ONI elevado · seca Norte/NE · chuvas no Sul · quebra de safra</div>
                        </div>
                        <div class="flow-col center">
                            <div class="flow-box channel"><strong>Frete / logística</strong>Diesel caro + estradas + rios secos</div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-box channel"><strong>Alimentos no domicílio</strong>Custo agrícola + transporte elevam preço final</div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-box channel"><strong>Inércia / serviços</strong>Reajustes e expectativas desancoradas</div>
                        </div>
                        <div class="flow-col">
                            <div class="flow-box result"><strong>IPCA 2026 (AV)</strong><span class="big">5,3%</span></div>
                            <div class="flow-box result"><strong>Selic terminal</strong><span class="big" style="color:#fff">13,75%</span></div>
                            <div class="flow-box" style="text-align:center"><strong>Ritmo Copom</strong>25 bp / reunião — sem acelerar</div>
                        </div>
                    </div>
                </div>

                <h2>6. Cenários para Selic e IPCA em 2026</h2>

                <div class="scenario-grid">
                    <div class="scenario-card base">
                        <div class="sc-label">Cenário base · AV</div>
                        <div class="sc-name">Duplo choque moderado</div>
                        <div class="sc-val">5,3%</div>
                        <div class="sc-key">IPCA 2026</div>
                        <div class="sc-val">13,75%</div>
                        <div class="sc-key">Selic fim de 2026</div>
                        <div class="sc-note">El Niño moderado + Brent US$75–80 no 2S26. Copom corta 25 bp em jun, set e dez. Alinhado à XP.</div>
                    </div>
                    <div class="scenario-card alt">
                        <div class="sc-label">Cenário otimista</div>
                        <div class="sc-name">Alívio geopolítico</div>
                        <div class="sc-val">4,7%</div>
                        <div class="sc-key">IPCA 2026</div>
                        <div class="sc-val">13,0%</div>
                        <div class="sc-key">Selic fim de 2026</div>
                        <div class="sc-note">Brent abaixo de US$70 + El Niño fraco. Um corte de 50 bp possível.</div>
                    </div>
                    <div class="scenario-card risk">
                        <div class="sc-label">Cenário de risco</div>
                        <div class="sc-name">Choque duplo extremo</div>
                        <div class="sc-val">6,0%+</div>
                        <div class="sc-key">IPCA 2026</div>
                        <div class="sc-val">14,0%+</div>
                        <div class="sc-key">Selic fim de 2026</div>
                        <div class="sc-note">Super El Niño + Brent acima de US$100. Ciclo de cortes interrompido.</div>
                    </div>
                </div>

                <p><strong>Probabilidade de El Niño: 62%</strong> (jun–ago/2026) e <strong>80%</strong> até dez (NOAA). O ponto central: petróleo e clima compartilham o <strong>mesmo canal — o frete</strong> —, tornando a inflação de 2026 estruturalmente mais resistente.</p>
                <p>No cenário base, IPCA em <strong>5,3%</strong> e Selic em <strong>13,75%</strong>, com serviços perto de 6% a.a., hiato positivo e Focus desancorado por 9 semanas.</p>
            </section>

            <p class="source-note">
                Estudo macroeconômico especial · Guilherme Jung, Alta Vista Investimentos · Maio/2026.
                Fontes: BCB/Daycoval, LCA 4intelligence, NOAA, ECMWF, IBGE, XP, Itaú, Focus/BCB.
            </p>

            <section class="invest-cta">
                <p>Quer transformar esse cenário em estratégia de carteira? Fale com o time da Alta Vista.</p>
                <a class="btn-invest" href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">Quero investir com a Alta Vista</a>
            </section>
        </article>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof Chart === 'undefined') return;
        const grid = '#dde6f4';
        const brand = '#163f88';
        const accent = '#c59f38';
        const danger = '#b42318';
        const sm = { size: 11 };

        new Chart(document.getElementById('chartElNinoContrib'), {
            type: 'bar',
            data: {
                labels: ['2015', '2016', '2018/19', '2023', '2024', '2026 (proj.)'],
                datasets: [{ data: [3.5, 3.2, 1.5, 1.55, 2.25, 0.65], backgroundColor: [danger, danger, brand, accent, danger, '#e8c96a'], borderRadius: 5, borderSkipped: false }]
            },
            options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, grid: { color: grid }, ticks: { callback: v => '+' + v + ' pp', font: sm } }, x: { grid: { display: false }, ticks: { font: sm } } } }
        });

        new Chart(document.getElementById('chartIPCA'), {
            type: 'bar',
            data: {
                labels: ['2015', '2016', '2019', '2023', '2024'],
                datasets: [
                    { label: 'IPCA Geral', data: [10.67, 6.29, 4.31, 4.62, 4.83], backgroundColor: brand, borderRadius: 4, borderSkipped: false },
                    { label: 'Alimentos', data: [12.0, 9.5, 6.5, 5.8, 8.22], backgroundColor: danger, borderRadius: 4, borderSkipped: false }
                ]
            },
            options: { responsive: true, plugins: { legend: { position: 'bottom', labels: { font: sm, boxWidth: 14 } } }, scales: { y: { beginAtZero: true, grid: { color: grid }, ticks: { callback: v => v + '%', font: sm } }, x: { grid: { display: false }, ticks: { font: sm } } } }
        });

        new Chart(document.getElementById('chartSubgrupos'), {
            type: 'bar',
            data: {
                labels: ['Hortaliças', 'Frutas', 'Cereais', 'Óleos', 'Carnes', 'Leite', 'Panificados'],
                datasets: [{ data: [95, 80, 70, 65, 55, 40, 25], backgroundColor: [danger, '#c85c3a', accent, '#e8c96a', brand, '#4d8ec4', '#7EC868'], borderRadius: 5, borderSkipped: false }]
            },
            options: { indexAxis: 'y', responsive: true, plugins: { legend: { display: false } }, scales: { x: { beginAtZero: true, max: 100, grid: { color: grid } }, y: { grid: { display: false }, ticks: { font: sm } } } }
        });

        new Chart(document.getElementById('chartPeso'), {
            type: 'doughnut',
            data: {
                labels: ['Alimentação (23,2%)', 'Habitação (14,1%)', 'Transporte (20,4%)', 'Saúde (7,2%)', 'Educação (6,4%)', 'Vestuário (5,6%)', 'Outros (23,1%)'],
                datasets: [{ data: [23.2, 14.1, 20.4, 7.2, 6.4, 5.6, 23.1], backgroundColor: [danger, brand, accent, '#7EC868', '#e8c96a', '#4d8ec4', '#DCDCDC'], borderWidth: 2, borderColor: '#fff' }]
            },
            options: { responsive: true, cutout: '55%', plugins: { legend: { position: 'bottom', labels: { font: { size: 10 }, boxWidth: 12 } } } }
        });

        new Chart(document.getElementById('chartSelic'), {
            type: 'line',
            data: {
                labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [
                    { label: 'Selic', data: [14.25, 13.75, 7.0, 6.5, 4.5, 2.0, 9.25, 13.75, 11.75, 12.25], borderColor: brand, tension: 0.3, pointRadius: 4, borderWidth: 2.5 },
                    { label: 'IPCA Geral', data: [10.67, 6.29, 2.95, 3.75, 4.31, 4.52, 10.06, 5.79, 4.62, 4.83], borderColor: accent, tension: 0.3, pointRadius: 4, borderWidth: 2, borderDash: [5, 3] },
                    { label: 'Alimentos', data: [12.0, 9.5, 1.2, 4.0, 6.5, 8.5, 14.0, 11.7, 5.8, 8.22], borderColor: danger, tension: 0.3, pointRadius: 4, borderWidth: 2, borderDash: [2, 2] }
                ]
            },
            options: { responsive: true, interaction: { mode: 'index', intersect: false }, plugins: { legend: { position: 'bottom', labels: { font: sm, boxWidth: 14 } } }, scales: { y: { grid: { color: grid }, ticks: { callback: v => v + '%', font: sm } }, x: { grid: { display: false }, ticks: { font: sm } } } }
        });
    });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IBC-Br de março (-0,67%): 1T26 robusto, herança fraca para o 2T | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre o IBC-Br de março: queda de 0,67% no mês, avanço de 1,3% no 1T26, desempenho por setor e leitura de conjuntura para o PIB.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/ibc-br-marco-2026-1t26') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="IBC-Br: março fraco, mas o 1T26 fecha sólido">
    <meta property="og:description" content="Atividade recua 0,67% em março; trimestre avança 1,3% tri/tri. Serviços puxam a queda; carregamento estatístico negativo para o 2T26.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/ibc-br-marco-2026-1t26') }}">
    <meta property="og:image" content="{{ url(asset('artigos/ibc-br-marco-2026-serie.png')) }}">
    <meta property="og:image:alt" content="Gráfico IBC-Br: variação mensal e acumulada em 12 meses até março de 2026">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-05-18">
    <meta property="article:section" content="Atividade">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IBC-Br: março fraco, mas o 1T26 fecha sólido">
    <meta name="twitter:description" content="Leitura do IBC-Br de março, desempenho setorial e implicações para o PIB do 1T26.">
    <meta name="twitter:image" content="{{ url(asset('artigos/ibc-br-marco-2026-serie.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "IBC-Br de março (-0,67%): 1T26 robusto, herança fraca para o 2T",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-05-18",
            "dateModified": "2026-05-18",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/ibc-br-marco-2026-1t26') }}",
            "description": "Análise do IBC-Br de março no Brasil: queda mensal, crescimento no 1T26, setores e implicações para a atividade nos próximos trimestres."
        }
    </script>
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
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Inter, "Segoe UI", Roboto, system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.65;
        }

        .container {
            width: min(860px, 100% - 2rem);
            margin-inline: auto;
        }

        .top {
            padding: 1.1rem 0 0.6rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.7rem;
            flex-wrap: wrap;
        }

        .back {
            text-decoration: none;
            color: var(--brand);
            font-weight: 700;
            font-size: 0.92rem;
        }

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

        .kicker {
            margin: 0 0 0.6rem;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #48618e;
            font-weight: 700;
        }

        h1 {
            margin: 0;
            font-size: clamp(1.45rem, 2.3vw + 0.75rem, 2.25rem);
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        .meta {
            margin: 0.8rem 0 0;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .lead {
            margin: 1.1rem 0 0;
            padding: 0.85rem 1rem;
            border-left: 4px solid var(--accent);
            background: #fffaf1;
            border-radius: 10px;
            color: #32496f;
            font-size: 1.02rem;
        }

        .summary {
            margin-top: 1.2rem;
            background: var(--soft);
            border: 1px solid #d7e4f9;
            border-radius: 14px;
            padding: 1rem;
        }

        .summary h2 {
            margin: 0 0 0.55rem;
            font-size: 1rem;
            color: var(--brand);
        }

        .summary ul {
            margin: 0;
            padding-left: 1.1rem;
            display: grid;
            gap: 0.35rem;
            color: #2e4369;
        }

        .content {
            margin-top: 1.65rem;
            color: #23395f;
            font-size: 1.03rem;
        }

        .content h2 {
            margin: 1.65rem 0 0.62rem;
            font-size: 1.08rem;
            color: var(--brand);
        }

        .content > h2:first-of-type {
            margin-top: 0;
        }

        .content h2 + p {
            margin-top: 0;
        }

        .content p {
            margin: 0 0 1rem;
        }

        .article-figure {
            margin: 1.5rem 0;
            width: 100%;
            max-width: 100%;
        }

        .article-figure .img-shell {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #d0dcf0;
            background: linear-gradient(165deg, #fafcff 0%, #ffffff 45%);
            box-shadow:
                0 1px 0 rgba(255, 255, 255, 0.85) inset,
                0 14px 42px rgba(13, 40, 90, 0.08);
        }

        .article-figure img {
            display: block;
            width: 100%;
            height: auto;
        }

        .article-figure figcaption {
            margin: 0.75rem 0 0;
            padding: 0 0 0 0.85rem;
            border-left: 3px solid var(--accent);
            font-size: 0.875rem;
            color: var(--muted);
            text-align: left;
            line-height: 1.5;
            max-width: none;
        }

        .sector-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 0.65rem;
            margin: 1rem 0 1.25rem;
        }

        .sector-card {
            background: var(--soft);
            border: 1px solid #d7e4f9;
            border-radius: 12px;
            padding: 0.75rem 0.85rem;
            text-align: center;
        }

        .sector-card .label {
            display: block;
            font-size: 0.82rem;
            color: var(--muted);
            margin-bottom: 0.25rem;
        }

        .sector-card .value {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--brand);
        }

        .sector-card .value.negative {
            color: #b42318;
        }

        @media (max-width: 680px) {
            article { padding: 1.08rem; border-radius: 16px; }
            .content { font-size: 0.99rem; }
            .meta { font-size: 0.9rem; }
        }

        .source-note {
            margin-top: 1rem;
            padding: 0.85rem 1rem;
            background: #f8fbff;
            border: 1px solid #d5e3f9;
            border-radius: 12px;
            font-size: 0.92rem;
            color: #334a71;
        }

        .source-note a {
            color: var(--brand);
            font-weight: 600;
        }

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

        .invest-cta p {
            margin: 0;
            color: #334a71;
            font-size: 0.95rem;
            max-width: 53ch;
        }

        .btn-invest {
            text-decoration: none;
            padding: 0.72rem 1rem;
            border-radius: 10px;
            background: var(--brand);
            color: #fff;
            border: 1px solid var(--brand);
            font-weight: 700;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-invest:hover { background: #0f326f; }
    </style>
</head>
<body>
    <div class="container top">
        <a class="back" href="{{ url('/') }}">← Voltar ao portal</a>
        <span class="section-chip">Série de análises</span>
    </div>

    <main class="container">
        <article itemscope itemtype="https://schema.org/Article">
            <p class="kicker">Atividade</p>
            <h1>IBC-Br de março (-0,67%): março fraco, mas o 1T26 fecha com avanço de 1,3%</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-05-18" itemprop="datePublished">18/05/2026</time></p>

            <p class="lead">
                O IBC-Br cedeu 0,67% em março ante fevereiro — o único mês negativo do 1T26 — mas não compromete a leitura de um trimestre robusto. A variação tri/tri ficou em +1,3%, e o acumulado em 12 meses atingiu +1,8%.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>IBC-Br de <strong>-0,67%</strong> em março (série com ajuste sazonal), o mais fraco do trimestre; 1T26 em <strong>+1,3%</strong> tri/tri e <strong>+1,8%</strong> em 12 meses.</li>
                    <li>Na comparação anual, o índice avançou <strong>3,1%</strong> ante março de 2025, com destaque para serviços (+4,0%) e impostos (+6,0%); agropecuária foi o único setor em queda (-0,7%).</li>
                    <li>Carregamento estatístico para o 2T26 em <strong>-0,2%</strong>; queda de março disseminada, com serviços (-0,8%) como principal vetor negativo.</li>
                </ul>
            </section>

            <section class="content">
                <h2>O dado de março em contexto</h2>
                <p>
                    O IBC-Br — indicador de atividade do Banco Central que antecipa o PIB — recuou 0,67% em março ante fevereiro, na série com ajuste sazonal.
                    O resultado foi o mais fraco do trimestre e o único com sinal negativo no 1T26.
                </p>
                <p>
                    Apesar da queda pontual, a leitura do trimestre como um todo permanece positiva: a variação tri/tri ficou em +1,3%, e o acumulado em 12 meses atingiu +1,8%.
                    Na comparação anual, o IBC-Br avançou 3,1% ante março de 2025.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ibc-br-marco-2026-serie.png') }}" alt="Gráfico IBC-Br: variação mensal em barras azuis e acumulada em 12 meses em barras douradas, com destaque para março de 2026 (-0,67% no mês e 1,81% em 12 meses). Fonte BCB/SGS, elaboração Guilherme Jung." loading="eager" decoding="async">
                    </div>
                    <figcaption>Variação mensal (s.a.) e acumulada em 12 meses (n.s.a.): março registra a única queda do 1T26 (-0,67%), enquanto o acumulado em 12 meses segue em 1,81%. Fonte: BCB/SGS · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Desempenho por setor em março</h2>
                <p>
                    A queda de março foi disseminada por todos os segmentos, com destaque negativo para os serviços (-0,8%), que pesam 59,7% no índice.
                    O IBC-Br ex-agro recuou 0,9%.
                </p>

                <div class="sector-grid" aria-label="Variação mensal do IBC-Br por setor, março de 2026">
                    <div class="sector-card">
                        <span class="label">Agropecuária</span>
                        <span class="value negative">-0,2%</span>
                    </div>
                    <div class="sector-card">
                        <span class="label">Indústria</span>
                        <span class="value negative">-0,2%</span>
                    </div>
                    <div class="sector-card">
                        <span class="label">Serviços</span>
                        <span class="value negative">-0,8%</span>
                    </div>
                    <div class="sector-card">
                        <span class="label">Impostos</span>
                        <span class="value negative">-0,2%</span>
                    </div>
                    <div class="sector-card">
                        <span class="label">IBC-Br ex-agro</span>
                        <span class="value negative">-0,9%</span>
                    </div>
                </div>

                <p>
                    Na comparação interanual, serviços (+4,0%) e impostos (+6,0%) lideraram o avanço.
                    A agropecuária foi o único setor com queda no interanual (-0,7%).
                </p>

                <h2>Herança para o 2T26 e leitura de conjuntura</h2>
                <p>
                    O carregamento estatístico para o 2T26 ficou em -0,2%, sinalizando que a herança do 1T26 não é favorável para o próximo trimestre.
                    Isso não invalida o desempenho do trimestre encerrado, mas reforça a expectativa de desaceleração gradual da atividade ao longo dos próximos trimestres — em linha com o aperto monetário em curso.
                </p>
                <p>
                    A queda de março não reverte o quadro positivo do 1T26.
                    O trimestre como um todo mostrou crescimento sólido, e o IBC-Br de janeiro e fevereiro veio acima do esperado, o que sustenta a expectativa de um PIB do 1T26 próximo a +1,2% na comparação intertrimestral.
                </p>
                <p>
                    O enfraquecimento de março, puxado por serviços, parece refletir uma acomodação após meses de desempenho acima da tendência.
                    A leitura dominante é de desaceleração gradual — não de reversão do ciclo de expansão iniciado no trimestre.
                </p>
            </section>

            <p class="source-note">
                Texto baseado na análise publicada por Guilherme Jung no LinkedIn.
                <a href="https://www.linkedin.com/posts/jungguilherme_atividade-recua-067-em-mar%C3%A7o-mas-1t26-share-7462122583250034688-7PPE" target="_blank" rel="noopener noreferrer">Ver publicação original</a>.
            </p>

            <section class="invest-cta">
                <p>
                    Quer transformar esse cenário em estratégia de carteira?
                    Fale com o time da Alta Vista e receba uma orientação alinhada ao seu perfil.
                </p>
                <a class="btn-invest" href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">
                    Quero investir com a Alta Vista
                </a>
            </section>
        </article>
    </main>
</body>
</html>

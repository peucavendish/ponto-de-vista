<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPI dos EUA (abril): aceleração, Fed e emergentes | Ponto de Vista</title>
    <meta name="description" content="Leitura de Guilherme Jung sobre o CPI de abril nos EUA: 0,6% no mês e 3,8% em 12 meses, núcleo, energia, salários reais e implicações para o Fed e para o Brasil.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/cpi-eua-abril-2026-fed') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="CPI dos EUA (abril): quando a inflação volta a complicar o Fed">
    <meta property="og:description" content="Núcleo acima da meta, energia como vetor, salário real negativo e mercado precificando chance de alta de juros.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/cpi-eua-abril-2026-fed') }}">
    <meta property="og:image" content="{{ url(asset('artigos/cpi-eua-abril-2026-cpi-e-core.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-05-13">
    <meta property="article:section" content="Macro internacional">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CPI dos EUA (abril): quando a inflação volta a complicar o Fed">
    <meta name="twitter:description" content="Resumo visual e análise: CPI, núcleo, energia e leitura para emergentes.">
    <meta name="twitter:image" content="{{ url(asset('artigos/cpi-eua-abril-2026-cpi-e-core.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "CPI dos EUA (abril): aceleração, núcleo e um Fed sob pressão",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-05-13",
            "dateModified": "2026-05-13",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/cpi-eua-abril-2026-fed') }}",
            "description": "Análise do CPI de abril nos EUA: núcleo, energia, salário real e implicações para política monetária e emergentes."
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
            margin-top: 1.25rem;
            color: #23395f;
            font-size: 1.03rem;
        }

        .content h2 {
            margin: 1.15rem 0 0.62rem;
            font-size: 1.08rem;
            color: var(--brand);
        }

        .content p {
            margin: 0 0 0.95rem;
        }

        .figure {
            margin: 1rem 0 0.35rem;
        }

        .figure img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 14px;
            border: 1px solid var(--line);
            background: #fff;
        }

        .figure figcaption {
            margin-top: 0.65rem;
            font-size: 0.88rem;
            color: var(--muted);
            text-align: center;
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

        @media (max-width: 680px) {
            article { padding: 1.08rem; border-radius: 16px; }
            .content { font-size: 0.99rem; }
            .meta { font-size: 0.9rem; }
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
            <p class="kicker">Macro internacional</p>
            <h1>CPI dos EUA (abril): aceleração ampla, núcleo firme e um Fed sem margem</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-05-13" itemprop="datePublished">13/05/2026</time></p>

            <p class="lead">
                O CPI de abril veio forte no acumulado de 12 meses e com um núcleo que continua acima da meta do Fed. Energia puxou o mês, mas não foi só petróleo: abrigo voltou a acelerar e há sinais de tarifas em bens — e o salário real não acompanhou.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>CPI em 0,6% no mês e 3,8% em 12 meses; ritmo anual é o mais alto desde maio de 2023.</li>
                    <li>Núcleo (ex-alimentos e energia) em 0,4% no mês e 2,8% em 12 meses — acima da meta de 2%.</li>
                    <li>Energia como vetor central; salário real hora negativo; mercado discute até alta de juros no ano.</li>
                </ul>
            </section>

            <figure class="figure">
                <img src="{{ asset('artigos/cpi-eua-abril-2026-cpi-e-core.png') }}" alt="Gráfico: inflação ao consumidor nos EUA — variação mensal em barras e CPI a 12 meses e núcleo a 12 meses em linhas (FRED, elaboração Guilherme Jung)." loading="eager" decoding="async">
                <figcaption>Inflação do consumidor (CPI e núcleo): mensal, 12 meses e núcleo a 12 meses. Fonte: FRED · Elaboração: Guilherme Jung.</figcaption>
            </figure>

            <figure class="figure">
                <img src="{{ asset('artigos/cpi-eua-abril-2026-contribuicao-grupos-yoy.png') }}" alt="Gráfico de barras empilhadas: contribuição por grupos ao CPI dos EUA em pontos percentuais no acumulado de 12 meses, com linha do CPI total (FRED, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                <figcaption>Contribuição por grupos ao CPI em 12 meses (p.p.); a soma das barras coincide com o headline (linha). Fonte: FRED · Elaboração: Guilherme Jung.</figcaption>
            </figure>

            <section class="content">
                <h2>Leitura do dado</h2>
                <p>
                    O número mensal do CPI ficou alinhado ao consenso, mas o acumulado em 12 meses surpreendeu ligeiramente para cima.
                    A virada de março para abril foi expressiva na taxa anualizada do índice cheio: de 3,3% para 3,8% — meio ponto percentual em um único mês.
                </p>
                <p>
                    O núcleo subiu 0,4% no mês — o maior ritmo mensal desde janeiro de 2025 — e acumula 2,8% em 12 meses, patamar claramente acima da meta de inflação de 2% do Federal Reserve.
                </p>

                <h2>Composição: além do petróleo</h2>
                <p>
                    Energia foi o principal vetor: alta de 3,8% no mês e 17,9% em 12 meses, respondendo por mais de 40% do CPI de abril.
                    A gasolina acumula alta da ordem de 28,4% em 12 meses, com preço médio nacional já acima de US$ 4,50 o galão — um canal direto de expectativa e de custo para famílias e empresas.
                </p>
                <p>
                    O dado, porém, não se resume ao petróleo. O grupo de abrigo (<em>shelter</em>) voltou a acelerar (0,6% no mês), passagens aéreas dispararam no acumulado de 12 meses, e segmentos como roupas e móveis sugerem transmissão de tarifas para preços ao consumidor.
                </p>

                <h2>Renda real e política monetária</h2>
                <p>
                    Pela primeira vez em três anos, a inflação consumiu os ganhos salariais no horizonte analisado: o salário real por hora recuou 0,5% no mês e 0,3% em 12 meses.
                    Para o Fed, o tabuleiro ficou materialmente mais difícil: a autoridade monetária manteve os juros nas reuniões do ano, e abril terminou com quatro dissensos no comitê — o maior número desde 1992 — reflexo de um debate intenso sobre o próximo movimento.
                </p>
                <p>
                    O mercado passou a precificar probabilidade da ordem de 30% de <strong>alta</strong> de juros até o fim do ano, em um cenário de petróleo acima de US$ 100 o barril, tarifas ainda se propagando e abrigo de volta como fonte de inércia inflacionária.
                    O próximo passo deixa de parecer um corte “óbvio” e se aproxima de uma espera forçada — com o Fed tentando comprar credibilidade sem subestimar a persistência dos preços.
                </p>

                <h2>Implicações para emergentes</h2>
                <p>
                    Para países como o Brasil, o canal é direto: menos espaço para um afrouxamento monetário global coordenado, dólar mais forte e prêmios de risco mais exigentes em ativos de fronteira.
                    Ou seja, o CPI dos EUA de abril não é “problema só de Washington”: recalibra expectativas de liquidez e preço de ativos em todo o mundo emergente.
                </p>
            </section>

            <p class="source-note">
                Texto baseado na análise publicada por Guilherme Jung no LinkedIn.
                <a href="https://www.linkedin.com/posts/jungguilherme_cpi-de-abril-veio-em-06-no-m%C3%AAs-e-ugcPost-7460035203651002368-HQMG/" target="_blank" rel="noopener noreferrer">Ver publicação original</a>.
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

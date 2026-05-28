<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCE dos EUA (abril): abaixo do consenso, Fed sem margem | Ponto de Vista</title>
    <meta name="description" content="Leitura de Guilherme Jung sobre o PCE de abril nos EUA: 0,4% no mês e 3,8% em 12 meses, núcleo em 3,3%, consumo resiliente e juros elevados por mais tempo.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/pce-eua-abril-2026-fed') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="PCE dos EUA (abril): leitura mais fraca no mês, mas sem espaço para o Fed aliviar">
    <meta property="og:description" content="PCE e núcleo abaixo do consenso; inflação resistente em serviços; gastos pessoais firmes e renda estável mantêm o Fed cauteloso.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/pce-eua-abril-2026-fed') }}">
    <meta property="og:image" content="{{ url(asset('artigos/pce-eua-abril-2026-pce-e-core.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-05-28">
    <meta property="article:section" content="Macro internacional">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PCE dos EUA (abril): leitura mais fraca no mês, mas sem espaço para o Fed aliviar">
    <meta name="twitter:description" content="Resumo visual e análise: PCE, núcleo, consumo e leitura para política monetária.">
    <meta name="twitter:image" content="{{ url(asset('artigos/pce-eua-abril-2026-pce-e-core.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "PCE dos EUA (abril): abaixo do consenso, Fed sem margem para aliviar",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-05-28",
            "dateModified": "2026-05-28",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/pce-eua-abril-2026-fed') }}",
            "description": "Análise do PCE de abril nos EUA: núcleo, serviços, consumo resiliente e implicações para o Federal Reserve."
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
            <h1>Inflação americana (PCE): abaixo do esperado no mês, mas ainda sem espaço para o Fed aliviar</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, economista-chefe da Alta Vista Investimentos</span> | <time datetime="2026-05-28" itemprop="datePublished">28/05/2026</time></p>

            <p class="lead">
                O PCE de abril veio abaixo do consenso no mês — tanto no índice cheio quanto no núcleo —, mas o acumulado de 12 meses segue distante da meta de 2% do Fed. Consumo resiliente e renda estável mantêm a autoridade monetária em modo cauteloso.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>PCE em 0,4% no mês (vs. 0,5% esperado) e 3,8% em 12 meses — acima da meta do Fed.</li>
                    <li>Núcleo (ex-alimentos e energia) em 0,2% no mês (vs. 0,3% projetado) e 3,3% em 12 meses.</li>
                    <li>Inflação resistente em serviços; gastos pessoais +0,5% com renda praticamente estável.</li>
                </ul>
            </section>

            <figure class="figure">
                <img src="{{ asset('artigos/pce-eua-abril-2026-pce-e-core.png') }}" alt="Gráfico: inflação PCE nos EUA — variação mensal em barras e PCE a 12 meses e núcleo a 12 meses em linhas (FRED, elaboração Guilherme Jung)." loading="eager" decoding="async">
                <figcaption>Inflação PCE e PCE Core: mensal, acumulada em 12 meses e núcleo — dados até abr/2026. Meta do Fed = 2%. Fonte: FRED · Elaboração: Guilherme Jung.</figcaption>
            </figure>

            <section class="content">
                <h2>Leitura do dado</h2>
                <p>
                    A inflação ao consumidor (PCE) subiu 0,4% no mês, abaixo da expectativa de 0,5%.
                    Em 12 meses, a alta acumulada ficou em 3,8% — patamar que continua bem acima da meta de 2% do Federal Reserve.
                </p>
                <p>
                    Já o núcleo da inflação, que exclui alimentos e energia, avançou 0,2% no mês, também abaixo da projeção de 0,3%.
                    No acumulado de 12 meses, o núcleo ficou em 3,3%.
                </p>

                <h2>Inflação resistente e juros</h2>
                <p>
                    Apesar da leitura mais fraca no mês, o mercado segue vendo inflação resistente nos EUA, principalmente em serviços,
                    mantendo a expectativa de juros elevados por mais tempo.
                    O alívio pontual no dado mensal não altera o quadro de persistência no acumulado — e o Fed precisa de evidências mais consistentes antes de considerar afrouxamento monetário.
                </p>

                <h2>Consumo e renda</h2>
                <p>
                    O dado ainda mostrou consumo resiliente, com gastos pessoais subindo 0,5% em abril, enquanto a renda ficou praticamente estável —
                    combinação que mantém o Fed em modo cauteloso.
                    Demanda firme com renda estagnada sugere que a economia ainda absorve pressão de preços sem desacelerar de forma convincente, reforçando a postura de espera da autoridade monetária.
                </p>
            </section>

            <p class="source-note">
                Texto baseado na análise de Guilherme Jung, economista-chefe da Alta Vista Investimentos.
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

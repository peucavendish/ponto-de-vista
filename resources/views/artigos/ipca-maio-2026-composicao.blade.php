<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPCA de maio (0,58%): desaceleração com composição mais favorável | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre o IPCA de maio: 0,58% no mês, 4,72% em 12 meses, voláteis, alimentos, núcleos e leitura para o Copom.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/ipca-maio-2026-composicao') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="IPCA de maio: acima das expectativas, composição mais favorável">
    <meta property="og:description" content="Inflação desacelera para 0,58%, mas voláteis e alimentos pesam; serviços subjacentes abaixo do projetado abrem espaço para o Copom.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/ipca-maio-2026-composicao') }}">
    <meta property="og:image" content="{{ url(asset('artigos/ipca-maio-2026-serie-meta.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-06-12">
    <meta property="article:section" content="Inflação">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IPCA de maio: acima das expectativas, composição mais favorável">
    <meta name="twitter:description" content="Leitura da composição do IPCA de maio e implicações para política monetária no Brasil.">
    <meta name="twitter:image" content="{{ url(asset('artigos/ipca-maio-2026-serie-meta.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "IPCA de maio (0,58%): desaceleração com composição mais favorável",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-06-12",
            "dateModified": "2026-06-12",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/ipca-maio-2026-composicao') }}",
            "description": "Análise do IPCA de maio no Brasil: grupos, núcleos, voláteis e implicações para o Copom."
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
            <p class="kicker">Inflação</p>
            <h1>IPCA de maio (0,58%): desaceleração acima das expectativas, composição mais favorável</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista-chefe da Alta Vista Investimentos</span> | <time datetime="2026-06-12" itemprop="datePublished">12/06/2026</time></p>

            <p class="lead">
                A inflação de maio desacelerou para 0,58% — acima das expectativas, mas com composição mais favorável do que o headline sugere.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>IPCA de 0,58% em maio (0,67% em abril), acima da mediana (0,54%) e a maior taxa para o mês desde 2021; 4,72% em 12 meses; acumulado no ano em 3,20%.</li>
                    <li>Surpresa de alta concentrada em voláteis e alimentos; Transportes foi o único grupo negativo (-0,46%).</li>
                    <li>Serviços subjacentes e ligados ao mercado de trabalho vieram abaixo do esperado — leitura mais construtiva para o Copom.</li>
                </ul>
            </section>

            <section class="content">
                <h2>O número e a meta</h2>
                <p>
                    O <strong>IPCA de maio ficou em 0,58%</strong>, desacelerando frente aos 0,67% de abril, mas acima da mediana das projeções (0,54%) e a maior taxa para o mês desde 2021.
                    Em <strong>12 meses</strong>, a inflação avançou para <strong>4,72%</strong>, contra 4,39% em abril, já bem próxima do teto da meta (4,5% + 1,5 p.p.).
                    No ano, o acumulado chega a <strong>3,20%</strong>.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ipca-maio-2026-serie-meta.png') }}" alt="Gráfico IPCA: inflação mensal em barras, IPCA e núcleo a 12 meses em linhas, meta e banda do CMN (IBGE e CMN, elaboração Guilherme Jung)." loading="eager" decoding="async">
                    </div>
                    <figcaption>IPCA mensal, acumulado em 12 meses, núcleo e banda da meta. Fonte: IBGE e CMN · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Voláteis, alimentos e grupos</h2>
                <p>
                    A surpresa de alta, no entanto, veio concentrada em itens voláteis: gasolina puxando o grupo Transportes para queda de -0,46% (único negativo do mês) e perfume liderando a alta de Saúde e cuidados pessoais (0,90%).
                    <strong>Alimentação e bebidas</strong> (1,33%, impacto de 0,29 p.p.) seguiu como o maior vetor, com batata-inglesa (+44,69%), tomate (+20,62%) e cebola (+16,80%) — efeito de oferta menor combinado com frete mais caro pela alta dos combustíveis.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ipca-maio-2026-grupos-mensal-12m.png') }}" alt="Gráfico de barras: IPCA índice geral e grupos — variação mensal e em 12 meses, maio de 2026 (IBGE/SIDRA, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                    </div>
                    <figcaption>Desdobramento por grupo: dispersão relevante entre mensal e acumulado de 12 meses. Fonte: IBGE/SIDRA · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Núcleos e inércia</h2>
                <p>
                    O que chama a atenção são vários núcleos com acumulado em 12 meses acima do teto da meta.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ipca-maio-2026-contribuicoes-12m.png') }}" alt="Gráfico de barras empilhadas: contribuições dos grupos ao IPCA em 12 meses, em pontos percentuais, com linha do índice total (IBGE, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                    </div>
                    <figcaption>Contribuições em pontos percentuais ao longo do tempo: mostra onde a inércia se concentra além do número do mês. Fonte: IBGE · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Leitura para o Copom</h2>
                <p>
                    Para o Copom, a leitura é mais construtiva do que o headline indica: os itens que mais importam para a política monetária — <strong>serviços subjacentes e serviços ligados ao mercado de trabalho</strong> — vieram <strong>abaixo do esperado</strong>, sinalizando que a resistência da inflação de serviços pode estar começando a cair.
                </p>
                <p>
                    Com a composição mostrando que o “ruído” veio de preços administrados e voláteis, e o núcleo de serviços dando sinais de alívio, o espaço para o Copom corte 25 bps com discurso duro por conta do fiscal e dos riscos externos permanece — ainda que a cautela com o teto da meta continue justificada.
                </p>
            </section>

            <section class="invest-cta">
                <p>
                    Quer transformar esse cenário em estratégia de carteira?
                    Fale com o time da Alta Vista e receba uma orientação alinhada ao seu perfil.
                </p>
                <a class="btn-invest" href="https://www.altavistainvest.com.br" target="_blank" rel="noopener noreferrer">
                    Quero investir com a Alta Vista
                </a>
            </section>
        </article>
    </main>
</body>
</html>

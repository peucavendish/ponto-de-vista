<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPCA de abril (0,67%): headline tranquilo, composição incômoda | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre o IPCA de abril: 0,67% no mês, 4,39% em 12 meses, alimentos, serviços, núcleos e o espaço para a Selic.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/ipca-abril-2026-composicao') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="IPCA de abril: o número veio esperado, a composição não">
    <meta property="og:description" content="Alimentação, frete e petróleo; serviços acima do projetado; núcleos piorando — e o BC com pouco fôlego para cortar Selic.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/ipca-abril-2026-composicao') }}">
    <meta property="og:image" content="{{ url(asset('artigos/ipca-abril-2026-serie-meta.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-05-13">
    <meta property="article:section" content="Inflação">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IPCA de abril: o número veio esperado, a composição não">
    <meta name="twitter:description" content="Leitura da composição do IPCA e dos riscos para política monetária no Brasil.">
    <meta name="twitter:image" content="{{ url(asset('artigos/ipca-abril-2026-serie-meta.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "IPCA de abril (0,67%): headline tranquilo, composição incômoda",
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
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/ipca-abril-2026-composicao') }}",
            "description": "Análise do IPCA de abril no Brasil: grupos, núcleos, choques de oferta e implicações para o Banco Central."
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
            <h1>IPCA de abril (0,67%): o headline veio esperado, a composição não</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-05-13" itemprop="datePublished">13/05/2026</time></p>

            <p class="lead">
                O índice mensal desacelerou frente a março e ficou alinhado às projeções — mas por baixo do número há um mix desconfortável: alimentação forte, serviços subjacentes acima do esperado e núcleos piorando na margem.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>IPCA de 0,67% em abril (0,88% em março); 4,39% em 12 meses, próximo ao teto da meta (4,5%); quadrimestre em 2,60%.</li>
                    <li>Maior impacto no mês: <strong>Alimentação e bebidas</strong> (1,34%), com canal guerra → petróleo → frete → preços de alimentos.</li>
                    <li>Serviços subjacentes acima do projetado; núcleos em tendência de três meses de 4,8% para 5,2% — cenário desconfortável para cortes de Selic.</li>
                </ul>
            </section>

            <section class="content">
                <h2>O que o headline esconde</h2>
                <p>
                    O IPCA de abril ficou em 0,67%, desacelerando em relação aos 0,88% de março e dentro das projeções do mercado.
                    No acumulado de 12 meses, a inflação chegou a 4,39% — patamar próximo ao teto da meta de 4,5%.
                    No quadrimestre, o acúmulo é de 2,60%.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ipca-abril-2026-serie-meta.png') }}" alt="Gráfico IPCA: inflação mensal em barras, IPCA e núcleo a 12 meses em linhas, meta e banda do CMN (IBGE e CMN, elaboração Guilherme Jung)." loading="eager" decoding="async">
                    </div>
                    <figcaption>O mesmo recorte em série: mensal, 12 meses, núcleo (12m) e banda da meta. Fonte: IBGE e CMN · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <p>
                    O maior impacto ao índice veio de <strong>Alimentação e bebidas</strong>, com alta de 1,34% no mês.
                    A pressão sobre alimentos não é fruto do acaso: somam-se choques de oferta mais estruturais a um custo de frete elevado — com efeito direto da gasolina mais cara, por sua vez ligada ao conflito no Oriente Médio.
                    Esse encadeamento — <em>guerra → petróleo → frete → alimentos</em> — segue ativo e ainda longe de se dissipar.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ipca-abril-2026-grupos-mensal-12m.png') }}" alt="Gráfico de barras: IPCA índice geral e grupos — variação mensal e em 12 meses, abril de 2026 (IBGE/SIDRA, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                    </div>
                    <figcaption>Desdobramento por grupo: o índice cheio desacelera no mês, mas há dispersão relevante no acumulado de 12 meses. Fonte: IBGE/SIDRA · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Serviços, mercado de trabalho e câmbio</h2>
                <p>
                    No campo dos serviços subjacentes, o resultado veio ligeiramente acima do esperado: cerca de 0,52% ante cerca de 0,44% projetado.
                    Para referência de convergência à meta, seria necessário um ritmo compatível com algo entre 3,75% e 4,0% ao ano — e o dado atual ainda fica distante disso.
                </p>
                <p>
                    A “bolha” do mercado de trabalho segue aquecida, e a política monetária ainda não furou essa resistência com clareza.
                    A leve apreciação recente do câmbio ajuda a amortecer choques importados, mas não compensa de forma suficiente o vetor de serviços e de custos internos.
                </p>

                <h2>Clima, oferta agrícola e alguns alívios</h2>
                <p>
                    O El Niño com intensidade acima de 1,0 já afeta cadeias como soja, cana e café; o excesso de precipitação no Rio Grande do Sul adiciona perdas pontuais em produtos <em>in natura</em>.
                </p>
                <p>
                    Os núcleos de inflação pioraram na margem: na tendência de três meses, a média subiu de 4,8% para 5,2%.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/ipca-abril-2026-contribuicoes-12m.png') }}" alt="Gráfico de barras empilhadas: contribuições dos grupos ao IPCA em 12 meses, em pontos percentuais, com linha do índice total (IBGE, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                    </div>
                    <figcaption>Contribuições em pontos percentuais ao longo do tempo: mostra onde a inércia se concentra além do número do mês. Fonte: IBGE · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <p>
                    Do lado dos alívios, dois fatores merecem registro: o excesso de oferta de etanol, combinando safra forte de cana com produção de milho, e a entrada de veículos importados e novas capacidades industriais no mercado de automóveis, que têm segurado preços de duráveis.
                    São forças reais — porém insuficientes, sozinhas, para reverter o vetor dominante do mês.
                </p>

                <h2>Implicações para o Banco Central</h2>
                <p>
                    O cenário para o Banco Central permanece desconfortável.
                    A inflação acumulada entre março e abril já superou em cerca de 0,80 p.p. as projeções do próprio BC no último Relatório de Inflação.
                </p>
                <p>
                    Com serviços pressionados, núcleos deteriorando na margem e estímulos fiscais recentes do governo federal e de estados adicionando pressão futura, o espaço para cortes adicionais de Selic é limitado — sobretudo se o comitê quiser preservar credibilidade em torno da meta.
                </p>
            </section>

            <p class="source-note">
                Texto baseado na análise publicada por Guilherme Jung no LinkedIn.
                <a href="https://www.linkedin.com/posts/jungguilherme_infla%C3%A7%C3%A3o-de-abril-avan%C3%A7ou-067-ugcPost-7460033955166179328-l7ys/" target="_blank" rel="noopener noreferrer">Ver publicação original</a>.
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

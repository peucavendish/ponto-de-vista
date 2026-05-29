<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PIB do 1T26 (+1,1%): crescimento acima do consenso, cenário complexo | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre o PIB brasileiro no 1T26: avanço de 1,1% tri/tri, agro e investimento em destaque, consumo resiliente, dívida acima de 80% do PIB e tensão com juros elevados.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/pib-brasil-1t26-2026') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="PIB do 1T26: Brasil cresce 1,1% e volta ao grupo das 10 maiores economias">
    <meta property="og:description" content="Dado acima do consenso, mas com tensão entre crescimento, inflação de serviços, Selic a 14,50% e dívida pública em 80,4% do PIB.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/pib-brasil-1t26-2026') }}">
    <meta property="og:image" content="{{ url(asset('artigos/pib-brasil-1t26-2026-serie.png')) }}">
    <meta property="og:image:alt" content="Gráfico PIB do Brasil: variação trimestral a preços de mercado até o 1T26 (+1,1%)">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-05-29">
    <meta property="article:section" content="Atividade">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PIB do 1T26: Brasil cresce 1,1% e volta ao grupo das 10 maiores economias">
    <meta name="twitter:description" content="Leitura do PIB do 1T26: oferta, demanda, investimento e o dilema crescimento × inflação × fiscal.">
    <meta name="twitter:image" content="{{ url(asset('artigos/pib-brasil-1t26-2026-serie.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "PIB do 1T26 (+1,1%): crescimento acima do consenso, cenário complexo",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-05-29",
            "dateModified": "2026-05-29",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/pib-brasil-1t26-2026') }}",
            "description": "Análise do PIB brasileiro no 1T26: crescimento tri/tri, composição por setor e demanda, e implicações para política monetária e fiscal."
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

        .metric-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 0.65rem;
            margin: 1rem 0 1.25rem;
        }

        .metric-card {
            background: var(--soft);
            border: 1px solid #d7e4f9;
            border-radius: 12px;
            padding: 0.75rem 0.85rem;
            text-align: center;
        }

        .metric-card .label {
            display: block;
            font-size: 0.82rem;
            color: var(--muted);
            margin-bottom: 0.25rem;
        }

        .metric-card .value {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--brand);
        }

        .metric-card .value.negative {
            color: #b42318;
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
            <p class="kicker">Atividade</p>
            <h1>De olho no PIB: Brasil cresce 1,1% no 1T26 e volta ao grupo das 10 maiores economias</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, economista-chefe da Alta Vista Investimentos</span> | <time datetime="2026-05-29" itemprop="datePublished">29/05/2026</time></p>

            <p class="lead">
                O PIB avançou 1,1% no primeiro trimestre de 2026, levemente acima do consenso de 1,0%. O dado é bom, mas revela um cenário complexo: economia crescendo 1,8% a/a com Selic a 14,50%, dívida pública acima de 80% do PIB e inflação de serviços que dificulta o corte de juros.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>PIB em <strong>+1,1%</strong> tri/tri (vs. 1,0% esperado), totalizando R$ 3,3 trilhões; <strong>+1,8%</strong> a/a e <strong>+2,0%</strong> em quatro trimestres.</li>
                    <li>Agropecuária (+2,0%) e extrativa mineral (+3,6%) lideram a oferta; FBCF surpreende com <strong>+3,5%</strong> no trimestre.</li>
                    <li>Consumo das famílias (+1,0%) confirma resiliência; setor externo pesa com exportações -1,7% e importações +4,4% na margem.</li>
                </ul>
            </section>

            <section class="content">
                <h2>O número de hoje</h2>
                <p>
                    O PIB brasileiro avançou 1,1% no primeiro trimestre de 2026, levemente acima do consenso de mercado (1,0%),
                    totalizando R$ 3,3 trilhões em valor corrente.
                    No comparativo anual, a alta foi de 1,8%, e no acumulado de quatro trimestres, de 2,0% — confirmando a tendência de desaceleração frente ao crescimento de 2,3% registrado em 2025.
                </p>
                <p>
                    O IBGE ainda revisou para cima os resultados do 3T e 4T de 2025, reforçando a resiliência da base.
                    O FMI reconheceu o Brasil voltando ao grupo das 10 maiores economias do mundo — reflexo da performance recente, mas o desafio daqui para frente é equilibrar crescimento, inflação e responsabilidade fiscal.
                </p>

                <div class="metric-grid" aria-label="Principais indicadores do PIB no 1T26">
                    <div class="metric-card">
                        <span class="label">PIB tri/tri</span>
                        <span class="value">+1,1%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">PIB a/a</span>
                        <span class="value">+1,8%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">4 trimestres</span>
                        <span class="value">+2,0%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">Valor corrente</span>
                        <span class="value">R$ 3,3 tri</span>
                    </div>
                </div>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/pib-brasil-1t26-2026-serie.png') }}" alt="Gráfico de barras: PIB do Brasil a preços de mercado — variação contra o trimestre anterior de 2T23 a 1T26, com destaque para +1,1% no 1T26. Fonte IBGE, elaboração Guilherme Jung." loading="eager" decoding="async">
                    </div>
                    <figcaption>PIB a preços de mercado: variação contra o trimestre anterior (%). O 1T26 (+1,1%) acelera após dois trimestres fracos (3T25 +0,1% e 4T25 +0,3%). Fonte: Contas Nacionais Trimestrais (IBGE) · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Oferta: agro e extrativa em destaque</h2>
                <p>
                    O destaque positivo veio da Agropecuária, que avançou 2,0% no trimestre impulsionada por uma safra de soja recorde,
                    e da Extrativa Mineral, que acelerou 3,6%, puxada pela extração de petróleo e gás natural.
                </p>

                <div class="metric-grid" aria-label="Variação por setor da oferta no 1T26">
                    <div class="metric-card">
                        <span class="label">Agropecuária</span>
                        <span class="value">+2,0%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">Extrativa mineral</span>
                        <span class="value">+3,6%</span>
                    </div>
                </div>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/pib-brasil-1t26-2026-subsetores.png') }}" alt="Gráfico de barras horizontais: PIB e subsetores — taxa acumulada em quatro trimestres, com exportação (7,6%), agropecuária (7,5%) e PIB total (2,0%) em destaque. Fonte IBGE, elaboração Guilherme Jung." loading="lazy" decoding="async">
                    </div>
                    <figcaption>PIB e subsetores: taxa (%) acumulada em quatro trimestres. Exportação (+7,6%) e agropecuária (+7,5%) lideram; FBCF (+0,4%) e consumo das famílias (+1,2%) ficam abaixo do PIB agregado (+2,0%). Fonte: IBGE · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Demanda: consumo firme e investimento surpreende</h2>
                <p>
                    Pela ótica da demanda, o consumo das famílias cresceu 1,0%, sustentado pelos estímulos fiscais e de crédito ainda em vigor
                    e por um mercado de trabalho sólido — resultado que confirma a resiliência do consumidor mesmo diante de juros em 14,75%.
                </p>
                <p>
                    A Formação Bruta de Capital Fixo (FBCF) surpreendeu positivamente com alta de 3,5% no trimestre,
                    revertendo a queda de 3,4% do 4T25 e voltando ao patamar do 3T25.
                    Apesar do peso menor que o consumo, o investimento teve contribuição significativa para o resultado.
                </p>

                <div class="metric-grid" aria-label="Componentes da demanda no 1T26">
                    <div class="metric-card">
                        <span class="label">Consumo das famílias</span>
                        <span class="value">+1,0%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">FBCF (investimento)</span>
                        <span class="value">+3,5%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">Exportações</span>
                        <span class="value negative">-1,7%</span>
                    </div>
                    <div class="metric-card">
                        <span class="label">Importações</span>
                        <span class="value">+4,4%</span>
                    </div>
                </div>

                <p>
                    No setor externo, as exportações recuaram 1,7% na margem, enquanto as importações cresceram 4,4%,
                    contribuição negativa para o PIB no trimestre.
                    Em 12 meses, porém, as exportações acumulam alta de 7,4%, puxadas por petróleo e alimentos.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/pib-brasil-1t26-2026-contribuicoes.png') }}" alt="Gráfico waterfall: contribuições ao PIB no 1T26 em pontos percentuais — consumo das famílias (+0,62), investimento (+0,56), exportações (-0,30), importações (-0,70), total +1,10%. Fonte IBGE, elaboração Guilherme Jung." loading="lazy" decoding="async">
                    </div>
                    <figcaption>Contribuições ao PIB no 1T26 (p.p., s.a.): consumo das famílias (+0,62) e investimento (+0,56) puxam o resultado; importações (-0,70) e exportações (-0,30) pesam no setor externo. PIB total: +1,10%. Fonte: Contas Nacionais Trimestrais (IBGE) · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Comentários: o dado é bom, o cenário é complexo</h2>
                <p>
                    O dado de hoje é bom, mas o cenário que ele revela é complexo.
                    A economia crescendo 1,8% a/a com Selic a 14,50% não é um problema simples de resolver — é justamente a tensão central de 2026.
                </p>
                <p>
                    O 1S é estruturalmente mais forte por conta da sazonalidade do agro, e o desemprego baixo impulsiona serviços e consumo,
                    o que por sua vez bate na inflação de serviços e dificulta o trabalho do Banco Central de cortar juros.
                </p>
                <p>
                    Ao mesmo tempo, a dívida pública cruzou os 80,4% do PIB, superando o patamar registrado durante a pandemia — um alerta fiscal que o mercado não vai ignorar.
                    As projeções apontam um crescimento de 1,8% para 2026, com desaceleração moderada ao longo do ano à medida que os juros ainda elevados deixam sinal no crédito e na indústria.
                </p>
            </section>

            <p class="source-note">
                Texto baseado na análise publicada por Guilherme Jung no LinkedIn.
                <a href="https://www.linkedin.com/posts/jungguilherme_de-olho-no-pib-brasil-cresce-11-no-ugcPost-7466186980633141248-dm44/" target="_blank" rel="noopener noreferrer">Ver publicação original</a>.
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

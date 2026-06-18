<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Copom 06/2026: corte de 0,25pp, Selic a 14,25% — comunicado fecha a porta | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre o Copom de 17/06/2026: corte da Selic para 14,25%, projeções de inflação revisadas para cima e sinalização de pausa no ciclo.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/copom-0626-1425-17-06-2026') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Copom corta 0,25pp — mas o comunicado fecha a porta">
    <meta property="og:description" content="Selic vai a 14,25% a.a.; projeção do 4T27 sobe para 3,7% e o BC retira sinalização de próximos passos. Leitura da Alta Vista.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/copom-0626-1425-17-06-2026') }}">
    <meta property="og:image" content="{{ url(asset('artigos/copom-0626-selic-1425.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-06-17">
    <meta property="article:section" content="Política Monetária">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copom corta 0,25pp — mas o comunicado fecha a porta">
    <meta name="twitter:description" content="Selic a 14,25%, inflação projetada acima do teto no horizonte relevante e ciclo data-dependent.">
    <meta name="twitter:image" content="{{ url(asset('artigos/copom-0626-selic-1425.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "Copom corta 0,25pp — mas o comunicado fecha a porta",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-06-17",
            "dateModified": "2026-06-17",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/copom-0626-1425-17-06-2026') }}",
            "description": "Análise do Copom de junho de 2026: corte de 0,25pp na Selic, revisão das projeções de inflação e tom mais cauteloso do comunicado."
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
            <p class="kicker">Política Monetária</p>
            <h1>Copom corta 0,25pp — mas o comunicado fecha a porta</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-06-17" itemprop="datePublished">17/06/2026</time></p>

            <p class="lead">
                O Comitê entregou o corte esperado, mas elevou as projeções de inflação e retirou a sinalização de próximos passos — o ônus da prova para um novo corte aumentou.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li><strong>Decisão:</strong> Corte de 0,25pp — Selic vai para <strong>14,25% a.a.</strong> | Unânime: 7 a 0</li>
                    <li><strong>Expectativa de mercado:</strong> 78% corte | 20% manutenção | 2% outros cenários</li>
                    <li><strong>Projeções de inflação:</strong> IPCA 2026 em <strong>5,2%</strong>; IPCA 4T27 (horizonte relevante) em <strong>3,7%</strong> — acima do teto; Focus 2026: 5,30% | Focus 2027: 4,10%</li>
                    <li><strong>Cenário doméstico:</strong> Atividade acelerada | fiscal expansionista | câmbio sem ajudar</li>
                    <li><strong>Cenário externo:</strong> Fed, BCE e BOJ hawkish | Oriente Médio ainda incerto | pressão sobre emergentes</li>
                    <li><strong>Comunicado:</strong> sem sinalização de próximos passos — ciclo totalmente data-dependent</li>
                    <li><strong>Próximos eventos:</strong> Ata + Relatório de Inflação na semana que vem</li>
                    <li><strong>Tom geral:</strong> Cortou, mas sinalizou pausa — manutenção em agosto é o cenário base</li>
                </ul>
            </section>

            <x-investment-simulator
                title="Simulador: como evolui seu patrimônio com 100% do CDI"
                :cdi-annual="14.15"
                :cdi-percent="100"
            />

            <section class="content">
                <h2>A decisão e o pano de fundo</h2>
                <p>
                    O Comitê de Política Monetária reduziu a Selic para <strong>14,25% ao ano</strong>, em corte de 0,25pp aprovado de forma unânime.
                    A decisão veio dentro do esperado: o mercado precificava 78% de chance de corte, com apenas 20% apostando em manutenção,
                    apesar da volatilidade das últimas semanas.
                </p>
                <p>
                    O pano de fundo que chegou a essa reunião era desafiador: atividade acelerou no primeiro trimestre, fiscal e crédito foram expandidos nos últimos 45 dias,
                    câmbio deixou de ajudar pela primeira vez em dez reuniões e o exterior seguiu hostil — Fed, BCE e BOJ em postura conservadora,
                    acordo no Oriente Médio ainda incerto e pressão sobre emergentes.
                </p>

                <h2>Projeções de inflação: destaque do comunicado</h2>
                <p>
                    O destaque do comunicado foi a projeção de inflação. O Copom elevou a estimativa para o 4T27 — horizonte relevante de política monetária —
                    de 3,5% para <strong>3,7%</strong>, acima do teto da meta. Esse era exatamente o número que analistas apontavam como sinal claro de encerramento do ciclo.
                    A projeção para 2026 também subiu, de 4,6 para <strong>5,2%</strong>.
                </p>
                <p>
                    O BC também retirou a sinalização de próximos passos: manteve a linguagem de "calibração", mas condicionou a magnitude total do ciclo a novas informações,
                    uma forma deliberada de se reservar o direito de parar sem anunciar formalmente o fim.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/copom-0626-projecoes-inflacao.png') }}" alt="Tabela de projeções de inflação do Copom: IPCA 2026 e 4T27 comparando abril e junho de 2026 (Banco Central, elaboração Guilherme Jung)." loading="eager" decoding="async">
                    </div>
                    <figcaption>Projeções de inflação do Copom: revisão para cima em 2026 e no horizonte relevante (4T27). Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>O que vem pela frente</h2>
                <p>
                    Com inflação projetada em 3,7% no horizonte relevante e expectativas ainda desancoradas, o cenário base é de <strong>manutenção em agosto</strong>.
                    A semana que vem traz a ata do Copom e o Relatório de Inflação, dois documentos que vão revelar o que pesou mais na decisão de hoje
                    e como o Comitê enxerga os riscos à frente.
                </p>
                <p>
                    Só uma deterioração relevante da atividade ou a conclusão do acordo — com uma estabilização a níveis mais baixos do petróleo —
                    podem abrir espaço para mais cortes ao longo do ano.
                </p>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/copom-0626-selic-1425.png') }}" alt="Gráfico de linha em degraus da taxa Selic de 2018 a junho de 2026, com destaque para 14,25% em 17/06/2026 (Banco Central do Brasil, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                    </div>
                    <figcaption>Taxa Selic (% a.a.): na reunião de 17/06/2026, o Copom definiu a Selic em 14,25%, mantendo postura cautelosa diante do balanço de riscos para a inflação. Fonte: Banco Central do Brasil · Elaboração: Guilherme Jung.</figcaption>
                </figure>
            </section>

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

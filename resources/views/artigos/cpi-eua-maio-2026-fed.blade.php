<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPI dos EUA (maio): acima de 4% em 12 meses, núcleo comportado | Ponto de Vista</title>
    <meta name="description" content="Leitura de Guilherme Jung sobre o CPI de maio nos EUA: 0,5% no mês e 4,2% em 12 meses, núcleo em 2,9%, energia como vetor dominante e implicações para o Fed e para o Brasil.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/cpi-eua-maio-2026-fed') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="CPI dos EUA (maio): inflação acima de 4% e Fed em modo de espera">
    <meta property="og:description" content="Núcleo desacelera na margem, choque concentrado em energia e reunião do FOMC em 17 de junho sem movimento precificado.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/cpi-eua-maio-2026-fed') }}">
    <meta property="og:image" content="{{ url(asset('artigos/cpi-eua-maio-2026-cpi-e-core.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-06-10">
    <meta property="article:section" content="Macro internacional">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CPI dos EUA (maio): inflação acima de 4% e Fed em modo de espera">
    <meta name="twitter:description" content="Resumo visual e análise: CPI, núcleo, energia e leitura para emergentes.">
    <meta name="twitter:image" content="{{ url(asset('artigos/cpi-eua-maio-2026-cpi-e-core.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "CPI dos EUA (maio): acima de 4% em 12 meses, núcleo comportado e Fed em espera",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-06-10",
            "dateModified": "2026-06-10",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/cpi-eua-maio-2026-fed') }}",
            "description": "Análise do CPI de maio nos EUA: núcleo, energia, shelter e implicações para política monetária e emergentes."
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
            <h1>CPI dos EUA (maio): inflação acima de 4% em 12 meses, núcleo comportado e Fed em espera</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, economista-chefe da Alta Vista Investimentos</span> | <time datetime="2026-06-10" itemprop="datePublished">10/06/2026</time></p>

            <p class="lead">
                O CPI de maio veio em 0,5% no mês e 4,2% em 12 meses — inflação acima de 4% pela primeira vez em três anos, o maior patamar desde abril de 2023. O núcleo desacelerou na margem, mas energia segue como vetor dominante e mantém o Fed em modo cauteloso.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>CPI em 0,5% no mês (consenso) e 4,2% em 12 meses — aceleração de 3,8% para 4,2% e marco psicológico relevante.</li>
                    <li>Núcleo (ex-alimentos e energia) em 0,2% no mês (abaixo de 0,3% esperado) e 2,9% em 12 meses — principal notícia positiva do relatório.</li>
                    <li>Energia responde por mais de 60% do CPI mensal; FOMC em 17/06 sem movimento precificado, mas comunicação será escrutinada.</li>
                </ul>
            </section>

            <section class="content">
                <h2>Leitura do dado</h2>
                <p>
                    O número mensal desacelerou na margem (de 0,6% em abril para 0,5%) e veio em linha com o consenso Dow Jones, o que trouxe algum alívio inicial aos mercados.
                    Mas o acumulado em 12 meses acelerou de 3,8% para 4,2% — nova surpresa altista e um marco psicológico relevante.
                </p>
                <p>
                    O núcleo (ex-alimentos e energia) subiu apenas 0,2% no mês — abaixo da estimativa de 0,3% e menos que o 0,4% de abril — e acumula 2,9% em 12 meses.
                    Esse dado mais comportado no núcleo foi a principal notícia positiva do relatório, sinalizando que a pressão subjacente ainda não está se espalhando.
                </p>
            </section>

            <figure class="figure">
                <img src="{{ asset('artigos/cpi-eua-maio-2026-cpi-e-core.png') }}" alt="Gráfico: inflação ao consumidor nos EUA — variação mensal em barras e CPI a 12 meses e núcleo a 12 meses em linhas (FRED, elaboração Guilherme Jung)." loading="eager" decoding="async">
                <figcaption>Inflação do consumidor (CPI e núcleo): mensal, 12 meses e núcleo a 12 meses. Fonte: FRED · Elaboração: Guilherme Jung.</figcaption>
            </figure>

            <section class="content">
                <h2>Energia: vetor dominante</h2>
                <p>
                    Energia continua sendo o vetor dominante: alta de 3,9% no mês e <strong>23,5% em 12 meses</strong>, respondendo por mais de 60% do CPI mensal.
                    Só a gasolina subiu 7,0% em maio (8,6% sem ajuste sazonal). Óleo combustível acumula impressionantes <strong>58,9% em 12 meses</strong>.
                </p>
                <p>
                    O pano de fundo geopolítico amplifica o risco: com os EUA em conflito ativo com o Irã, o mercado de petróleo segue extremamente volátil.
                    O presidente Trump voltou a afirmar que o Irã vai &ldquo;pagar o preço&rdquo; por não aceitar um acordo de paz, o que manteve futuros de bolsa em território negativo logo após a divulgação do dado.
                </p>

                <h2>Composição: choque ainda concentrado</h2>
                <p>
                    O <em>shelter</em> (habitação) avançou 0,3% no mês (+3,4% em 12 meses) — metade do ritmo de abril, o que representa uma melhora relevante e um sinal que o Fed vai monitorar de perto.
                    Transportes caíram 0,6%, veículos novos recuaram 0,3% e usados subiram apenas 0,1% — indícios de que os altos custos de energia ainda não estão se espalhando para outros setores sensíveis.
                    Esse detalhe é importante: o choque, por ora, segue concentrado em energia.
                </p>
                <p>
                    Do lado negativo, vestuário (+4,8% em 12 meses), frutas e verduras (+6,1%) e alimentação fora de casa (+3,5%) mostram que o repasse das tarifas comerciais continua chegando ao consumidor final.
                </p>
            </section>

            <figure class="figure">
                <img src="{{ asset('artigos/cpi-eua-maio-2026-contribuicao-grupos-yoy.png') }}" alt="Gráfico de barras empilhadas: contribuição por grupos ao CPI dos EUA em pontos percentuais no acumulado de 12 meses, com linha do CPI total (FRED, elaboração Guilherme Jung)." loading="lazy" decoding="async">
                <figcaption>Contribuição por grupos ao CPI em 12 meses (p.p.); a soma das barras coincide com o headline (linha). Fonte: FRED · Elaboração: Guilherme Jung.</figcaption>
            </figure>

            <section class="content">
                <h2>Fed: ambíguo, mas desconfortável</h2>
                <p>
                    Para o Fed, o relatório é ambíguo mas ainda desconfortável. A reunião do FOMC está marcada para 17 de junho e o mercado praticamente não precifica movimento — a expectativa é de manutenção dos juros.
                    Mas os investidores vão escrutinar cada palavra da comunicação em busca de sinais sobre a tolerância do Fed com uma inflação acima de 4% puxada por energia.
                </p>
                <p>
                    Com núcleo desacelerando na margem e o choque concentrado em energia (componente mais volátil), o Fed tem argumentos para aguardar.
                    Mas se o petróleo continuar pressionado e o <em>shelter</em> não recuar, o próximo passo pode ser outro ciclo de alta — não de corte.
                </p>

                <h2>Implicações para emergentes</h2>
                <p>
                    Para o Brasil e emergentes, o cenário segue adverso: juro alto nos EUA por mais tempo, dólar fortalecido e menor apetite global por risco.
                    O espaço do Copom para afrouxar os juros diminui consideravelmente e o BC tem uma tarefa difícil de reancorar as expectativas em um contexto de riscos diversos.
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

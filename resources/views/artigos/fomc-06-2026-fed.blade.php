<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOMC (jun/2026): Fed mantém juros, dot plot hawkish e Warsh reformula o Fed | Ponto de Vista</title>
    <meta name="description" content="Leitura de Guilherme Jung sobre a reunião do FOMC de junho de 2026: manutenção dos juros em 3,50%–3,75%, dot plot hawkish, comunicado sem forward guidance e estreia reformista de Warsh.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/fomc-06-2026-fed') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="FOMC (jun/2026): Fed mantém juros, dot plot hawkish e Warsh reformula o Fed">
    <meta property="og:description" content="Decisão unânime sem surpresa, mas dot plot mais hawkish em anos e nova era da política monetária americana.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/fomc-06-2026-fed') }}">
    <meta property="og:image" content="{{ url(asset('artigos/fomc-06-2026-fed-funds.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-06-17">
    <meta property="article:section" content="Macro internacional">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FOMC (jun/2026): Fed mantém juros, dot plot hawkish e Warsh reformula o Fed">
    <meta name="twitter:description" content="9 de 18 membros projetam alta em 2026; a pergunta mudou de corte para alta.">
    <meta name="twitter:image" content="{{ url(asset('artigos/fomc-06-2026-fed-funds.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "FOMC (jun/2026): Fed mantém juros, dot plot hawkish e Warsh reformula o banco central americano",
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
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/fomc-06-2026-fed') }}",
            "description": "Análise da reunião do FOMC de junho de 2026: decisão de juros, dot plot, comunicado e coletiva de Warsh."
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
            <h1>Fed mantém juros, dot plot hawkish e Warsh reformula o banco central americano</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, economista-chefe da Alta Vista Investimentos</span> | <time datetime="2026-06-17" itemprop="datePublished">17/06/2026</time></p>

            <p class="lead">
                O Federal Reserve manteve os juros em 3,50%–3,75% por unanimidade (12 a 0) — decisão sem surpresa. Mas foi aí que a previsibilidade acabou: o dot plot foi o mais hawkish em anos, com 9 dos 18 membros do FOMC projetando pelo menos uma alta ainda em 2026. O mercado passou um ano inteiro discutindo quando o próximo corte viria. A pergunta mudou hoje.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li><strong>Decisão:</strong> manutenção em 3,50%–3,75% | placar 12 a 0.</li>
                    <li><strong>Dot plot:</strong> 9/18 membros projetam pelo menos 1 alta em 2026 (6 deles, mais de uma); apenas 1 projeta corte; mediana 2026 sobe de 3,4% para 3,8%.</li>
                    <li><strong>Comunicado:</strong> curto e enxuto — sem detalhes de votos individuais, sem forward guidance.</li>
                    <li><strong>Warsh:</strong> estreia reformista — 5 forças-tarefa independentes, recusa em submeter dots e tom mais aberto e direto.</li>
                    <li><strong>Tom geral:</strong> hawkish na substância, reformista na forma — a pergunta mudou de &ldquo;quando o próximo corte?&rdquo; para &ldquo;há espaço para alta?&rdquo;</li>
                </ul>
            </section>

            <section class="content">
                <h2>A decisão e o dot plot</h2>
                <p>
                    O dot plot surpreendeu: <strong>9 dos 18 membros do FOMC projetam pelo menos uma alta ainda em 2026</strong>, sendo que 6 desses 9 projetam mais de uma.
                    Apenas 1 membro projeta corte. A taxa mediana para o ano subiu de 3,4% para 3,8%, e o PCE não retorna à meta de 2% antes de 2028.
                </p>
            </section>

            <figure class="figure">
                <img src="{{ asset('artigos/fomc-06-2026-fed-funds.png') }}" alt="Gráfico: taxa de juros dos EUA — Federal Funds de 2020 a 2026, com patamar atual em 3,50%–3,75% (FRED, elaboração Guilherme Jung)." loading="eager" decoding="async">
                <figcaption>Taxa de juros dos EUA — Federal Funds. Fonte: FRED · Elaboração: Guilherme Jung.</figcaption>
            </figure>

            <section class="content">
                <h2>Comunicado enxuto</h2>
                <p>
                    O comunicado em si foi radicalmente diferente do que o mercado estava acostumado: curto, enxuto, sem detalhes sobre os votos individuais de cada membro, sem forward guidance.
                    Warsh foi explícito: <em>&ldquo;forward guidance não é adequado para o estado atual da política monetária.&rdquo;</em>
                </p>
                <p>
                    O texto reconheceu atividade sólida, crescimento de produtividade forte, mercado de trabalho equilibrado — e inflação ainda elevada, em parte reflexo dos choques de oferta da guerra, com energia como vetor explícito.
                    A mensagem foi direta: o Fed vai entregar estabilidade de preços. Sem rodeios, sem janelas abertas.
                </p>

                <h2>Coletiva de Warsh</h2>
                <p>
                    A coletiva foi o evento do dia — e Warsh entregou uma estreia fora do padrão. Mais aberto, mais conciso, mais honesto do que o mercado esperava.
                    Ele foi enfático: <em>&ldquo;preços consistentemente acima da meta nos últimos 5 anos&rdquo;</em> e <em>&ldquo;a inflação é, em grande medida, uma escolha.&rdquo;</em>
                    Recusou submeter seus próprios dots porque discorda estruturalmente do formato atual do SEP — chamou as projeções de <em>&ldquo;escritas a lápis, porque mudam muito.&rdquo;</em>
                </p>
                <p>
                    E anunciou a criação de cinco forças-tarefa independentes para reformular o Fed de dentro para fora:
                    comunicação, gestão do balanço, fontes e uso de dados, produtividade e emprego (incluindo IA), e modelos de inflação.
                    Uma mudança de paradigma sendo construída em tempo real.
                </p>

                <h2>Transmissão da política monetária</h2>
                <p>
                    A frase que mais pesou nos mercados veio quase de passagem: <em>&ldquo;a política do Fed parece restritiva para o setor imobiliário, mas não para os mercados financeiros.&rdquo;</em>
                    É um sinal de que Warsh não está satisfeito com a transmissão da política monetária — e que o debate sobre o que fazer a seguir vai muito além da taxa de juros.
                    <strong>Uma nova era da política monetária americana está à nossa frente — e ela começa mais hawkish do que qualquer um esperava.</strong>
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

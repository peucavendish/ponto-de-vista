<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Copom corta 0,25pp: comunicado mais cauteloso | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre a decisão do Copom em 29/04/2026: corte da Selic, expectativas de inflação e próximos passos da política monetária.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/copom-corta-025pp-29-04-2026') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Copom corta 0,25pp, mas o comunicado fala mais alto que a decisão">
    <meta property="og:description" content="Leitura da Alta Vista sobre Selic, inflação e riscos externos após o Copom de 29/04/2026.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/copom-corta-025pp-29-04-2026') }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-04-29">
    <meta property="article:section" content="Política Monetária">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copom corta 0,25pp, mas o comunicado fala mais alto que a decisão">
    <meta name="twitter:description" content="Análise sobre Selic, expectativas e cenário externo em tom mais cauteloso do BC.">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "Copom corta 0,25pp, mas o comunicado fala mais alto que a decisão",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-04-29",
            "dateModified": "2026-04-29",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/copom-corta-025pp-29-04-2026') }}",
            "description": "Análise sobre o corte de 0,25pp na Selic e o tom mais restritivo do comunicado do Copom."
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
        <span class="section-chip">Série do Economista-Chefe</span>
    </div>

    <main class="container">
        <article itemscope itemtype="https://schema.org/Article">
            <p class="kicker">Política Monetária</p>
            <h1>🇧🇷‼ Copom corta 0,25pp, mas o comunicado fala mais alto que a decisão</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-04-29" itemprop="datePublished">29/04/2026</time></p>

            <p class="lead">
                O Copom entregou o corte esperado, mas o comunicado veio mais duro: o ciclo continua, só que sob uma lógica claramente mais cautelosa.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li>Selic reduzida para 14,50% a.a., com votação unânime (6 a 0).</li>
                    <li>Expectativas seguem pressionadas: Focus em 4,9% (2026) e 4,0% (2027).</li>
                    <li>Sem guidance: próximos passos dependem de inflação, expectativas e cenário externo.</li>
                </ul>
            </section>

            <x-investment-simulator
                title="Simulador: como evolui seu patrimônio com 100% do CDI"
                :cdi-annual="14.4"
                :cdi-percent="100"
            />

            <section class="content">
                <h2>Leitura da decisão</h2>
                <p>
                    O Comitê de Política Monetária reduziu a Selic para 14,50% ao ano, em corte de 0,25pp aprovado por 6 votos a 0.
                    A decisão veio dentro do esperado — mas o comunicado entrega uma mensagem mais importante:
                    o ciclo continua, porém sob uma lógica radicalmente mais cautelosa.
                </p>

                <p>
                    O BC foi direto ao reconhecer a piora. Inflação acima da meta e se distanciando.
                    Expectativas desancoradas — Focus aponta 4,9% para 2026 e 4,0% para 2027, ambas acima do teto.
                    As próprias projeções do Copom para o 4º trimestre de 2027 ficaram em 3,5% no cenário de referência,
                    ainda acima da meta de 3,0%. O mercado de trabalho resiste.
                    E o conflito no Oriente Médio paira como risco explícito sobre commodities, câmbio e cadeias de suprimento.
                </p>

                <h2>O que muda daqui para frente</h2>
                <p>
                    Nesse contexto, o Comitê justificou o corte pelo período prolongado de política contracionista
                    que já produziu efeitos sobre a atividade — ou seja, o juro alto fez o que tinha que fazer,
                    e há espaço para calibração. Mas a palavra-chave do comunicado é calibração — não afrouxamento.
                    A diferença é sutil, porém deliberada.
                </p>

                <p>
                    O que muda de agora em diante: sem guidance, sem ritmo pré-definido, sem compromisso.
                    Os próximos passos dependem diretamente de como os conflitos no Oriente Médio evoluem,
                    de quanto a inflação de serviços resiste e de se as expectativas param de piorar.
                    O BC quer clareza antes de seguir — e sinaliza que está disposto a esperar por ela.
                </p>

                <p>
                    O ciclo de cortes não acabou. Mas passou a operar no modo mais cauteloso possível.
                </p>
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

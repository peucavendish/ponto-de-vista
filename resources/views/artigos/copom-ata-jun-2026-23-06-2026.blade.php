<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ata Copom Jun/2026: hawkish no diagnóstico, cautelosa na ação | Ponto de Vista</title>
    <meta name="description" content="Análise de Guilherme Jung sobre a ata da 279ª reunião do Copom (16–17/06/2026): corte de 0,25pp na Selic, expectativas desancoradas, riscos geopolíticos e tom hawkish no diagnóstico.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/copom-ata-jun-2026-23-06-2026') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Ata Copom Jun/2026: hawkish no diagnóstico, cautelosa na ação">
    <meta property="og:description" content="Selic a 14,25% a.a.; cenário piorou, expectativas desancoradas até 2028 e ciclo de cortes em compasso de espera. Leitura da Alta Vista.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/copom-ata-jun-2026-23-06-2026') }}">
    <meta property="og:image" content="{{ url(asset('artigos/copom-0626-sentimento-zscore.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Guilherme Jung">
    <meta property="article:published_time" content="2026-06-23">
    <meta property="article:section" content="Política Monetária">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ata Copom Jun/2026: hawkish no diagnóstico, cautelosa na ação">
    <meta name="twitter:description" content="Selic a 14,25%, projeção do horizonte relevante em 3,7% e ciclo de cortes em compasso de espera.">
    <meta name="twitter:image" content="{{ url(asset('artigos/copom-0626-sentimento-zscore.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "Ata Copom Jun/2026: hawkish no diagnóstico, cautelosa na ação",
            "author": {
                "@@type": "Person",
                "name": "Guilherme Jung"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-06-23",
            "dateModified": "2026-06-23",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/copom-ata-jun-2026-23-06-2026') }}",
            "description": "Análise da ata da 279ª reunião do Copom: corte de 0,25pp na Selic, deterioração do cenário inflacionário e tom hawkish no diagnóstico."
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

        .decision-bar {
            margin: 1rem 0 0;
            padding: 0.75rem 1rem;
            background: var(--soft);
            border: 1px solid #d7e4f9;
            border-radius: 10px;
            font-size: 0.92rem;
            color: #2e4369;
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

        .content h2 + p,
        .content h2 + ol {
            margin-top: 0;
        }

        .content p {
            margin: 0 0 1rem;
        }

        .content ol {
            margin: 0 0 1rem;
            padding-left: 1.35rem;
            display: grid;
            gap: 0.55rem;
        }

        .content ol li {
            padding-left: 0.25rem;
        }

        .callout {
            margin: 1.25rem 0;
            padding: 0.85rem 1rem;
            border-left: 4px solid #d97706;
            background: #fffbeb;
            border-radius: 10px;
            color: #5c4a1f;
            font-size: 0.98rem;
        }

        .callout-tip {
            border-left-color: var(--brand);
            background: #f0f6ff;
            color: #2e4369;
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
            <p class="kicker">Política Monetária · 279ª Reunião</p>
            <h1>Copom corta 0,25pp — Selic vai a 14,25% com cenário geopolítico ainda nebuloso</h1>
            <p class="meta"><span itemprop="author">Por Guilherme Jung, Economista da Alta Vista Investimentos</span> | <time datetime="2026-06-23" itemprop="datePublished">23/06/2026</time></p>

            <p class="decision-bar"><strong>Data:</strong> 16–17 de junho de 2026 &nbsp;|&nbsp; <strong>Decisão:</strong> ✂️ <strong>–0,25pp → Selic: 14,25% a.a.</strong> &nbsp;|&nbsp; <strong>Votação:</strong> Unânime</p>

            <p class="lead">
                O BC cortou, mas o recado é claro — o cenário piorou, as expectativas se desancoraram ainda mais e cada próximo passo depende do que a geopolítica e os dados mostrarem.
            </p>

            <section class="summary">
                <h2>Pontos-chave</h2>
                <ul>
                    <li><strong>Decisão:</strong> Corte de 0,25pp — Selic a <strong>14,25% a.a.</strong> | Unânime</li>
                    <li><strong>Tom da ata:</strong> Hawkish no diagnóstico, cautelosa na ação — ciclo em compasso de espera</li>
                    <li><strong>Projeções:</strong> IPCA 2026 em <strong>5,2%</strong>; IPCA 4T27 em <strong>3,7%</strong> (subiu de 3,5% em abril)</li>
                    <li><strong>Expectativas:</strong> Desancoradas — agora também para 2028</li>
                    <li><strong>Convergência:</strong> Inflação à meta no <strong>1T28</strong> (um trimestre depois da reunião anterior)</li>
                    <li><strong>Riscos:</strong> Predominantemente altistas — desancoragem, serviços resilientes, câmbio depreciado</li>
                    <li><strong>Leitura de mercado:</strong> Ciclo de cortes não está morto, mas espaço em 2026 deve ser revisado para baixo</li>
                </ul>
            </section>

            <x-investment-simulator
                title="Simulador: como evolui seu patrimônio com 100% do CDI"
                :cdi-annual="14.15"
                :cdi-percent="100"
            />

            <section class="content">
                <h2>O que aconteceu</h2>
                <p>
                    O Copom cortou a Selic em 0,25 ponto percentual para <strong>14,25% a.a.</strong> em decisão unânime. O corte mantém o ritmo de calibração gradual,
                    mas a ata deixa claro que o ambiente piorou desde a reunião anterior: a inflação cheia ultrapassou o teto da meta na última leitura,
                    as expectativas seguiram desancorando — agora também para 2028 — e os conflitos no Oriente Médio introduziram novos choques de oferta
                    sobre preços de commodities e câmbio.
                </p>

                <h2>O que motivou a decisão</h2>
                <p>
                    O Comitê rejeitou trajetórias de Selic com movimentos abruptos (alta brusca seguida de inflação abaixo da meta por vários trimestres),
                    por entender que isso induziria volatilidade excessiva nos ativos. A trajetória escolhida — menos discrepante da Focus e do QPC —
                    contempla pausa e retomada do ciclo de calibração, com inflação convergindo à meta no <strong>primeiro trimestre de 2028</strong>
                    (um trimestre depois da reunião anterior). O câmbio de referência é R$5,10/US$ e o Copom adota bandeira tarifária "amarela"
                    para energia elétrica em dezembro.
                </p>

                <h2>O tom da ata</h2>
                <p>
                    A ata é <strong>hawkish no diagnóstico, cautelosa na ação</strong>. Três mensagens centrais:
                </p>
                <ol>
                    <li><strong>Expectativas desancoradas exigem mais restrição por mais tempo</strong> — em ambiente de desancoragem, o custo de desinflação sobre a atividade é maior. Todos os membros compartilharam essa conclusão.</li>
                    <li><strong>Fiscal continua no radar</strong> — o Comitê reafirmou que esmorecimento na disciplina fiscal e expansão de crédito direcionado elevam a taxa neutra e enfraquecem a potência da política monetária.</li>
                    <li><strong>Incerteza geopolítica manda calibrar devagar</strong> — o BC não quer reagir integralmente a choques de oferta, aguardando clareza sobre profundidade e extensão dos conflitos no Oriente Médio.</li>
                </ol>

                <figure class="article-figure">
                    <div class="img-shell">
                        <img src="{{ asset('artigos/copom-0626-sentimento-zscore.png') }}" alt="Gráfico de barras e linha: z-score do sentimento das atas do Copom de 2020 a junho de 2026, com média móvel de 5 reuniões (Banco Central do Brasil, elaboração Guilherme Jung)." loading="eager" decoding="async">
                    </div>
                    <figcaption><strong>Z-score do sentimento das atas do Copom.</strong> Mede o quanto cada reunião foi mais ou menos positiva em linguagem em relação à média histórica do Comitê. Acima de zero: tom mais dovish que o usual. Abaixo de zero: linguagem mais carregada de preocupações, sinal hawkish. A linha suaviza o ruído e revela os ciclos de humor do Copom. Fonte: Banco Central do Brasil · Elaboração: Guilherme Jung.</figcaption>
                </figure>

                <h2>Projeções de inflação (cenário de referência)</h2>
                <p>
                    IPCA 2026: <strong>5,2%</strong> &nbsp;|&nbsp; IPCA 4º tri 2027: <strong>3,7%</strong> (meta: 3,0%) &nbsp;|&nbsp; Livres 2026: 5,3% &nbsp;|&nbsp; Administrados 2026: 4,7%
                </p>
                <div class="callout">
                    ⚠️ A projeção para o horizonte relevante subiu de 3,5% (abril) para 3,7% — sinal de deterioração do cenário.
                </div>

                <h2>Balanço de riscos</h2>
                <p>
                    <strong>Altistas (predominam):</strong> desancoragem prolongada das expectativas; inflação de serviços resiliente por hiato positivo;
                    câmbio persistentemente depreciado; estímulos à demanda acima do potencial. O Copom cita o El Niño como um choque de oferta
                    <strong>ainda não materializado</strong> que está sendo considerado nas projeções, ao lado dos efeitos do conflito no Oriente Médio.
                </p>
                <p>
                    <strong>Baixistas:</strong> desaceleração doméstica mais acentuada; desaceleração global por choques de comércio e petróleo;
                    queda de commodities com efeito desinflacionário.
                </p>

                <h2>Leitura de mercado</h2>
                <p>
                    A ata confirma que o ciclo de cortes <strong>não está morto, mas está em compasso de espera</strong>. Com a projeção do horizonte relevante
                    subindo e o IPCA já acima do teto, o mercado deve rever para baixo o espaço de cortes em 2026. O principal gatilho para retomada mais firme
                    do ciclo seria uma resolução do conflito no Oriente Médio com arrefecimento de commodities e câmbio mais comportado. No curto prazo,
                    a assimetria altista nos riscos de inflação e a desancoragem de 2028 sugerem cautela com duration.
                </p>

                <div class="callout callout-tip">
                    💡 <strong>Em uma linha:</strong> O BC cortou, mas o recado é claro — o cenário piorou, as expectativas se desancoraram ainda mais e cada próximo passo depende do que a geopolítica e os dados mostrarem.
                </div>
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

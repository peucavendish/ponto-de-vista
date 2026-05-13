<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CDI vs IPCA+: histórico dos últimos 25 anos | Ponto de Vista</title>
    <meta name="description" content="Estudo da evolução do CDI, IPCA e IPCA+6% entre 2001 e 2025: retornos acumulados, janelas móveis de 5 e 10 anos e leitura para alocação em renda fixa.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/artigos/economista-chefe/cdi-vs-ipca-plus-historico-25-anos') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="CDI vs IPCA+: histórico dos últimos 25 anos">
    <meta property="og:description" content="Comparação do CDI com inflação e IPCA+6% de 2001 a 2025, com gráficos e tabelas de retornos anuais e janelas móveis.">
    <meta property="og:url" content="{{ url('/artigos/economista-chefe/cdi-vs-ipca-plus-historico-25-anos') }}">
    <meta property="og:image" content="{{ url(asset('artigos/cdi-vs-ipca-plus-25-anos-grafico.png')) }}">
    <meta property="og:site_name" content="Ponto de Vista">
    <meta property="article:author" content="Alexandre Setani">
    <meta property="article:published_time" content="2026-05-13">
    <meta property="article:section" content="Renda fixa">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CDI vs IPCA+: histórico dos últimos 25 anos">
    <meta name="twitter:description" content="Estudo com retornos acumulados, tabelas anuais e janelas móveis de 5 e 10 anos.">
    <meta name="twitter:image" content="{{ url(asset('artigos/cdi-vs-ipca-plus-25-anos-grafico.png')) }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": "CDI vs IPCA+: histórico dos últimos 25 anos",
            "author": {
                "@@type": "Person",
                "name": "Alexandre Setani",
                "jobTitle": "Head de Renda Fixa da Alta Vista Investimentos"
            },
            "publisher": {
                "@@type": "Organization",
                "name": "Alta Vista Investimentos"
            },
            "datePublished": "2026-05-13",
            "dateModified": "2026-05-13",
            "mainEntityOfPage": "{{ url('/artigos/economista-chefe/cdi-vs-ipca-plus-historico-25-anos') }}",
            "description": "Evolução do CDI, IPCA e IPCA+6% entre 2001 e 2025, com retornos anuais e análise em janelas móveis."
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
            width: min(920px, 100% - 2rem);
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

        .content ul {
            margin: 0 0 0.95rem;
            padding-left: 1.15rem;
        }

        .content li {
            margin-bottom: 0.35rem;
        }

        .figure {
            margin: 1rem 0 0.35rem;
        }

        .figure figcaption {
            margin-top: 0.65rem;
            font-size: 0.88rem;
            color: var(--muted);
            text-align: center;
        }

        .chart-card {
            margin: 0;
            padding: 0.85rem 0.75rem 0.35rem;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(13, 28, 57, 0.07);
        }

        .chart-canvas-wrap {
            position: relative;
            width: 100%;
            height: clamp(280px, 52vw, 440px);
            max-height: 460px;
        }

        @media (max-width: 680px) {
            .chart-card { padding: 0.65rem 0.45rem 0.25rem; }
            .chart-canvas-wrap { height: min(320px, 72vw); }
        }

        .sim-card {
            margin: 0.9rem 0 1rem;
            background: linear-gradient(180deg, #f7faff 0%, #ffffff 100%);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 1rem 1rem 0.9rem;
            box-shadow: 0 6px 22px rgba(13, 28, 57, 0.05);
        }

        .sim-card h3 {
            margin: 0 0 0.15rem;
            color: var(--brand);
            font-size: 1rem;
        }

        .sim-card .sim-sub {
            margin: 0 0 0.85rem;
            color: var(--muted);
            font-size: 0.88rem;
        }

        .sim-form {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr;
            gap: 0.6rem 0.7rem;
            align-items: end;
        }

        .sim-field { display: flex; flex-direction: column; gap: 0.25rem; }

        .sim-field label {
            font-size: 0.78rem;
            color: #48618e;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .sim-field .input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .sim-field .input-prefix {
            position: absolute;
            left: 0.7rem;
            color: var(--muted);
            font-size: 0.92rem;
            pointer-events: none;
        }

        .sim-field input,
        .sim-field select {
            width: 100%;
            border: 1px solid var(--line);
            background: #fff;
            border-radius: 10px;
            padding: 0.55rem 0.7rem;
            font-size: 0.95rem;
            color: var(--text);
            font-family: inherit;
            outline: none;
            transition: border-color .15s ease, box-shadow .15s ease;
        }

        .sim-field input.with-prefix { padding-left: 2.05rem; }

        .sim-field input:focus,
        .sim-field select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(22, 63, 136, 0.12);
        }

        .sim-results {
            margin-top: 0.9rem;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.55rem;
        }

        .sim-result {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 0.7rem 0.8rem;
        }

        .sim-result.is-cdi { border-top: 3px solid #94a3b8; }
        .sim-result.is-ipca { border-top: 3px solid #0f2847; }
        .sim-result.is-ip6 { border-top: 3px solid #1d4ed8; }

        .sim-result .sim-label {
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #5f7090;
            font-weight: 700;
        }

        .sim-result .sim-value {
            margin-top: 0.2rem;
            font-size: 1.12rem;
            font-weight: 700;
            color: var(--text);
            font-variant-numeric: tabular-nums;
        }

        .sim-result .sim-delta {
            margin-top: 0.1rem;
            font-size: 0.82rem;
            color: var(--muted);
            font-variant-numeric: tabular-nums;
        }

        .sim-footnote {
            margin: 0.65rem 0 0;
            font-size: 0.78rem;
            color: var(--muted);
        }

        @media (max-width: 680px) {
            .sim-form { grid-template-columns: 1fr 1fr; }
            .sim-field.is-amount { grid-column: 1 / -1; }
            .sim-results { grid-template-columns: 1fr; }
        }

        .table-wrap {
            margin: 0.85rem 0 1.1rem;
            overflow-x: auto;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: #fff;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.82rem;
        }

        .data-table th,
        .data-table td {
            padding: 0.45rem 0.55rem;
            text-align: right;
            border-bottom: 1px solid #e8eef8;
            white-space: nowrap;
        }

        .data-table th:first-child,
        .data-table td:first-child {
            text-align: left;
            position: sticky;
            left: 0;
            background: #fff;
            box-shadow: 2px 0 6px rgba(18, 40, 74, 0.06);
            z-index: 1;
        }

        .data-table thead th {
            background: #eef4ff;
            color: var(--brand);
            font-weight: 700;
            border-bottom: 2px solid var(--line);
        }

        .data-table tbody tr:nth-child(even) td:first-child {
            background: #fafcff;
        }

        .data-table tbody tr:nth-child(even) td {
            background: #fafcff;
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
            .data-table { font-size: 0.76rem; }
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
            <p class="kicker">Renda fixa</p>
            <h1>CDI vs IPCA+: histórico dos últimos 25 anos</h1>
            <p class="meta"><span itemprop="author">Por Alexandre Setani, Head de Renda Fixa da Alta Vista Investimentos</span> | <time datetime="2026-05-13" itemprop="datePublished">13/05/2026</time></p>

            <p class="lead">
                Uma das dúvidas mais frequentes entre investidores em renda fixa é se compensa mais investir atrelado ao CDI ou ao IPCA+. Ainda que a recomendação geral seja buscar uma estratégia diversificada, faz sentido entender o histórico desses indexadores.
            </p>

            <section class="summary">
                <h2>Em resumo</h2>
                <ul>
                    <li>Estudo de 2001 a 2025 com retornos brutos: CDI, IPCA acumulado e IPCA+6% ao ano.</li>
                    <li>Retorno acumulado em 25 anos: CDI 1.577% e IPCA+6% 1.787%; CDI equivale a cerca de IPCA+5,58% a.a. no período.</li>
                    <li>Em janelas móveis de 5 e 10 anos, o IPCA+6% tende a se destacar após o ciclo de juros mais alto do início dos anos 2000.</li>
                </ul>
            </section>

            <section class="content">
                <p>
                    Para auxiliar a responder essa pergunta, elaboramos um estudo da evolução do CDI e do IPCA desde 2001 até 2025 (25 anos), período em que podemos considerar que a política monetária seguiu um padrão mais consistente desde o início do Plano Real.
                </p>
                <p>
                    Um dado que incluímos no estudo é a comparação do CDI com a taxa IPCA+6% ao ano, patamar de juros real considerado por diversos planejadores financeiros como excelente no longo prazo, mas que nos últimos anos gerou dúvidas porque muitos ativos IPCA+ passaram a remunerar abaixo do CDI.
                </p>

                <h2>O estudo</h2>
                <p>
                    Para o estudo realizado, consideramos os retornos brutos dos índices. O gráfico abaixo apresenta a evolução do CDI, do IPCA e do IPCA+6% entre 2001 e 2025.
                </p>

                @php
                    $cdiVsIpcaAnnual = [
                        ['cdi' => 17.32, 'ipca' => 7.67, 'ip6' => 14.13],
                        ['cdi' => 19.17, 'ipca' => 12.53, 'ip6' => 19.28],
                        ['cdi' => 23.35, 'ipca' => 9.30, 'ip6' => 15.86],
                        ['cdi' => 16.25, 'ipca' => 7.60, 'ip6' => 14.06],
                        ['cdi' => 19.05, 'ipca' => 5.69, 'ip6' => 12.03],
                        ['cdi' => 15.08, 'ipca' => 3.14, 'ip6' => 9.33],
                        ['cdi' => 11.88, 'ipca' => 4.46, 'ip6' => 10.72],
                        ['cdi' => 12.48, 'ipca' => 5.90, 'ip6' => 12.26],
                        ['cdi' => 9.93, 'ipca' => 4.31, 'ip6' => 10.57],
                        ['cdi' => 9.78, 'ipca' => 5.91, 'ip6' => 12.26],
                        ['cdi' => 11.62, 'ipca' => 6.50, 'ip6' => 12.89],
                        ['cdi' => 8.49, 'ipca' => 5.84, 'ip6' => 12.19],
                        ['cdi' => 8.22, 'ipca' => 5.91, 'ip6' => 12.27],
                        ['cdi' => 10.90, 'ipca' => 6.41, 'ip6' => 12.79],
                        ['cdi' => 13.27, 'ipca' => 10.67, 'ip6' => 17.31],
                        ['cdi' => 14.02, 'ipca' => 6.29, 'ip6' => 12.67],
                        ['cdi' => 9.94, 'ipca' => 2.95, 'ip6' => 9.12],
                        ['cdi' => 6.43, 'ipca' => 3.75, 'ip6' => 9.97],
                        ['cdi' => 5.96, 'ipca' => 4.31, 'ip6' => 10.56],
                        ['cdi' => 2.76, 'ipca' => 4.52, 'ip6' => 10.79],
                        ['cdi' => 4.42, 'ipca' => 10.06, 'ip6' => 16.66],
                        ['cdi' => 12.39, 'ipca' => 5.78, 'ip6' => 12.13],
                        ['cdi' => 13.04, 'ipca' => 4.62, 'ip6' => 10.90],
                        ['cdi' => 10.88, 'ipca' => 4.83, 'ip6' => 11.12],
                        ['cdi' => 14.32, 'ipca' => 4.26, 'ip6' => 10.52],
                    ];
                    $chartLabels = [];
                    $chartCdi = [];
                    $chartIpca = [];
                    $chartIp6 = [];
                    $mCdi = 1.0;
                    $mIpca = 1.0;
                    $mIp6 = 1.0;
                    foreach ($cdiVsIpcaAnnual as $i => $row) {
                        $mCdi *= 1 + $row['cdi'] / 100;
                        $mIpca *= 1 + $row['ipca'] / 100;
                        $mIp6 *= 1 + $row['ip6'] / 100;
                        $chartLabels[] = (string) (2001 + $i);
                        $chartCdi[] = round(($mCdi - 1) * 100, 2);
                        $chartIpca[] = round(($mIpca - 1) * 100, 2);
                        $chartIp6[] = round(($mIp6 - 1) * 100, 2);
                    }
                @endphp

                <figure class="figure">
                    <div class="chart-card">
                        <div class="chart-canvas-wrap">
                            <canvas id="cdiIpcaChart" aria-label="Gráfico de linhas: retorno acumulado em percentual do CDI, IPCA e IPCA+6% de 2001 a 2025" role="img"></canvas>
                        </div>
                    </div>
                    <figcaption>CDI vs IPCA+6% — retorno acumulado bruto (%) ao fim de cada ano, com base na tabela de retornos anuais do estudo (2001–2025).</figcaption>
                </figure>

                <div class="sim-card" role="region" aria-label="Simulador: quanto teria hoje">
                    <h3>E se você tivesse aplicado?</h3>
                    <p class="sim-sub">Simule quanto um valor aplicado em janeiro de um ano teria rendido até o fim de outro ano, comparando CDI, IPCA e IPCA+6% com os retornos brutos do estudo.</p>
                    <form class="sim-form" id="cdiIpcaSimForm" onsubmit="return false;">
                        <div class="sim-field is-amount">
                            <label for="simAmount">Valor aplicado</label>
                            <div class="input-wrap">
                                <span class="input-prefix">R$</span>
                                <input type="text" inputmode="decimal" id="simAmount" class="with-prefix" value="10.000" autocomplete="off">
                            </div>
                        </div>
                        <div class="sim-field">
                            <label for="simStart">Ano inicial</label>
                            <select id="simStart"></select>
                        </div>
                        <div class="sim-field">
                            <label for="simEnd">Ano final</label>
                            <select id="simEnd"></select>
                        </div>
                    </form>

                    <div class="sim-results" aria-live="polite">
                        <div class="sim-result is-cdi">
                            <div class="sim-label">CDI</div>
                            <div class="sim-value" id="simValueCdi">—</div>
                            <div class="sim-delta" id="simDeltaCdi">—</div>
                        </div>
                        <div class="sim-result is-ip6">
                            <div class="sim-label">IPCA + 6% a.a.</div>
                            <div class="sim-value" id="simValueIp6">—</div>
                            <div class="sim-delta" id="simDeltaIp6">—</div>
                        </div>
                        <div class="sim-result is-ipca">
                            <div class="sim-label">IPCA (inflação)</div>
                            <div class="sim-value" id="simValueIpca">—</div>
                            <div class="sim-delta" id="simDeltaIpca">—</div>
                        </div>
                    </div>
                    <p class="sim-footnote">Considera aplicação no início do ano inicial e resgate no fim do ano final, com retornos brutos compostos. Não considera tributos nem custos.</p>
                </div>

                <p><strong>Principais destaques desse gráfico são:</strong></p>
                <ul>
                    <li>Historicamente o CDI teve desempenho bem superior à inflação (IPCA), algo esperado dado o histórico macroeconômico recente do Brasil, com foco no controle inflacionário e uso da Selic como um dos principais instrumentos.</li>
                    <li>Quando comparamos o CDI com IPCA+6%, há um momento de inflexão em 2019, ano de cortes mais relevantes da Selic, reforçado em 2020 pela crise da Covid-19.</li>
                    <li>O retorno acumulado de CDI e IPCA+6% em 25 anos foi bastante relevante, totalizando 1.577% e 1.787%, respectivamente. Como referência, o retorno do CDI no período foi equivalente a uma taxa de IPCA+5,58% ao ano.</li>
                </ul>

                <p>
                    Se olharmos os retornos anuais, podemos ver um equilíbrio entre CDI e IPCA+6% ao longo dos 25 anos, conforme a tabela abaixo:
                </p>

                <div class="table-wrap">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Ano</th>
                                <th>CDI anual (%)</th>
                                <th>CDI equiv. IPCA+</th>
                                <th>IPCA anual</th>
                                <th>IPCA+6%</th>
                                <th>Maior retorno</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>2001</td><td>17,32%</td><td>8,96%</td><td>7,67%</td><td>14,13%</td><td>CDI</td></tr>
                            <tr><td>2002</td><td>19,17%</td><td>5,90%</td><td>12,53%</td><td>19,28%</td><td>IPCA+6%</td></tr>
                            <tr><td>2003</td><td>23,35%</td><td>12,85%</td><td>9,30%</td><td>15,86%</td><td>CDI</td></tr>
                            <tr><td>2004</td><td>16,25%</td><td>8,03%</td><td>7,60%</td><td>14,06%</td><td>CDI</td></tr>
                            <tr><td>2005</td><td>19,05%</td><td>12,64%</td><td>5,69%</td><td>12,03%</td><td>CDI</td></tr>
                            <tr><td>2006</td><td>15,08%</td><td>11,57%</td><td>3,14%</td><td>9,33%</td><td>CDI</td></tr>
                            <tr><td>2007</td><td>11,88%</td><td>7,10%</td><td>4,46%</td><td>10,72%</td><td>CDI</td></tr>
                            <tr><td>2008</td><td>12,48%</td><td>6,21%</td><td>5,90%</td><td>12,26%</td><td>CDI</td></tr>
                            <tr><td>2009</td><td>9,93%</td><td>5,39%</td><td>4,31%</td><td>10,57%</td><td>IPCA+6%</td></tr>
                            <tr><td>2010</td><td>9,78%</td><td>3,65%</td><td>5,91%</td><td>12,26%</td><td>IPCA+6%</td></tr>
                            <tr><td>2011</td><td>11,62%</td><td>4,81%</td><td>6,50%</td><td>12,89%</td><td>IPCA+6%</td></tr>
                            <tr><td>2012</td><td>8,49%</td><td>2,51%</td><td>5,84%</td><td>12,19%</td><td>IPCA+6%</td></tr>
                            <tr><td>2013</td><td>8,22%</td><td>2,18%</td><td>5,91%</td><td>12,27%</td><td>IPCA+6%</td></tr>
                            <tr><td>2014</td><td>10,90%</td><td>4,23%</td><td>6,41%</td><td>12,79%</td><td>IPCA+6%</td></tr>
                            <tr><td>2015</td><td>13,27%</td><td>2,34%</td><td>10,67%</td><td>17,31%</td><td>IPCA+6%</td></tr>
                            <tr><td>2016</td><td>14,02%</td><td>7,27%</td><td>6,29%</td><td>12,67%</td><td>CDI</td></tr>
                            <tr><td>2017</td><td>9,94%</td><td>6,79%</td><td>2,95%</td><td>9,12%</td><td>CDI</td></tr>
                            <tr><td>2018</td><td>6,43%</td><td>2,59%</td><td>3,75%</td><td>9,97%</td><td>IPCA+6%</td></tr>
                            <tr><td>2019</td><td>5,96%</td><td>1,59%</td><td>4,31%</td><td>10,56%</td><td>IPCA+6%</td></tr>
                            <tr><td>2020</td><td>2,76%</td><td>−1,68%</td><td>4,52%</td><td>10,79%</td><td>IPCA+6%</td></tr>
                            <tr><td>2021</td><td>4,42%</td><td>−5,12%</td><td>10,06%</td><td>16,66%</td><td>IPCA+6%</td></tr>
                            <tr><td>2022</td><td>12,39%</td><td>6,24%</td><td>5,78%</td><td>12,13%</td><td>CDI</td></tr>
                            <tr><td>2023</td><td>13,04%</td><td>8,05%</td><td>4,62%</td><td>10,90%</td><td>CDI</td></tr>
                            <tr><td>2024</td><td>10,88%</td><td>5,77%</td><td>4,83%</td><td>11,12%</td><td>IPCA+6%</td></tr>
                            <tr><td>2025</td><td>14,32%</td><td>9,65%</td><td>4,26%</td><td>10,52%</td><td>CDI</td></tr>
                            <tr><td><strong>Média</strong></td><td><strong>12,04%</strong></td><td><strong>5,58%</strong></td><td><strong>6,13%</strong></td><td><strong>12,50%</strong></td><td></td></tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    Comparando os retornos anuais, tivemos 12 anos em que o CDI teve melhor desempenho contra 13 anos em que IPCA+6% teve maior retorno anual.
                </p>
                <p>
                    Dados adicionais: nos anos em que o CDI teve melhor desempenho, o retorno médio foi de 14,93%, indicando períodos de Selic em patamar elevado. Já nos anos em que IPCA+6% teve maior retorno, a inflação média foi de 6,58% (próxima da média histórica do IPCA de 6,13%), com CDI anual médio de 9,37%.
                </p>
                <p>
                    Esse comportamento é esperado pelo caráter cíclico e pela forte correlação entre os índices: em períodos inflacionários costuma-se exigir Selic mais elevada; se mantida por mais tempo, desacelera a economia e tende a reduzir a inflação, permitindo também redução da Selic para estimular o crescimento.
                </p>
                <p>
                    Entretanto, é importante entender que o CDI é uma taxa usualmente associada a horizontes de curto prazo, ainda que no histórico geral tenha obtido resultados expressivos. Uma forma de avaliar o retorno desses indexadores é analisar retornos em janelas móveis de tempo.
                </p>

                <h2>Janelas móveis de 5 anos</h2>
                <div class="table-wrap">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Janela (5 anos)</th>
                                <th>CDI</th>
                                <th>CDI equiv. IPCA+</th>
                                <th>IPCA 5 anos</th>
                                <th>IPCA+6%</th>
                                <th>Melhor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>2001–2005</td><td>138,66%</td><td>9,64%</td><td>50,61%</td><td>101,55%</td><td>CDI</td></tr>
                            <tr><td>2002–2006</td><td>134,10%</td><td>10,17%</td><td>44,27%</td><td>93,06%</td><td>CDI</td></tr>
                            <tr><td>2003–2007</td><td>119,76%</td><td>10,41%</td><td>33,92%</td><td>79,21%</td><td>CDI</td></tr>
                            <tr><td>2004–2008</td><td>100,41%</td><td>9,08%</td><td>29,76%</td><td>73,64%</td><td>CDI</td></tr>
                            <tr><td>2005–2009</td><td>89,52%</td><td>8,54%</td><td>25,79%</td><td>68,34%</td><td>CDI</td></tr>
                            <tr><td>2006–2010</td><td>74,76%</td><td>6,75%</td><td>26,05%</td><td>68,68%</td><td>CDI</td></tr>
                            <tr><td>2007–2011</td><td>69,51%</td><td>5,42%</td><td>30,16%</td><td>74,18%</td><td>IPCA+6%</td></tr>
                            <tr><td>2008–2012</td><td>64,38%</td><td>4,50%</td><td>31,88%</td><td>76,49%</td><td>IPCA+6%</td></tr>
                            <tr><td>2009–2013</td><td>58,16%</td><td>3,70%</td><td>31,89%</td><td>76,50%</td><td>IPCA+6%</td></tr>
                            <tr><td>2010–2014</td><td>59,56%</td><td>3,47%</td><td>34,54%</td><td>80,05%</td><td>IPCA+6%</td></tr>
                            <tr><td>2011–2015</td><td>64,63%</td><td>3,21%</td><td>40,59%</td><td>88,14%</td><td>IPCA+6%</td></tr>
                            <tr><td>2012–2016</td><td>68,17%</td><td>3,69%</td><td>40,31%</td><td>87,76%</td><td>IPCA+6%</td></tr>
                            <tr><td>2013–2017</td><td>70,41%</td><td>4,54%</td><td>36,48%</td><td>82,64%</td><td>IPCA+6%</td></tr>
                            <tr><td>2014–2018</td><td>67,59%</td><td>4,62%</td><td>33,69%</td><td>78,90%</td><td>IPCA+6%</td></tr>
                            <tr><td>2015–2019</td><td>60,12%</td><td>4,09%</td><td>31,05%</td><td>75,37%</td><td>IPCA+6%</td></tr>
                            <tr><td>2016–2020</td><td>45,26%</td><td>3,26%</td><td>23,76%</td><td>65,61%</td><td>IPCA+6%</td></tr>
                            <tr><td>2017–2021</td><td>33,04%</td><td>0,75%</td><td>28,15%</td><td>71,49%</td><td>IPCA+6%</td></tr>
                            <tr><td>2018–2022</td><td>36,00%</td><td>0,65%</td><td>31,68%</td><td>76,22%</td><td>IPCA+6%</td></tr>
                            <tr><td>2019–2023</td><td>44,45%</td><td>1,70%</td><td>32,79%</td><td>77,71%</td><td>IPCA+6%</td></tr>
                            <tr><td>2020–2024</td><td>51,15%</td><td>2,52%</td><td>33,46%</td><td>78,60%</td><td>IPCA+6%</td></tr>
                            <tr><td>2021–2025</td><td>68,17%</td><td>4,78%</td><td>33,14%</td><td>78,17%</td><td>IPCA+6%</td></tr>
                            <tr><td><strong>Média</strong></td><td><strong>72,28%</strong></td><td><strong>5,02%</strong></td><td><strong>33,52%</strong></td><td><strong>78,68%</strong></td><td></td></tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    Das 21 janelas avaliadas, 15 tiveram IPCA+6% com retorno superior ao CDI, todas a partir de 2007. Isso ocorre porque entre 2001 e 2007 esteve o período com a maior média histórica do CDI no intervalo analisado (média de 17,44%): juros altos para combater inflação elevada, influenciada também pelo cenário político de 2002, com maior incerteza na condução da política econômica no primeiro mandato do governo Lula, alta do dólar e pressão inflacionária mais aguda.
                </p>
                <p>
                    Fica evidente que, com exceção de cenários de choque de juros altos por períodos prolongados, o CDI teve retornos reais menos expressivos; nas 15 janelas móveis de 2007 em diante, o retorno médio do CDI foi equivalente a IPCA+3,39%.
                </p>

                <h2>Janelas móveis de 10 anos</h2>
                <div class="table-wrap">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Janela (10 anos)</th>
                                <th>CDI</th>
                                <th>CDI equiv. IPCA+</th>
                                <th>IPCA 10 anos</th>
                                <th>IPCA+6%</th>
                                <th>Melhor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>2001–2010</td><td>317,06%</td><td>8,19%</td><td>89,84%</td><td>239,98%</td><td>CDI</td></tr>
                            <tr><td>2002–2011</td><td>296,81%</td><td>7,77%</td><td>87,78%</td><td>236,28%</td><td>CDI</td></tr>
                            <tr><td>2003–2012</td><td>261,25%</td><td>7,42%</td><td>76,61%</td><td>216,29%</td><td>CDI</td></tr>
                            <tr><td>2004–2013</td><td>216,96%</td><td>6,36%</td><td>71,14%</td><td>206,48%</td><td>CDI</td></tr>
                            <tr><td>2005–2014</td><td>202,39%</td><td>5,98%</td><td>69,24%</td><td>203,08%</td><td>IPCA+6%</td></tr>
                            <tr><td>2006–2015</td><td>187,71%</td><td>4,96%</td><td>77,22%</td><td>217,37%</td><td>IPCA+6%</td></tr>
                            <tr><td>2007–2016</td><td>185,06%</td><td>4,55%</td><td>82,62%</td><td>227,05%</td><td>IPCA+6%</td></tr>
                            <tr><td>2008–2017</td><td>180,13%</td><td>4,52%</td><td>79,98%</td><td>222,33%</td><td>IPCA+6%</td></tr>
                            <tr><td>2009–2018</td><td>165,05%</td><td>4,16%</td><td>76,32%</td><td>215,76%</td><td>IPCA+6%</td></tr>
                            <tr><td>2010–2019</td><td>155,48%</td><td>3,78%</td><td>76,31%</td><td>215,74%</td><td>IPCA+6%</td></tr>
                            <tr><td>2011–2020</td><td>139,15%</td><td>3,23%</td><td>73,99%</td><td>211,59%</td><td>IPCA+6%</td></tr>
                            <tr><td>2012–2021</td><td>123,73%</td><td>2,21%</td><td>79,80%</td><td>222,00%</td><td>IPCA+6%</td></tr>
                            <tr><td>2013–2022</td><td>131,76%</td><td>2,58%</td><td>79,71%</td><td>221,84%</td><td>IPCA+6%</td></tr>
                            <tr><td>2014–2023</td><td>142,08%</td><td>3,15%</td><td>77,52%</td><td>217,92%</td><td>IPCA+6%</td></tr>
                            <tr><td>2015–2024</td><td>142,02%</td><td>3,30%</td><td>74,90%</td><td>213,21%</td><td>IPCA+6%</td></tr>
                            <tr><td>2016–2025</td><td>144,28%</td><td>4,02%</td><td>64,77%</td><td>195,07%</td><td>IPCA+6%</td></tr>
                            <tr><td><strong>Média</strong></td><td><strong>186,93%</strong></td><td><strong>4,76%</strong></td><td><strong>77,36%</strong></td><td><strong>217,62%</strong></td><td></td></tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    Novamente observamos que o CDI teve melhor retorno apenas nas quatro primeiras janelas, período em que estão concentrados patamares mais elevados da Selic. Nessas janelas, o CDI teve retorno médio equivalente a IPCA+7,43%. De 2005 em diante, todas as janelas de 10 anos tiveram IPCA+6% como melhor retorno; nesse período, o CDI em 10 anos teve retorno médio equivalente a IPCA+3,87%.
                </p>
                <p>
                    O horizonte de 10 anos é relevante porque engloba diferentes cenários, incluindo trocas de governos e fases de inflação alta e moderada. As duas primeiras janelas concentram tanto os maiores patamares do CDI quanto de inflação, com CDI médio de cerca de 15% a.a. e inflação média de cerca de 6,6% a.a., mostrando como um choque de Selic alta por um período maior impacta os retornos esperados.
                </p>

                <h2>Considerações finais</h2>
                <ul>
                    <li>Os dados históricos corroboram a avaliação de planejadores de que uma taxa de retorno de IPCA+6% (cerca de 6% de juros real ao ano) é atrativa em janelas mais longas, inclusive em cenários de Selic/CDI mais elevados.</li>
                    <li>O estudo não avaliou a volatilidade dos preços dos ativos por marcação a mercado, fator adicional que pode gerar desconforto em títulos indexados à inflação de médio e longo prazo para perfis mais conservadores.</li>
                    <li>Para quem pretende carregar títulos por mais de cinco anos, IPCA+6% é um patamar que trouxe retornos significativos, ainda que não supere o CDI em todos os cenários.</li>
                    <li>Alocação em CDI (pós-fixado) continua relevante nas carteiras, especialmente com foco no curto prazo.</li>
                    <li>O histórico sugere que, para janelas de pelo menos cinco anos de carrego, há prêmio em alocar em ativos indexados à inflação; a diversificação entre estratégias ajuda o investidor a alinhar a carteira ao planejamento financeiro.</li>
                </ul>
            </section>

            <section class="invest-cta">
                <p>
                    Quer montar uma alocação em renda fixa alinhada ao seu horizonte e ao seu perfil?
                    Fale com o time da Alta Vista.
                </p>
                <a class="btn-invest" href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">
                    Quero investir com a Alta Vista
                </a>
            </section>
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js" crossorigin="anonymous"></script>
    <script>
        (function () {
            const labels = @json($chartLabels);
            const dataIpca = @json($chartIpca);
            const dataCdi = @json($chartCdi);
            const dataIp6 = @json($chartIp6);
            const annual = @json($cdiVsIpcaAnnual);

            const el = document.getElementById('cdiIpcaChart');

            const fmtPct = function (v) {
                return v.toLocaleString('pt-BR', { maximumFractionDigits: 0 }) + '%';
            };

            if (el && typeof Chart !== 'undefined') new Chart(el, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'IPCA acumulado',
                            data: dataIpca,
                            borderColor: '#0f2847',
                            backgroundColor: 'rgba(15, 40, 71, 0.06)',
                            borderWidth: 2.2,
                            tension: 0.2,
                            pointRadius: 0,
                            pointHitRadius: 8,
                        },
                        {
                            label: 'CDI acumulado',
                            data: dataCdi,
                            borderColor: '#94a3b8',
                            backgroundColor: 'rgba(148, 163, 184, 0.08)',
                            borderWidth: 2.2,
                            tension: 0.2,
                            pointRadius: 0,
                            pointHitRadius: 8,
                        },
                        {
                            label: 'IPCA+6%',
                            data: dataIp6,
                            borderColor: '#1d4ed8',
                            backgroundColor: 'rgba(29, 78, 216, 0.08)',
                            borderWidth: 2.4,
                            tension: 0.2,
                            pointRadius: 0,
                            pointHitRadius: 8,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        title: {
                            display: true,
                            text: 'CDI vs IPCA+6% — retorno acumulado (%)',
                            color: '#12284a',
                            font: { family: 'Inter, system-ui, sans-serif', size: 15, weight: '600' },
                            padding: { bottom: 10, top: 4 },
                        },
                        legend: {
                            position: 'top',
                            align: 'start',
                            labels: {
                                boxWidth: 14,
                                boxHeight: 14,
                                padding: 14,
                                color: '#23395f',
                                font: { family: 'Inter, system-ui, sans-serif', size: 12 },
                            },
                        },
                        tooltip: {
                            callbacks: {
                                label: function (ctx) {
                                    const v = ctx.raw;
                                    return ctx.dataset.label + ': ' + v.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '%';
                                },
                            },
                        },
                    },
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: {
                                maxTicksLimit: 9,
                                autoSkip: true,
                                color: '#5f7090',
                                font: { size: 11 },
                            },
                        },
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(18, 40, 74, 0.07)' },
                            ticks: {
                                color: '#5f7090',
                                font: { size: 11 },
                                callback: function (v) { return fmtPct(v); },
                            },
                        },
                    },
                },
            });

            const simForm = document.getElementById('cdiIpcaSimForm');
            if (simForm) {
                const inputAmount = document.getElementById('simAmount');
                const selStart = document.getElementById('simStart');
                const selEnd = document.getElementById('simEnd');
                const elCdi = document.getElementById('simValueCdi');
                const elIp6 = document.getElementById('simValueIp6');
                const elIpca = document.getElementById('simValueIpca');
                const dCdi = document.getElementById('simDeltaCdi');
                const dIp6 = document.getElementById('simDeltaIp6');
                const dIpca = document.getElementById('simDeltaIpca');

                const years = labels.map(function (l) { return parseInt(l, 10); });
                const firstYear = years[0];
                const lastYear = years[years.length - 1];

                years.forEach(function (y) {
                    const optA = document.createElement('option');
                    optA.value = String(y); optA.textContent = String(y);
                    selStart.appendChild(optA);
                    const optB = document.createElement('option');
                    optB.value = String(y); optB.textContent = String(y);
                    selEnd.appendChild(optB);
                });
                selStart.value = String(firstYear);
                selEnd.value = String(lastYear);

                const fmtBRL = function (v) {
                    return v.toLocaleString('pt-BR', {
                        style: 'currency',
                        currency: 'BRL',
                        maximumFractionDigits: 2,
                    });
                };
                const fmtPctSigned = function (v) {
                    const s = v >= 0 ? '+' : '';
                    return s + v.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '%';
                };

                const parseAmount = function (raw) {
                    if (raw == null) return 0;
                    let s = String(raw).trim().replace(/\s/g, '').replace(/^R\$\s?/i, '');
                    if (!s) return 0;
                    if (s.indexOf(',') > -1) {
                        s = s.replace(/\./g, '').replace(',', '.');
                    } else {
                        s = s.replace(/\./g, '');
                    }
                    const n = parseFloat(s);
                    return isFinite(n) && n > 0 ? n : 0;
                };

                const compound = function (key, fromYear, toYear) {
                    let m = 1;
                    for (let y = fromYear; y <= toYear; y++) {
                        const row = annual[y - firstYear];
                        if (!row) continue;
                        m *= 1 + row[key] / 100;
                    }
                    return m;
                };

                const update = function () {
                    let a = parseInt(selStart.value, 10);
                    let b = parseInt(selEnd.value, 10);
                    if (b < a) { b = a; selEnd.value = String(a); }
                    const amount = parseAmount(inputAmount.value);

                    const mCdi = compound('cdi', a, b);
                    const mIp6 = compound('ip6', a, b);
                    const mIpca = compound('ipca', a, b);

                    const fmt = function (mult, target, delta) {
                        if (amount <= 0) { target.textContent = '—'; delta.textContent = '—'; return; }
                        target.textContent = fmtBRL(amount * mult);
                        delta.textContent = fmtPctSigned((mult - 1) * 100) + ' no período';
                    };
                    fmt(mCdi, elCdi, dCdi);
                    fmt(mIp6, elIp6, dIp6);
                    fmt(mIpca, elIpca, dIpca);
                };

                inputAmount.addEventListener('input', function () {
                    const cleaned = inputAmount.value.replace(/[^0-9.,]/g, '');
                    if (cleaned !== inputAmount.value) inputAmount.value = cleaned;
                    update();
                });
                inputAmount.addEventListener('blur', function () {
                    const n = parseAmount(inputAmount.value);
                    if (n > 0) {
                        inputAmount.value = n.toLocaleString('pt-BR', {
                            minimumFractionDigits: n % 1 === 0 ? 0 : 2,
                            maximumFractionDigits: 2,
                        });
                    }
                    update();
                });
                selStart.addEventListener('change', update);
                selEnd.addEventListener('change', update);

                update();
            }
        })();
    </script>
</body>
</html>

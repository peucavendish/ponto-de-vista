<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Ponto de Vista') }}</title>
    <meta name="description" content="Análises e conteúdos da Alta Vista Investimentos em um só lugar.">

    <!-- Favicon gerado a partir do logotipo Ponto de Vista (public/ponto-de-vista-logo-header.png) -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon-512x512.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'Ponto de Vista') }}">
    <meta property="og:title" content="{{ config('app.name', 'Ponto de Vista') }}">
    <meta property="og:description" content="Análises e conteúdos da Alta Vista Investimentos em um só lugar.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-ponto-de-vista-1200x630.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('og-ponto-de-vista-1200x630.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Ponto de Vista — Alta Vista Investimentos">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('og-ponto-de-vista-1200x630.png') }}">
    <meta name="twitter:title" content="{{ config('app.name', 'Ponto de Vista') }}">
    <meta name="twitter:description" content="Análises e conteúdos da Alta Vista Investimentos em um só lugar.">
    <style>
        :root {
            color-scheme: light;
            --bg: #edf2fb;
            --surface: #ffffff;
            --surface-soft: #f8faff;
            --text: #0f1b37;
            --muted: #5d6c89;
            --brand: #10254f;
            --brand-accent: #1f4a9d;
            --line: #dfe6f3;
            --hub-gratis: #0f766e;
            --hub-gratis-soft: #ccfbf1;
            --hub-gratis-border: #5eead4;
            --hub-gratis-text: #042f2e;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Inter, "Segoe UI", Roboto, system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.45;
        }

        .wrapper {
            width: min(1200px, 100% - 2rem);
            margin-inline: auto;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: #ffffff;
            border-bottom: 1px solid #e8ecf2;
        }

        /* Barra no estilo do portal de conteúdo BTG: logo + link de acesso + CTA principal (referência: https://content.btgpactual.com/) */
        .header-shell {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem 1.5rem;
            min-height: 72px;
            padding: 0.65rem 0;
        }

        .header-logo {
            display: flex;
            align-items: center;
            min-width: 0;
            text-decoration: none;
            color: inherit;
        }

        .header-logo .brand-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border: none;
            border-radius: 0;
            background: transparent;
            box-shadow: none;
        }

        .header-logo .brand-logo img {
            height: clamp(42px, 11vw, 56px);
            width: auto;
            display: block;
            object-fit: contain;
            object-position: left center;
        }

        .header-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            gap: 0.35rem 1.25rem;
        }

        .hdr-link {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--brand-accent);
            text-decoration: none;
            white-space: nowrap;
            padding: 0.4rem 0;
            border-bottom: 2px solid transparent;
            transition: border-color 0.15s ease, color 0.15s ease;
        }

        .hdr-link:hover {
            border-bottom-color: currentColor;
        }

        .hdr-link--muted {
            color: var(--muted);
        }

        .hdr-link--muted:hover {
            color: var(--text);
            border-bottom-color: var(--line);
        }

        .hdr-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.58rem 1.15rem;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 700;
            text-decoration: none;
            color: #ffffff;
            background: var(--brand);
            border: 1px solid #081530;
            text-align: center;
            line-height: 1.25;
            max-width: 100%;
            transition: background-color 0.18s ease, box-shadow 0.18s ease;
        }

        .hdr-btn:hover {
            background: var(--brand-accent);
            box-shadow: 0 4px 12px rgba(16, 37, 79, 0.18);
        }

        .hdr-btn:focus-visible {
            outline: 2px solid var(--brand-accent);
            outline-offset: 2px;
        }

        .wa-highlight {
            background: linear-gradient(105deg, #054d44 0%, #0d7a6f 35%, #128c7e 65%, #1fa855 100%);
            color: #ffffff;
            box-shadow: 0 6px 20px rgba(5, 77, 68, 0.25);
        }

        .wa-highlight-inner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 1rem 1.25rem;
            padding: 0.95rem 0;
        }

        .wa-highlight-copy {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            min-width: min(100%, 16rem);
        }

        .wa-highlight-copy strong {
            font-size: 1.02rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .wa-highlight-copy span {
            font-size: 0.88rem;
            font-weight: 500;
            line-height: 1.45;
            max-width: 46ch;
            opacity: 0.95;
        }

        .wa-highlight-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.45rem;
            flex-shrink: 0;
            padding: 0.62rem 1.35rem;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 800;
            text-decoration: none;
            color: #075e54;
            background: #ffffff;
            border: 2px solid rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
            transition: transform 0.15s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }

        .wa-highlight-btn:hover {
            transform: translateY(-1px);
            background: #f0fff4;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.16);
        }

        .wa-highlight-btn:focus-visible {
            outline: 2px solid #ffffff;
            outline-offset: 3px;
        }

        .wa-highlight-btn svg {
            flex-shrink: 0;
        }

        .hero {
            margin-top: 1.2rem;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #19376f;
            background: radial-gradient(circle at top right, #254f9f 0, #10254f 48%, #0a1836 100%);
            color: #fff;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
        }

        .hero-copy {
            padding: 2.5rem;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.78rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            border-radius: 999px;
            padding: 0.38rem 0.72rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero h1 {
            margin: 0;
            font-size: clamp(1.8rem, 2vw + 1rem, 2.9rem);
            line-height: 1.15;
        }

        .hero p {
            margin: 1rem 0 0;
            max-width: 54ch;
            color: #d2ddf6;
            line-height: 1.65;
        }

        .hero-actions {
            margin-top: 1.6rem;
            display: flex;
            gap: 0.7rem;
            flex-wrap: wrap;
        }

        .hero-support-link {
            display: inline-flex;
            margin-top: 0.85rem;
            color: #d2ddf6;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px solid rgba(210, 221, 246, 0.55);
            padding-bottom: 0.08rem;
        }

        .hero-support-link:hover {
            color: #ffffff;
            border-bottom-color: rgba(255, 255, 255, 0.75);
        }

        .btn {
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.18s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background: #fff;
            color: #0f234b;
            box-shadow: 0 10px 20px rgba(10, 24, 54, 0.2);
        }

        .btn-hub {
            background: #ffffff;
            color: #10254f;
            border: 1px solid #dfe6f3;
            box-shadow: 0 8px 18px rgba(12, 26, 57, 0.12);
        }

        .btn-hub:hover {
            background: #f8fbff;
        }

        .btn-hub-gratis {
            flex-direction: column;
            gap: 0.2rem;
            padding: 0.7rem 1.05rem;
            line-height: 1.2;
            background: linear-gradient(165deg, #5eead4 0%, #2dd4bf 45%, #14b8a6 100%);
            color: var(--hub-gratis-text);
            border: 1px solid #0f766e;
            box-shadow: 0 10px 22px rgba(6, 78, 59, 0.35);
        }

        .btn-hub-gratis:hover {
            background: linear-gradient(165deg, #99f6e4 0%, #5eead4 55%, #2dd4bf 100%);
            color: #011f1c;
        }

        .btn-hub-gratis .hub-gratis-title {
            font-size: 0.9rem;
            text-align: center;
            max-width: 20rem;
        }

        .btn-invest {
            background: #c9a227;
            color: #10254f;
            border: 1px solid #d6b341;
            box-shadow: 0 10px 20px rgba(12, 26, 57, 0.2);
        }

        .btn-invest:hover {
            background: #e0bf56;
        }

        .hero-media {
            min-height: 280px;
            position: relative;
            overflow: hidden;
        }

        .hero-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
        }

        .panel-sub {
            margin: 0.3rem 0 0;
            color: var(--muted);
            font-size: 0.9rem;
        }

        .newsletter-panel {
            margin: 1.2rem 0 1.6rem;
            background: linear-gradient(130deg, #10254f 0%, #1f4a9d 100%);
            border: 1px solid #193f86;
            border-radius: 20px;
            padding: 1.35rem;
            box-shadow: 0 14px 28px rgba(16, 37, 79, 0.2);
        }

        .newsletter-panel h2 {
            color: #ffffff;
            margin: 0;
        }

        .newsletter-panel .panel-sub {
            color: #d2ddf6;
        }

        .newsletter-grid {
            margin-top: 0.9rem;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.75rem;
        }

        .newsletter-item {
            border: 1px solid #315da9;
            border-radius: 12px;
            padding: 0.9rem;
            background: rgba(255, 255, 255, 0.08);
            transition: transform 0.16s ease, box-shadow 0.2s ease;
        }

        .newsletter-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(8, 19, 46, 0.24);
        }

        .newsletter-item strong {
            display: block;
            font-size: 0.94rem;
            line-height: 1.35;
            margin-bottom: 0.35rem;
            color: #ffffff;
        }

        .newsletter-item a {
            color: #fff;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.34);
            border-radius: 999px;
            padding: 0.32rem 0.62rem;
        }

        .newsletter-item a:hover {
            background: rgba(255, 255, 255, 0.24);
        }

        .economist-series {
            margin: 1.2rem 0;
            background: #ffffff;
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 1.2rem;
            box-shadow: 0 10px 22px rgba(15, 27, 55, 0.08);
        }

        .economist-series h2 {
            margin: 0;
            font-size: 1.08rem;
            color: #10254f;
        }

        .economist-series p {
            margin: 0.45rem 0 0.9rem;
            color: #5d6c89;
            font-size: 0.94rem;
        }

        .economist-card {
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 0.95rem;
            background: #f8faff;
        }

        .economist-card + .economist-card {
            margin-top: 0.75rem;
        }

        .economist-card strong {
            display: block;
            font-size: 1rem;
            line-height: 1.35;
            margin-bottom: 0.4rem;
            color: #10254f;
        }

        .economist-card span {
            display: block;
            color: #5d6c89;
            font-size: 0.9rem;
            margin-bottom: 0.65rem;
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 1.2rem 0 2rem;
            color: var(--muted);
            font-size: 0.88rem;
            margin-top: 0.8rem;
        }

        @media (max-width: 980px) {
            .hero { grid-template-columns: 1fr; }
            .newsletter-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 640px) {
            .hero-copy { padding: 1.4rem; }
        }

        @media (max-width: 560px) {
            .header-shell {
                flex-direction: column;
                align-items: stretch;
            }

            .header-actions {
                justify-content: flex-start;
                width: 100%;
            }

            .hdr-btn {
                width: 100%;
                order: 3;
            }

            .hdr-link {
                white-space: normal;
            }

            .wa-highlight-inner {
                flex-direction: column;
                align-items: stretch;
            }

            .wa-highlight-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="wrapper header-shell">
            <a class="header-logo" href="{{ url('/') }}" aria-label="Ponto de Vista — início">
                <div class="brand-logo">
                    <img src="{{ asset('ponto-de-vista-logo-header.png') }}" width="500" height="500" alt="Ponto de Vista">
                </div>
            </a>
            <nav class="header-actions" aria-label="Navegação principal">
                <a class="hdr-link" href="https://ponto-de-vista.tradeinsights.com/" target="_blank" rel="noopener noreferrer">Hub de conteúdos</a>
                <a class="hdr-btn" href="https://ponto-de-vista.tradeinsights.com/plano/interno-av/gratuito" target="_blank" rel="noopener noreferrer">Cadastro gratuito no hub de conteúdos</a>
                <a class="hdr-link hdr-link--muted" href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">Quero investir</a>
            </nav>
        </div>
    </header>

    <div class="wa-highlight" role="region" aria-label="Comunidade WhatsApp Alta Vista">
        <div class="wrapper wa-highlight-inner">
            <div class="wa-highlight-copy">
                <strong>Comunidade Alta Vista no WhatsApp</strong>
                <span>Grupos sobre vários temas — mercado, investimentos e operações. Entre pelo convite oficial.</span>
            </div>
            <a class="wa-highlight-btn" href="https://chat.whatsapp.com/GtVnXYTSg9f3GX93RAEacA" target="_blank" rel="noopener noreferrer">
                <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Entrar na comunidade
            </a>
        </div>
    </div>

    <main class="wrapper">
        <section class="hero">
            <div class="hero-copy">
                <div class="tag">Portal de Conteúdos</div>
                <h1>Ponto de Vista: análises e conteúdos da Alta Vista Investimentos</h1>
                <p>
                    Reunimos artigos, newsletters e materiais audiovisuais em um só lugar,
                    com linguagem clara e foco prático para apoiar suas decisões financeiras.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-hub" href="https://ponto-de-vista.tradeinsights.com/" target="_blank" rel="noopener noreferrer">
                        Acessar hub de conteúdos
                    </a>
                    <a class="btn btn-hub-gratis" href="https://ponto-de-vista.tradeinsights.com/plano/interno-av/gratuito" target="_blank" rel="noopener noreferrer">
                        <span class="hub-gratis-title">Cadastro gratuito no hub de conteúdos</span>
                    </a>
                </div>
                <a class="hero-support-link" href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">
                    Quero investir com a Alta Vista
                </a>
            </div>
            <div class="hero-media">
                <img src="{{ asset('Ponto_de_Vista_v2.png') }}" alt="Capa editorial Ponto de Vista">
            </div>
        </section>

        <section class="economist-series">
            <h2>Série de análises da Alta Vista</h2>
            <p>Artigos assinados por nossa equipe de economia, renda fixa e mercados — macro, juros, inflação e estratégia.</p>
            <article class="economist-card">
                <strong>IPCA de abril: composição, núcleos e Selic</strong>
                <span>Por Guilherme Jung | 13/05/2026</span>
                <a class="btn btn-primary" href="{{ route('artigos.ipca-abril-2026-composicao') }}">Ler artigo completo</a>
            </article>
            <article class="economist-card">
                <strong>CPI dos EUA (abril): Fed, núcleo e emergentes</strong>
                <span>Por Guilherme Jung | 13/05/2026</span>
                <a class="btn btn-primary" href="{{ route('artigos.cpi-eua-abril-2026-fed') }}">Ler artigo completo</a>
            </article>
            <article class="economist-card">
                <strong>CDI vs IPCA+: histórico dos últimos 25 anos</strong>
                <span>Por Alexandre Setani | 13/05/2026</span>
                <a class="btn btn-primary" href="{{ route('artigos.cdi-vs-ipca-plus-historico-25-anos') }}">Ler artigo completo</a>
            </article>
            <article class="economist-card">
                <strong>Copom reduz 0,25pp; comunicado ajusta o guidance</strong>
                <span>Por Guilherme Jung | 29/04/2026</span>
                <a class="btn btn-primary" href="{{ route('artigos.copom-corta-025pp-29-04-2026') }}">Ler artigo completo</a>
            </article>
        </section>

        <section class="newsletter-panel">
            <h2>Newsletters em destaque</h2>
            <p class="panel-sub">Acesse as últimas edições do Ponto de Vista em um clique.</p>
            <div class="newsletter-grid">
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 30/04/2026</strong>
                    <a href="{{ route('newsletters.semana-30-04-2026') }}">Ler agora →</a>
                </article>
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 24/04/2026</strong>
                    <a href="{{ route('newsletters.semana-24-04-2026') }}">Ler agora →</a>
                </article>
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 17/04/2026</strong>
                    <a href="{{ route('newsletters.semana-17-04-2026') }}">Ler agora →</a>
                </article>
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 11/04/2026</strong>
                    <a href="{{ route('newsletters.semana-11-04-2026') }}">Ler agora →</a>
                </article>
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 02/04/2026</strong>
                    <a href="{{ route('newsletters.semana-02-04-2026') }}">Ler agora →</a>
                </article>
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 27/03/2026</strong>
                    <a href="{{ route('newsletters.semana-27-03-2026') }}">Ler agora →</a>
                </article>
                <article class="newsletter-item">
                    <strong>Ponto de Vista - Semana 23/06/2025</strong>
                    <a href="{{ route('newsletters.semana-23-06-2025') }}">Ler agora →</a>
                </article>
            </div>
        </section>

    </main>

    <footer class="wrapper">
        {{ config('app.name', 'Ponto de Vista') }} · Alta Vista Investimentos
    </footer>
</body>
</html>

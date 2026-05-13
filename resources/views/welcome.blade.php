<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Ponto de Vista') }}</title>
    <meta name="description" content="Análises e conteúdos da Alta Vista Investimentos em um só lugar.">

    <!-- Favicon e imagem para compartilhamento -->
    <link rel="icon" type="image/png" href="{{ asset('Ponto_de_Vista.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('Ponto_de_Vista.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name', 'Ponto de Vista') }}">
    <meta property="og:description" content="Análises e conteúdos da Alta Vista Investimentos em um só lugar.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url(asset('Ponto_de_Vista_v2.png')) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ url(asset('Ponto_de_Vista_v2.png')) }}">
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
            backdrop-filter: blur(8px);
            background: rgba(237, 242, 251, 0.9);
            border-bottom: 1px solid var(--line);
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 0.95rem 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            min-width: 0;
        }

        .brand-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.4rem 0.7rem;
            border-radius: 12px;
            background: linear-gradient(130deg, #11264f 0%, #1f4a9d 100%);
            border: 1px solid #2b5cb8;
            box-shadow: 0 8px 16px rgba(11, 32, 77, 0.22);
        }

        .brand img {
            width: 170px;
            height: auto;
            filter: brightness(1.14) contrast(1.35) saturate(1.18);
        }

        .brand span {
            color: var(--muted);
            font-size: 0.85rem;
            border-left: 1px solid var(--line);
            padding-left: 0.9rem;
            white-space: nowrap;
        }

        nav {
            display: flex;
            gap: 1.1rem;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .nav-invest {
            background: #10254f;
            color: #ffffff;
            border: 1px solid #10254f;
        }

        .nav-invest:hover {
            background: #1f4a9d;
            color: #ffffff;
        }

        nav a {
            color: #304263;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            padding: 0.32rem 0.55rem;
            border-radius: 8px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        nav a:hover {
            background: #e8eefb;
            color: #10254f;
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

        .btn-secondary {
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.45);
            background: rgba(255, 255, 255, 0.06);
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
            .brand span { display: none; }
        }

        @media (max-width: 640px) {
            .hero-copy { padding: 1.4rem; }
            nav { gap: 0.65rem; }
            nav a { font-size: 0.84rem; }
            .brand-logo { padding: 0.32rem 0.55rem; }
            .brand img { width: 138px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="wrapper topbar">
            <div class="brand">
                <div class="brand-logo">
                    <img src="{{ asset('Ponto_de_Vista.png') }}" alt="Ponto de Vista">
                </div>
                <span>Portal de Conteúdos da Alta Vista Investimentos</span>
            </div>
            <nav>
                <a class="btn-hub" href="https://ponto-de-vista.tradeinsights.com/plano/interno-av/gratuito" target="_blank" rel="noopener noreferrer">Acessar Hub Audiovisual</a>
                <a class="nav-invest" href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">Quero investir</a>
            </nav>
        </div>
    </header>

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
                    <a class="btn btn-hub" href="https://ponto-de-vista.tradeinsights.com/plano/interno-av/gratuito" target="_blank" rel="noopener noreferrer">
                        Acessar Hub de Conteúdos Audiovisuais
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

<header class="header">
  <div class="header-left">
    <svg class="logo-svg" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <rect width="44" height="44" rx="8" fill="#0466C8" opacity="0.15"></rect>
      <path d="M8 34L22 10L36 34H8Z" fill="#0466C8" opacity="0.3"></path>
      <path d="M12 34L22 16L32 34H12Z" fill="#0466C8"></path>
      <path d="M16 34L22 22L28 34H16Z" fill="#FFC971"></path>
    </svg>
    <div class="header-brand">
      <div class="firm">Alta Vista Investimentos</div>
      <div class="tagline">Research Macroeconômico</div>
    </div>
  </div>
  <div class="header-right">
    <div class="report-label">Estudo Especial</div>
    <div class="report-date">Maio de 2026 · Guilherme Jung, Economista</div>
  </div>
</header>

<div class="main">
  <div class="title-block">
    <h1>El Niño, <span>IPCA</span> e Juros — O Canal Climático da Inflação Brasileira</h1>
    <p class="subtitle">
      Análise histórica do impacto dos episódios de El Niño sobre o grupo Alimentação e Bebidas do IPCA e as implicações para a política monetária. O estudo cobre os episódios de 2015–16, 2018–19, 2023–24 e o risco emergente de um Super El Niño em 2026.
    </p>
  </div>

  <div class="cards-grid">
    <div class="card blue">
      <div class="c-label">Episódios extremos (desde 1950)</div>
      <div class="c-value highlight-blue">3</div>
      <div class="c-desc">1982/83 · 1997/98 · 2015/16. O 4º pode vir em 2026.</div>
    </div>
    <div class="card red">
      <div class="c-label">Impacto máx. em alimentos</div>
      <div class="c-value highlight-red">+2,25 pp</div>
      <div class="c-desc">Contribuição do El Niño na inflação de alimentos em 2024 (LCA 4intelligence).</div>
    </div>
    <div class="card gold">
      <div class="c-label">IPCA 2026 — Cenário Base AV</div>
      <div class="c-value" style="color:var(--gold)">5,3%</div>
      <div class="c-desc">Choque duplo: petróleo (guerra Irã) + El Niño. Acima do teto da meta de 4,5%.</div>
    </div>
    <div class="card green">
      <div class="c-label">Selic Terminal 2026 — Cenário AV</div>
      <div class="c-value highlight-green">13,75%</div>
      <div class="c-desc">Ciclo de cortes limitado a 25 bp/reunião. Sem espaço para acelerar. Alinhado à XP.</div>
    </div>
  </div>

  <div class="section-header">
    <div class="dot"></div>
    <h2>1. O Canal Climático — Como o El Niño Chega ao IPCA</h2>
    <div class="line"></div>
  </div>

  <div class="analysis-box">
    <p>O El Niño ocorre quando as águas superficiais do Oceano Pacífico Equatorial se aquecem acima da média, alterando padrões atmosféricos globais. No Brasil, o fenômeno produz um efeito geográfico assimétrico: <strong>seca no Norte e Nordeste</strong> e <strong>chuvas intensas no Sul</strong>, afetando diretamente o plantio e a colheita das principais culturas — soja, milho, feijão, arroz e hortaliças.</p>
    <p>A transmissão para o IPCA acontece por três canais simultâneos: <strong>(1) choque de oferta agrícola</strong> — quebras de safra elevam os preços dos alimentos in natura e industrializados; <strong>(2) canal logístico</strong> — enchentes destroem estradas no Sul e a seca paralisa rios amazônicos, encarecendo o frete em até 57% nos episódios mais severos; e <strong>(3) efeito de segunda ordem</strong> — custos de ração encarecem proteínas animais; inflação de alimentos pode contaminar expectativas e pressionar serviços.</p>
    <p>A intensidade do repasse depende criticamente do câmbio e do hiato do produto. Com o dólar em torno de R$5,00 — bem abaixo dos picos de R$5,70–6,00 vividos em 2024 — o canal de importados está mais benigno, o que atenua o efeito de segunda ordem do choque agrícola sobre industrializados. O modelo do Banco Central (2019), atualizado pela LCA 4intelligence, usa o Oceanic Niño Index (ONI), volume de chuva (Inmet), IC-Br e o hiato do produto para isolar o efeito climático líquido no IPCA.</p>
  </div>

  <div class="section-header">
    <div class="dot"></div>
    <h2>2. Episódios Históricos — IPCA e Alimentos</h2>
    <div class="line"></div>
  </div>

  <div class="chart-row">
    <div class="chart-box">
      <h3>Contribuição do El Niño na inflação de alimentos (pp)</h3>
      <div class="chart-sub">Impacto anual estimado — alimentação no domicílio · Fonte: BCB/LCA 4intelligence</div>
      <canvas id="chartElNinoContrib" height="280"></canvas>
    </div>
    <div class="chart-box">
      <h3>IPCA Geral vs. Grupo Alimentos — Anos de El Niño</h3>
      <div class="chart-sub">Variação anual em % · Fonte: IBGE/IPCA</div>
      <canvas id="chartIPCA" height="280"></canvas>
    </div>
  </div>

  <div class="table-box">
    <h3>Episódios de El Niño — Impacto Macroeconômico Consolidado</h3>
    <div class="chart-sub">Intensidade (ONI), efeito em alimentos, IPCA geral e Selic vigente ao fim de cada período</div>
    <table>
      <thead>
        <tr>
          <th>Episódio</th>
          <th>Intensidade</th>
          <th>Alimentos (IPCA %)</th>
          <th>Contrib. El Niño (pp)</th>
          <th>IPCA Geral (%)</th>
          <th>Selic final (%)</th>
          <th>Movimento BC</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>2015</strong></td>
          <td><span class="badge badge-extreme">Extremo</span></td>
          <td class="up">+12,0%</td>
          <td class="up">+3,5 pp (est.)</td>
          <td class="up">10,67%</td>
          <td><strong>14,25%</strong></td>
          <td>Alta agressiva</td>
        </tr>
        <tr>
          <td><strong>2016</strong></td>
          <td><span class="badge badge-extreme">Extremo</span></td>
          <td class="up">+9,5%</td>
          <td class="up">+3,2 pp (est.)</td>
          <td class="up">6,29%</td>
          <td><strong>13,75%</strong></td>
          <td>Início cortes</td>
        </tr>
        <tr>
          <td><strong>2018/19</strong></td>
          <td><span class="badge badge-weak">Fraco/Mod.</span></td>
          <td class="up">+4,3% (1T19)</td>
          <td>+1,5 pp (1T19)</td>
          <td>3,75%</td>
          <td><strong>6,50%</strong></td>
          <td>Manutenção</td>
        </tr>
        <tr>
          <td><strong>2023</strong></td>
          <td><span class="badge badge-moderate">Moderado</span></td>
          <td class="up">+5,8%</td>
          <td>+1,55 pp</td>
          <td>4,62%</td>
          <td><strong>11,75%</strong></td>
          <td>Início cortes</td>
        </tr>
        <tr>
          <td><strong>2024</strong></td>
          <td><span class="badge badge-strong">Forte</span></td>
          <td class="up">+8,22%</td>
          <td class="up"><strong>+2,25 pp</strong></td>
          <td class="up">4,83%</td>
          <td><strong>12,25%</strong></td>
          <td>Pausa/alta</td>
        </tr>
        <tr>
          <td><strong>2026 (proj.)</strong></td>
          <td><span class="badge badge-extreme">Extremo?</span></td>
          <td class="up">+4% a +4,5%</td>
          <td class="up">+0,5 a +0,8 pp*</td>
          <td>4,89% (Focus)</td>
          <td><strong>—</strong></td>
          <td>Risco altista</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="section-header">
    <div class="dot"></div>
    <h2>3. Grupos Mais Impactados dentro do IPCA</h2>
    <div class="line"></div>
  </div>

  <div class="chart-row">
    <div class="chart-box">
      <h3>Subgrupos de alimentos mais pressionados pelo El Niño</h3>
      <div class="chart-sub">Sensibilidade relativa ao choque climático (índice comparativo)</div>
      <canvas id="chartSubgrupos" height="300"></canvas>
    </div>
    <div class="chart-box">
      <h3>Peso dos Grupos no IPCA — Por que alimentos importam tanto</h3>
      <div class="chart-sub">Estrutura de ponderação do IPCA (IBGE POF 2017/2018)</div>
      <canvas id="chartPeso" height="300"></canvas>
    </div>
  </div>

  <div class="analysis-box">
    <p><strong>Alimentos in natura</strong> são os mais voláteis e os primeiros a reagir: hortaliças, legumes, frutas e tubérculos (batata, tomate, cebola) respondem quase imediatamente às irregularidades climáticas, por terem ciclos curtos de produção e nenhum estoque significativo. Em janeiro de 2024, no pico do episódio recente, o grupo Alimentação e Bebidas saltou de +1,11% (dez/2023) para +1,38%, contribuindo com 0,29 pp do IPCA de 0,42%.</p>
    <p><strong>Cereais, leguminosas e oleaginosas</strong> (feijão, milho, soja) têm impacto defasado — o choque no campo demora 3 a 6 meses para chegar ao varejo, passando por ração animal, processamento e margem comercial. O efeito sobre <strong>carnes e proteínas</strong> é de segunda ordem: milho mais caro eleva custo de produção de frango e suíno, que respondem por parcela relevante da cesta alimentar das famílias de menor renda.</p>
    <p><strong>Energia elétrica</strong> pode ser afetada indiretamente: El Niño forte reduz chuvas no Centro-Oeste e Sudeste, onde estão as principais hidrelétricas. Em 2015, a crise hídrica foi determinante para a ativação das bandeiras tarifárias vermelha e escassez hídrica, adicionando pressão ao grupo Habitação no IPCA.</p>
  </div>

  <div class="section-header">
    <div class="dot"></div>
    <h2>4. Canal de Transmissão para Juros — A Lógica do Copom</h2>
    <div class="line"></div>
  </div>

  <div class="chart-row full">
    <div class="chart-box">
      <h3>Selic x IPCA x Alimentos — Episódios de El Niño (2015–2024)</h3>
      <div class="chart-sub">Comparativo anual das três variáveis nos anos com fenômeno ativo · Fonte: BCB/IBGE</div>
      <canvas id="chartSelic" height="320"></canvas>
    </div>
  </div>

  <div class="analysis-box">
    <p>A relação entre El Niño e juros não é mecânica — depende criticamente do ponto do ciclo monetário e do grau de ancoragem das expectativas. O Copom distingue choque de oferta (temporário, não demanda resposta monetária automática) de contaminação para núcleos e expectativas (exige resposta).</p>
    <p>Em <strong>2015/16</strong>, o choque foi extremo e coincidiu com crise fiscal, desancoragem cambial e indexação generalizada. O BC subiu a Selic para 14,25% e apenas começou a cortá-la quando a inflação cedeu e a recessão aprofundou. Em <strong>2023/24</strong>, o cenário era diferente: o El Niño foi moderado a forte, e o BC manteve a estratégia de cortes até que os núcleos surpreenderam para cima — o ciclo de altas foi retomado ao fim de 2024, levando a Selic ao pico de 14,75%.</p>
    <p>No cenário atual, a Selic já está em <strong>14,50%</strong> — em ciclo descendente — e o Focus projeta 13,00% ao fim de 2026. O câmbio em torno de R$5,00 atenua o repasse cambial, fator que em 2024 amplificou o efeito do El Niño. O <strong>mecanismo de decisão do Copom</strong> se apoia em três critérios: (1) <em>persistência</em> do choque; (2) <em>contaminação de núcleos</em>; e (3) <em>desancoragem de expectativas</em> no horizonte de 18–24 meses. Se os três sinais acenderem juntos, o ciclo de cortes pode ser pausado — mas não necessariamente revertido, dada a Selic já restritiva.</p>
  </div>

  <div class="implication">
    <h3>Implicações para Política Monetária</h3>
    <div class="impl-grid">
      <div class="impl-item">
        <div class="impl-label">Mecanismo de transmissão</div>
        <div class="impl-text">El Niño → choque de oferta agrícola → alimentos no domicílio → pressão sobre IPCA cheio → desancoragem de expectativas → Copom avalia resposta. O prazo típico entre pico do fenômeno e pico inflacionário é de 2 a 4 trimestres.</div>
      </div>
      <div class="impl-item">
        <div class="impl-label">Regra de bolso histórica</div>
        <div class="impl-text">Episódio <strong>moderado</strong>: +1,0 a +1,5 pp em alimentos, +0,2 a +0,3 pp no IPCA geral. Episódio <strong>forte/extremo</strong>: +2,0 a +3,5 pp em alimentos, +0,5 a +0,8 pp no IPCA geral. Episódio extremo com câmbio depreciado: potencial de +1,0 a +1,5 pp no IPCA geral.</div>
      </div>
      <div class="impl-item">
        <div class="impl-label">Fator atenuante 2026</div>
        <div class="impl-text">O câmbio em torno de R$5,00 — bem abaixo do pico de R$5,90 de 2024 — reduz o repasse cambial para industrializados e importados, que amplificou o choque agrícola no episódio anterior. A Selic já restritiva em 14,50% também limita a demanda e cria espaço para absorver o choque sem necessidade de nova aceleração no ciclo.</div>
      </div>
      <div class="impl-item">
        <div class="impl-label">O que monitorar</div>
        <div class="impl-text">ONI mensal (NOAA) — sinaliza intensidade do evento. Safra IBGE (2ª estimativa, maio/jun) — confirma ou não quebra produtiva. IPCA-15 de julho/agosto — rastreia contaminação de núcleos. Expectativas Focus 12 e 24 meses — termômetro da pressão sobre o Copom.</div>
      </div>
    </div>
  </div>

  <div class="section-header">
    <div class="dot"></div>
    <h2>5. O Choque Duplo — Petróleo + El Niño e a Convergência para 5%+</h2>
    <div class="line"></div>
  </div>

  <div class="analysis-box">
    <p>A discussão sobre El Niño não pode ser feita no vácuo em 2026. O Brasil já enfrenta um <strong>choque de oferta de petróleo</strong> relevante, decorrente das tensões geopolíticas no Oriente Médio — o barril Brent oscilou entre US$80 e US$100 no primeiro trimestre, com picos acima de US$100. O Banco Daycoval estimou que o petróleo foi responsável por cerca de <strong>60% do IPCA acumulado no 1T26</strong>, com o componente de oferta atingindo 2,2 pp nas projeções de inflação 1 ano à frente.</p>
    <p>O mecanismo do petróleo é duplo e se sobrepõe ao canal climático: no curto prazo, pressiona diretamente combustíveis e energia; no médio prazo, contamina expectativas e alimenta serviços por inércia — especialmente frete, que é o elo entre o choque de petróleo e o choque agrícola. <strong>Diesel mais caro encarece o escoamento da safra; El Niño reduz a safra a escoar.</strong> A combinação dos dois choques pelo mesmo canal logístico é o ponto central desta análise.</p>
    <p>A XP Investimentos, nesse contexto, projeta IPCA de <strong>5,3% para 2026</strong> e Selic terminal de <strong>13,75%</strong> — com o Copom limitado a cortes de 25 bp por reunião, sem espaço para acelerar. O Itaú projeta 5,2% com balanço de riscos assimétrico para cima. O ASA sinaliza revisão altista a partir de 5,0%. A SulAmérica avalia que o debate do mercado migrou de "quanto acelerar os cortes" para "onde parar" — com o cenário de Selic terminal em 14,0% ganhando viés de alta se os serviços não desacelerarem.</p>
  </div>

  <div class="chart-box" style="margin-bottom:20px;">
    <h3>O Canal do Choque Duplo — Como Petróleo e El Niño se encontram no IPCA</h3>
    <div class="chart-sub">Mecanismo de transmissão combinado · elaboração Alta Vista</div>
    <div class="dual-shock-grid">
      <div class="dual-shock-col left">
        <div style="background:#fce8e8;border-radius:8px;padding:14px;border-left:4px solid #C8686D;">
          <div style="font-weight:700;color:#C8686D;font-size:11px;text-transform:uppercase;letter-spacing:.8px;margin-bottom:4px;">Choque Petróleo</div>
          <div style="color:#374151;line-height:1.5;">Brent US$80–100 · guerra Irã · refinarias a 95% de utilização · repasse à gasolina e diesel</div>
        </div>
        <div style="background:#fff3cd;border-radius:8px;padding:14px;border-left:4px solid #886B25;">
          <div style="font-weight:700;color:#886B25;font-size:11px;text-transform:uppercase;letter-spacing:.8px;margin-bottom:4px;">Choque El Niño</div>
          <div style="color:#374151;line-height:1.5;">ONI elevado · seca no Norte/Nordeste · chuvas no Sul · quebra de safra soja/milho/hortaliças</div>
        </div>
      </div>
      <div class="dual-shock-col center">
        <div style="font-size:11px;font-weight:700;color:var(--muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px;">Canal de convergência</div>
        <div style="background:#e8f4fd;border-radius:8px;padding:12px 14px;width:100%;text-align:center;border:1px solid #0466C8;">
          <div style="font-weight:700;color:#0466C8;margin-bottom:2px;">Frete / Logística</div>
          <div style="color:#374151;font-size:11px;">Diesel caro + estradas destruídas + rios secos = custo de escoamento disparado</div>
        </div>
        <div style="color:var(--muted);font-size:18px;text-align:center;">↓</div>
        <div style="background:#f0fdf4;border-radius:8px;padding:12px 14px;width:100%;text-align:center;border:1px solid #7EC868;">
          <div style="font-weight:700;color:#3d8b3d;margin-bottom:2px;">Alimentos no Domicílio</div>
          <div style="color:#374151;font-size:11px;">Custo agrícola + custo de transporte comprimem margem e elevam preço final</div>
        </div>
        <div style="color:var(--muted);font-size:18px;text-align:center;">↓</div>
        <div style="background:#fce8e8;border-radius:8px;padding:12px 14px;width:100%;text-align:center;border:1px solid #C8686D;">
          <div style="font-weight:700;color:#C8686D;margin-bottom:2px;">Inércia / Serviços</div>
          <div style="color:#374151;font-size:11px;">Reajustes salariais · alimentação fora de casa · expectativas desancoradas</div>
        </div>
      </div>
      <div class="dual-shock-col right">
        <div style="background:#001845;border-radius:8px;padding:16px;color:white;text-align:center;">
          <div style="font-size:10px;font-weight:700;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;">Projeção Alta Vista</div>
          <div style="font-size:32px;font-weight:800;color:#FFC971;letter-spacing:-1px;line-height:1;">5,3%</div>
          <div style="font-size:11px;color:rgba(255,255,255,0.65);margin-top:4px;">IPCA 2026</div>
        </div>
        <div style="background:#0466C8;border-radius:8px;padding:16px;color:white;text-align:center;">
          <div style="font-size:10px;font-weight:700;color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;">Selic Terminal 2026</div>
          <div style="font-size:32px;font-weight:800;color:white;letter-spacing:-1px;line-height:1;">13,75%</div>
          <div style="font-size:11px;color:rgba(255,255,255,0.65);margin-top:4px;">Ciclo de cortes limitado</div>
        </div>
        <div style="background:#f4f6fb;border-radius:8px;padding:12px;text-align:center;border:1px solid #d1d5db;">
          <div style="font-size:10px;font-weight:700;color:var(--muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:6px;">Ritmo Copom</div>
          <div style="font-size:16px;font-weight:700;color:var(--navy);">25 bp / reunião</div>
          <div style="font-size:11px;color:var(--muted);margin-top:4px;">Sem espaço para acelerar</div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-header">
    <div class="dot"></div>
    <h2>6. Cenários para a Selic e o IPCA em 2026</h2>
    <div class="line"></div>
  </div>

  <div class="proj-grid">
    <div class="proj-card scenario-base">
      <div class="sc-label">Cenário Base · Alta Vista</div>
      <div class="sc-name">Duplo Choque Moderado</div>
      <div class="sc-metric">
        <div class="m-val">5,3%</div>
        <div class="m-key">IPCA 2026</div>
      </div>
      <div class="sc-metric">
        <div class="m-val">13,75%</div>
        <div class="m-key">Selic fim de 2026</div>
      </div>
      <div class="sc-metric">
        <div class="m-val">25 bp</div>
        <div class="m-key">ritmo de cortes por reunião</div>
      </div>
      <div class="sc-note">El Niño moderado (ONI 1,0–1,5°C) + Brent recuando para US$75–80 no 2S26. Frete elevado no 1S26 contamina alimentos. Copom corta 25 bp em jun, set e dez. IPCA acima do teto da meta por 2026 inteiro. Alinhado à XP.</div>
    </div>
    <div class="proj-card scenario-alt">
      <div class="sc-label">Cenário Otimista</div>
      <div class="sc-name">Alívio Geopolítico</div>
      <div class="sc-metric">
        <div class="m-val">4,7%</div>
        <div class="m-key">IPCA 2026</div>
      </div>
      <div class="sc-metric">
        <div class="m-val">13,0%</div>
        <div class="m-key">Selic fim de 2026</div>
      </div>
      <div class="sc-metric">
        <div class="m-val">50 bp</div>
        <div class="m-key">ritmo acelerado em 1 reunião</div>
      </div>
      <div class="sc-note">Distensão no Oriente Médio + Brent abaixo de US$70 no 2S26 + El Niño fraco. Alimentos cedem, núcleos convergem. Copom consegue 1 corte de 50 bp e chega a 13,0%.</div>
    </div>
    <div class="proj-card scenario-risk">
      <div class="sc-label">Cenário de Risco</div>
      <div class="sc-name">Choque Duplo Extremo</div>
      <div class="sc-metric">
        <div class="m-val">6,0%+</div>
        <div class="m-key">IPCA 2026</div>
      </div>
      <div class="sc-metric">
        <div class="m-val">14,0%+</div>
        <div class="m-key">Selic fim de 2026</div>
      </div>
      <div class="sc-metric">
        <div class="m-val">pausa</div>
        <div class="m-key">ciclo de cortes interrompido</div>
      </div>
      <div class="sc-note">Super El Niño (ONI &gt;2,5°C) + Brent acima de US$100 persistente + câmbio pressionado em ano eleitoral. Selic terminal sobe para 14,0%+ com Copom encerrando ciclo precocemente.</div>
    </div>
  </div>

  <div class="analysis-box">
    <p><strong>A probabilidade de formação de El Niño está em 62% para jun–ago/2026 e 80% até dezembro</strong>, segundo a NOAA. O ECMWF registrou, pelo terceiro mês consecutivo, elevação nas chances de um evento de intensidade excepcional. O barril Brent, por sua vez, mantém pressão por conta do conflito EUA–Irã, sem sinalização de resolução imediata.</p>
    <p>O ponto central da análise é que os dois choques compartilham o <strong>mesmo canal de transmissão: o frete</strong>. Diesel mais caro eleva o custo de transporte; El Niño destrói estradas no Sul e seca rios no Norte. A sobreposição amplifica o impacto sobre os alimentos e impede que qualquer um dos dois choques se dissolva rapidamente. Isso torna a inflação de 2026 estruturalmente mais resistente do que a leitura do IPCA cheio sugere.</p>
    <p>No cenário base, o IPCA fecha 2026 em <strong>5,3%</strong> — acima do teto da meta de 4,5% — com a Selic sendo conduzida a <strong>13,75%</strong> a partir de cortes de 25 bp por reunião. O Copom não tem espaço para acelerar: serviços rodando próximos a 6% ao ano, hiato do produto ainda positivo, mercado de trabalho aquecido e expectativas do Focus desancoradas por 9 semanas consecutivas travaram o debate em "onde parar", não mais em "quanto acelerar".</p>
  </div>

  <section class="invest-cta-bar">
    <p>Quer transformar esse cenário em estratégia de carteira? Fale com o time da Alta Vista.</p>
    <a href="https://lp.altavistainvest.com.br/conteudos-investir" target="_blank" rel="noopener noreferrer">Quero investir com a Alta Vista</a>
  </section>
</div>

<footer class="footer">
  <strong>Alta Vista Investimentos — Estudo Macroeconômico Especial</strong> · Guilherme Jung, Economista · Maio de 2026<br>
  Fontes: BCB/Daycoval (2026), LCA 4intelligence, NOAA, ECMWF, IBGE, XP Investimentos, Itaú, Focus/BCB, InfoMoney, Gazeta do Povo · Cenário base alinhado à XP (IPCA 5,3% / Selic 13,75%). As projeções envolvem incertezas significativas.
</footer>

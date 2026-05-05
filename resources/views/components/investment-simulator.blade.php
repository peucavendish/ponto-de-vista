@props([
    'title' => 'Simulador de Investimento (CDI)',
    'cdiAnnual' => 14.4,
    'cdiPercent' => 100,
])

@php
    $effectiveAnnualRate = ((float) $cdiAnnual) * (((float) $cdiPercent) / 100);
@endphp

<section class="investment-sim" data-investment-simulator data-cdi-annual="{{ $cdiAnnual }}" data-cdi-percent="{{ $cdiPercent }}">
    <style>
        .investment-sim {
            margin-top: 1.2rem;
            background: #f7faff;
            border: 1px solid #d5e3f9;
            border-radius: 14px;
            padding: 1rem;
        }

        .investment-sim h3 {
            margin: 0 0 0.35rem;
            color: #163f88;
            font-size: 1rem;
        }

        .investment-sim p {
            margin: 0;
            color: #4a6088;
            font-size: 0.9rem;
            line-height: 1.45;
        }

        .investment-sim-grid {
            margin-top: 0.9rem;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.65rem;
        }

        .investment-sim-field label {
            display: block;
            margin-bottom: 0.3rem;
            font-size: 0.8rem;
            font-weight: 700;
            color: #314a75;
        }

        .investment-sim-field input {
            width: 100%;
            border: 1px solid #c6d9fa;
            border-radius: 9px;
            padding: 0.52rem 0.55rem;
            font-size: 0.9rem;
            color: #0f2d61;
            background: #fff;
        }

        .investment-sim-result {
            margin-top: 0.9rem;
            background: #fff;
            border: 1px solid #d5e3f9;
            border-radius: 10px;
            padding: 0.8rem;
        }

        .investment-sim-result strong {
            display: block;
            color: #13284c;
            font-size: 0.96rem;
            margin-bottom: 0.25rem;
        }

        .investment-sim-result span {
            color: #163f88;
            font-size: 1.28rem;
            font-weight: 800;
            letter-spacing: -0.01em;
        }

        .investment-sim-note {
            margin-top: 0.55rem;
            font-size: 0.78rem;
            color: #64779d;
        }

        .investment-sim-chart-wrap {
            margin-top: 0.9rem;
            background: #fff;
            border: 1px solid #d5e3f9;
            border-radius: 10px;
            padding: 0.65rem;
            position: relative;
        }

        .investment-sim-chart-title {
            margin: 0 0 0.45rem;
            font-size: 0.85rem;
            color: #314a75;
            font-weight: 700;
        }

        .investment-sim-chart {
            width: 100%;
            height: 220px;
            display: block;
            border-radius: 8px;
            background: linear-gradient(180deg, #fbfdff 0%, #f4f8ff 100%);
        }

        .investment-sim-tooltip {
            position: absolute;
            pointer-events: none;
            transform: translate(-50%, calc(-100% - 10px));
            background: #10254f;
            color: #fff;
            border-radius: 8px;
            padding: 0.35rem 0.5rem;
            font-size: 0.78rem;
            line-height: 1.25;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.12s ease;
            z-index: 3;
        }

        .investment-sim-tooltip.visible {
            opacity: 1;
        }

        @media (max-width: 760px) {
            .investment-sim-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <h3>{{ $title }}</h3>
    <p>Simulação com {{ number_format((float) $cdiPercent, 0, ',', '.') }}% do CDI. Referência de CDI: {{ number_format((float) $cdiAnnual, 2, ',', '.') }}% a.a. (taxa efetiva: {{ number_format($effectiveAnnualRate, 2, ',', '.') }}% a.a.).</p>

    <div class="investment-sim-grid">
        <div class="investment-sim-field">
            <label>Valor inicial (R$)</label>
            <input type="text" inputmode="decimal" autocomplete="off" data-sim-initial value="R$ 10.000,00">
        </div>
        <div class="investment-sim-field">
            <label>Aporte mensal (R$)</label>
            <input type="text" inputmode="decimal" autocomplete="off" data-sim-monthly value="R$ 500,00">
        </div>
        <div class="investment-sim-field">
            <label>Prazo (meses)</label>
            <input type="number" min="1" step="1" data-sim-months value="24">
        </div>
    </div>

    <div class="investment-sim-result">
        <strong>Valor projetado bruto</strong>
        <span data-sim-output>R$ 0,00</span>
        <div class="investment-sim-note">Estimativa educacional; não considera impostos, taxas, liquidez ou marcação a mercado.</div>
    </div>

    <div class="investment-sim-chart-wrap">
        <p class="investment-sim-chart-title">Evolução estimada do patrimônio</p>
        <canvas class="investment-sim-chart" data-sim-chart width="860" height="220" aria-label="Gráfico evolutivo do patrimônio"></canvas>
        <div class="investment-sim-tooltip" data-sim-tooltip></div>
    </div>

    <script>
        (function initInvestmentSimulator() {
            const formatBRL = (value) => new Intl.NumberFormat('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            }).format(value);

            const parseBRLCurrency = (rawValue) => {
                const digitsOnly = String(rawValue || '').replace(/\D/g, '');
                if (!digitsOnly) return 0;
                return parseInt(digitsOnly, 10) / 100;
            };

            const simulators = document.querySelectorAll('[data-investment-simulator]');
            simulators.forEach((sim) => {
                if (sim.dataset.initialized === '1') return;
                sim.dataset.initialized = '1';

                const cdiAnnual = parseFloat(sim.dataset.cdiAnnual || '14.4');
                const cdiPercent = parseFloat(sim.dataset.cdiPercent || '100');
                const annualRate = (cdiAnnual * (cdiPercent / 100)) / 100;
                const monthlyRate = Math.pow(1 + annualRate, 1 / 12) - 1;

                const initialInput = sim.querySelector('[data-sim-initial]');
                const monthlyInput = sim.querySelector('[data-sim-monthly]');
                const monthsInput = sim.querySelector('[data-sim-months]');
                const output = sim.querySelector('[data-sim-output]');
                const chartCanvas = sim.querySelector('[data-sim-chart]');
                const chartCtx = chartCanvas.getContext('2d');
                const tooltip = sim.querySelector('[data-sim-tooltip]');
                let lastDrawnPoints = [];

                const resizeCanvasForDPR = () => {
                    const rect = chartCanvas.getBoundingClientRect();
                    const dpr = window.devicePixelRatio || 1;
                    const cssWidth = Math.max(300, rect.width);
                    const cssHeight = 220;
                    chartCanvas.style.height = `${cssHeight}px`;
                    chartCanvas.width = Math.round(cssWidth * dpr);
                    chartCanvas.height = Math.round(cssHeight * dpr);
                    chartCtx.setTransform(dpr, 0, 0, dpr, 0, 0);
                };

                const buildSeries = (initial, monthly, months) => {
                    const points = [initial];
                    let currentValue = initial;
                    for (let i = 0; i < months; i += 1) {
                        currentValue = (currentValue * (1 + monthlyRate)) + monthly;
                        points.push(currentValue);
                    }
                    return points;
                };

                const drawChart = (values) => {
                    const width = chartCanvas.clientWidth;
                    const height = chartCanvas.clientHeight;
                    const padTop = 16;
                    const padRight = 14;
                    const padBottom = 26;
                    const yLabelSamples = [Math.max(...values), Math.min(...values)];
                    chartCtx.font = '11px Inter, sans-serif';
                    const maxLabelWidth = Math.max(...yLabelSamples.map((v) => chartCtx.measureText(formatBRL(v)).width));
                    const padLeft = Math.max(56, Math.ceil(maxLabelWidth) + 14);

                    chartCtx.clearRect(0, 0, width, height);

                    const minValue = Math.min(...values);
                    const maxValue = Math.max(...values);
                    const valueRange = Math.max(1, maxValue - minValue);

                    // Grid and axes
                    chartCtx.strokeStyle = '#e2ebfb';
                    chartCtx.lineWidth = 1;
                    chartCtx.beginPath();
                    chartCtx.moveTo(padLeft, padTop);
                    chartCtx.lineTo(padLeft, height - padBottom);
                    chartCtx.lineTo(width - padRight, height - padBottom);
                    chartCtx.stroke();

                    const steps = 4;
                    chartCtx.fillStyle = '#64779d';
                    for (let step = 0; step <= steps; step += 1) {
                        const y = padTop + ((height - padTop - padBottom) * step / steps);
                        const valueAtStep = maxValue - (valueRange * step / steps);

                        chartCtx.strokeStyle = '#edf3ff';
                        chartCtx.beginPath();
                        chartCtx.moveTo(padLeft, y);
                        chartCtx.lineTo(width - padRight, y);
                        chartCtx.stroke();

                        chartCtx.fillText(formatBRL(valueAtStep), 6, y + 3);
                    }

                    // Plot line
                    const pointsCount = values.length;
                    const usableWidth = width - padLeft - padRight;
                    const usableHeight = height - padTop - padBottom;

                    const points = values.map((value, index) => {
                        const x = padLeft + (usableWidth * (index / Math.max(1, pointsCount - 1)));
                        const y = padTop + usableHeight * (1 - ((value - minValue) / valueRange));
                        return { x, y, value, month: index };
                    });
                    lastDrawnPoints = points;

                    const linePath = new Path2D();
                    points.forEach((point, index) => {
                        if (index === 0) linePath.moveTo(point.x, point.y);
                        else linePath.lineTo(point.x, point.y);
                    });

                    const fillPath = new Path2D();
                    points.forEach((point, index) => {
                        if (index === 0) fillPath.moveTo(point.x, point.y);
                        else fillPath.lineTo(point.x, point.y);
                    });
                    fillPath.lineTo(points[points.length - 1].x, height - padBottom);
                    fillPath.lineTo(points[0].x, height - padBottom);
                    fillPath.closePath();

                    const areaGradient = chartCtx.createLinearGradient(0, padTop, 0, height - padBottom);
                    areaGradient.addColorStop(0, 'rgba(31, 74, 157, 0.28)');
                    areaGradient.addColorStop(1, 'rgba(31, 74, 157, 0.05)');
                    chartCtx.fillStyle = areaGradient;
                    chartCtx.fill(fillPath);

                    chartCtx.strokeStyle = '#163f88';
                    chartCtx.lineWidth = 2.6;
                    chartCtx.stroke(linePath);

                    // Last point marker
                    const lastIndex = pointsCount - 1;
                    const lastX = points[lastIndex].x;
                    const lastY = points[lastIndex].y;
                    chartCtx.beginPath();
                    chartCtx.arc(lastX, lastY, 4, 0, Math.PI * 2);
                    chartCtx.fillStyle = '#163f88';
                    chartCtx.fill();
                    chartCtx.beginPath();
                    chartCtx.arc(lastX, lastY, 7, 0, Math.PI * 2);
                    chartCtx.strokeStyle = 'rgba(22, 63, 136, 0.25)';
                    chartCtx.lineWidth = 2;
                    chartCtx.stroke();

                    // X labels
                    chartCtx.fillStyle = '#64779d';
                    chartCtx.font = '11px Inter, sans-serif';
                    chartCtx.fillText('Mês 0', padLeft, height - 8);
                    chartCtx.fillText(`Mês ${lastIndex}`, Math.max(padLeft, lastX - 24), height - 8);
                };

                const hideTooltip = () => {
                    tooltip.classList.remove('visible');
                };

                const handlePointer = (event) => {
                    if (!lastDrawnPoints.length) return;
                    const rect = chartCanvas.getBoundingClientRect();
                    const x = event.clientX - rect.left;
                    const y = event.clientY - rect.top;
                    let nearest = null;
                    let minDist = Number.POSITIVE_INFINITY;

                    lastDrawnPoints.forEach((point) => {
                        const dx = point.x - x;
                        const dy = point.y - y;
                        const dist = Math.sqrt((dx * dx) + (dy * dy));
                        if (dist < minDist) {
                            minDist = dist;
                            nearest = point;
                        }
                    });

                    if (!nearest || minDist > 32) {
                        hideTooltip();
                        return;
                    }

                    tooltip.textContent = `Mês ${nearest.month}: ${formatBRL(nearest.value)}`;
                    tooltip.style.left = `${nearest.x + 10}px`;
                    tooltip.style.top = `${nearest.y + 10}px`;
                    tooltip.classList.add('visible');
                };

                const applyCurrencyMask = (inputElement) => {
                    const parsedValue = parseBRLCurrency(inputElement.value);
                    inputElement.value = formatBRL(parsedValue);
                    return parsedValue;
                };

                const calculate = () => {
                    const initial = Math.max(0, parseBRLCurrency(initialInput.value));
                    const monthly = Math.max(0, parseBRLCurrency(monthlyInput.value));
                    const months = Math.max(1, parseInt(monthsInput.value || '1', 10));

                    let futureValue = initial;
                    for (let i = 0; i < months; i += 1) {
                        futureValue = (futureValue * (1 + monthlyRate)) + monthly;
                    }

                    output.textContent = formatBRL(futureValue);
                    drawChart(buildSeries(initial, monthly, months));
                };

                [initialInput, monthlyInput].forEach((el) => {
                    el.addEventListener('input', () => {
                        applyCurrencyMask(el);
                        calculate();
                    });
                    el.addEventListener('blur', () => {
                        applyCurrencyMask(el);
                        calculate();
                    });
                });

                monthsInput.addEventListener('input', calculate);
                chartCanvas.addEventListener('mousemove', handlePointer);
                chartCanvas.addEventListener('mouseleave', hideTooltip);
                window.addEventListener('resize', () => {
                    resizeCanvasForDPR();
                    calculate();
                });

                resizeCanvasForDPR();
                applyCurrencyMask(initialInput);
                applyCurrencyMask(monthlyInput);

                calculate();
            });
        })();
    </script>
</section>

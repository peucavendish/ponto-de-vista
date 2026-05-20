<script>
document.addEventListener('DOMContentLoaded', function () {
  if (typeof Chart === 'undefined') return;

  const gridColor = '#EBEDF2';
  const fontSm = { size: 11 };

  new Chart(document.getElementById('chartElNinoContrib'), {
    type: 'bar',
    data: {
      labels: ['2015', '2016', '2018/19', '2023', '2024', '2026 (proj.)'],
      datasets: [{
        label: 'Contribuição El Niño (pp)',
        data: [3.5, 3.2, 1.5, 1.55, 2.25, 0.65],
        backgroundColor: ['#C8686D','#C8686D','#0466C8','#886B25','#C8686D','#FFC971'],
        borderRadius: 5,
        borderSkipped: false,
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { callbacks: { label: ctx => `+${ctx.parsed.y} pp em alimentos` } }
      },
      scales: {
        y: { beginAtZero: true, grid: { color: gridColor }, ticks: { callback: v => '+' + v + ' pp', font: fontSm } },
        x: { grid: { display: false }, ticks: { font: fontSm } }
      }
    }
  });

  new Chart(document.getElementById('chartIPCA'), {
    type: 'bar',
    data: {
      labels: ['2015', '2016', '2019', '2023', '2024'],
      datasets: [
        { label: 'IPCA Geral', data: [10.67, 6.29, 4.31, 4.62, 4.83], backgroundColor: '#0466C8', borderRadius: 4, borderSkipped: false },
        { label: 'Alimentos', data: [12.0, 9.5, 6.5, 5.8, 8.22], backgroundColor: '#C8686D', borderRadius: 4, borderSkipped: false }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom', labels: { font: fontSm, boxWidth: 14 } },
        tooltip: { callbacks: { label: ctx => `${ctx.dataset.label}: ${ctx.parsed.y}%` } }
      },
      scales: {
        y: { beginAtZero: true, grid: { color: gridColor }, ticks: { callback: v => v + '%', font: fontSm } },
        x: { grid: { display: false }, ticks: { font: fontSm } }
      }
    }
  });

  new Chart(document.getElementById('chartSubgrupos'), {
    type: 'bar',
    data: {
      labels: ['Hortaliças/Legumes', 'Frutas', 'Cereais/Leguminosas', 'Óleos e Gorduras', 'Carnes/Aves', 'Leite e Derivados', 'Panificados'],
      datasets: [{
        label: 'Sensibilidade relativa ao choque El Niño',
        data: [95, 80, 70, 65, 55, 40, 25],
        backgroundColor: ['#C8686D', '#c85c3a', '#886B25', '#FFC971', '#0466C8', '#4d8ec4', '#7EC868'],
        borderRadius: 5,
        borderSkipped: false,
      }]
    },
    options: {
      indexAxis: 'y',
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { callbacks: { label: ctx => `Sensibilidade: ${ctx.parsed.x}/100` } }
      },
      scales: {
        x: { beginAtZero: true, max: 100, grid: { color: gridColor }, ticks: { font: { size: 10 } } },
        y: { grid: { display: false }, ticks: { font: fontSm } }
      }
    }
  });

  new Chart(document.getElementById('chartPeso'), {
    type: 'doughnut',
    data: {
      labels: ['Alimentação e Bebidas (23,2%)', 'Habitação (14,1%)', 'Transporte (20,4%)', 'Saúde (7,2%)', 'Educação (6,4%)', 'Vestuário (5,6%)', 'Outros (23,1%)'],
      datasets: [{
        data: [23.2, 14.1, 20.4, 7.2, 6.4, 5.6, 23.1],
        backgroundColor: ['#C8686D', '#0466C8', '#886B25', '#7EC868', '#FFC971', '#4d8ec4', '#DCDCDC'],
        borderWidth: 2,
        borderColor: '#FFFFFF'
      }]
    },
    options: {
      responsive: true,
      cutout: '55%',
      plugins: {
        legend: { position: 'bottom', labels: { font: { size: 10 }, boxWidth: 12, padding: 8 } },
        tooltip: { callbacks: { label: ctx => ctx.label } }
      }
    }
  });

  new Chart(document.getElementById('chartSelic'), {
    type: 'line',
    data: {
      labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
      datasets: [
        { label: 'Selic (% a.a.)', data: [14.25, 13.75, 7.0, 6.5, 4.5, 2.0, 9.25, 13.75, 11.75, 12.25], borderColor: '#0466C8', tension: 0.3, fill: false, pointRadius: 5, pointBackgroundColor: '#0466C8', borderWidth: 2.5 },
        { label: 'IPCA Geral (%)', data: [10.67, 6.29, 2.95, 3.75, 4.31, 4.52, 10.06, 5.79, 4.62, 4.83], borderColor: '#886B25', tension: 0.3, fill: false, pointRadius: 5, pointBackgroundColor: '#886B25', borderWidth: 2.5, borderDash: [5, 3] },
        { label: 'Alimentos (%)', data: [12.0, 9.5, 1.2, 4.0, 6.5, 8.5, 14.0, 11.7, 5.8, 8.22], borderColor: '#C8686D', tension: 0.3, fill: false, pointRadius: 5, pointBackgroundColor: '#C8686D', borderWidth: 2, borderDash: [2, 2] }
      ]
    },
    options: {
      responsive: true,
      interaction: { intersect: false, mode: 'index' },
      plugins: {
        legend: { position: 'bottom', labels: { font: fontSm, boxWidth: 14, padding: 12 } },
        tooltip: { callbacks: { label: ctx => `${ctx.dataset.label}: ${ctx.parsed.y}%` } }
      },
      scales: {
        y: { grid: { color: gridColor }, ticks: { callback: v => v + '%', font: fontSm } },
        x: { grid: { display: false }, ticks: { font: fontSm } }
      }
    }
  });
});
</script>

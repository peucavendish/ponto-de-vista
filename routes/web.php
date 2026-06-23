<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/newsletters/semana-22-05-2026', 'newsletters.semana-22-05-2026')->name('newsletters.semana-22-05-2026');
Route::view('/newsletters/semana-16-05-2026', 'newsletters.semana-16-05-2026')->name('newsletters.semana-16-05-2026');
Route::view('/newsletters/semana-08-05-2026', 'newsletters.semana-08-05-2026')->name('newsletters.semana-08-05-2026');
Route::view('/newsletters/semana-30-04-2026', 'newsletters.semana-30-04-2026')->name('newsletters.semana-30-04-2026');
Route::view('/newsletters/semana-24-04-2026', 'newsletters.semana-24-04-2026')->name('newsletters.semana-24-04-2026');
Route::view('/newsletters/semana-17-04-2026', 'newsletters.semana-17-04-2026')->name('newsletters.semana-17-04-2026');
Route::view('/newsletters/semana-11-04-2026', 'newsletters.semana-11-04-2026')->name('newsletters.semana-11-04-2026');
Route::view('/newsletters/semana-02-04-2026', 'newsletters.semana-02-04-2026')->name('newsletters.semana-02-04-2026');
Route::view('/newsletters/semana-27-03-2026', 'newsletters.semana-27-03-2026')->name('newsletters.semana-27-03-2026');
Route::view('/newsletters/semana-23-06-2025', 'newsletters.semana-23-06-2025')->name('newsletters.semana-23-06-2025');

Route::view('/artigos/economista-chefe/copom-ata-jun-2026-23-06-2026', 'artigos.copom-ata-jun-2026-23-06-2026')
    ->name('artigos.copom-ata-jun-2026-23-06-2026');

Route::view('/artigos/economista-chefe/copom-0626-1425-17-06-2026', 'artigos.copom-0626-1425-17-06-2026')
    ->name('artigos.copom-0626-1425-17-06-2026');

Route::view('/artigos/economista-chefe/copom-corta-025pp-29-04-2026', 'artigos.copom-corta-025pp-29-04-2026')
    ->name('artigos.copom-corta-025pp-29-04-2026');

Route::view('/artigos/economista-chefe/cdi-vs-ipca-plus-historico-25-anos', 'artigos.cdi-vs-ipca-plus-historico-25-anos')
    ->name('artigos.cdi-vs-ipca-plus-historico-25-anos');

Route::view('/artigos/economista-chefe/cpi-eua-abril-2026-fed', 'artigos.cpi-eua-abril-2026-fed')
    ->name('artigos.cpi-eua-abril-2026-fed');

Route::view('/artigos/economista-chefe/cpi-eua-maio-2026-fed', 'artigos.cpi-eua-maio-2026-fed')
    ->name('artigos.cpi-eua-maio-2026-fed');

Route::view('/artigos/economista-chefe/fomc-06-2026-fed', 'artigos.fomc-06-2026-fed')
    ->name('artigos.fomc-06-2026-fed');

Route::view('/artigos/economista-chefe/ipca-abril-2026-composicao', 'artigos.ipca-abril-2026-composicao')
    ->name('artigos.ipca-abril-2026-composicao');

Route::view('/artigos/economista-chefe/ipca-maio-2026-composicao', 'artigos.ipca-maio-2026-composicao')
    ->name('artigos.ipca-maio-2026-composicao');

Route::view('/artigos/economista-chefe/ibc-br-marco-2026-1t26', 'artigos.ibc-br-marco-2026-1t26')
    ->name('artigos.ibc-br-marco-2026-1t26');

Route::view('/artigos/economista-chefe/el-nino-ipca-juros-2026', 'artigos.el-nino-ipca-juros-2026')
    ->name('artigos.el-nino-ipca-juros-2026');

Route::view('/artigos/economista-chefe/pce-eua-abril-2026-fed', 'artigos.pce-eua-abril-2026-fed')
    ->name('artigos.pce-eua-abril-2026-fed');

Route::view('/artigos/economista-chefe/pib-brasil-1t26-2026', 'artigos.pib-brasil-1t26-2026')
    ->name('artigos.pib-brasil-1t26-2026');

Route::view('/artigos/economista-chefe/spacex-ipo-economia-espacial-2026', 'artigos.spacex-ipo-economia-espacial-2026')
    ->name('artigos.spacex-ipo-economia-espacial-2026');

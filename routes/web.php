<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/newsletters/semana-08-05-2026', 'newsletters.semana-08-05-2026')->name('newsletters.semana-08-05-2026');
Route::view('/newsletters/semana-30-04-2026', 'newsletters.semana-30-04-2026')->name('newsletters.semana-30-04-2026');
Route::view('/newsletters/semana-24-04-2026', 'newsletters.semana-24-04-2026')->name('newsletters.semana-24-04-2026');
Route::view('/newsletters/semana-17-04-2026', 'newsletters.semana-17-04-2026')->name('newsletters.semana-17-04-2026');
Route::view('/newsletters/semana-11-04-2026', 'newsletters.semana-11-04-2026')->name('newsletters.semana-11-04-2026');
Route::view('/newsletters/semana-02-04-2026', 'newsletters.semana-02-04-2026')->name('newsletters.semana-02-04-2026');
Route::view('/newsletters/semana-27-03-2026', 'newsletters.semana-27-03-2026')->name('newsletters.semana-27-03-2026');
Route::view('/newsletters/semana-23-06-2025', 'newsletters.semana-23-06-2025')->name('newsletters.semana-23-06-2025');

Route::view('/artigos/economista-chefe/copom-corta-025pp-29-04-2026', 'artigos.copom-corta-025pp-29-04-2026')
    ->name('artigos.copom-corta-025pp-29-04-2026');

Route::view('/artigos/economista-chefe/cdi-vs-ipca-plus-historico-25-anos', 'artigos.cdi-vs-ipca-plus-historico-25-anos')
    ->name('artigos.cdi-vs-ipca-plus-historico-25-anos');

Route::view('/artigos/economista-chefe/cpi-eua-abril-2026-fed', 'artigos.cpi-eua-abril-2026-fed')
    ->name('artigos.cpi-eua-abril-2026-fed');

Route::view('/artigos/economista-chefe/ipca-abril-2026-composicao', 'artigos.ipca-abril-2026-composicao')
    ->name('artigos.ipca-abril-2026-composicao');

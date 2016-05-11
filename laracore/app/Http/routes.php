<?php

Route::get('/', 'MemberController@index');
Route::get('/chat', 'ChatController@index');
Route::get('/chat/room/{id}', 'ChatController@index');
Route::get('/hasil', 'HasilController@index');
Route::get('/jadwal', 'JadwalController@index');
Route::get('/tambahjadwal', 'JadwalController@tambahjadwal');
Route::get('/album', 'PhotoController@album');
Route::get('/photo', 'PhotoController@photo');
Route::get('/video', 'VideoController@lists');
Route::get('/berita', 'BeritaController@listberita');
Route::get('/bacaberita', 'BeritaController@berita_id');
Route::get('/team', 'TeamriderController@team');
Route::get('/teamdetail', 'TeamriderController@team_id');
Route::get('/region', 'RegionController@index');
Route::get('/profil', 'MemberController@profil');
Route::get('/daftar', 'MemberController@daftar');
Route::get('/masuk', 'MemberController@masuk');

Route::get('/admin', 'Admin\PersonelController@index');
Route::get('/admin/home', 'Admin\DataController@index');

// Proses
Route::post('daftar', 'MemberController@prosesDaftar');


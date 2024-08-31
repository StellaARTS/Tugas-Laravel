<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return "<h1>Daftar Kontak</h1>";
});

Route::get('/contacts', function() {
    return "<h1> Daftar Kontak</h1>";
 });

 Route::get('/contacts/create', function() {
    return "<h1>Tambah Kontak Baru</h1>";
 });

 Route::get('/contacts/{id}', function($id) {
    return "Ini Kontak ke-9" . $id;
 });

 Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
 });

 Route::get('/contacts/{id}', function($id) {
    return "Ini Kontak ke-" . $id;
 })->where('id', '[0-9]+');

 Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
 })->where('name', '[a-zA-Z]+');

 Route::get('/contacts/{id}', function($id) {
    return "Ini Kontak ke-" . $id;
 })->whereNumber('id');
 Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
 })->whereAlphaNumeric('name');

 Route::get('/', function () {
    $html = "
    <h1>Contact App</h1>
    <div>
        <a href='/contacts'>All contacts</>
        <a href='/contacts/create'>Add contacts</>
        <a href='/contacts/1'>Show contacts</>
    </div>
    ";
    return $html;
    // return view('welcome');
 });
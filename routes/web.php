<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data['antri_cs'] = 0;
    $data['antri_teller1'] = 0;
    $data['antri_teller2'] = 0;
    $data['antri'] = "-";
    return view('antrian', $data);
});

Route::get('/antri_cs/{cs}/{teller1}/{teller2}', function ($cs,$teller1,$teller2) {
    $data['antri_cs'] = $cs+1;
    $data['antri_teller1'] = $teller1;
    $data['antri_teller2'] = $teller2;
    $data['antri'] = "cs";
    return view('antrian', $data);
});

Route::get('/antri_teller1/{cs}/{teller1}/{teller2}', function ($cs,$teller1,$teller2) {
    $data['antri_cs'] = $cs;
    $data['antri_teller1'] = $teller1+1;
    $data['antri_teller2'] = $teller2;
    $data['antri'] = "tl1";
    return view('antrian', $data);
});

Route::get('/antri_teller2/{cs}/{teller1}/{teller2}', function ($cs,$teller1,$teller2) {
    $data['antri_cs'] = $cs;
    $data['antri_teller1'] = $teller1;
    $data['antri_teller2'] = $teller2+1;
    $data['antri'] = "tl2";
    return view('antrian', $data);
});

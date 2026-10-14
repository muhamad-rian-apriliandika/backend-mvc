<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
Route::post('/mahasiswa', function (Request $request) {
 // Untuk sementara, hanya menampilkan data yang dikirim
 return response()->json([
 'message' => 'Data mahasiswa berhasil diterima',
 'data' => [
 'nim' => $request->input('nim'),
 'nama' => $request->input('nama'),
 'jurusan' => $request->input('jurusan'),
 ]
 ]);
});

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

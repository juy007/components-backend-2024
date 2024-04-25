<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Administrator extends Controller
{
    public function ceklog()
    {
        Log::channel('transaction')->info('Transaksi berhasil: baju bekas');
        Log::channel('user_activity')->info('Profil pengguna diperbarui: ganti password');
        Log::channel('inventory')->info('Stok produk diperbarui: tambah 70 pcs');
        Log::channel('shipping')->info('Pesanan dikirim: celana dikirm ke sumatra');
        Log::channel('customer_service')->info('Keluhan ditangani: barangnya hancur');
        Log::channel('security')->warning('Aktivitas mencurigakan terdeteksi: awas ada hacker');
        Log::channel('performance')->info('Waktu eksekusi: 2 detik');
        Log::channel('analytics')->info('Data Pengguna: mijan - Data Permintaan: filter produk');
        Log::channel('payment')->info('Informasi Pembayaran: Rp. 10.000');
        Log::channel('product_activity')->info('Produk diperbarui: gucci (ID: 19900023)');
        Log::channel('discount_coupon')->info('Kupon diskon diterapkan: 007');
        Log::channel('promotion_performance')->info('Analisis kinerja promosi: bagus cair terus');
        Log::channel('customer_retention')->info('Analisis retensi pelanggan: giat belanja');
        Log::channel('third_party_integration')->info('Integrasi dengan pihak ketiga: kami sudah bayarkan');

        return view('global_variabel');
    }
}

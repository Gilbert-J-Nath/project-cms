<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    public function showProjectCard()
{
    $news = \App\Models\News::first();  // Mengambil data pertama dari tabel 'news'
    return view('menu_landing', compact('news'));  // Kirim data ke view 'menu_landing'
}


    // Method untuk memperbarui data dari form
    public function updateLandingContent(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'newshead' => 'required|max:255',
            'newssubhead' => 'required|max:255',
            'newsbackground' => 'nullable|image|mimes:jpeg,jpg,png|max:2048' // hanya gambar dengan ukuran maksimal 2MB
        ]);

        // Ambil data pertama di tabel 'news'
        $news = News::first(); 

        // Jika tidak ada data, buat instance baru
        if (!$news) {
            $news = new News();
        }

        // Simpan teks head dan subhead dari input form
        $news->NEWS_HEAD = $request->input('newshead');
        $news->NEWS_SUBHEAD = $request->input('newssubhead');

        // Jika ada file background yang di-upload
        if ($request->hasFile('newsbackground')) {
            $image = $request->file('newsbackground');
            $imagePath = $image->store('news_images', 'public'); // simpan gambar di storage/app/public/news_images
            $news->NEWS_IMAGE = $imagePath; // Simpan path gambar di database
        }

        // Simpan ke database
        $news->save();

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->back()->with('success', 'Konten berhasil diperbarui!');
    }
}

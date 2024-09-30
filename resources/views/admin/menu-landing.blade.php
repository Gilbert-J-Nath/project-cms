<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        .content-background {
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    @include('admin.sidebar') <!-- Pastikan ini adalah nama file sidebar Anda -->

    <!-- Main Content -->
    @php
        // Ambil data dari tabel 'news' untuk ditampilkan di form
        $news = App\Models\News::first();
    @endphp

    <div class="content content-background flex-grow-1 p-4" style="background-image: url('{{ asset('storage/' . ($news->NEWS_IMAGE ?? 'default_image.jpg')) }}');">
        <h2 class="text-center mb-4">{{ $news->NEWS_HEAD ?? 'Default Head' }}</h2>
        <div class="row">
            <div class="col-md-6 ms-0"> <!-- Ubah kelas ini -->
                <!-- Form untuk mengubah teks dan gambar -->
                <form action="{{ route('admin.updateBackground') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="heading" class="form-label">Teks Head</label>
                        <input type="text" class="form-control" id="heading" name="newshead" placeholder="Masukkan teks head" value="{{ $news->NEWS_HEAD ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="subheading" class="form-label">Teks Subhead</label>
                        <input type="text" class="form-control" id="subheading" name="newssubhead" placeholder="Masukkan teks subhead" value="{{ $news->NEWS_SUBHEAD ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="background" class="form-label">Background Image</label>
                        <input type="file" class="form-control" id="background" name="newsbackground" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

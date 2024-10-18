<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .feedback-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
        }
        .feedback-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .feedback-img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            object-fit: cover;
            border: 3px solid #007bff; /* Border around image */
        }
        .star-rating {
            color: gold; /* Warna bintang */
        }
        .card-body {
            background-color: #f8f9fa; /* Warna latar belakang card */
        }
        .card-title {
            color: #007bff; /* Warna judul */
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h2 class="text-center mb-4">User Feedback</h2>
    <div class="row">
        <!-- Kolom 1 -->
        <div class="col-md-4">
            <div class="card feedback-card mb-4">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/60" alt="User 1" class="feedback-img mb-2">
                    <h5 class="fw-bold card-title">Nama 1</h5>
                    <p class="mb-0">Bintang: <span class="star-rating">⭐⭐⭐⭐⭐</span></p>
                    <p class="mb-0">Date: 2024-10-16</p>
                    <p class="mb-0">Comment: Great service!</p>
                </div>
            </div>
        </div>

        <!-- Kolom 2 -->
        <div class="col-md-4">
            <div class="card feedback-card mb-4">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/60" alt="User 2" class="feedback-img mb-2">
                    <h5 class="fw-bold card-title">Nama 2</h5>
                    <p class="mb-0">Bintang: <span class="star-rating">⭐⭐⭐⭐</span></p>
                    <p class="mb-0">Date: 2024-10-15</p>
                    <p class="mb-0">Comment: Very satisfied! skssksskssmsmsmkssisiiendd jdwi</p>
                </div>
            </div>
        </div>

        <!-- Kolom 3 -->
        <div class="col-md-4">
            <div class="card feedback-card mb-4">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/60" alt="User 3" class="feedback-img mb-2">
                    <h5 class="fw-bold card-title">Nama 3</h5>
                    <p class="mb-0">Bintang: <span class="star-rating">⭐⭐⭐</span></p>
                    <p class="mb-2">Date: 2024-10-14</p>
                    <p class="mb-1" style="font-weight: bold;">"Could be better sksksksmskjdj dhddhdiidndn"</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-zR6g6/Z2MIyZzq3wqWIkAk4qqH7G6D44s6nDz5bi/Q7W4P63bgH9AF7gTh+/uPsl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-Jo8Qnx1XToUJ1e/Bh52yEz7D+FGjV/yBr4p/SI8G8AYDQ1K0lvhT/R8aY9C7PAt8" crossorigin="anonymous"></script>
</body>
</html>

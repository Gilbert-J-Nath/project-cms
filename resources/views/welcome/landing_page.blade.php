<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
    <style>
        /* Styles for the carousel and other content */
        .carousel-container {
            margin-top: 20px; /* Space between header and carousel */
        }
        .content {
            padding-top: 20px; /* Additional padding for content below the header */
        }
    </style>
</head>
<body>

    @include('welcome.header')
    @include('welcome.hero') <!-- This will automatically have margin-top from hero.blade.php -->

    <div class="carousel-container">
        <!-- No need to duplicate carousel code here -->
    </div>

    <div class="container py-5 mt-4 content">
        <div class="row align-items-center mt-5">
            <!-- Left Column: Text Head and Subhead -->
            <div class="col-md-6 py-3">
                <div class="card p-4 mb-4" style="border-radius: 20px; background-color: #90EE90;">
                    <h1 class="display-6 fw-bold" style="font-size: 30px">Head</h1>
                    <p class="lead" style="width:50vh; font-size: 15px">
                        Lorem ipsum dolor sit amet. Et galisum nostrum ea asperiores 
                        blanditiis ut possimus illum et reprehenderit consequatur aut
                        autem laudantium nam Quis optio. 
                    </p>
                </div>
                <div class="card p-5" style="border-radius: 20px; background-color: #90EE90;">
                    <div class="row text-center d-flex justify-content-around align-items-center">
                        <!-- Years In Operation -->
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://img.icons8.com/?size=100&id=57927&format=png&color=000000" alt="Years In Operation" style="width: 20px; margin-right: 10px;">
                            <div class="text-start">
                                <h1 class="fw-bold mb-0" style="font-size: 20px;">5+</h1>
                                <p class="fw-bold mb-0" style="font-size: 10px; margin-top: 0;">Years in Operation</p>
                            </div>
                        </div>
                        <!-- Number of Projects -->
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://img.icons8.com/?size=100&id=74359&format=png&color=000000" alt="Number of Projects" style="width: 20px; margin-right: 10px;">
                            <div class="text-start">
                                <h1 class="fw-bold mb-0" style="font-size: 20px;">10+</h1>
                                <p class="fw-bold mb-0" style="font-size: 10px; margin-top: 0;">Number of Projects</p>
                            </div>
                        </div>
                        <!-- Guests -->
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://img.icons8.com/?size=100&id=11220&format=png&color=000000" alt="Guests" style="width: 20px; margin-right: 10px;">
                            <div class="text-start">
                                <h1 class="fw-bold mb-0" style="font-size: 20px;">1000+</h1>
                                <p class="fw-bold mb-0" style="font-size: 10px; margin-top: 0;">Guests</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Images -->
            <div class="col-md-6 py-3">
                <div class="d-flex justify-content-center m-3 gap-3">
                    <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 1" class="img-fluid" style="width: 50%; border-radius: 20px;">
                    <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 2" class="img-fluid" style="width: 50%; border-radius: 20px;">
                </div>
                <div class="d-flex justify-content-center m-3 gap-3">
                    <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 1" class="img-fluid" style="width: 50%; border-radius: 20px;">
                    <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 2" class="img-fluid" style="width: 50%; border-radius: 20px;">
                </div>
            </div>
        </div>
    </div>

    @include('welcome.service')
    @include('welcome.expertise')
    @include('welcome.project')
    @include('welcome.feedback')
    @include('welcome.connection')
    @include('welcome.news')
    @include('welcome.event')

    @include('welcome.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

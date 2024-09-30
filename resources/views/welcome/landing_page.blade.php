<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>

    @include('welcome.header')
    @include('welcome.hero')

    <div class="container py-5">
    <div class="row align-items-center mt-5">
        <!-- Left Column: Text Head and Subhead -->
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100%;">

                <div class="d-flex justify-content-center mx-3">
                    <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 1" class="img-fluid mx-2" style="width: 55%; border-radius: 10px;">
                    <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 2" class="img-fluid mx-2" style="width: 50%; border-radius: 10px;">
                </div>
                <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" alt="Image 3" class="img-fluid my-3" style="width: 45%; border-radius: 10px;">
            </div>
        </div>
        
        <!-- Right Column: Text Head and Subhead -->
        <div class="col-md-6 py-3">
            <h1 class="display-6 fw-bold" style="margin-top: -170px;">About Us</h1>
            <p class="lead mt-5">This is a subheading that provides more detail about your product or service.</p>
        </div>
    </div>
</div>


    @include('welcome.expertise')
    @include('welcome.project')
    @include('welcome.connection')

    @include('welcome.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

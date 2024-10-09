<section class="service-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Service</h2>
        <div id="serviceCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex-row gap-4 d-flex justify-content-center align-items-center">
                        <!-- Card 1 -->
                        <div class="col-md-3 custom-service-card">
                            <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" class="card-img-top mx-auto" alt="Web Development" style="height: 100%; object-fit: cover;">
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-3 custom-service-card">
                            <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" class="card-img-top mx-auto" alt="Market Research" style="height: 100%; object-fit: cover;">
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-3 custom-service-card">
                            <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" class="card-img-top mx-auto" alt="Design & UX" style="height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="flex-row gap-4 d-flex justify-content-center align-items-center">
                        <!-- Card 1 -->
                        <div class="col-md-3 custom-service-card">
                            <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" class="card-img-top mx-auto" alt="Web Development" style="height: 100%; object-fit: cover;">
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-3 custom-service-card">
                            <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" class="card-img-top mx-auto" alt="Market Research" style="height: 100%; object-fit: cover;">
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-3 custom-service-card">
                            <img src="https://greatdayhr.com/wp-content/uploads/2020/11/silver-letters-glass-building-facade_145275-162-jpg.webp" class="card-img-top mx-auto" alt="Design & UX" style="height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev custom-carousel-service-control" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                <i class="ri-arrow-left-s-line" style="color: black; font-size: 3rem;"></i>
                <span class="visually-hidden">Prev</span>
            </button>

            <button class="carousel-control-next custom-carousel-service-control" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                <i class="ri-arrow-right-s-line" style="color: black; font-size: 3rem;"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <style>
        /* Custom card Styling */
        .service-section .custom-service-card {
            height: 300px;
            width: 300px;
            border: none;
        }

        /* Custom Carousel Button Styling */
        .service-section custom-carousel-control {
            position: absolute;
            top: 50%;
            width: 35px;
            height: 50px;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 10;
        }

        .service-section .carousel-control-prev {
            left: -70px;
        }
    
        .service-section .carousel-control-next {
            right: -70px;
        }
    </style>
</section>

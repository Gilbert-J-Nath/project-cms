<nav class="navbar navbar-expand-lg navbar-light mb-5" style="background-color:#BBFF4B;">
    <div class="container-fluid ps-5 pe-5">
        <!-- Left: Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.png') }}" alt="Logo" style="height: 40px;">
        </a>

        <!-- Toggler button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Center: Navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link mx-3 custom-bold" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 custom-bold" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 custom-bold" href="#">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 custom-bold" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 custom-bold" href="#">Expertise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 custom-bold" href="#">Profile Team</a>
                </li>
            </ul>
        </div>

        <!-- Right: Search icon and flags -->
        <div class="d-flex align-items-center me-5 gap-1">
            <!-- Search icon -->
            <a href="#" class="nav-link">
                <!-- <i class="fas fa-search" style="font-size: 20px;"></i> -->
                <img src="https://img.icons8.com/?size=100&id=TQPOC8XaUqZ0&format=png&color=000000" alt="ID" style="width: 30px;">
            </a>

            <!-- Indonesian flag -->
            <a href="#" class="nav-link mx-2">
                <img src="https://img.icons8.com/?size=100&id=60248&format=png&color=000000" alt="ID" class="rounded-5" style="width: 50px;" >
            </a>

            <!-- American flag -->
            <a href="#" class="nav-link rounded">
                <img src="https://img.icons8.com/?size=100&id=15532&format=png&color=000000" alt="US" class="rounded-5" style="width: 50px;">
            </a>
        </div>
    </div>
</nav>

<style>
    .custom-bold {
        font-weight: 1000;
    }
</style>

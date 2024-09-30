<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ps-5">
        <!-- Left: Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.png') }}" alt="Logo" style="height: 40px;">
        </a>
        <!-- Toggler button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Center: Navbar links -->
        <div class="collapse navbar-collapse justify-content-center margin" id="navbarNav">
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link active mx-3" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

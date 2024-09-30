<div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar bg-light" style="width: 250px; height: 100vh;">
        <div class="sidebar-header p-3">
            <h5 class="text-center">Dashboard</h5>
        </div>
        <ul class="nav flex-column p-3">
            <li class="nav-item mb-2">
                <a class="nav-link active" href="#">
                    Menu Landing Page
                </a>
            </li>
        </ul>
        <div class="logout-button p-3">
            <form action="#" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger w-100">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content flex-grow-1 p-4">
        @yield('content') <!-- Tempat untuk konten utama -->
    </div>
</div>

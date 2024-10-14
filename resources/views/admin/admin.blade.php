<!-- resources/views/layouts/admin.blade.php -->
<style>
    /* public/css/admin.css */
#sidebar-wrapper {
    width: 250px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    z-index: 1000;
    overflow-x: hidden;
    overflow-y: auto;
    background: #f8f9fa;
    transition: all 0.3s;
}

#wrapper.toggled #sidebar-wrapper {
    margin-left: -250px;
}

#page-content-wrapper {
    width: 100%;
    padding-left: 250px;
    transition: all 0.3s;
}

#wrapper.toggled #page-content-wrapper {
    padding-left: 0;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Header -->
          

            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!-- Tambahkan ini di bawah tag </body> di layout admin -->
<script>
    const toggleButton = document.getElementById('menu-toggle');
    const wrapper = document.getElementById('wrapper');

    toggleButton.addEventListener('click', function () {
        wrapper.classList.toggle('toggled');
    });
</script>

</html>
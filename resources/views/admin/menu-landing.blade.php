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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css" rel="stylesheet">


</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Tab Navigation -->
            <div class="nav nav-tabs">
                <button class="nav-link active" onclick="openTab('expertise')">Expertise</button>
                <button class="nav-link" onclick="openTab('carousel')">Carousel</button>
                <button class="nav-link" onclick="openTab('setting')">Setting</button>
                <button class="nav-link" onclick="openTab('service')">Service</button>
                <button class="nav-link" onclick="openTab('feedback')">Feedback</button>
                <button class="nav-link" onclick="openTab('news')">News</button>
                <button class="nav-link" onclick="openTab('event')">Event</button>
            </div>

            <div class="tab-content">
        <!-- Expertise Tab -->
        <div class="tab-pane active" id="expertise">
            <form action="/save-expertise" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Row pertama untuk 3 card -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mt-3" style="width: 100%; height: 21rem;margin-left: 10px;">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-3">Expertise</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Expertise</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama keahlian" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image Expertise</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="switch1" onchange="toggleText('switch1', 'label1')">
                                <label class="form-check-label" id="label1" for="switch1">non-aktif</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                                <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mt-3" style="width: 100%; height: 21rem;margin-left: 5px;">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-3">Expertise</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Expertise</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama keahlian" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image Expertise</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="switch2" onchange="toggleText('switch2', 'label2')">
                                <label class="form-check-label" id="label2" for="switch2">non-aktif</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                                <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mt-3" style="width: 98%; height: 21rem; ">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-3">Expertise</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Expertise</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama keahlian" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image Expertise</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="switch3" onchange="toggleText('switch3', 'label3')">
                                <label class="form-check-label" id="label3" for="switch3">non-aktif</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                                <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                            </div>
                        </div>
                        </div>
                        </div>

                <!-- Row kedua untuk 2 card -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card" style="width: 100%; height: 21rem;margin-left: 10px;">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-3">Expertise</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Expertise</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama keahlian" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image Expertise</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="switch4" onchange="toggleText('switch4', 'label4')">
                                <label class="form-check-label" id="label1" for="switch4">non-aktif</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                                <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card" style="width:99%; height: 21rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-3">Expertise</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Expertise</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama keahlian" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image Expertise</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="switch5" onchange="toggleText('switch5', 'label5')">
                                <label class="form-check-label" id="label5" for="switch5">non-aktif</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                                <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Carousel Tab -->
        <div class="tab-pane" id="carousel">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 24rem;margin-left: 10px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Carousel</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Head" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Sub Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Subhead" required>
                    </div>
                    <div class="mb-2">
                        <label for="background" class="form-label">Image Carousel</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch6" onchange="toggleText('switch6', 'label6')">
                    <label class="form-check-label" id="label6" for="switch6">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 24rem;margin-left: 5px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Carousel</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Head" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Sub Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Subhead" required>
                    </div>
                    <div class="mb-2">
                        <label for="background" class="form-label">Image Carousel</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch7" onchange="toggleText('switch7', 'label7')">
                    <label class="form-check-label" id="label7" for="switch7">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 98%; height: 24rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Carousel</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Head" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Sub Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Subhead" required>
                    </div>
                    <div class="mb-2">
                        <label for="background" class="form-label">Image Carousel</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch8" onchange="toggleText('switch8', 'label8')">
                    <label class="form-check-label" id="label8" for="switch8">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-1">
        <div class="col-md-6">
            <div class="card mt-3"  style="width: 100%; height: 24rem;margin-left: 10px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Carousel</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Head" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Sub Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Subhead" required>
                    </div>
                    <div class="mb-2">
                        <label for="background" class="form-label">Image Carousel</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch9" onchange="toggleText('switch9', 'label9')">
                    <label class="form-check-label" id="label9" for="switch9">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3"  style="width: 99%; height: 24rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Carousel</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Head" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Sub Head</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Subhead" required>
                    </div>
                    <div class="mb-2">
                        <label for="background" class="form-label">Image Carousel</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch10" onchange="toggleText('switch10', 'label10')">
                    <label class="form-check-label" id="label10" for="switch10">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Setting Tab -->
<div class="tab-pane" id="setting">
    <div class="row"> 
        <div class="col-md-4">
            <div class="card mt-3" style="width: 100%; height: 24rem;margin-left: 10px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Setting</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Value</label>
                        <input type="text" class="form-control" placeholder="Masukkan Value" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Key</label>
                        <input type="text" class="form-control" placeholder="Masukkan Key" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan Description" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switch11" onchange="toggleText('switch11', 'label11')">
                        <label class="form-check-label" id="label11" for="switch11">non-aktif</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                    <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3" style="width: 100%; height: 24rem;margin-left: 5px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Setting</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Value</label>
                        <input type="text" class="form-control" placeholder="Masukkan Value" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Key</label>
                        <input type="text" class="form-control" placeholder="Masukkan Key" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan Description" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switch12" onchange="toggleText('switch12', 'label12')">
                        <label class="form-check-label" id="label12" for="switch12">non-aktif</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                    <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3" style="width: 98%; height: 24rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Setting</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Value</label>
                        <input type="text" class="form-control" placeholder="Masukkan Value" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Key</label>
                        <input type="text" class="form-control" placeholder="Masukkan Key" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan Description" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switch13" onchange="toggleText('switch13', 'label13')">
                        <label class="form-check-label" id="label13" for="switch13">non-aktif</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                    <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 100%; height: 24rem;margin-left: 10px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Setting</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Value</label>
                        <input type="text" class="form-control" placeholder="Masukkan Value" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Key</label>
                        <input type="text" class="form-control" placeholder="Masukkan Key" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan Description" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switch14" onchange="toggleText('switch14', 'label14')">
                        <label class="form-check-label" id="label14" for="switch14">non-aktif</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                    <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 99%; height: 24rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Setting</h5>
                    <div class="mb-2">
                        <label for="" class="form-label">Value</label>
                        <input type="text" class="form-control" placeholder="Masukkan Value" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Key</label>
                        <input type="text" class="form-control" placeholder="Masukkan Key" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan Description" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switch15" onchange="toggleText('switch15', 'label15')">
                        <label class="form-check-label" id="label15" for="switch15">non-aktif</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                    <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Tab -->
<div class="tab-pane" id="service">
    <div class="row "> 
    <div class="col-md-4">
            <div class="card mt-3" style="width: 100%; height: 30rem;margin-left: 10px;" >
                <div class="card-body">
                <h5 class="card-title text-center">Service</h5>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Company</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama company" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Logo Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan deskripsi" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch16" onchange="toggleText('switch16', 'label16')">
                    <label class="form-check-label" id="label16" for="switch16">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 30rem;margin-left: 5px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Service</h5>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Company</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama company" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Logo Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan deskripsi" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch17" onchange="toggleText('switch17', 'label17')">
                    <label class="form-check-label" id="label17" for="switch17">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 99%; height: 30rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Service</h5>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Company</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama company" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Logo Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan deskripsi" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch18" onchange="toggleText('switch18', 'label18')">
                    <label class="form-check-label" id="label18" for="switch18">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 100%; height: 30rem;margin-left: 10px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Service</h5>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Company</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama company" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Logo Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan deskripsi" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch19" onchange="toggleText('switch19', 'label19')">
                    <label class="form-check-label" id="label19" for="switch19">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
        

        <div class="col-md-6" >
            <div class="card"  style="width: 100%; height: 30rem;margin-left: 18px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Service</h5>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Company</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama company" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Logo Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Masukkan deskripsi" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch20" onchange="toggleText('switch20', 'label20')">
                    <label class="form-check-label" id="label20" for="switch20">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>        
                <!-- Feedback Tab -->
                <div class="tab-pane" id="feedback">
                <div class="row g-4"> 
        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 24rem;margin-left: 10px;">
                <div class="card-body">   
                    <h5 class="card-title text-center">Feedback</h5>
                    <div class="mb-2" style="margin-top: 32px;">
                        <label for="nama1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama1" name="nama1" placeholder="Masukkan nama" required>
                    </div>
                    <div class="rating">
                        <label for="ratingRange1" class="form-label">Rating (1-5):</label>
                        <output class="rating-output" id="ratingOutput1">3</output>
                        <input type="range" class="form-range" min="1" max="5" step="1" id="ratingRange1" value="3" oninput="updateRating(this.value, 'ratingOutput1')">
                    </div>
                    <div class="mb-2">
                        <label for="comment1" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment1" name="comment1" placeholder="Masukkan komentar" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch21" onchange="toggleText('switch21', 'label21')">
                    <label class="form-check-label" id="label21" for="switch21">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 24rem;margin-left: 5px;">
                <div class="card-body">   
                    <h5 class="card-title text-center">Feedback</h5>
                    <div class="mb-2" style="margin-top: 32px;">
                        <label for="nama2" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama2" name="nama2" placeholder="Masukkan nama" required>
                    </div>
                    <div class="rating">
                        <label for="ratingRange2" class="form-label">Rating (1-5):</label>
                        <output class="rating-output" id="ratingOutput2">3</output>
                        <input type="range" class="form-range" min="1" max="5" step="1" id="ratingRange2" value="3" oninput="updateRating(this.value, 'ratingOutput2')">
                    </div>
                    <div class="mb-2">
                        <label for="comment2" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment2" name="comment2" placeholder="Masukkan komentar" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch22" onchange="toggleText('switch22', 'label22')">
                    <label class="form-check-label" id="label22" for="switch22">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 98%; height: 24rem;">
                <div class="card-body">   
                    <h5 class="card-title text-center">Feedback</h5>
                    <div class="mb-2" style="margin-top: 32px;">
                        <label for="nama3" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama3" name="nama3" placeholder="Masukkan nama" required>
                    </div>
                    <div class="rating">
                        <label for="ratingRange3" class="form-label">Rating (1-5):</label>
                        <output class="rating-output" id="ratingOutput3">3</output>
                        <input type="range" class="form-range" min="1" max="5" step="1" id="ratingRange3" value="3" oninput="updateRating(this.value, 'ratingOutput3')">
                    </div>
                    <div class="mb-2">
                        <label for="comment3" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment3" name="comment3" placeholder="Masukkan komentar" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch23" onchange="toggleText('switch23', 'label23')">
                    <label class="form-check-label" id="label23" for="switch23">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card"  style="width: 100%; height: 24rem;margin-left: 10px;">
                <div class="card-body">   
                    <h5 class="card-title text-center">Feedback</h5>
                    <div class="mb-2" style="margin-top: 32px;">
                        <label for="nama4" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama4" name="nama4" placeholder="Masukkan nama" required>
                    </div>
                    <div class="rating">
                        <label for="ratingRange4" class="form-label">Rating (1-5):</label>
                        <output class="rating-output" id="ratingOutput4">3</output>
                        <input type="range" class="form-range" min="1" max="5" step="1" id="ratingRange4" value="3" oninput="updateRating(this.value, 'ratingOutput4')">
                    </div>
                    <div class="mb-2">
                        <label for="comment4" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment4" name="comment4" placeholder="Masukkan komentar" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch24" onchange="toggleText('switch24', 'label24')">
                    <label class="form-check-label" id="label24" for="switch24">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card"  style="width: 99%; height: 24rem;">
                <div class="card-body">   
                    <h5 class="card-title text-center">Feedback</h5>
                    <div class="mb-2" style="margin-top: 32px;">
                        <label for="nama5" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama5" name="nama5" placeholder="Masukkan nama" required>
                    </div>
                    <div class="rating">
                        <label for="ratingRange5" class="form-label">Rating (1-5):</label>
                        <output class="rating-output" id="ratingOutput5">3</output>
                        <input type="range" class="form-range" min="1" max="5" step="1" id="ratingRange5" value="3" oninput="updateRating(this.value, 'ratingOutput5')">
                    </div>
                    <div class="mb-2">
                        <label for="comment5" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment5" name="comment5" placeholder="Masukkan komentar" required>
                    </div>
                    <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="switch25" onchange="toggleText('switch25', 'label25')">
                    <label class="form-check-label" id="label25" for="switch25">non-aktif</label>
                    </div>
                         <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
                         <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                         <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- News Tab -->
     <div class="tab-pane" id="news">
     <div class="row">
            <h5 class="text-center mt-3">News</h5>
            <div class="col-md-12" style="margin-left: 430px;"> 
            <!-- Dropdown -->
            <div class="mb-2" style="width: 40%;"> <!-- Mengurangi lebar input -->
                <label for="pilihnews" class="form-label">News ke-</label>
                <select class="form-select" id="pilihnews" name="pilihnews" required>
                    <option selected disabled>Pilih news</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="1">4</option>
                </select>
            </div>
            <!-- Head Input -->
            <div class="mb-2" style="width: 40%;">
                <label for="newsHead" class="form-label">Head</label>
                <input type="text" class="form-control" id="newsHead" name="newsHead" placeholder="Masukkan judul berita" required>
            </div>
            <!-- Description Input -->
            <div class="mb-2" style="width: 40%;">
                <label for="newsDesc" class="form-label">Description</label>
                <input type="text" class="form-control" id="newsDesc" name="eventnewsDescDesc" placeholder="Masukkan deskripsi berita" required>
            </div>
            <!-- Image Upload -->
            <div class="mb-2" style="width: 40%;">
                <label for="newsImage" class="form-label">News Image</label>
                <input type="file" class="form-control" id="newsImage" accept="image/*">
            </div>
            <!-- Switch -->
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="switch26" onchange="toggleText('switch26', 'label26')">
                <label class="form-check-label" id="label26" for="switch26">non-aktif</label>
            </div>
            <!-- Buttons -->
            <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
            <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
            <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
        </div>
       
          <!-- Event Tab -->
          <div class="tab-pane" id="event">
    <div class="row">
            <h5 class="text-center mt-3">Event</h5>
            <div class="col-md-12" style="margin-left: 430px;"> 
            <!-- Dropdown -->
            <div class="mb-2" style="width: 40%;"> <!-- Mengurangi lebar input -->
                <label for="pilihevent" class="form-label">Event ke-</label>
                <select class="form-select" id="pilihevent" name="pilihevent" required>
                    <option selected disabled>Pilih event</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                    <option value="3">6</option>
                </select>
            </div>
            <!-- Head Input -->
            <div class="mb-2" style="width: 40%;">
                <label for="eventHead" class="form-label">Head</label>
                <input type="text" class="form-control" id="eventHead" name="eventHead" placeholder="Masukkan judul acara" required>
            </div>
            <!-- Description Input -->
            <div class="mb-2" style="width: 40%;">
                <label for="eventDesc" class="form-label">Description</label>
                <input type="text" class="form-control" id="eventDesc" name="eventDesc" placeholder="Masukkan deskripsi acara" required>
            </div>
            <!-- Image Upload -->
            <div class="mb-2" style="width: 40%;">
                <label for="eventImage" class="form-label">Event Image</label>
                <input type="file" class="form-control" id="eventImage" accept="image/*">
            </div>
            <!-- Switch -->
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="switch27" onchange="toggleText('switch27', 'label27')">
                <label class="form-check-label" id="label27" for="switch27">non-aktif</label>
            </div>
            <!-- Buttons -->
            <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy-fill"></i></button>
            <button type="button" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
            <button type="button" class="btn btn-danger mb-2"><i class="bi bi-trash3-fill"></i></button>
        </div>
    </div>
</div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script untuk fungsi tab -->
    <script>
      function openTab(tabId) {
            // Sembunyikan semua konten tab
            document.querySelectorAll('.tab-pane').forEach(function(tabContent) {
                tabContent.classList.remove('active');
            });

            // Hapus kelas aktif dari semua tombol tab
            document.querySelectorAll('.nav-link').forEach(function(tab) {
                tab.classList.remove('active');
            });

            // Tampilkan konten tab yang dipilih dan tambahkan kelas aktif ke tombol yang diklik
            document.getElementById(tabId).classList.add('active');
            
            // Tambahkan kelas active ke tombol yang sesuai berdasarkan ID tab
            document.querySelector('.nav-link[onclick="openTab(\'' + tabId + '\')"]').classList.add('active');
        }

        function updateRating(value, outputId) {
            document.getElementById(outputId).textContent = value;
        }

        function toggleText(switchId, labelId) {
            const switchInput = document.getElementById(switchId);
            const switchLabel = document.getElementById(labelId);
            if (switchInput.checked) {
                switchLabel.innerText = "Aktif";
            } else {
                switchLabel.innerText = "non-aktif";
            }
        }
    </script>
    <style>
/* Warna hijau saat diaktifkan */
.form-check-input:checked {
    background-color: green;
    border-color: green;
}

/* Warna merah saat tidak diaktifkan */
.form-check-input {
    background-color: red;
    border-color: red;
}
</style>
</body>
</html>
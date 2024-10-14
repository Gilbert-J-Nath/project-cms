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
            </div>

            <div class="tab-content">
        <!-- Expertise Tab -->
        <div class="tab-pane active" id="expertise">
            <form action="/save-expertise" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Row pertama untuk 3 card -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mt-3" style="width: 100%; height: 22rem;">
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
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-3" style="width: 100%; height: 22rem;">
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
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-3" style="width: 100%; height: 22rem;">
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
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row kedua untuk 2 card -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card" style="width: 100%; height: 22rem;">
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
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 100%; height: 22rem;">
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
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Setting Tab -->
<div class="tab-pane" id="setting">
    <div class="row"> 
        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                        <input type="text" class="form-control" placeholder="Masukkan Desription" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                        <input type="text" class="form-control" placeholder="Masukkan Desription" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                        <input type="text" class="form-control" placeholder="Masukkan Desription" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-md-6">
            <div class="card"  style="width: 100%; height: 22rem;">
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
                        <input type="text" class="form-control" placeholder="Masukkan Desription" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card"  style="width: 100%; height: 22rem;">
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
                        <input type="text" class="form-control" placeholder="Masukkan Desription" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Service Tab -->
<div class="tab-pane" id="service">
    <div class="row "> 
    <div class="col-md-4">
            <div class="card mt-3" style="width: 100%; height: 28rem;" >
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
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 28rem;">
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
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 28rem;">
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
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 100%; height: 28rem;">
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
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-6" >
            <div class="card"  style="width: 100%; height: 28rem;">
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
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card"  style="width: 100%; height: 22rem;">
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
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script untuk fungsi tab -->
    <script>
        function openTab(tabId) {
            // Hide all tab content
            document.querySelectorAll('.tab-pane').forEach(function(tabContent) {
                tabContent.classList.remove('active');
            });

            // Remove active class from all buttons
            document.querySelectorAll('.nav-link').forEach(function(tab) {
                tab.classList.remove('active');
            });

            // Show selected tab content and set active class on clicked button
            document.getElementById(tabId).classList.add('active');
            document.querySelector('.nav-link[onclick*="' + tabId + '"]').classList.add('active');
        }

        function updateRating(value, outputId) {
            document.getElementById(outputId).textContent = value;
        }
    </script>
</body>
</html>
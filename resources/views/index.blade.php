<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OkeGarden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>    
    <link href="{{ asset('css/calendar.css')}}" rel="stylesheet" />

    <script src="{{ asset('js/calendar.js')}}"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="Logo OkeGarden" width="140px" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pesan Taman</a></li>
                            <li><a class="dropdown-item" href="#">Pesan Desain</a></li>
                            <li><a class="dropdown-item" href="#">Konsultasi Online</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mitra
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img width="40" height="40" class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="User Photo">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <h2>Konsultasi Taman</h2>
                <p>klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultasi kami</p>
            </div>
            <div class="col-md-6">
                <div class="card py-2">
                    <div class="card-body">
                        <div id="my-calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card py-2">
                    <div class="card-body">
                        <h4 class="mb-4 text-center">Thursday</h4>
                        <p class="text-center">October 8, 2022</p>
                        <div>
                            <h5>Pilih Waktu</h5>
                            <p>Durasi Konsultasi 30 Menit</p>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <button class="btn w-100 btn-outline-primary rounded border-dark">09.00</button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn w-100 btn-outline-primary rounded border-dark">09.00</button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn w-100 btn-outline-primary rounded border-dark">09.00</button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn w-100 btn-outline-primary rounded border-dark">09.00</button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn w-100 btn-outline-primary rounded border-dark">09.00</button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn w-100 btn-outline-primary rounded border-dark">09.00</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="card rounded-0 px-4 py-5 shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4">Informasi Data Diri</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                                    <input type="text" required class="form-control" id="nama" name="nama">
                                </div>
                                <div class="col-md-5">
                                    <label for="nohp" class="form-label fw-bold">No HP</label>
                                    <input type="tel" required class="form-control" id="nohp" name="nohp">
                                </div>
                            </div>
                            <div class="d-flex my-4">
                                <div>
                                    <label for="nama" class="form-label fw-bold">Alamat</label>
                                </div>
                                <div class="col-7 ms-4">
                                    <div class="border-success border p-4 rounded text-end">
                                        <textarea name="alamat" id="alamat" class="form-control text-dark border-0 mb-3 rounded-0" required rows="4">Jalan Raya Undan RT 005/010</textarea>
                                        <a href="#" class="text-success mt-2 me-auto text-decoration-underline">Tambah Alamat Baru</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card rounded-0 p-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4">Informasi Konsultasi Taman</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="fw-bold">Lahan Taman</div>
                                    <span>Pilih jumlah lahan taman yang akan dibuat</span>

                                    <div class="d-flex mt-3">
                                        <button class="me-3 btn btn-outline-success px-3 py-2" type="button">1 Lahan Taman</button>
                                        <button class="me-3 btn btn-outline-success px-3 py-2" type="button">2 Lahan Taman</button>
                                        <button class="me-3 btn btn-outline-success px-3 py-2" type="button">Lebih dari 2 Lahan Taman</button>
                                    </div>
                                </div>
                                <div class="col-8 my-4">
                                    <div class="fw-bold">Tema Taman</div>
                                    <span>Pilih tema taman yang akan dibuat</span>

                                    <div class="alert alert-warning mt-3">
                                        <strong>Catatan :</strong>
                                        Jika Anda belum memiliki inspirasi tema taman maka Anda bisa melewati tahapan ini, konsultan kami akan memberikan rekomendasi terbaik untuk teman Anda.
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1615226871993-119e6b6ae9b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=591&q=80" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Taman Minimalis</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia blanditiis similique numquam incidunt non consequatur esse, doloremque ullam nostrum reprehenderit dolor adipisci ratione. Nostrum voluptate possimus tenetur molestias et modi.</p>
                                            <div class="text-end">
                                                <a href="#" class="btn btn-link text-success text-decoration-underline">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1611044848825-619d77f76fa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Taman Minimalis</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia blanditiis similique numquam incidunt non consequatur esse, doloremque ullam nostrum reprehenderit dolor adipisci ratione. Nostrum voluptate possimus tenetur molestias et modi.</p>
                                            <div class="text-end">
                                                <a href="#" class="btn btn-link text-success text-decoration-underline">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1558872953-9bd42d7ecc01?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Taman Minimalis</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia blanditiis similique numquam incidunt non consequatur esse, doloremque ullam nostrum reprehenderit dolor adipisci ratione. Nostrum voluptate possimus tenetur molestias et modi.</p>
                                            <div class="text-end">
                                                <a href="#" class="btn btn-link text-success text-decoration-underline">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 my-4">
                                <div class="fw-bold">Estimasi Ukuran Taman</div>
                                
                                <div class="d-flex mt-3">
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">< 10m2</button>
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">11-20m2</button>
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">21-30m2</button>
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">31-40m2</button>
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">41-50m2</button>
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">51-60m2</button>
                                    <button class="me-3 btn btn-outline-success px-3 py-2" type="button">> 100m2</button>
                                </div>
                            </div>

                            <div class="float-end">
                                <button type="button" class="btn btn-light text-success me-2">Batal</button>
                                <button type="submit" class="btn btn-success">OKE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
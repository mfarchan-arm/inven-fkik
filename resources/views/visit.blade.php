<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kunjungan &mdash; Laboratorium FKIK UNIB</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-timepicker.min.css') }}">


    <link rel="shortcut icon" href="../assets/img/logounib.png" type="image/x-icon">
    <style>
        body {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <!-- Section: Design Block -->
        <section class="text-center text-lg-start">


            <!-- Jumbotron -->
            <div class="container py-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        {{-- <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div> --}}
                        <div class="card cascading-right bg-glass">
                            <div class="card-body p-5 shadow-5 text-center">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session()->has('failed'))
                                    <div class="alert alert-danger alert-dismissible fade show text-white text-center"
                                        role="alert">
                                        {{ session('failed') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <h2 class="fw-bold">Absensi Kunjungan</h2>
                                <h2 class="fw mb-5">Laboratorium FKIK UNIB</h2>
                                <form action="{{ route('pengunjung.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Nama Lengkap" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="tetx" id="npm" name="npm" class="form-control"
                                            placeholder="Nomer Pokok Mahasiswa (NPM)" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="description" name="description" class="form-control"
                                            placeholder="Keterangan..." required />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="datetime-local" id="time_in" name="time_in" class="form-control"
                                            required />
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Kirim
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                            class="w-100 rounded-4 shadow-4" alt="" />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->
    </div>

    <!-- General JS Scripts -->
    <script src="{{ url('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('assets/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/js/fkik.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-timepicker.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ url('assets/js/scripts.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('healthcare.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Klinik-Ku</title>
</head>

<body>
    @include('navbar')
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Sistem Infromasi Pendaftaran Vaksin Klinik-Ku</h1>
        </div>
    </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include('masyarakatslist')
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4 " id="create-form">
            <div class="row">
                <section class="col-md-7">
                    @include('masyarakatslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Masukkan Data Masyarakat</h5>
                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nomor Daftar</label>
                                    <input name="noDaftar" type="text" class="form-control"
                                        placeholder="Masukkan Nomor Daftar">
                                </div>
                                <div class="form-group">
                                    <label>Nama Depan</label>
                                    <input name="namaDepan" type="text" class="form-control"
                                        placeholder="Masukkan Nama Depan">
                                </div>


                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input name="namaBelakang" type="text" class="form-control"
                                        placeholder="Masukkan Nama Belakang">
                                </div>

                                <div class="form-group">
                                    <label>Nomor KK</label>
                                    <input name="noKK" type="text" class="form-control"
                                        placeholder="Masukkan Nomor Kartu Keluarga">
                                </div>
                                <div class="form-group">
                                    <label>Nomor NIK</label>
                                    <input name="noNIK" type="text" class="form-control"
                                        placeholder="Masukkan Nomor NIK">
                                </div>
                                <div class="form-group">
                                    <label>Umur</label>
                                    <input name="umur" type="text" class="form-control"
                                        placeholder="Masukkan Umur">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" type="text" class="form-control"
                                        placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input name="noTelp" type="text" class="form-control"
                                        placeholder="Masukkan Nomor Telepon">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">

                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('detail')
                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('masyarakatslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Update Informasi Data Masyarakat</h5>
                            <form action="{{ url('/update/' . $masyarakat->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nomor Daftar</label>
                                    <input value="{{ $masyarakat->noDaftar }}" name="noDaftar" type="text"
                                        class="form-control" placeholder="Masukkan Nomor Daftar">
                                </div>
                                <div class="form-group">
                                    <label>Nama Depan</label>
                                    <input value="{{ $masyarakat->namaDepan }}" name="namaDepan" type="text"
                                        class="form-control" placeholder="Masukkan Nama Depan">
                                </div>


                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input value="{{ $masyarakat->namaBelakang }}" name="namaBelakang"
                                        type="text" class="form-control" placeholder="Masukkan Nama Belakang">
                                </div>

                                <div class="form-group">
                                    <label>Nomor KK</label>
                                    <input value="{{ $masyarakat->noKK }}" name="noKK" type="text"
                                        class="form-control" placeholder="Masukkan Nomor Kartu Keluarga">
                                </div>
                                <div class="form-group">
                                    <label>Nomor NIK</label>
                                    <input value="{{ $masyarakat->noNIK }}" name="noNIK" type="text"
                                        class="form-control" placeholder="Masukkan Nomor NIK">
                                </div>
                                <div class="form-group">
                                    <label>Umur</label>
                                    <input value="{{ $masyarakat->umur }}" name="umur" type="text"
                                        class="form-control" placeholder="Masukkan Umur">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input value="{{ $masyarakat->alamat }}" name="alamat" type="text"
                                        class="form-control" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input value="{{ $masyarakat->noTelp }}" name="noTelp" type="text"
                                        class="form-control" placeholder="Masukkan Nomor Telepon">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">

                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @endif

    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');

    .header {
        border-bottom: 2px solid #000000;
        margin-top: 20px !important;
        margin-bottom: 20px !important;
        font-family: 'open sans', cursive;
        font-size: 20px !important;
    }

    .header-container {
        margin-right: 0px !important;
        margin-left: 0px !important;
    }

    .header-container>h2 {}

    .bg-light {

        background: #000000 !important;
        -webkit-box-shadow: 5px 9px 43px 1px rgba(0, 0, 0, 0.18);
        box-shadow: 5px 9px 43px 1px rgba(0, 0, 0, 0.18);
        position: sticky;
        top: 0px;
        z-index: 10;

    }

    .bg-light>a {
        color: #fff !important;
    }

    .navbar-nav>a {
        color: #fff !important;
    }

    .navbar-nav>a:hover {
        text-decoration: underline;
    }

    body {
        background: #eee;
        width: 100%;
    }

    .card {
        border: none !important;
        border-bottom: 3px solid #000000 !important;
        width: auto;
        margin-left: 10px;
    }

    input[type=text] {

        background: #eee;
        border: none !important;
        box-shadow: 0px 1px 1px #ddd !important;
        autocomplete: off;
    }

    input[type=text]:focus {
        background: #eee;
        border: none !important;
        box-shadow: 0px 4px 5px #ccc !important;
    }

    .thead-light {}

    .table .thead-light th {
        color: #fff !important;
        background: #000000 !important;
        border: none !important;
    }

    footer {
        height: 1px;
        width: 100%;
        margin-top: 60px;
        background: #070707;
    }
    .detail{
        width: fit-content;
        margin-left: 250px;
    }
</style>

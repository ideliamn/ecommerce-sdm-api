<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>POST Presensi | SDM E-Commerce API</title>
</head>

<body>
    <a class="h4 mb-4" href="../"><u>Kembali ke Beranda</u></a>
    <!-- Default form register -->
    <form class="text-center border border-light p-5 small-3" action="api/pegawai/tambah_pegawai" method="GET">
        <p class="h4 mb-4">POST Presensi</p>
        <input type="text" name="id_pegawai" class="form-control mb-4" placeholder="ID Pegawai">
        <input type="text" name="tanggal" class="form-control" placeholder="Tanggal">
        <small id="tanggal_detail" class="form-text text-muted mb-4">
            Format: YYYY-MM-DD (contoh: 2020-01-01)
        </small>
        <input type="text" name="waktu_masuk" class="form-control" placeholder="Waktu masuk">
        <small name="waktu_masuk" class="form-text text-muted mb-4">
            Format: HH:MM (contoh: 07:30)
        </small>
        <input type="text" name="waktu_keluar" class="form-control" placeholder="Waktu keluar">
        <small name="waktu_keluar" class="form-text text-muted mb-4">
            Format: HH:MM (contoh: 16:30)
        </small>
        <button class="btn btn-info my-4 btn-block" type="submit">POST</button>
    </form>
    <div class="container">
        <h4>POST Presensi via Postman:</h4>
        <ol>
            <li>Masukkan link http://ecommerce-sdm-api.herokuapp.com/api/presensi/tambah_presensi di request URL dengan method POST</li>
            <li>Pada bagian Query Params, masukkan key sebagai berikut:
                <ul>
                    <li>id_pegawai</li>
                    <li>tanggal</li>
                    <li>waktu_masuk</li>
                    <li>waktu_keluar</li>
                </ul>
            </li>
            <li>Pada bagian Query Params, masukkan value sesuai key-nya sebagai berikut:
                <ul>
                    <li>Key id_pegawai: contoh value: 1</li>
                    <li>Key tanggal: contoh value: 2020-01-01</li>
                    <li>Key waktu_masuk: contoh value: 07:00</li>
                    <li>Key waktu_keluar: contoh value: 14:00</li>
                </ul>
            </li>
        </ol>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include('layout/navbar.php')
        ?>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Perawatan Homecare</div>
                    <div class="card-body">
                        <img class="w-100" src="https://img.freepik.com/free-vector/electronic-accessibility-abstract-concept-vector-illustration-accessibility-websites-electronic-device-disabled-people-communication-technology-adjustable-web-pages-abstract-metaphor_335657-1917.jpg?w=826&t=st=1671196838~exp=1671197438~hmac=3aa7d137d09966ce51a020740d8abf2dc53c0f39fbc699b8475786089a8b9998">
                    </div>
                    <div class="card-footer">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Buat Perjanjian
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="payment-method.php" method="post">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Perjanjian Homecare</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="text" class="form-control" name="nama_depan" required placeholder="nama depan">
                                                </div>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="text" class="form-control" name="nama_belakang" required placeholder="nama belakang">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label">Contact</label>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="email" class="form-control" name="email" required placeholder="email">
                                                </div>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="number" class="form-control" name="phone" required placeholder="phone">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label">Jenis Kontrak</label>
                                                <div class="col-sm-10">
                                                    <select name="jenis" class="form-control" required>
                                                        <option value="">---pilih---</option>
                                                        <option value="1">Harian</option>
                                                        <option value="7">Mingguan</option>
                                                        <option value="30">Bulanan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="text" class="form-control" name="provinsi" required placeholder="provinsi">
                                                </div>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="text" class="form-control" name="kota" required placeholder="kota">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="kecamatan" required placeholder="kecamatan">
                                                </div>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="text" class="form-control" name="kelurahan" required placeholder="kelurahan">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-5">
                                                    <input type="number" class="form-control" name="kode_pos" required placeholder="kode pos">
                                                </div>
                                                <div class="col-sm-5 mt-1">
                                                    <input type="text" class="form-control" name="alamat" required placeholder="nama jalan">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
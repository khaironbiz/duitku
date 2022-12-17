<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Status Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <?php
    include('layout/navbar.php');
    require_once ('auth/koneksi.php');
    $id_invoice = $_GET['merchantOrderId'];//=639d0d37c56e1&resultCode=00&reference=DS1412523V1ME0NQG1R04D
    $query      = mysqli_query($connect,"SELECT * FROM homecare WHERE id_invoice = '$id_invoice'");
    $count      = mysqli_num_rows($query);
    if($count <1){
        header("location: 'https://market.tsi.co.id'");
    }
    $invoice    = mysqli_fetch_array($query);
    ?>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Perawatan Homecare</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nomor Invoice</th>
                            <td>:</td>
                            <td><?= $id_invoice;?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td><?= $invoice['nama_depan']?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td><?= $invoice['email']?></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>:</td>
                            <td><?= $invoice['phone']?></td>
                        </tr>
                        <tr>
                            <th>Tagihan</th>
                            <td>:</td>
                            <td><?= number_format($invoice['sub_total']) ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><?= $invoice['alamat']?> <?= $invoice['kelurahan']?> <?= $invoice['kecamatan']?> <?= $invoice['kota']?> <?= $invoice['provinsi']?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                <?php
                                if($invoice['status'] == 00 ){
                                    echo "<button class='btn btn-sm btn-success'>Lunas</button>";
                                }elseif($invoice['status'] == 01){
                                    echo "<button class='btn btn-sm btn-primary'>Pending</button>";
                                }elseif($invoice['status'] == 02){
                                    echo "<button class='btn btn-sm btn-danger'>Canceled</button>";
                                }else{

                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Reference</th>
                            <td>:</td>
                            <td><?= $invoice['id_duitku']?></td>
                        </tr>
                        <tr>
                            <th>Trx Time</th>
                            <td>:</td>
                            <td><?= date('d-m-Y H:i:s', $invoice['created_at'])?> </td>
                        </tr>
                        <tr>
                            <th>Trx Expired</th>
                            <td>:</td>
                            <td><?= date('d-m-Y H:i:s', $invoice['trx_exp'])?> </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

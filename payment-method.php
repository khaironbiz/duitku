<?php

require_once ('auth/duitku_config.php');
// Set kode merchant anda


$datetime = date('Y-m-d H:i:s');
$paymentAmount = $_POST['jenis']*10000;
$signature = hash('sha256', $merchantCode . $paymentAmount . $datetime . $apiKey);

$params = array(
    'merchantcode' => $merchantCode,
    'amount' => $paymentAmount,
    'datetime' => $datetime,
    'signature' => $signature
);

$params_string = json_encode($params);

$url = 'https://sandbox.duitku.com/webapi/api/merchant/paymentmethod/getpaymentmethod';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($params_string))
);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

//execute post
$request = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode == 200) {
    $results = json_decode($request, true);
//    print_r($results, false);
} else {
    $request = json_decode($request);
    $error_message = "Server Error " . $httpCode . " " . $request->Message;
    echo $error_message;
}


?>
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
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perawatan Homecare</div>
                <form action="payment-request.php" method="post">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nomor Invoice</th>
                                <td>:</td>
                                <td><input type="text" class="form-control-plaintext" value="<?= uniqid()?>" name="id_invoice" readonly></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><input type="text" class="form-control-plaintext" value="<?= $_POST['nama_depan']?> <?= $_POST['nama_belakang']?>" name="name" readonly></td>
                                <input type="hidden" name="nama_depan" value="<?= $_POST['nama_depan']?>">
                                <input type="hidden" name="nama_belakang" value="<?= $_POST['nama_belakang']?>">
                                <input type="hidden" name="tagihan" value="<?= $paymentAmount ?>">
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td><input type="email" class="form-control-plaintext" value="<?= $_POST['email']?>" name="email" readonly></td>

                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>:</td>
                                <td><input type="number" class="form-control-plaintext" value="<?= $_POST['phone']?>" name="phone" readonly></td>

                            </tr>
                            <tr>
                                <th>Tagihan</th>
                                <td>:</td>
                                <td><input type="text" class="form-control-plaintext" value="<?= number_format($paymentAmount)?>" readonly></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control-plaintext" value="<?= $_POST['provinsi']?>" name="provinsi" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control-plaintext" value="<?= $_POST['kota']?>" name="kota" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>:</td>
                                <td class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control-plaintext" value="<?= $_POST['kecamatan']?>" name="kecamatan" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control-plaintext" value="<?= $_POST['kelurahan']?>" name="kelurahan" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>:</td>
                                <td class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control-plaintext" value="<?= $_POST['alamat']?>" name="alamat" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control-plaintext" value="<?= $_POST['kode_pos']?>" name="kode_pos" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Metode Bayar</th>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="payment_method">
                                        <option value="">----pilih----</option>
                                        <?php
                                        foreach ($results['paymentFee'] as $r){

                                            ?>
                                            <option value="<?= $r['paymentMethod']?>"><?= $r['paymentName']?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Payment</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

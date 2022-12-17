<?php
include('auth/koneksi.php');
require_once ('auth/duitku_config.php');
$nama           = $_POST['nama_depan']." ".$_POST['nama_belakang'];
$email          = $_POST['email'];
$phone          = $_POST['phone'];
$id_invoice     = $_POST['id_invoice'];
$payment_method = $_POST['payment_method'];
$tagihan        = $_POST['tagihan'];
$trx_exp        = 10; //menit


$paymentAmount  = $tagihan;
$paymentMethod  = $payment_method; // VC = Credit Card
$merchantOrderId    = $id_invoice; // dari merchant, unik
$productDetails     = 'Pembayaran transaksi '.$id_invoice;
$email              = $email; // email pelanggan anda
$phoneNumber        = $phone; // nomor telepon pelanggan anda (opsional)
$additionalParam    = ''; // opsional
$merchantUserInfo   = ''; // opsional
$customerVaName     = $nama; // tampilan nama pada tampilan konfirmasi bank
$callbackUrl        = 'https://market.tsi.co.id/callback.php'; // url untuk callback
$returnUrl          = 'https://market.tsi.co.id/transaksi.php'; // url untuk redirect
$expiryPeriod       = $trx_exp; // atur waktu kadaluarsa dalam hitungan menit
$signature          = md5($merchantCode . $merchantOrderId . $paymentAmount . $apiKey);

// Customer Detail
$firstName  = $_POST['nama_belakang'];
$lastName   = $_POST['nama_depan'];

// Address
$alamat     = $_POST['alamat']." ".$_POST['kelurahan']." ".$_POST['kecamatan'];
$city       = $_POST['kota'];
$postalCode = $_POST['kode_pos'];
$countryCode = "ID";

$address = array(
    'firstName' => $firstName,
    'lastName' => $lastName,
    'address' => $alamat,
    'city' => $city,
    'postalCode' => $postalCode,
    'phone' => $phoneNumber,
    'countryCode' => $countryCode
);

$customerDetail = array(
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'phoneNumber' => $phoneNumber,
    'billingAddress' => $address,
    'shippingAddress' => $address
);

$item1 = array(
    'name' => 'Home Care',
    'price' => $tagihan,
    'quantity' => 1);


$itemDetails = array($item1);

/*Khusus untuk metode pembayaran OL dan SL
$accountLink = array (
    'credentialCode' => '7cXXXXX-XXXX-XXXX-9XXX-944XXXXXXX8',
    'ovo' => array (
        'paymentDetails' => array (
            0 => array (
                'paymentType' => 'CASH',
                'amount' => 40000,
            ),
        ),
    ),
    'shopee' => array (
        'useCoin' => false,
        'promoId' => '',
    ),
);*/

$params = array(
    'merchantCode' => $merchantCode,
    'paymentAmount' => $paymentAmount,
    'paymentMethod' => $paymentMethod,
    'merchantOrderId' => $merchantOrderId,
    'productDetails' => $productDetails,
    'additionalParam' => $additionalParam,
    'merchantUserInfo' => $merchantUserInfo,
    'customerVaName' => $customerVaName,
    'email' => $email,
    'phoneNumber' => $phoneNumber,
    //'accountLink' => $accountLink,
    'itemDetails' => $itemDetails,
    'customerDetail' => $customerDetail,
    'callbackUrl' => $callbackUrl,
    'returnUrl' => $returnUrl,
    'signature' => $signature,
    'expiryPeriod' => $expiryPeriod
);

$params_string = json_encode($params);
//echo $params_string;
$url = 'https://sandbox.duitku.com/webapi/api/merchant/v2/inquiry'; // Sandbox
// $url = 'https://passport.duitku.com/webapi/api/merchant/v2/inquiry'; // Production
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
    $result     = json_decode($request, true);
    $id         = time().rand(1000,9999);
    $has        = md5($id);
    $time       = time();
    $time_exp   = $time+($trx_exp*60);
    $query      = mysqli_query($connect, "INSERT INTO homecare SET 
                            id      = '$id',
                      nama_depan    = '$_POST[nama_depan]',
                      nama_belakang = '$_POST[nama_belakang]',
                      email         = '$email',
                      phone         = '$phone',
                      provinsi      = '$_POST[provinsi]',
                      kota          = '$_POST[kota]',
                      kecamatan     = '$_POST[kecamatan]',
                      kelurahan     = '$_POST[kelurahan]',
                      kode_pos      = '$_POST[kode_pos]',
                      alamat        = '$_POST[alamat]',
                      va            = '$result[vaNumber]',
                      id_invoice    = '$id_invoice',
                      id_duitku     = '$result[reference]',
                      sub_total     = '$tagihan',
                      status        = '',
                     payment_url    = '$result[paymentUrl]',
                     created_at     = '$time',
                     trx_exp        = '$time_exp',
                     has            = '$has'");

    header("location: $result[paymentUrl]");
} else {
    $request = json_decode($request);
    $error_message = "Server Error " . $httpCode . " " . $request->Message;
    echo $error_message;
}




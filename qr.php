<?php
require_once 'dbconfig.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\Response\QrCodeResponse;

$data = $_GET['data']; // Here you can pass the payment information or URL
$qrCode = new QrCode($data);
$qrCode->setSize(300);

// Set advanced options
$qrCode->setWriterByName('png');
$qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
$qrCode->setLabel('Scan to Pay', 16, null, LabelAlignment::CENTER);
$qrCode->setLogoPath(__DIR__.'/logo.png');
$qrCode->setLogoSize(100, 100);

// Output the QR code
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
?>

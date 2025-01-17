<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'visiocorps@gmail.com';
    $subject = 'Pesanan Baru';
    $message = htmlspecialchars($_POST['message']);
    $headers = 'From: ' . htmlspecialchars($_POST['name']) . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email berhasil dikirim.";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>
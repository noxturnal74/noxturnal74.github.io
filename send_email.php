<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to_email = "albertwilliamsaputra@gmail.com"; // Ganti dengan alamat email penerima.
  $subject = "Contact Form Submission";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Format pesan yang akan dikirimkan ke email penerima.
  $email_body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  
  // Kirim email
  if (mail($to_email, $subject, $email_body)) {
    echo "Email berhasil dikirim!";
  } else {
    echo "Terjadi kesalahan saat mengirim email.";
  }
}
?>

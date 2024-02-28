<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $to = "filip.flis042@gmail.com";  // Zastąp "adres@gmail.com" adresem e-mail, na który chcesz otrzymać wiadomość.
    $headers = "From: $email\r\nReply-To: $email\r\n";

    mail($to, $subject, $content, $headers);

    // Możesz dodać dodatkowe instrukcje po wysłaniu maila, np. przekierowanie na inną stronę.
    header("Location: index.html");
} else {
    // Obsługa sytuacji, gdy formularz nie został przesłany.
    echo "Formularz nie został przesłany.";
}
?>

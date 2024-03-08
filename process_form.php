<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Skicka e-post
    $to = "ermin.husic@live.se";
    $subject = "Meddelande från kontaktformuläret";
    $body = "Namn: $name\nEmail: $email\n\nMeddelande:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Ditt meddelande har skickats!";
    } else {
        echo "Något gick fel vid sändningen av ditt meddelande: " . error_get_last()['message'];
    }
    
}
?>
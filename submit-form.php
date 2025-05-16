
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $referral_code = htmlspecialchars($_POST["referral_code"]);

    // Data Save - File, DB, or Email (here: saving to file)
    $data = "Name: $name | Phone: $phone | Referral Code: $referral_code\n";
    file_put_contents("submissions.txt", $data, FILE_APPEND);

    // Success message
    echo "<h2 style='color:lime; background:#000; padding:20px; text-align:center;'>Thanks for joining BRHELPDESK, $name!<br>We’ll contact you on WhatsApp ($phone) soon.</h2>";
} else {
    echo "<h2 style='color:red; background:#000; padding:20px; text-align:center;'>Invalid Access</h2>";
}
?>


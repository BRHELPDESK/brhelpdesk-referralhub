?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $referral = $_POST["referral"];

    // Save to file (or you can use database later)
    $data = "Name: $name, Mobile: $mobile, Referral: $referral\n";
    file_put_contents("registrations.txt", $data, FILE_APPEND);

    echo "Registration Successful! Thank you for joining BR Helpdesk.";
} else {
    echo "Invalid Request.";
}
?>?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $referral = $_POST["referral"];

    $data = "Name: $name, Mobile: $mobile, Referral: $referral\n";
    file_put_contents("registrations.txt", $data, FILE_APPEND);

    // Redirect after success
    header("Location: thankyou.html");
    exit();
} else {
    echo "Invalid Request.";
}
?>


<?php
if (isset($_POST["submit"])) {
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "First Name: {$firstName} Last Name: {$lastName} Email: {$email} Phone: {$phone} Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: redouanejnah2000@gmail.com';

    if ($email) {
        echo "<script>alert('email send')</script>";
    } else {
        echo "<script>alert('email not send')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1 class="title">contact us</h1>
    <h5 class="subtitle">Any question or remarks? Feel free to write us a message!</h5>

    <div class="container">

        <!-- Contact Information -->
        <section class="contact-information">
            <h2>Contact Information</h2>
            <p>Fill up the form and our team will get back to you within 24 hours.</p>

            <!-- infos -->
            <div class="infos">
                <p><i class="fas fa-phone-alt"></i> +123 4567 8910</p>
                <p><i class="fas fa-envelope"></i> hello@fromphp.com</p>
                <p><i class="fas fa-map-marker"></i> 102 street 2714 Don</p>
            </div>
            <!-- end of infos -->

            <!-- social medial links -->
            <div class="social-media">
                <i class="fa fa-facebook-f"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
            <!-- end social medial links -->
        </section>

        <form action="index.php" method="POST" class="form">

            <div>
                <label for="username">First Name</label>
                <input type="text" class="form-control" name="first-name" id="username">

                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="last-name" id="lastName">
            </div>


            <div>
                <label for="mail">Email</label>
                <input type="email" name="email" class="form-control" id="mail">
            </div>

            <div>
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone" class="form-control">
            </div>

            <div>
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Send">

        </form>
    </div>


    <!-- javascript -->
    <script src="https://kit.fontawesome.com/d72c7f205a.js" crossorigin="anonymous"></script>
</body>

</html>
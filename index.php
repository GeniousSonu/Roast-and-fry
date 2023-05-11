<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="contact-form">
        <h2> Contact Us</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="number" name="phone" placeholder="Your No." required>
            <input type="email" name="email" placeholder="Your Em@il" required>
            <textarea name="message" placeholder=" Your message" required></textarea>


            <input type="submit" name="submit" value="Send Message" class="submit-btn">
        </form>

        <div class="status">
        <?php 
        if(isset($_POST['submit']))
        {
            $User_name = $_POST['name'];
            $phone = $_POST['phone'];
            $user_email = $_POST['email'];
            $user_message = $_POST['email'];

            $email_form = '';
            $email_subject = "New Form Submission";
            $email_body = "Name : $User_name.\n".
                                "Phone No:$phone.\n".
                                "Email Id: $use_enail.\n".
                                "User Message: $user_message.\n";
                       
            $to_email = "" ;
            $headers = "" ;
        }
            
        ?>
        </div>
        </div>   
    
</body>
</html>
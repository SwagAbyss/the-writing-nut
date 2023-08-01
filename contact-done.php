

        <?php
        include_once './config.php';
        if (isset($_POST['submit'])) {
            // var_dump($_POST);
            $date = date("d-m-Y");
            $time = date("h:i");
            $name = $_POST['con_name'];
            $email = $_POST['con_email'];
            $phone = $_POST['con_phone'];
            $subject = $_POST['con_subject'];
            $message = $_POST['con_message'];
            $sql = "INSERT INTO writingnut_contact (date, time, name, email, phone, subject, message) 
        VALUES ('$date','$time','$name','$email','$phone','$subject', '$message')";
            if ($conn->query($sql) === TRUE) {
                // After record is created, redirect to index.html
                header("Location: ./index.html");
                exit();  // Important to prevent further execution of the script
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
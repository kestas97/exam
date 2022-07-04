<?php


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['surname']) ) {
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $surname = validate($_POST['surname']);
    $email = validate($_POST['email']);
    $message = validate($_POST['message']);

    if (empty($message) || empty($name)) {
        header("Location: index.html");
    }else {

        $sql = "INSERT INTO messages(name, surname, email, message ) VALUES('$name', '$surname', '$email', '$message')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "Your message was sent successfully!";
        }else {
            echo "Your message could not be sent!";
        }
    }

}else {
    header("Location: index.html");
}
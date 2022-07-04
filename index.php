
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Request form</title>
</head>
<body>
    <form action="send.php" method="post">

        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </p>


        <p>
            <label for="surname">surname</label>
            <input type="text" name="surname" id="surname">
        </p>

        <p>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </p>


        <p>
            <label for="message">Message</label>
            <textarea name="message"> </textarea>
        </p>

        <input type="submit" value="Submit">
    </form>

</body>
</html>





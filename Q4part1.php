<!DOCTYPE html>
<html>
    <head>
        <title>user feedback form</title>
</head>
<body>
    <h2>user feedback form</h2>
    <form action="submit.php"method="post">

        <label for="name">Name:</lable><br>
        <input type="text"id="name"name="name"required><br><br>

        <lable for="mobile">Mobile Number:</lable><br>
        <input type="tel"id="mobile"name="mobile"required><br><br>

        <lable for="email">Email:</label><br>
        <input type="email"id="email"name="email"required><br><br>

        <lable for="message">Message:</lable><br>
        <textarea id="message"name="message"required></textarea><br><br>

        <input type="submit"value=" Submit ">
</form>
</body>
</html>

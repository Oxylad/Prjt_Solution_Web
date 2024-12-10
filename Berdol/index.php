<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <form action="prog_contact.php" method="post">
        <h1>
            Formulaire de contact
        </h1>
        <label for="name">Prénom :</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="lname">Nom :</label><br>
        <input type="text" id="lname" name="lname"><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="message">Message:</label><br>
        <input type="text" id="message" name="message"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
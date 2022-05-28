<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <main class="container">

        <div class="heading">
            <h1>Enrol For a Free Pizza</h1>
        </div>
        <form action="user_data.php" method="post" >
            <label for="name">Name:  </label><br>
            <input type="text" name="name" placeholder="full name here" required ><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="email address" required><br>

            <label for="date-of-birth">Date of Birth: </label><br>
            <input type="text" name="date-of-birth" placeholder="DD/MM/YYYY" ><br>

            <label for="name">Gender:</label><br>
            <select name="gender" id="gender" required>
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select><br>

            <label for="country">Country: </label><br>
            <input type="text" name="country" placeholder="country" ><br>
            <button class="btn-submit">
                Submit
            </button>
        </form>

        <?php

        ?>
    </main>
</body>
</html>
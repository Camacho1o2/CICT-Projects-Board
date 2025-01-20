<?php require("register.class.php") ?>
<?
    if(issets($_POST['submit'])){
        new RegisterUser($_POST['firstname'], $_POST['middlename'], $_POST['lastname'], $_POST['address'], $_POST['age'],
        $_POST['emailaddress'], $_POST['contactno'], $_POST['username'], $_POST['password'],);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="icon" href="embeds/icon.png" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="author" content="Jerry Angelo T. Camacho" />
    <meta name="keywords" content="CICT, CICT Projects, Student Projects, Projects, IT Projects, Digital Projects" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
</head>
<body>
    <main>
        <header>
            <img src="embeds/banners_without_letters.png"/>
        </header>
        <form>
            <div id="login_name">
                <h1>Account Register</h1>
            </div>
            <br />
            <h3>Personal Info</h3>
            <br />
            <label for="firstname">First name:</label>
            <br />
            <input type="text" id="firstname" />
            <br /><br />
            <label for="middlename">Middle name:</label>
            <br />
            <input type="text" id="firstname" />
            <br /><br />
            <label for="lastname">Last name:</label>
            <br />
            <input type="text" id="firstname" />
            <br /><br />
            <label for="address">Address:</label>
            <br />
            <input type="text" id="address" />
            <br /><br />
            <label for="age">Age:</label>
            <br />
            <input type="number" id="age" />
            <br /><br />
            <h3>Contact Info</h3>
            <br />
            <label for="emailaddress">Email Address(es):</label>
            <br />
            <input type="email" id="emailaddress" placeholder="example123@example.com" />
            <br /><br />
            <label for="contactno">Contact Number(s):</label>
            <br />
            <input type="tel" id="contactno" />
            <br /><br />
            <h3>Account Info</h3>
            <br />
            <label for="username">Username:</label>
            <br />
            <input type="text" id="username" />
            <br /><br />
            <label for="password">Password:</label>
            <br />
            <input type="password" id="password" />
            <br /><br />
            <label for="retrypassword">Retry your Password:</label>
            <br />
            <input type="password" id="retrypassword" />
            <br /><br />
            <label>Account Type:</label>
            <br />
            <input type="radio" name="CICTstudent" id="accounttype"/>
            <label for="CICTstudent">CICT Student</label>
            <input type="radio" name="viewer" id="accounttype"/>
            <label for="viewer">Viewer</label>
            <br /><br />
            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
            <button type="submit" id="submit">SUBMIT</button>
        </form>
    </main>
</body>
</html>
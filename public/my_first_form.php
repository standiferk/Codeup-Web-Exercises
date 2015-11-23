<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My First HTML Form</title>
        <meta charset="utf-8">
</head>
<body>
    <h4>User Login</h4>
        <form method="POST" action="/my_first_form.php">
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="MineMineMine">
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="MineMineMine">
            </p>
        <!-- <input type="hidden" id="account_number" name="account_number" value="123456789"> -->
                <!-- <textarea id="review" name="review" rows="5" cols="40">Text Area</textarea> -->
        <!-- <p>The whole world should be mineminemine!!!!!</p> -->
        <!-- type="password" will mask the password. -->
            <p>
                <input type="submit" name="submit" value="submit">
            </p>
    <h4>Compose an Email</h4>
            <p>
                <label for="to">TO:</label>
                <input id="to" name="to" type="text">
            </p>
            <p>
                <label for="from">FROM:</label>
                <input id="from" name="from" type="text">
            </p>
            <p>
                <label for="subject">SUBJECT:</label>
                <input id="subject" name="subject" type="text">
            </p>
            <p>
                <label for="body">BODY:</label><br>
                <textarea id="email_body" name="email_body" rows="10" cols="50">Type Email Here</textarea>
            </p>
                <label>Save a Copy</label>
                <input checked="checked" type="checkbox" id="Save_a_copy" value="Save_a_copy" name="Save a copy"
            <p><br>
                <input type="submit" name="send" value="send">
            </p>
        </form>
        <h4>Multiple Choice Test</h4>
        <form method="POST" action="/my_first_form.php">
            <p>What is Kevin's favorite vehicle?</p>
                <label><input type="radio" name="vehicle" value="fordf150">Ford F-150</label>
                <label><input type="radio" name="vehicle" value="FLHX">H-D Street Glide</label>
                <label><input type="radio" name="vehicle" value="Can-am">Can-Am</label>
        <h4>Pick a Pizza</h4>
            <p> What kind of pizza would you like?</p>
                <label><input type="checkbox" id="pizza1" name="pizza[]" value="cheese"> Cheese</label>
                <label><input type="checkbox" id="pizza2" name="pizza[]" value="pepperoni"> Pepperoni</label>
                <label><input type="checkbox" id="pizza3" name="pizza[]" value="everything"> Everything</label><br>
                <input type="submit" name="submit">
        </form>
                <label for="transmission">Transmission</label><br>
                <select id="transmission" name="transmission">
                    <option>Automatic</option>
                    <option>4-speed Standard</option>
                    <option>5-speed Standard</option>
                </select>
                <input type="submit" name="submit">
            </form>
            <h4>Select Testing</h4>
            <form method="POST" action="/my_first_form.php">
                <label for="question1">Would you like to take a coding class?</label>
                <select id="question1" name="question1">
                <option selected>Yes</option>
                <option>No</option>
                </select>
                <input type="submit" name="submit">
                <br>
                <h4>Multi-Select List</h4>
                    <label for="multiples">Select your favorite ride</label><br>    
                <select id="multiples" name="rides[]" multiple>
                    <option value="High-powered Sports Car">High-powered Sports Car</option>
                    <option value="Monster Truck">Monster Truck</option>
                    <option value="Drag Bike">Drag Bike</option>
                    <option value="Batman Rollercoaster">Batman Rollercoaster</option>
                </select>
            </form>
</body>
</html>
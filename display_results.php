<?php
    // get the data from the form
    $email = $_POST['email'];

    // get the rest of the data for the form
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];
    // for the heard_from radio buttons,
      
    // display a value of 'Unknown' if the user doesn't select a radio button
        if (isset($_POST['heard_from'])) {

        $heard_from = $_POST['heard_from'];

    } else {

        $heard_from = "Unknown";

    }

    
    // for the wants_updates check box,
    
    // display a value of 'Yes' or 'No'
    if (isset($_POST['wants_updates'])) {

        $wants_updates = "Yes";

    } else {

        $wants_updates = "No";

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>

        <label>Heard From:</label>
        <span><?php echo $heard_from; ?></span><br>

        <label>Send Updates:</label>
        <span><?php echo $wants_updates; ?></span><br>

        <label>Contact Via:</label>
        <span></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo nl2br(htmlspecialchars($comments)); ?></span><br>  
        <p>&nbsp;</p>      
    </main>
</body>
</html>
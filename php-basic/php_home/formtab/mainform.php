<?php
require_once("class.php");

if (isset($_POST["submit"])) {
    $id     = ($_POST["id"]);
    $name   =($_POST["name"]);
    $email  =($_POST["email"]);
    $id_ok    = preg_match('/^[0-9]{3,5}$/', $id);
    $email_ok = preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+[\.][A-Za-z]{2,}$/', $email);

    if (!$id_ok && !$email_ok) {
        echo "Both ID and Email are invalid.";
    } elseif (!$id_ok) {
        echo "Invalid ID";
    } elseif (!$email_ok) {
        echo "Invalid email";
    } else {
        $student = new student($id, $name,  $email);
        $student->store();
        echo "Registration completed successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration & Student Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .main-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            max-width: 1000px;
            margin: 30px auto;
        }

        .form-container {
            background-color:	#A7C7E7;
            width: 40%;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container input[type="text"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container input[type="submit"] {
            padding: 10px 20px;
            background-color:#4ca3afff ;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .button-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button-row form button {
            padding: 8px 20px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn {
            background-color: #581ce6ff;
            color: white;
        }

        .close-btn {
            background-color: #f8300dff;
            color: white;
        }

        .table-container {
            width: 58%;
        }

        table {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4ca3afff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="main-wrapper">

    <!-- Left Side: Registration Form -->
    <div class="form-container">
        <form method="POST" action="#">
            <fieldset>
                <legend style="text-align: center;">Registration Form</legend>

                ID:
                <input type="number" name="id" required>

                Name:
                <input type="text" name="name" required>

                Email:
                <input type="text" name="email" required>

                Batch:
                <input type="text" name="batch" required>

                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>

        <!-- Buttons -->
        <div class="button-row">
            <form action="login.php" method="get">
                <button type="submit" class="logout-btn">Logout</button>
            </form>

            <form action="logout.php" method="post">
                <button type="submit" class="close-btn">Close</button>
            </form>
        </div>
    </div>

    <!-- Right Side: Student Table -->
    <div class="table-container">
        <?php student::display_result(); ?>
    </div>

</div>

</body>
</html>

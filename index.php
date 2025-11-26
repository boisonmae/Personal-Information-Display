<?php
$step = $_POST["step"] ?? "form";

$fullname   = $_POST["fullname"]   ?? "";
$age        = $_POST["age"]        ?? "";
$gender     = $_POST["gender"]     ?? "";
$birthdate  = $_POST["birthdate"]  ?? "";
$birthplace = $_POST["birthplace"] ?? "";
$contact    = $_POST["contact"]    ?? "";
$email      = $_POST["email"]      ?? "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

<?php if ($step == "form"): ?>

    <h2>Fill Out Your Personal Information</h2>

    <form method="POST" id="infoForm">

        <input type="hidden" name="step" value="review">

        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Gender:</label>
        <input type="text" name="gender" required>

        <label>Birthdate:</label>
        <input type="date" name="birthdate" required>

        <label>Birthplace:</label>
        <input type="text" name="birthplace" required>

        <label>Contact Number:</label>
        <input type="text" name="contact" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Next</button>
    </form>

<?php elseif ($step == "review"): ?>

    <h2>Review Your Information</h2>

    <p><b>Name:</b> <?= $fullname ?></p>
    <p><b>Age:</b> <?= $age ?></p>
    <p><b>Gender:</b> <?= $gender ?></p>
    <p><b>Birthdate:</b> <?= $birthdate ?></p>
    <p><b>Birthplace:</b> <?= $birthplace ?></p>
    <p><b>Contact Number:</b> <?= $contact ?></p>
    <p><b>Email:</b> <?= $email ?></p>

    <form method="POST">
        <input type="hidden" name="step" value="form">
        <button class="edit-btn">Edit Info</button>
    </form>

    <br>

    <form method="POST">
        <input type="hidden" name="step" value="submitted">

        <input type="hidden" name="fullname"   value="<?= $fullname ?>">
        <input type="hidden" name="age"        value="<?= $age ?>">
        <input type="hidden" name="gender"     value="<?= $gender ?>">
        <input type="hidden" name="birthdate"  value="<?= $birthdate ?>">
        <input type="hidden" name="birthplace" value="<?= $birthplace ?>">
        <input type="hidden" name="contact"    value="<?= $contact ?>">
        <input type="hidden" name="email"      value="<?= $email ?>">

        <button class="submit-btn">Submit</button>
    </form>

<?php elseif ($step == "submitted"): ?>

    <h2>Information Submitted Successfully!</h2>
    <p>Your information has been recorded.</p>

    <form method="POST">
        <input type="hidden" name="step" value="form">
        <button>Submit Again</button>
    </form>

<?php endif; ?>

</div>

<script src="script.js"></script>
</body>
</html>

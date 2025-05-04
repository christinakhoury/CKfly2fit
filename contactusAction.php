<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$name        = $_POST['name'] ?? '';
$email       = $_POST['email'] ?? '';
$phone       = $_POST['phone'] ?? '';
$interests   = $_POST['interests'] ?? [];
$gender      = $_POST['gender'] ?? '';
$age         = $_POST['age'] ?? '';
$how_find_us = $_POST['how_find_us'] ?? '';
$questions   = $_POST['questions'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
	<link rel="stylesheet" href="style.css">
    <title>Thank You | Fly2Fit</title>
    <style>
     

        .thank-you-container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank you, <?= h($name) ?>! 🎉</h1>
        <p><i><SMALL>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; We appreciate you reaching out. Here's the info you shared with us:</SMALL></i></p>

           <u> Name:</u>  <?= h($name) ?> <br><br>
           <u> Email:</u> <?= h($email) ?> <br><br>
          <u>Phone Number:</u> <?= h($phone) ?> <br><br>
          <u>Interests:</u>
                <?php if (!empty($interests)): ?>
                    <ul>
                        <?php foreach ($interests as $interest): ?>
                            <li><?= h($interest) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <em>None selected</em>
                <?php endif; ?>
           

            <u>Gender:</u> <?= h(ucfirst($gender)) ?><br><br>
			<u>Age:</u> <?= h($age) ?> <br><br>

            <u>How did you find us?</u> <?= h(ucwords(str_replace('_', ' ', $how_find_us))) ?>
			<br><br>
            <u>Questions / Recommendations:</u>
            <?= $questions ? h($questions) : '<em>None</em>' ?> <br><br>
      

        <p><b>We'll be in touch soon with updates about Fly2Fit classes! 💪</b></p>
		<br>
      <div style="text-align: center;">
  <a href="index.html" class="back-home">Take care</a>
</div>

    </div>
</body>
</html>
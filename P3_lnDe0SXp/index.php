<?php
if(!empty($_SESSION['Code'])){
    session_unset();
}
session_start();
//wachtwoorden hier
$_SESSION['wachtwoordPuzzel1'] = "33345";             // Hidden Password text
$_SESSION['wachtwoordPuzzel2'] = "K6B";               // Morse code
$_SESSION['wachtwoordPuzzel3'] = "33345K6B";          // Both => Sprint 2

if (!empty($_POST['Tekst'])) {
    $_SESSION['Code'] = $_POST['Tekst'];
    if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzel1']) {
        header("Location: ../P_123SDD/index.php");
    } else if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzel2']) {
        header("Location: ../P2_RZWE@/index.php");
    } else if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzel3']) {
        header("Location: ../P2_99dK/index.php");
    }
}

?>
<html lang="en">

<head>
    <title>Insert Password</title>
    <meta charset="utf-8" />
    <meta name="description" content="Hidden password here? ***" />
    <meta name="keywords" content="I am not th3 password!" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="link">
    <a class="PuzzelHref" href="../P_123SDD/index.php">Puzzel 2</a>
    <a>+</a>
    <a class="PuzzelHref" href="../P_003Dir/s33sd.php">Puzzel 3</a>
</div>

<form action="" method="post">
    <input type="text" title="Tekst" name="Tekst" id="Tekst" maxlength="16">
    <input type="submit" id="Verstuur" value="Probeer">
</form>

</body>

</html>
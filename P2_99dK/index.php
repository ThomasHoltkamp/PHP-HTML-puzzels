<?php
if(!empty($_SESSION['Code'])){
    session_unset();
}
session_start();
//wachtwoorden hier
$_SESSION['wachtwoordPuzzelHint'] = "STEGANOGRAPHY";  // Cult text
$_SESSION['wachtwoordPuzzel4'] = "QKS3qhLMtG";        // Foto's on follow
$_SESSION['wachtwoordPuzzel5'] = "5hK";               // QR-Code
$_SESSION['wachtwoordPuzzel6'] = "QKS3qhLMtG5hK";     // Both => Sprint 3

    if (!empty($_POST['Tekst'])) {
        $_SESSION['Code'] = $_POST['Tekst'];
        if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzelHint']) {
            header("Location: ../Steganography/index.php");
        } else if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzel4']) {
            header("Location: iafu7&AYs.php");
        } else if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzel5']) {
            header("Location: iafu7&AYs.php");
        } else if ($_SESSION['Code'] == $_SESSION['wachtwoordPuzzel6']) {
          header("Location: ../P3_lnDe0SXp/index.php");
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

<div id="link2">
    <a class="PuzzelHref" href="../Cult_Text/index.php">Puzzel 4</a>
    <a> / </a>
    <a class="PuzzelHref" href="../P2_RZWE@/index.php">Puzzel 5</a>
    <a>+</a>
    <a class="PuzzelHref" href="../P2_RZWE@/index.php">6</a>

    <form action="" method="post">
        <input type="text" title="Tekst" name="Tekst" id="Tekst" maxlength="16">
        <input type="submit" id="Verstuur" value="Probeer">
    </form>
</div>

</body>
</html>

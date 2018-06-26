<html lang="en">

<head>
    <title>Insert Password</title>
    <meta charset="utf-8" />
    <meta name="description" content="Hidden password here? ***" />
    <meta name="keywords" content="I am not th3 password!" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="link3">
    <?php
    if(!empty($_SESSION['Code'])){
        session_unset();
    }
    session_start();
    //wachtwoorden hier

            if ($_SESSION['wachtwoordPuzzel4'] == $_SESSION['Code'])
            {
                echo "<br><a class='PuzzelHref' href='index.php'>Puzzel 5: QKS3qhLMtG</a>";
            } else if ($_SESSION['wachtwoordPuzzel5'] == $_SESSION['Code'])
            {
                echo  "<br><a class='PuzzelHref' href='index.php'>Puzzel 6: 5hK</a>";
            } else {
                header("Location: index.php");
            }


    ?>
</div>
</body>
</html>

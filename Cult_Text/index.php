<?php
error_reporting(0);
ini_set('display_errors', 0);
if ($_SESSION['Code'] != $_SESSION['wachtwoordPuzzelHint']){
    header("Location: ../P2_99dK/index.php");
    session_unset();
} else {
    //actions to perform when you get logged in
    session_unset();
}

?>

<?php
error_reporting(0);
ini_set('display_errors', 0);
if ($_SESSION['Code'] != $_SESSION['wachtwoordPuzzel3']){
    header("Location: ../P2_99dK/index.php");
    session_unset();
} else {
    session_unset();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cultism</title>
    	<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Cult</h1>
    <p>
      Social groups defined by its religious, spiritual, or philosophical beliefs is what defines a cult. <br>
      The English term originated in the early 17th century, borrowed via the French and from the Latin. <br>
      English-speaking world began introducing members of cults as antagonists. <br>
      Groups said to be cults range in size from local groups with a few members to millions internationally. <br>
      A few psychologists and sociologists suggested that brainwashing techniques were used to maintain the		 loyalty of cult members. <br>
      Not suggesting that “cults” never do “bad things”. <br>
      Other manifestations of the cult are the preservation of relics or the creation of images, such as icons. <br>
      Governments have reacted to cult-related issues in different ways, and this has led to controversy. <br>
      Religions which have appeared since the mid-1800s. Many have been considered to be cults. <br>
      According to Kranenborg, some groups advise their members not to use regular medical care. <br>
      Professor of Psychiatry at NYU, typical reasons why people join cults include a search for community and 	a spiritual quest.<br>
      History professor Peter Staudenmeier analyses in detail the racist foundation in this movement.<br>
      Your opinion on cults may differ from ours.
    </p>
    <a href="../P2_99dK/index.php"> << Back </a>
  </body>
</html>

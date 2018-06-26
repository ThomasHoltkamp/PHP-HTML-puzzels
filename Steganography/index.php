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
    <title>Steginoragpizcka</title>
    	<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Steganography</h1>
    <p>

The same image viewed by white, blue, green and red lights reveals different hidden numbers.
Steganography (/ˌstɛɡəˈnɒɡrəfi/ (About this sound listen) STEG-ə-NOG-rə-fee) is the practice of concealing a file, message, image, or video within another file, message, image, or video. The word steganography combines the Greek words steganos (στεγανός), meaning "covered, concealed, or protected", and graphein (γράφειν) meaning "writing".

The first recorded use of the term was in 1499 by Johannes Trithemius in his Steganographia, a treatise on cryptography and steganography, disguised as a book on magic. Generally, the hidden messages appear to be (or to be part of) something else: images, articles, shopping lists, or some other cover text. For example, the hidden message may be in invisible ink between the visible lines of a private letter. Some implementations of steganography that lack a shared secret are forms of security through obscurity, and key-dependent steganographic schemes adhere to Kerckhoffs's principle.[1]

The advantage of steganography over cryptography alone is that the intended secret message does not attract attention to itself as an object of scrutiny. Plainly visible encrypted messages, no matter how unbreakable they are, arouse interest and may in themselves be incriminating in countries in which encryption is illegal.[2]

Whereas cryptography is the practice of protecting the contents of a message alone, steganography is concerned with concealing the fact that a secret message is being sent as well as concealing the contents of the message.

Steganography includes the concealment of information within computer files. In digital steganography, electronic communications may include steganographic coding inside of a transport layer, such as a document file, image file, program or protocol. Media files are ideal for steganographic transmission because of their large size. For example, a sender might start with an innocuous image file and adjust the color of every hundredth pixel to correspond to a letter in the alphabet. The change is so subtle that someone who is not specifically looking for it is unlikely to notice the change.
    </p>
    <a href="../P2_99dK/index.php"> << Back </a>
    <a href="../unhide/index.php#unhide"> Forward >> </a>
  </body>
</html>

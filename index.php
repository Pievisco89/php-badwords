<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Badwords</title>
</head>
<body>
  
  <?php

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus alias dolore sapiente ratione magni obcaecati quos sequi debitis quo. Corrupti atque dicta laudantium dolorum. Saepe illo debitis sed exercitationem ullam.
    Cupiditate natus quae excepturi neque optio? Sequi numquam eius tenetur mollitia placeat veritatis natus quae hic facilis provident, consequatur eum architecto cumque est! Error veniam repudiandae temporibus debitis laboriosam placeat.
    Voluptate iste quisquam soluta! Corporis commodi saepe molestias veniam numquam earum officia enim perspiciatis aliquid? Nam incidunt nostrum, quis dolorum impedit architecto possimus sunt corrupti recusandae id a. Quod, consequatur.
    Veritatis, aliquid odio quasi minima id accusantium? Vero, quod repellat deserunt exercitationem quisquam fugit sit, sint placeat sed corporis voluptatum aspernatur temporibus corrupti quasi commodi amet iste culpa laboriosam est.
    Molestias placeat similique modi odit impedit accusamus architecto recusandae culpa ipsum atque temporibus natus saepe, eveniet eum soluta. Voluptas nihil maiores itaque in. Nam similique veritatis quis doloremque consectetur numquam?";

    /* parola da censurare passata dall'utente tramite Get */
    $badWord = $_GET['badword'];

    //controllo per il caso in cui la prima parola del paragrafo sia uguale alla badword
    if(strpos($text, $badWord) !== false){
      //sostituisco la parola da censurare con ***
      $censoredText = str_replace($badWord, '***', $text);  
    }

  ?>
  
  <h1>TESTO</h1>
  <p> <?php echo $text; ?> </p>
  <span>Lunghezza testo: <?php echo strlen($text); ?>. </span>

  <hr>
  <hr>

  <h1>TESTO CENSURATO</h1>
  <p> <?php echo $censoredText; ?> </p>
  <span>Lunghezza testo: <?php echo strlen($censoredText); ?>.</span>


</body>
</html>
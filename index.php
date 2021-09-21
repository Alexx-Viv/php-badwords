  <?php 
  
  $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis, dui facilisis consectetur finibus, eros metus aliquam neque, ac efficitur augue risus eu ligula. Praesent ac facilisis libero. Donec dictum faucibus massa a bibendum. Curabitur luctus viverra diam, vel malesuada ante pulvinar et. Donec rutrum metus at ante blandit consectetur. Ut imperdiet eros in faucibus convallis. Curabitur pellentesque laoreet augue, gravida eleifend eros semper nec. Donec accumsan tristique velit, vitae laoreet velit posuere vel. Donec condimentum vulputate ultrices. Mauris quam felis, fermentum vel elit fringilla, viverra aliquam nulla. Morbi commodo pretium velit sed ullamcorper. Donec leo urna, rutrum iaculis interdum nec, hendrerit nec purus. Vivamus luctus lacus est, id ullamcorper augue convallis in. Integer commodo tristique sollicitudin.';
if (isset($_GET["bad_word"])){
    $word = $_GET["bad_word"];
    $paragraph = str_replace($word, "***", $paragraph);
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Word</title>
</head>
<body>
  <form action="index.php" method="GET">
    <label for="bad_word">Insert the word you'd like to hide</label> <br>
    <input id="bad_word" name="bad_word" type="text">
    <button type="submit">Hide Word</button>
  </form>
  <p><?php echo $paragraph;?></p>
</body>
</html>
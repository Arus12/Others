<!DOCTYPE html>
<html>
 <head>
  <title>Submit Form Using AJAX, PHP and javascript</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="style.css" rel="stylesheet"> 
  <script type="text/javascript" src="main.js"></script>
 </head>
 <body>
  <form onsubmit="myFunction">
  <input id="submit" class="submit" onclick="myFunction(1)" type="button">
  </form>
  <form onsubmit="myFunction">
  <input id="submit" class="submit" onclick="myFunction(2)" type="button">
  </form>
</body>
</html>
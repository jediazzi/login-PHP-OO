<?php

  session_start();

?>
 <!DOCTYPE html>
 <html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login PHP OO</title>

 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <!--[if lt IE 9]>
        <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
</head>
<body>
  <div class="container jumbotron">

    <h2>Olá <?php echo $_SESSION['login']; ?>!</h2>

    <a href="logout.php">Sair</a>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>

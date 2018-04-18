<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mahirap!!!</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
  	<h1 id="title">Ginagawa ng Tamad</h1>
  	<?php echo $comments; ?>
  	<form class="comment_form">
      <div>
        <label for="name">Time:</label>
      	<input type="text" name="name" id="name">
      </div>
      <div>
      	<label for="comment">Task:</label>
      	<input name="comment" id="comment" cols="30" rows="5"/>
      </div>
      <button type="button" id="submit_btn">Add Task</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
  	</form>
  </div>
</body>
</html>
<!-- Add JQuery -->
<script src="jquery-3.3.1.min.js"></script>
<script src="script.js"></script>
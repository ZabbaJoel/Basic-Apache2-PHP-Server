<?php
  $messagelog = "";
?>
<html>
<head>
  <title>Ziv's Server</title>
</head>
<body>
  <h1>Welcome to Ziv's Local Server</h1>
  <h3>Many thanks to the family members that cooperate with me and agree to check out what I'm working on!</h3>
  <?= "<p>enjoy this line added with php</p>"?>
  <form method="post" action="messageecho.php">
    Write a message for the log: <input name="message">
    <br>
    <button type="submit">Submit Message</button>
  </form>
  
</body>
</html>
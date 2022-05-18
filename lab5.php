<?php
     session_start();  #start a session

    if ( !isset( $_SESSION['count'] ) ) 
     $_SESSION['count'] = 1; else $_SESSION['count']++;
?>


<html>
<head>
</head>

<body>
<h2>You visited this page <?php echo( $_SESSION['count'] ); ?> times</h2>

</body>
</html>
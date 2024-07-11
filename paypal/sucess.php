<body>
    hhhhh

<?php
	$db = mysqli_connect("localhost", "root", "", "redmoon");

    session_start();
    echo $_SESSION['test'];
?>

</body>
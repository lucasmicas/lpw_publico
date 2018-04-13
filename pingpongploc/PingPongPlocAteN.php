<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Aulas</title>
</head>
<body>
<form method="GET">
</form>
<?php

function pingPongPloc($num){
    for($i = 1; $i <= $num; $i++){	
    	if($i % 3 == 0 && $i % 5 == 0){
    		echo $i . "." . "<span class='sublinhado'>ploc</span></br>";
    	}else{
    		if($i % 3 == 0){
    			echo $i . "." . "<span class='negrito'>ping</span></br>";
    		}else{
    			if($i % 5 == 0){
    				echo $i . "." . "<span class='italico'>pong</span></br>";
    			}else{
    				echo $i . "." . "<span>ok</span></br>";
    			}
    		}
    	}	
    }
}
$n = $_GET["n"];
pingPongPloc($n);
?>
</body>
</html>
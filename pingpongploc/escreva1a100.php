<html>
<head>
<link rel="stylesheet" href="/css/style.css">
<title>Aulas</title>
</head>
<body>
<?php

function pingPongPloc(){
    for($i = 1; $i <= 100; $i++){	
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

pingPongPloc();

?>
</body>
</html>
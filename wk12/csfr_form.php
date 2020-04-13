<?php
    session_start();

    function random($num) { 
        $data = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $ans = ''; 
    
        for ($i = 0; $i < $num; $i++) { 
            $index = rand(0, strlen($data) - 1); 
            $ans .= $data[$index]; 
        } 
    
        return $ans; 
    }

    $_SESSION["confirmation"] = random(8);
?>

<body onload = "document.getElementById('submit').submit();">

<form method = "POST" action = "csfr.php" id = "sunsbmit">
    <input type = "hidden" name = "username" value = "host" />
    <input type = "hidden" name = "password" value = "pass" />
    <input type = "hidden name = "confirmation" value = "<?php $_SESSION["confirmation"]?>" />
</form>

</body>
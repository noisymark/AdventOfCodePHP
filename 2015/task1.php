<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
  
    if($upute=$_POST['upute']){
        $array=str_split($upute);
        foreach($array as $v){
           if($v=='('){
            $rezultat+=1;
           } else if($v==')'){
            $rezultat-=1;
           } else{
            continue;
           }
        }
    } else{
        $upute='';
    }

    
  
  }else{
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <p style="text-align:center;">Please write instrucions for Santa. Use "(" to go floor up and ")" to go floor down.</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" style="text-align:center;">
        <label for="upute">Enter values: </label>
        <input type="text" name="upute" id="upute">
        <br><br>
        <input type="submit" value="SET">
    </form>
    <h1 style="text-align:center;color:red;">FLOOR: <?=$rezultat?></h1>
</body>
</html>
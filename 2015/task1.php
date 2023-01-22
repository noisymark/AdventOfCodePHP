<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
  $rezultat=0;
    if($upute=$_POST['upute']){
        $array=str_split($upute);
        foreach($array as $v){
           if($v=='('){
            $rezultat+=1;
            $text1='<h1 style="text-align:center;color:red;">FLOOR: ';
            $text2=' </h1>';
           } else if($v==')'){
            $rezultat-=1;
            $text1='<h1 style="text-align:center;color:red;">FLOOR: ';
            $text2=' </h1>';
           } else{
            $text1 = '<h1 style="text-align:center;color:red;"> PLEASE ENTER IN CORRECT FORMAT "(" OR ")"';
            $text2 = '</h1>';
            continue;
           }
        }
    } else{
        $upute='';
    }

    
  
  }else{
    $text1='';
    $rezultat='';
    $text2='';
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
    <?php echo $text1 . $rezultat . $text2; ?>
</body>
</html>
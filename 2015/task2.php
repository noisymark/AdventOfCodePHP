<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    if((int)($_POST['h'])===0){
        $h='';
        $warning='PLEASE ENTER A VALID VALUE (NUMBER MUST BE HIGHER THAN 0)<br>';
        echo $warning;
    } else{
        $h=$_POST['h'];
    }
    if((int)($_POST['l'])===0){
        $l='';
        $warning='PLEASE ENTER A VALID VALUE (NUMBER MUST BE HIGHER THAN 0)<br>';
        echo $warning;
    } else{
        $l=$_POST['l'];
    }
    if((int)($_POST['w'])===0){
        $w='';
        $warning='PLEASE ENTER A VALID VALUE (NUMBER MUST BE HIGHER THAN 0)<br>';
        echo $warning;
    } else{
        $w=$_POST['w'];
    }
    $array=[$h*$l, $l*$w, $h*$w];
    $najmanjibroj=min($array);
  $k=2*$h*$l;
  $m=2*$l*$w;
  $r=2*$h*$w;
  $rez=$k+$m+$r+$najmanjibroj;

}
  else{

    $h='';
    $l='';
    $w='';
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <p style="text-align:center;">Enter the gift dimensions.</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" style="text-align:center;">
        <label for="h">Enter height(H): </label>
        <input type="text" name="h" id="h">
        <label for="l">Enter length(L): </label>
        <input type="text" name="l" id="l">
        <label for="w">Enter width(W): </label>
        <input type="text" name="w" id="w">
        <br><br>
        <input type="submit" value="SET">
    </form>
    <h1 style="text-align:center;color:red;">Total: <?=$rez?> square feet of wrapping paper</h1>
</body>
</html>
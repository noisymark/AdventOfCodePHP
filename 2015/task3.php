<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($uputa=$_POST['upute']){
        $vrijednost = 0;
        $vrijednosti=[
            "a" => "1",
            "b" => "2",
            "c" => "3",
            "d" => "4",
            "e" => "5",
            "f" => "6",
            "g" => "7",
            "h" => "8",
            "i" => "9",
            "j" => "10",
            "k" => "11",
            "l" => "12",
            "m" => "13",
            "n" => "14",
            "o" => "15",
            "p" => "16",
            "q" => "17",
            "r" => "18",
            "s" => "19",
            "t" => "20",
            "u" => "21",
            "v" => "22",
            "w" => "23",
            "x" => "24",
            "y" => "25",
            "z" => "26",
            "A" => "27",
            "B" => "28",
            "C" => "29",
            "D" => "30",
            "E" => "31",
            "F" => "32",
            "G" => "33",
            "H" => "34",
            "I" => "35",
            "J" => "36",
            "K" => "37",
            "L" => "38",
            "M" => "39",
            "N" => "40",
            "O" => "41",
            "P" => "42",
            "Q" => "43",
            "R" => "44",
            "S" => "45",
            "T" => "46",
            "U" => "47",
            "V" => "48",
            "W" => "49",
            "X" => "50",
            "Y" => "51",
            "Z" => "52"

        ];
        if (strlen($uputa)!==0) {
            $arr = explode("\r\n", trim($uputa));
            foreach($arr as $line){
                if(strlen($line)!==0){
                    $order = array("\r\n", "\n", "\r");
                    $line = str_replace($order, '', $line);
                    $lastchar = substr($line, -1);
                    if((array_key_exists($lastchar, $vrijednosti)>0)){
                        $vrijednost += $vrijednosti[$lastchar];
                        //echo $vrijednost;
                    }else{
                        //echo 'NOT VALID CHARACTER!';
                        continue;
                    }
                }else{
                continue;
            }
            }
          }
          echo '<h1 style="text-align:center;color:red">' . 'Total sum of priorities in the rucksacks are : ' . $vrijednost . '</h1>';
    }
    else{
        $upute = '';
        $vrijednost = '';
    }
    

}
else{

}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <p style="text-align:center;">Please write down the items in the rucksacks.</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" style="text-align:center;">
        <label for="upute">Enter values: </label><br>
        <textarea style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;width:50%;height:400px" name="upute" id="upute">vJrwpWtwJgWrhcsFMMfFFhFp&#13;&#10;jqHRNqRjqzjGDLGL&#13;&#10;vJrwpWtwJgWrhcsFMMfFFhFP&#13;&#10;dsicbdsicv&#13;&#10;ouwehdont&#13;&#10;sdbjcndslcs</textarea>
        <br><br>
        <input type="submit" value="SET">
    </form>
</body>
</html>
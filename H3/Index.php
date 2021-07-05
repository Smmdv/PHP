<?php
$kerst = ["*","* *", "* * *", "* * * *", "* * * * *", "* * * * * *"];
for ($y = 0; $y < 6; $y++) {
    echo "<p style='text-align:center'>" . $kerst[$y] . "</p>";
}
for ($i = 0; $i < 5 ; $i++){
    echo "<img src='img/boom".$i.".jpg'>";
}

for($x = 35; $x >= 25; $x--) {
    echo "hoppelepee";
}

for ($i = 0; $i < 5 ; $i++){
   if($i % 2 == 0){
       echo "<img style='border: solid 3px red' src='img/boom" . ($i + 1) . ".jpg'>";
   }
   else{
       echo "<img style='border: solid 3px green' src='img/boom" . ($i + 1) . ".jpg'>";
   }
}
$leeftijd = 2;
$bedrag = 10;

if($leeftijd > 65){
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 13){
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 3){
    $bedrag = $bedrag * 0;
}

echo $bedrag;




$zwemclubs["spartelkuikens"] = 25;
$zwemclubs["waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

echo "<table border='1'>";
foreach ($zwemclubs as $label => $waarde) {
    echo "<tr><td>" . $label . "</td><td>" . $waarde . "</td><td>";
    for ($i = 0; $i < (floor($waarde / 5)); $i++) {
        echo "<img src='img/zwemmer.png'>";
    }
    echo "</td></tr>";
}
echo "</table>";


?>




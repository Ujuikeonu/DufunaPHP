
<?php
// Change temperature value to get different temperature result
$t = 19;
if ($t <= 20) {
    echo "It is really cold today";
} 
elseif  ($t > 20 && $t < 30) {
    echo "The weather is just perfect";
} 
elseif  ($t >= 30 && $t < 40) {
    print "It is so hot today";
} 
elseif ($t >= 40) {
    echo "Am i in the Sahara Desert?!";
}
else {
    echo "Sorry i no sabi your temperature o";
}

?>
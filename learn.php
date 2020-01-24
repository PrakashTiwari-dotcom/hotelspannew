
<?php 
function multiexplode($delimiters,$string){

    $ready= str_replace($delimiters,$delimiters[0],$string); //sab lai comma le replace garyo.
    $launch = explode($delimiters[0],$ready);
    return $launch;
}
$text ="here is a sample: this text, and this will be exploded. this also | this one too :)";
$exploded = multiexplode(array(",",".","|",":"),$text);

print_r($exploded);
?>
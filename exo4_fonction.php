<?php
function nombre_phrase($texte)
{
 
    $phrase = preg_split("/(?<=[.!?])\s*(?=[a-z])/i", $texte);
  
   return $phrase;
  
}
 
function is_phrase_valide($phrase)
{
    $ret=false;
    if(preg_match("/^[A-Z]/", $phrase) && preg_match("/[.!?]$/", $phrase))
    {
        $ret=true;
    }
    return $ret;
}

function my_strlen($char)
{
    $i=0;
    while(isset($char[$i])){
        $i++;
    }
    return $i;
}
 
?>
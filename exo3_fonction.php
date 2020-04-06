
<?php
function is_lower($char){
return($char >='a' && $char <='z');
}

function is_upper($char)
{
    return($char >='A' && $char <='Z');

}
function is_entier($char)
{
   return ($char>1 && $char<9);
   

}
function my_strlen($char)
{
    $i=0;
    while(isset($char[$i])){
        $i++;
    }
    return $i;
}
function is_valide($char){
    $i=0;
    while(isset($char[$i]))
    {
        if (!(is_upper($char[$i])) && !(is_lower($char[$i])) )
        {
            return false;
           
        }
        $i++;
    }
    return true;
}
function is_number($char)
{
    $i=0;
    while($i<my_strlen($char))
    {
        if(!is_entier($char[$i]))
        {
            return false;
        }
        $i++;
    }
    return true /*($char>0)*/;
}
function is_car_in_string($m,$M,$char)
{
    $i=0;
    while($i<my_strlen($char))
    {
        if($char[$i]==$m || $char[$i]==$M )
        {
            return true;
            
        }
        $i++;
    }
    return false ;
}

function count_char_in_string($char,$j)
{
    $compteur=0;
    $i=0;
    while($i<my_strlen($char))
    {
        if(is_car_in_string($char[$i],$j))
        {
            $compteur++;
             
            
        }
        $i++;
    }
    return $compteur ;
}
function my_trim($char)
{
    $i=0;
    $j='';
    while($i<my_strlen($char))
    {
        if($char[$i]!=' ')
        {
            $j.= $char[$i];
        }
        $i++;
    }
    return $j;
}
function ComptePhrase($texte)
{
    $comp= 0;
    
    $phrase = preg_split("/[.|!|'?']/", $texte);
    foreach ($phrase as  $value) {
        
            if(preg_match("/^[A-Z]/", $value))
            {
                $comp++;
                
            }
            
        }
      
   return $comp;
}
 
?>
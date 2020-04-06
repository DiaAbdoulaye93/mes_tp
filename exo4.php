
<?php 
include("exo4_fonction.php"); 
$message=$phrase=$affiche=$aff="";
$compteur= 0;
$nombrefrases=0;
if(isset($_POST['envoie']))
{ 
    if(empty($_POST["texts"]))
    {
        $message="Champ non renseigné";
    }
    else{
        $phrase=$_POST["texts"];
        $divis=nombre_phrase($phrase);
        foreach ($divis as  $value) {
            if(is_phrase_valide($value))
            {
               
              $affiche=preg_replace("/\s{2,}/", " ",$value);
              
              $compteur++;
              if(my_strlen($affiche)<200)
              {
                $aff.=$affiche;
              }
 
              

                $value; 
          }
        }
      
        if($compteur>0)
        {
            $message="Ce text a $compteur phrases valides";
        }
        else
        {
            $message="Ce text ne contient pas de phrase valide";
        }
          
    }
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
    <h1 style="margin-left:35%;text-decoration:underline">Exercice4</h1>
    <!-- <input type="text" name="texts" style="margin-left:30%;width:34%;height:50px" placeholder="Saisir le text" value="<?php echo $phrase; ?>" > -->
 <textarea name="texts" id="" rows="10" style="margin-left:30%;width:34%;" placeholder="Saisir le text"><?php echo $phrase; ?></textarea>
    <br><br><span class="error" style="color:Red;margin-left:30%;"><?php echo $message;?></span>
    <br><br>
    <?php
    if (isset($_POST["envoie"]))
    {
    if(!empty($_POST['texts']))
    
        {
            ?>
            <textarea name="affiche" id="" rows="10" style="margin-left:30%;width:34%;" placeholder="Affichage du text"><?php echo $aff; ?></textarea>
            <?php
    }
  
    }
    ?>
      <input type="submit" name="envoie"
    style="width:34%;background-color:rgb(100,100,400);margin-left:30%;height:50px" >
    
</form> 
 
</body>
</html>
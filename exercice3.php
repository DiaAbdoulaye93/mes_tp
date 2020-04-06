
<html>
    <head>
    <link rel="stylesheet" href="style1.css">
        <?php
            include "exo3_fonction.php";
        ?>
        <?php
        
            $formvalide=false;
            $nombre=$message_final=$msg=$mots="";
            $m='m';
            $M='M';
            $recup_mot=[];
            $compt=0;
                if(isset($_POST['envoyer']))
                {
                    if(!empty($_POST['nombre'])){
                        $nombre=$_POST['nombre'];
                        if(!is_number($_POST['nombre']) || !is_entier($_POST['nombre']) )
                        {
                            $msg= "veuillez saisir un nombre entier compris entre 2 et 10";
                        }
                        else
                        {   
                            $nombre=$_POST['nombre'];

                                for ($i=1; $i <= $nombre; $i++) 
                               { 
                                 
                                    if(!empty($_POST["nombre$i"])){
                                     
                                        $mots=$_POST["nombre$i"];
                                        if(is_valide($mots))
                                        {
                                            if(my_strlen($_POST["nombre$i"])<20)
                                            {
                                               if(is_car_in_string($m,$M,$mots))
                                               {
                                                   $compt++;
                                               }
                                               $recup_mot[$i]=null;
                                            }
                                            else{
                                                $recup_mot[$i]="(Longueur du mot supérieur à 20)";
                                            }
                                        }
                                      else {
                                          $recup_mot[$i]="(Des lettres)";
                                      }
                                       
                                    } 
                                    else{
                                        $recup_mot[$i]="\ ";
                                    }
                                
                               }
                             
                               if(!in_array(!null,$recup_mot))
                               {
                                 $message_final="Vous avez saisi $nombre mots dont $compt ayant la lettre m(M)";
                               }
                               
                            $formvalide=true;
                        }
                  }else{
                          $msg= "veuillez saisir un nombre ";
                  }
                 
                 
                }
                
               
        ?>
        <meta charset="utf-8" />
        <title>Exerice3</title>
    </head>
    <body>
            <h1 style="margin-left:30%;width:30%">Exercice3</h1>

            <form action="exercice3.php" method ="POST">
                <label form="num1" style="margin-left:30%;width:30%">Saisir un entier</label><br>
                <input name="nombre" type="text"   style="margin-left:30%;width:30%" value="<?php echo $nombre;?>"/>
                <span style="color:Red"> <?php echo $msg;?></span><br>
                <?php
                    if($formvalide)
                    {
                        for ($i=1; $i <= $nombre; $i++) 
                        { 
                ?>
                    <span class='error' style='margin-left:30%;font-style:italic'>  <?php echo "Mot:".$i ?>
                    <span style="color:Red"> <?php  echo $recup_mot[$i];?></span> </span>
                    </br><input type="text"  name="nombre<?php echo $i;?>"
                     style="margin-left:30%;width:30%" value="<?php if(isset($_POST["nombre$i"])){echo $_POST["nombre$i"]; }?>"> 
                  <br>
                       
                <?php  
                        }
                        echo ' <br><input type="submit" name="envoi" value="Reinitialiser"     style="margin-left:15%;width:30%;font-style:italic;background-color:red"/>';
                        
                    }
                ?>
                  <br><input type="submit" name="envoyer" value="envoyer"     style="margin-left:30%;width:30%;background-color:rgb(100,100,400)"/>
            </form>

    <h1 style="color:red; text-decoration:none; margin-left:20%"><?php
echo $message_final;
    ?>
</h1>
    </body>
</html>

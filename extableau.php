<!DOCTYPE html>
<html>
        <head>
            

        </head>

        <body> 

    <?php
    
    $tab = array("Lundi", "Mardi", "Mercredi", "Jeudi"); 
    var_dump ($tab, "Vendredi"); 
    
    $tab = array("Lundi", "Mardi", "Mercredi"); 
    $jour = var_dump($tab); 


    $tab = array("Jeudi", "Vendredi"); 
    var_dump($tab, "Lundi", "Mardi", "Mercredi"); 
    
    $tab = array("Jeudi", "Vendredi"); 
    $jour = var_dump($tab); 
    

    $tab = array(array(1, "janvier", "2016"), 
    var_dump(2, "février", "2017"), 
    array(3, "mars", "2018"), 
    array(4, "avril", "2019")
    );
   
    $tab = array(); 
   
   
   ?> 

    


        </body>
</html>
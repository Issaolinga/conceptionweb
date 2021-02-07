<?php
    echo "<h2> Révisez votre table de multiplication!</ h2>";
    //Début du tableau HTML
    echo "<table border=\"2\" style=\"background-color:yellow\"> <th>
    &nbsp;X &nbsp;</th>";
    //Création de la première ligne
    for($i=1;$i<10;$i++)
    {
        echo "<th>&nbsp;$i&nbsp;</th>";
    }
    //Fin de la boucle 1
    //*****************************
    //Création du corps de la table
    //*****************************
    //Boucles de création du contenu de la table
    for($i=1;$i<10;$i++)
    {    
        //Création de la première colonne  
        echo "<tr><th>&nbsp;$i&nbsp;</th>";  
        //Remplissage de la table  
        for($j=1;$j<10;$j++)
        {    
            echo "<td style=\"background-color:red;color:white\"> &nbsp;&nbsp; <b>". $i*$j.
            "&nbsp;&nbsp; </td>";  
        }  
        echo "</b></tr>";
        }
    echo "</table>"
?>
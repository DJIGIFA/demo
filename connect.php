<?php

    
function getConnection()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=e_commerce', 'root');
            return $pdo ;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            return null;
        }
    } ?>
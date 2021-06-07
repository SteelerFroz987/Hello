<?php
    include __DIR__ .'/../connexion/connexion.php';

class langue {
    // Permet de créer une langue
    public function createLangue($name,$translate){
        global $conn;
        $request_insert = "INSERT INTO `langue` (`name`,`translate`) VALUES ('" . $name . "','" . $translate . "')";
        $conn->query($request_insert);
    }

    
    public function getAllLangue(){
        global $conn;

        // Je récupère les langues
        $request_all = "SELECT * FROM `langue`";
        $get_all_langue = $conn->query($request_all);

        return $get_all_langue;
    }

    // Supprime la langue sélectionner
    public function deleteLangue($id){
        global $conn;

        $delete_langue_request = "DELETE FROM `langue` WHERE id=".$id;
        $conn->query($delete_langue_request);
    }
    // Met à jour la langue sélectionner
    public function updateLangue($id,$name,$translate){
        global $conn;
        $update = "UPDATE `langue` SET `name`='".$name."',`translate`='".$translate."' WHERE `id`=".$id;
        $conn->query($update);
    }

}
?>
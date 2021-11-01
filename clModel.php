<?php

class clModel{

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cl_P7;charset=utf8', 'root', '');
   }

   public function bringAll(){
    $sentence = $this->db->prepare('SELECT * FROM ej2 WHERE 1');
    $sentence->execute();
    $clObjects = $sentence->fetchAll(PDO::FETCH_OBJ);
    return $clObjects;
   }

   function bringOne($id){
    $sentence = $this->db->prepare('SELECT * FROM ej2 WHERE id = ?');
    $sentence->execute(array($id));
    $onlyOne = $sentence->fetch(PDO::FETCH_OBJ);
    return $onlyOne;
    }

   function insertCl($name, $desc, $price){
    $sentence = $this->db->prepare("INSERT INTO ej2(nombre, descripcion, precio) VALUES(?, ?, ?)");
    $sentence->execute(array($name, $desc, $price));
    return $this->db->lastInsertID();
   }
   
   function updateInto($n, $d, $p, $i){
    $sentence = $this->db->prepare("UPDATE ej2 SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?");
    $sentence->execute(array($n, $d, $p, $i));
   }

   function deleteOneCl($id){
    $sentence = $this->db->prepare("DELETE FROM ej2 WHERE id = ?");
    $sentence->execute([$id]);
   }
}

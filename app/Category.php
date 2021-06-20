<?php

namespace App;

class Category extends Koneksi {

   public function __construct ()
   {
       parent::__construct();
   }

   public function tampil()
   {
       $sql = "SELECT * FROM tb_cat";
       $stmt = $this->db->prepare($sql);
       $stmt->execute();

       $data = [];
       while ($rows = $stmt->fetch()) {
           $data[] = $rows;
       }

       return $data;
   }

   public function input()
   {
       $i_name = $_POST['i_name'];
       $i_text = $_POST['i_text'];


       $sql = "INSERT INTO tb_category VALUES (NULL, :cat_kode: cat_kode, :cat_nama)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindParam(":cat_id", $i_kode);
       $stmt->bindParam(":cat_name", $i_kode);
       $stmt->bindParam(":cat_text", $i_nama);
       $stmt->execute();
   }
}
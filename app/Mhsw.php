<?php

class Mhsw {

    private $db;

    public function __construct()
    {
        try {

                $this ->db =
  new PDO("mysql:host=localhost;dbname=dbakademik", "root", "");

          } catch (PDOExpection $e) {
              die ("Error " . $e->getMassage());
          }
      }

      public function tampil()
      {
         $sql = "SELECT * FROM tb_mhsw";
         $stmt = $this->db->prepare($sql);
         $stmt->execute();

         $data = [];
         while ($rows = $stmt->fetch()) {
             $data[] = $rows;
         }

         return $data;
      }
    }
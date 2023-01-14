<?php

    class DistrictModel  
    {
        public $conn;
        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
    
        public function save($data)
        {
            $sql = "INSERT INTO distrik (distik_name) VALUES(?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$data['distik_name']]);
        }

        public function getDistrik($id)
        {
            $sql = "SELECT * FROM distrik WHERE state_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO ::FETCH_ASSOC);
        }
    }
?>
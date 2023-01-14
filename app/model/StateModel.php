<?php

    class StateModel  
    {
        public $conn;
        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
    
        public function save($data)
        {
            $sql = "INSERT INTO state (state_name) VALUES(?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$data['state_name']]);
        }
        
        public function getCountry()
        {
            $sql = "SELECT * FROM countries";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getAllState($id)
        {
            $sql = "SELECT * FROM state WHERE country_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO ::FETCH_ASSOC);
        }
    }
?>
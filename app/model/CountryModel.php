<?php

    class CountryModel  
    {
        public $conn;
        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
    
        public function save($data)
        {
            $sql = "INSERT INTO countries (country_name) VALUES(?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$data['country_name']]);
        }
        public function getCountry()
        {
            $sql = "SELECT * FROM countries";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
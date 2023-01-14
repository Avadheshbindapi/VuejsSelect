<?php
    class CountryController
    {
        public $conn;
        public function __construct(CountryModel $conn)
        {
            $this->conn = $conn;
        }

        public function save($data)
        {
            $this->conn->save($data);
        }
        public function getCountry()
        {
           return $this->conn->getCountry();
        }

        
    }
?>
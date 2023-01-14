<?php
    class StateController
    {
        public $conn;
        public function __construct(StateModel $conn)
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

        public function getAllState($id)
        {
            return $this->conn->getAllState($id);
        }
    }
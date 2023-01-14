<?php
    class DistrictController
    {
        public $conn;
        public function __construct(DistrictModel $conn)
        {
            $this->conn = $conn;
        }

        public function save($data)
        {
            $this->conn->save($data);
        }
        public function getDistrik($id)
        {
            return $this->conn->getDistrik($id);
        }
    }
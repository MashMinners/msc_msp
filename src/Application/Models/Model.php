<?php

declare(strict_types=1);

namespace Application\Models;

class Model
{
    private $_db;

    public function __construct(\PDO $connector){
        $this->_db = $connector;
    }

    public function getFiveFirstLines(){
        $query = ('SELECT * FROM `mod_comp` LIMIT 10');
        $stmt = $this->_db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}
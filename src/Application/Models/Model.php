<?php

declare(strict_types=1);

namespace Application\Models;

class Model
{
    private $_db;

    public function __construct(\PDO $connector){
        $this->_db = $connector;
    }

    public function getData(string $code){
        $query = ("SELECT mc.FULLNAME 
                    FROM mod_comp mc
                    INNER JOIN mod_link ml on mc.CODE = ml.COMPCODE
                    INNER JOIN mod_simp ms on ml.SIMPCODE = ms.CODE
                    WHERE ms.CODE = :code");
        $stmt = $this->_db->prepare($query);
        $stmt->execute(['code' => $code]);
        $result = $stmt->fetchAll();
        return $result;
    }

}
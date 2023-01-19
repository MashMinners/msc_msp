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
        $query = ("SELECT mod_link.COMPCODE, mod_link.SIMPCODE, mod_link.KOL, mod_link.PRIM, mod_comp.NAME, mod_simp.NAME
                    FROM (mod_link 
                    INNER JOIN mod_comp ON mod_link.COMPCODE = mod_comp.CODE) 
                    INNER JOIN mod_simp ON mod_link.SIMPCODE = mod_simp.CODE
                    WHERE (((mod_link.COMPCODE)=:code));");
        $stmt = $this->_db->prepare($query);
        $stmt->execute(['code' => $code]);
        $result = $stmt->fetchAll();
        return $result;
    }

}
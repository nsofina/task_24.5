<?php

class Catalog_Model extends Model {

    public function __construct()
    {
        parent::__construct();
        
    }

    public function getList() {
        return array('LIST' => array('Скатерть-самобранка', 'Волшебная палочка', 'Сапоги-скороходы'));
    }
}
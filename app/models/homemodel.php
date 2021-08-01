<?php

class homemodel {
    public function __construct()
    {

    }

    public function category() {
        $category = [
            'cateOne' => 'IPhone',
            'cateTwo' => 'SamSung',
            'cateThree' => 'Xiaomi'
        ];

         return $category;

    }

}
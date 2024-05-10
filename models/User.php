<?php
//Model
class User
{
    public static function getAllUsers() {
        return array(
            array('id' => 1, 'name' => 'John'),
            array('id' => 2, 'name' => 'Jane'),
            array('id' => 3, 'name' => 'Doe')
        );
    }
}

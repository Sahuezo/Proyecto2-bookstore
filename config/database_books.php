<?php
    class Connect {
       public static function connection() {
        $connection = new mysqli(
            "localhost",
            "root",
            "",
            "bookstore_project2"
        );
        return $connection;
       }
    }

?>
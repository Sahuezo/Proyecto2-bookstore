<?php

    class Books_Model{
        private $db;
        private $books;

        public function __construct(){
            $this->db = Connect::connection();
            $this->books = array();
        }

        public function get_books(){
            $query = "SELECT * FROM books";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->books[] = $row;
            }
            return $this->books;
        }

        public function insertar($titular, $autor, $publisher, $edicion, $tipo_present, $idioma, $dimensiones, $cant_pags, $precio){
            $resultado = $this->db->query("INSERT INTO books(titular, autor, publisher, edicion, tipo_present, idioma, dimensiones, cant_pags, precio) VALUES ('$titular', '$autor', '$publisher', '$edicion', '$tipo_present', '$idioma', '$dimensiones', '$cant_pags', '$precio')");
        }

        public function modificar($id, $titular, $autor, $publisher, $edicion, $tipo_present, $idioma, $dimensiones, $cant_pags, $precio){
            $resultado = $this->db->query("UPDATE books SET titular ='$titular', autor ='$autor', publisher ='$publisher', edicion = '$edicion', tipo_present ='$tipo_present', idioma ='$idioma', dimensiones = '$dimensiones', cant_pags = '$cant_pags', precio ='$precio' WHERE id='$id'");
            return $resultado;
        }

        public function eliminar($id){
            $resultado = $this->db->query("DELETE FROM books WHERE id='$id'");
        }

        public function get_unicaFila($id){
            $query = "SELECT * FROM books WHERE id='$id' LIMIT 1";
            $resultado = $this->db->query($query);
            $row = $resultado->fetch_assoc();

            return $row;
        }


        
    }

?>
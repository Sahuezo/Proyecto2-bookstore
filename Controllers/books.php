<?php
    class Bookscontroller{

        public function __construct(){
            require_once "Models/booksmodel.php";
        }

        public function index(){
            $objBooks = new Books_model();
            $data["books"] = $objBooks->get_books();

            require_once "Views/books/books_table.php";

        }

        public function nuevo(){
            require_once "Views/books/books_new_entry.php";
        }

        public function guardar(){
            $titular = $_POST['titular'];
            $autor = $_POST['autor'];
            $publisher = $_POST['publisher'];
            $edicion = $_POST['edicion'];
            $tipo_present = $_POST['tipo_present'];
            $idioma = $_POST['idioma'];
            $dimensiones = $_POST['dimensiones'];
            $cant_pags = $_POST['cant_pags'];
            $precio = $_POST['precio'];

            $objBooks = new Books_model();
            $objBooks->insertar($titular, $autor, $publisher, $edicion, $tipo_present, $idioma, $dimensiones, $cant_pags, $precio);

            $this->index();
        }

        public function modificar($id){
            $objBooks = new Books_model();
            $data ["id"]=$id;
            $data ["books"]= $objBooks->get_unicaFila($id);

            require_once "Views/books/books_modificar.php";

        }

        public function actualizar(){
            $id = $_POST['id'];
            $titular = $_POST['titular'];
            $autor = $_POST['autor'];
            $publisher = $_POST['publisher'];
            $edicion = $_POST['edicion'];
            $tipo_present = $_POST['tipo_present'];
            $idioma = $_POST['idioma'];
            $dimensiones = $_POST['dimensiones'];
            $cant_pags = $_POST['cant_pags'];
            $precio = $_POST['precio'];

            $objBooks= new Books_Model();
            $objBooks->modificar($id, $titular, $autor, $publisher, $edicion, $tipo_present, $idioma, $dimensiones, $cant_pags, $precio);

            $this->index();
        }

        public function eliminar($id){
            $objBooks = new Books_Model();
            $objBooks->eliminar($id);
            $this->index();
        }


    }

?>  
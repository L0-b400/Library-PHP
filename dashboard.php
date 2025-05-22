<?php
class Books {
    public $codeEmpresa;
    public $title;
    public $codeBook;
    public $edit;
    public $area;
    public $year;
    public $price;
    public $stock;
    public $ttStock;

    public function __construct($codeEmpresa, $codeBook, $title, $edit, $area, $year, $price, $stock, $ttStock ) {
        $this->codeEmpresa = $codeEmpresa;
        $this->codeBook = $codeBook;
        $this->title = $title;
        $this->edit = $edit;
        $this->area = $area;
        $this->year = $year;
        $this->price = $price;
        $this->stock = $stock;
        $this->ttStock = $ttStock;
    }

    public function view() {
        foreach(get_object_vars($this) as $key => $value) {
            echo "$key: $value<br>";
        }
    }
}


// cadastrar livro
$book1 = new Books(
    001, 
    999, 
    "Livro", 
    "Editora", 
    "Area", 
    "Ano", 
    "Valor", 
    "Estoque", 
    "Quantidade Total"
);

$book1->view();




?>
<?php
// Solução: Inverter a dependência da classe Movie para a interface Category e criar as classes DramaCategory e XCategory que implementam a interface Category

// Interface que define o tipo de objeto que a classe Movie pode receber
interface Category{}

// Classes que implementam a interface Category
class DramaCategory implements Category{}
class XCategory implements Category{}

// Classe Movie que depende de uma interface e não de uma classe concreta
class Movie{
    // O construtor recebe um objeto que implementa a interface Category
    public function __construct($name, Category $category){
        $this->name= $name;
        $this->category= $category;
    }

    private $name;
    private $category;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name= $name;
    }

    // O método getCategory() retorna um objeto que implementa a interface Category
    public function getCategory(){
        return $this->category;
    }

    // O método setCategory() recebe um objeto que implementa a interface Category
    public function setCategory(Category $category){
        $this->category= $category;
    }
}
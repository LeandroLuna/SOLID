<?php
// LSP - Liskov Substitution Principle
// Conceito: Se S é um subtipo de T, então os objetos do tipo T, em um programa, podem ser substituídos pelos objetos do tipo S sem que seja necessário alterar as propriedades desse programa.

// Problema: A classe Movie não pode ser substituída pela classe ModernTimes
class Movie {
    public function play()
    {
        // play na classe movie
    }

    public function increaseVolume()
    {

    }
}

class TheLionKing extends Movie {}

class ModernTimes extends Movie {
    public function increaseVolume()
    {
        // putz
    }
}
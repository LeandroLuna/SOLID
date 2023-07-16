<?php
// Solução: Abstrair a classe Video e criar classes específicas para cada tipo de vídeo.

// Abstração da classe Video
abstract class Video {
    abstract public function interest();
}

// Implementação específica para o tipo Movie
class Movie extends Video {
    public function interest() {
        // cálculo de interesse baseado em filme
    }
}

// Implementação específica para o tipo TVShow
class TVShow extends Video {
    public function interest() {
        // cálculo de interesse baseado em série
    }
}
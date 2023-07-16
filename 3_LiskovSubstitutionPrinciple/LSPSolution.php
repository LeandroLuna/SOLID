<?php
// Solução: Derivar a classe Movie em duas interfaces, Playable e VolumeControl

// A interface Playable define o método play()
interface Playable {
    public function play();
}

// A interface VolumeControl define o método increaseVolume()
interface VolumeControl {
    public function increaseVolume();
}

// A classe Movie implementa a interface Playable
class Movie implements Playable {
    public function play()
    {
        // play movie
    }
}

// A classe TheLionKing herda de Movie e implementa a interface VolumeControl
class TheLionKing extends Movie implements VolumeControl {
    public function increaseVolume()
    {
        // increase volume
    }
}

// A classe ModernTimes herda de Movie, mas não implementa a interface VolumeControl
class ModernTimes extends Movie {}
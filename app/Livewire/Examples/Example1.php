<?php

namespace App\Livewire\Examples;

use App\Models\Student;
use Livewire\Component;

class Example1 extends Component
{
    public $title="Hola";
    public $idstudent = 1;
    public $student;
    public function render()
    {
        return view('livewire.examples.example1')->layout('layouts.example');
    }

    public function changeTitle(){
        $this->title='Cambiandoooooo...';
    }

    public function showStudent(){
        $this->student=Student::find($this->idstudent);
        /* return $student; */
    }

    public function allStudent(){
        $this->student=Student::all();
    }
}

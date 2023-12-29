<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Livewire\Forms\UserForm;

class Users extends Component
{

    public $test = 'huda';
    public UserForm $form;


    

    public function send () {
        dd(23);
    }

    public function render()
    {
        return view('livewire.users', [
            'users' => User::all(),
        ]);
    }

    


    


    public function store () {
        // dd(1431);
        // $validatedData =  $this->validate();
        //  $this->validate();
        // dd(21212);
        // User::create($this->form->all());
        $this->form->store();
        session()->flash('message', 'User Added Successfully');
        $this->reset();
        return $this->redirect('/users');


    }

    public function edit () {
        dd(12312);
    }

    public function delete () {
        dd(1231);
    }

    



}

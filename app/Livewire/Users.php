<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;


class Users extends Component
{

    public $test = 'huda';
    public $user_id;
    public $name;
    public $email;
    public $password;


    

    public function send () {
        dd(23);
    }

    public function render()
    {
        return view('livewire.users');
    }

    
    public function getRules () {
        return [
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
            // 'email' => [
            //     'required',
            //     'email',
            //     Rule::unique('users', 'email')->ignore(function () {
            //         if ($this->user_id) {
            //             return $this->user_id;
            //         }

            //         return null;
            //     }),
            // ],
            'password' => 'required|min:8'
        ];
    }

    


    public function store () {
        // dd(1431);
        // $validatedData =  $this->validate();
        $validatedData = $this->validate();
        // dd($validatedData);
        User::create($validatedData);
        session()->flash('message', 'User Added Successfully');
        $this->reset();


    }

    



}

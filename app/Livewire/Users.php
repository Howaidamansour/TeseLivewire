<?php

namespace App\Livewire;

use Livewire\Component;

class Users extends Component
{

    public $test = 'huda';
    protected $user_id;
    protected $name;
    protected $email;
    protected $password;

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
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(function () {
                    if ($this->user_id) {
                        return $this->user_id;
                    }

                    return null;
                }),
            ],
            'password' => 'required|min:8'
        ];
    }



}

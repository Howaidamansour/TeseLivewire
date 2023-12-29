<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;

class UserForm extends Form
{
    public $user_id;
    public $name;
    public $email;
    public $password;

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
        $this->validate();
        User::create($this->all());
    }
}

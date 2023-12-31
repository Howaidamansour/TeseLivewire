<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Livewire\Forms\UserForm;
use Livewire\WithPagination;
class Users extends Component
{
    use WithPagination; 

    public $test = 'huda';
    public $user_id;
    public $name;
    public $email;
    public $password;
    public $search;
    public $editedID;
    public $editedName;
    public $editedEmail;



   

    public function render()
    {
        if ($this->editedID) {
            $user = User::find($this->editedID);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->password = $user->password;
            $this->user_id = $this->editedID;
        }
        // dd($this->search);
        // dd(User::where('name', 'like', "%{$this->search}%")->toSql());
        return view('livewire.users', [
            'users' => User::where('name', 'like', "%{$this->search}%")->paginate(5),
        ]);
    }

  

    public function save () {
        // dd('hi');
        sleep(2);

        $validatedData = $this->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
            'password' => 'required|min:8',
        ]);  

        User::updateOrCreate(['id'=> $this->editedID], $validatedData);
        
       
        //  User::create($validatedData);
        session()->flash('success', 'Saved Successfuly');
        $this->reset();

    }

    public function edit ($userID) {
    
     $this->editedID = $userID;
     $this->editedName = User::find($userID)->name;
     $this->editedEmail = User::find($userID)->email;
    }

    public function cancelUpdate () {
        $this->reset('editedName', 'editedEmail', 'editedID');
    }

    public function update () { 
        // dd(11);
       $this->validate([
            'editedName' => 'required|string|min:3|max:100',
            'editedEmail' => 'required|email|unique:users,email,'.$this->editedID,
           
        ]);
        User::find($this->editedID)->update([
            'name' => $this->editedName,
            'email' => $this->editedEmail
        ]);
        $this->cancelUpdate();
    }

    public function delete (User $user) {
        // dd($user);
        $user->delete();
    }

    



}

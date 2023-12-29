<?php

namespace App\Livewire;
use App\Rules\SaudiPhone;
use Livewire\Component;
use App\Models\ContactUS as CU;

class ContactUs extends Component
{

    public $name;
    public $phone;
    public $email; 
    public $message;

   

  
    
    public function getRules()
    {
         return  [
            'name' => 'required|string|min:3|max:100',
            'phone' => ['required', 'regex:/^9665[0-9]{8}$/'],
            'email' => 'required|email',
            'message' => 'required|min:5|max:500'
         ];
    }

   

    

    public function render()
    {
        return view('livewire.contact-us');
    }


    public function submit () {
        // dd(463);
       $validatedData =  $this->validate();
        // dd($validatedData);
        $row = CU::create($validatedData);
        session()->flash('message', 'Message successfully saved.');
        $this->reset();
    }
}

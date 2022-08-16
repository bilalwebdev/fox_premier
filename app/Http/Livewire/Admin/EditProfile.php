<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditProfile extends Component
{

    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $user;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];
    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;

        $this->email = $this->user->email;
    }

    public function updateInfo()
    {

        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->emit('success', 'Profile Updated');
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $this->user->update([
            'password' => bcrypt($this->password),
        ]);

        $this->emit('success', 'Password Updated');

    }

    public function render()
    {
        return view('livewire.admin.edit-profile');
    }
}

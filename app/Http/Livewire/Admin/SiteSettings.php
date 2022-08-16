<?php

namespace App\Http\Livewire\Admin;

use App\Models\ContactUs;
use App\Models\SiteSetting;
use Livewire\Component;

class SiteSettings extends Component
{
    public $site;
    public $contact;

    protected $rules = [
        'site.title' => 'required',
        'site.video' => 'required',
        'site.facebook' => 'required',
        'site.insta' => 'required',
        'site.twitter' => 'required',
        'site.linkedIn' => 'required',
        'site.youtube' => 'required',
        'contact.add_line_1' => 'required',
        'contact.add_line_2' => 'required',
        'contact.company_name' => 'required',
        'contact.phone' => 'required',
        'contact.email' => 'required',
        'contact.map' => 'required',
    ];

    public function mount()
    {
        $this->site = SiteSetting::first();
        $this->contact = ContactUs::first();
    }

    public function updateSite()
    {
        $this->site->update();
        $this->emit('success', 'Site Settings Updated');
    }

    public function updateContact()
    {
        $this->contact->update();
        $this->emit('success', 'Contact Info Updated');
    }

    public function saveImage($key)
    {
        $this->site->update(['image' => $key]);
        $this->emit('success', 'Image Updated');
    }

    public function render()
    {
        return view('livewire.admin.site-settings');
    }
}

<?php

namespace App\Http\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;

class LiveSearch extends Component
{
    public $name;

    public $contacts = [];  

    public function searchByNamee()
    {
        if(!empty($this->name)){
            sleep(1);

            $results = PhoneBook::searchByName($this->name);

            if(empty($results)) {
                session()->flash('message', 'No contact matching' . $this->name . '.');
            }
            $this->contacts = $results;
        }
    }

    public function render()
    {
        return view('livewire.live-search');
    }
}

<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Component;

class CountVisits extends Component
{
    public Url $url;
    public $visits;

    public function boot()
    {
        $this->url = Url::where('id', $this->url->id)->first();
        $this->visits = $this->url->visits_count;
    }
    public function render()
    {
        return view('livewire.count-visits');
    }
}

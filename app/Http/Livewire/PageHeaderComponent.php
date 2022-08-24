<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageHeaderComponent extends Component
{

    public $pageTitle;
    
    public function render()
    {
        return view('livewire.page-header-component');
    }
}

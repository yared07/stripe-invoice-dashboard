<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardBody extends Component
{
    public $content = 'Here is the body of the dashboard.';

    public function render()
    {
        return view('livewire.dashboard-body');
    }
}

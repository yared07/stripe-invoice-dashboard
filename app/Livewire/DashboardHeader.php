<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardHeader extends Component
{
    public $pageTitle = 'Stripe Invoice Dashboard';

    public function render()
    {
        return view('livewire.dashboard-header');
    }
}

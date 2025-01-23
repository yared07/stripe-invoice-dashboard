<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardBody extends Component
{
    public $content = 'Invoices';

    public $filter = 'All'; 
    public $invoices = [];  
    public $allInvoices = []; 
    public $showDropdowns = [];



 

    public function mount()
    {
        $this->allInvoices = [
            [
                'amount' => '$10.00',
                'currency' => 'USD',
                'status' => 'Draft',
                'invoiceNumber' => '8FB28438-001',
                'customer' => 'michael@dundermifflin.com',
                'due' => '--',
                'created' => 'Jun 7, 3:36 PM',
            ],
            [
                'amount' => '$8.00',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => 'ECF17C97-0017',
                'customer' => 'alexander@stripe.com',
                'due' => '--',
                'created' => 'Apr 29, 6:42 PM',
            ],
            [
                'amount' => '$15.00',
                'currency' => 'USD',
                'status' => 'Outstanding',
                'invoiceNumber' => 'A32F9182-0021',
                'customer' => 'pam@dundermifflin.com',
                'due' => 'Jan 20, 2025',
                'created' => 'Jan 10, 8:15 AM',
            ],
            [
                'amount' => '$22.50',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => 'C7B3D281-0098',
                'customer' => 'jim@dundermifflin.com',
                'due' => '--',
                'created' => 'Dec 14, 2024, 4:50 PM',
            ],
            [
                'amount' => '$18.00',
                'currency' => 'USD',
                'status' => 'Draft',
                'invoiceNumber' => '9FA82BC4-0456',
                'customer' => 'dwight@dundermifflin.com',
                'due' => '--',
                'created' => 'Nov 20, 2024, 2:12 PM',
            ],
            [
                'amount' => '$30.00',
                'currency' => 'USD',
                'status' => 'Outstanding',
                'invoiceNumber' => 'B4E183D6-0647',
                'customer' => 'stanley@dundermifflin.com',
                'due' => 'Feb 10, 2025',
                'created' => 'Feb 1, 2025, 9:00 AM',
            ],
            [
                'amount' => '$12.00',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => '7CF29187-0201',
                'customer' => 'angela@dundermifflin.com',
                'due' => '--',
                'created' => 'Dec 28, 2024, 1:30 PM',
            ],
            [
                'amount' => '$25.00',
                'currency' => 'USD',
                'status' => 'Draft',
                'invoiceNumber' => 'D82F9C31-0784',
                'customer' => 'ryan@dundermifflin.com',
                'due' => '--',
                'created' => 'Jan 3, 2025, 11:00 AM',
            ],
            [
                'amount' => '$50.00',
                'currency' => 'USD',
                'status' => 'Past Due',
                'invoiceNumber' => 'F91C28B3-0032',
                'customer' => 'kevin@dundermifflin.com',
                'due' => 'Mar 5, 2025',
                'created' => 'Feb 28, 2025, 10:10 AM',
            ],
            [
                'amount' => '$45.00',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => 'A21B39C8-0783',
                'customer' => 'oscar@dundermifflin.com',
                'due' => '--',
                'created' => 'Jan 15, 2025, 5:20 PM',
            ],
        ];

        $this->invoices = $this->allInvoices;
        $this->showDropdowns = array_fill(0, count($this->invoices), false); 

    }

    public function toggleDropdown($index)
    {
        $this->showDropdowns[$index] = !$this->showDropdowns[$index];
    }




    public function updatedFilter($value)
    {
        $this->filterInvoices();
    }

    public function filterInvoices()
    {
        if ($this->filter !== 'All') {
            $this->invoices = array_filter($this->allInvoices, function($invoice) {
                return $invoice['status'] === $this->filter;
            });
        } else {
            $this->invoices = $this->allInvoices;
        }
    }
    

    public function resetInvoices()
    {
        $this->invoices = [
            [
                'amount' => '$10.00',
                'currency' => 'USD',
                'status' => 'Draft',
                'invoiceNumber' => '8FB28438-001',
                'customer' => 'michael@dundermifflin.com',
                'due' => '--',
                'created' => 'Jun 7, 3:36 PM',
            ],
            [
                'amount' => '$8.00',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => 'ECF17C97-0017',
                'customer' => 'alexander@stripe.com',
                'due' => '--',
                'created' => 'Apr 29, 6:42 PM',
            ],
            [
                'amount' => '$15.00',
                'currency' => 'USD',
                'status' => 'Outstanding',
                'invoiceNumber' => 'A32F9182-0021',
                'customer' => 'pam@dundermifflin.com',
                'due' => 'Jan 20, 2025',
                'created' => 'Jan 10, 8:15 AM',
            ],
            [
                'amount' => '$22.50',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => 'C7B3D281-0098',
                'customer' => 'jim@dundermifflin.com',
                'due' => '--',
                'created' => 'Dec 14, 2024, 4:50 PM',
            ],
            [
                'amount' => '$18.00',
                'currency' => 'USD',
                'status' => 'Draft',
                'invoiceNumber' => '9FA82BC4-0456',
                'customer' => 'dwight@dundermifflin.com',
                'due' => '--',
                'created' => 'Nov 20, 2024, 2:12 PM',
            ],
            [
                'amount' => '$30.00',
                'currency' => 'USD',
                'status' => 'Outstanding',
                'invoiceNumber' => 'B4E183D6-0647',
                'customer' => 'stanley@dundermifflin.com',
                'due' => 'Feb 10, 2025',
                'created' => 'Feb 1, 2025, 9:00 AM',
            ],
            [
                'amount' => '$12.00',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => '7CF29187-0201',
                'customer' => 'angela@dundermifflin.com',
                'due' => '--',
                'created' => 'Dec 28, 2024, 1:30 PM',
            ],
            [
                'amount' => '$25.00',
                'currency' => 'USD',
                'status' => 'Draft',
                'invoiceNumber' => 'D82F9C31-0784',
                'customer' => 'ryan@dundermifflin.com',
                'due' => '--',
                'created' => 'Jan 3, 2025, 11:00 AM',
            ],
            [
                'amount' => '$50.00',
                'currency' => 'USD',
                'status' => 'Past Due',
                'invoiceNumber' => 'F91C28B3-0032',
                'customer' => 'kevin@dundermifflin.com',
                'due' => 'Mar 5, 2025',
                'created' => 'Feb 28, 2025, 10:10 AM',
            ],
            [
                'amount' => '$45.00',
                'currency' => 'USD',
                'status' => 'Paid',
                'invoiceNumber' => 'A21B39C8-0783',
                'customer' => 'oscar@dundermifflin.com',
                'due' => '--',
                'created' => 'Jan 15, 2025, 5:20 PM',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard-body');
    }
}

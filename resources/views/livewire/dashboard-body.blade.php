<div class = "dashboard-body w-full h-full  py-12 px-5 ">
    <div class="flex items-center justify-between border-b border-gray-200">
        <div class="border-b">
            <h1 class="text-3xl font-bold text-gray-900">Invoices</h1>
            <div class="flex space-x-8 mt-2 text-sm text-gray-500">
                <a href="#" 
                    wire:click="$set('filter', 'All')" 
                    class="font-semibold text-[16px] hover:underline {{ $filter === 'All' ? 'text-violet-500 border-b-2 border-violet-500 pb-2' : 'text-gray-400' }}">
                    All Invoices
                </a>
                <a href="#" 
                    wire:click="$set('filter', 'Draft')" 
                    class="font-semibold text-[16px] hover:underline {{ $filter === 'Draft' ? 'text-violet-500 border-b-2 border-violet-500 pb-2' : 'text-gray-400' }}">
                    Draft
                </a>
                <a href="#" 
                    wire:click="$set('filter', 'Outstanding')" 
                    class="font-semibold text-[16px] hover:underline {{ $filter === 'Outstanding' ? 'text-violet-500 border-b-2 border-violet-500 pb-2' : 'text-gray-400' }}">
                    Outstanding
                </a>
                <a href="#" 
                    wire:click="$set('filter', 'Past Due')" 
                    class="font-semibold text-[16px] hover:underline {{ $filter === 'Past Due' ? 'text-violet-500 border-b-2 border-violet-500 pb-2' : 'text-gray-400' }}">
                    Past Due
                </a>
                <a href="#" 
                    wire:click="$set('filter', 'Paid')" 
                    class="font-semibold text-[16px] hover:underline {{ $filter === 'Paid' ? 'text-violet-500 border-b-2 border-violet-500 pb-2' : 'text-gray-400' }}">
                    Paid
                </a>
            </div>
        </div>

        <div class="flex space-x-2">
            <button class="flex items-center px-3 py-1 border border-gray-300 rounded-lg text-gray-500 text-xs font-semibold hover:bg-gray-200 hover:text-gray-900">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-3 h-3 mr-1"
                fill=""
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707l-7 7V21a1 1 0 01-1.447.894l-4-2A1 1 0 016 19v-5.293l-7-7A1 1 0 013 4z"
                />
                </svg>
                
                <h1 class="pt-[2px]">Filter</h1>
            </button>

            <button class="flex items-center gap-1 px-3 py-1 border border-gray-300 rounded-lg text-gray-700 text-xs font-semibold hover:bg-gray-200 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                </svg>

                Export
            </button>

            <button class="flex items-center gap-1 px-3 py-1 bg-violet-800 text-white rounded-lg text-xs hover:bg-violet-700 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>
               <p class="pt-[1px]">  Create Invoice</p>
                <span class="ml-2 text-xs font-bold bg-violet-200 text-violet-700 rounded-md px-1 py-[1px]">
                N
                </span>
            </button>
        </div>

    </div>



    <div class="h-full mt-5">
        <div class="overflow-x-auto">
            <table class="table-auto  w-full border-collapse text-sm text-gray-700">
            <thead class=" border-b border-gray-200 text-left">
                <tr>
                    <th class="px-6 py-3 font-bold">AMOUNT</th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold">INVOICE NUMBER</th>
                    <th class="text-left flex items-center gap-1 px-6 py-3 font-bold">
                        CUSTOMER
                        <x-custom_icon name="settings" class="inline-block w-4 h-4 text-gray-500" />
                    </th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>
                    <th class="px-6 py-3 font-bold"></th>

                    <th class="px-6 py-3 font-bold">DUE</th>
                    <th class="px-6 py-3 font-bold">CREATED</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($invoices as $invoice)
                <tr class="hover:bg-gray-50 border-b border-gray-200">
                
                    <td class="px-6 py-4  text-bold text-black">
                        <div class="flex flex-row gap-2 w-full">
                            <div class=" text-gray-700"> <p class="font-bold"> {{ $invoice['amount'] }}</p></div>
                            <div class="flex flex-row w-full justify-end"><p class="text-gray-500"> {{ $invoice['currency'] }}</p></div>
                        </div>    
                    </td>

                  
                    
                    <td class="px-6 py-4 flex items-center space-x-4 text-end self-end">
                        <div class="flex flex-row w-full justify-end items-center gap-2"> 
                            @if ($invoice['status'] === 'Paid')
                                <x-custom_icon name="switch-horizontal" class="text-gray-500 w-4 h-4" />
                            @endif
                           


                            <span class="text-xs font-medium px-2 py-1 rounded-md
                                {{ 
                                    $invoice['status'] === 'Paid' ? 'bg-[#ccf8d0] text-green-700' :
                                    ($invoice['status'] === 'Outstanding' ? 'bg-[#FFF5CC] text-yellow-800' :
                                    ($invoice['status'] === 'Draft' ? 'bg-gray-200 text-gray-700' :
                                    ($invoice['status'] === 'Past Due' ? 'bg-[#FFE5E5] text-red-800' : '')))
                                }}">
                                {{ $invoice['status'] }}
                            </span>



                        </div>                     
                    </td>

                    <td class="px-6 py-4 text-gray-600">
    
                        <span class="text-sm text-gray-700">{{ $invoice['invoiceNumber'] }}</span>
                        
                    </td>
                    <td class="px-6 py-4 text-gray-600">{{ $invoice['customer'] }}</td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>
                    <td class="px-6 py-4 text-gray-600"></td>

                    <td class="px-6 py-4 text-gray-500">{{ $invoice['due'] }}</td>
                    <td class="px-6 py-4">{{ $invoice['created'] }}</td>

                    <td class="px-6 py-4 text-right relative">
                        <button 
                            class="text-gray-500 hover:text-gray-700 relative" 
                            wire:click="toggleDropdown({{ $loop->index }})" 
                            aria-haspopup="true" 
                            aria-expanded="{{ $showDropdowns[$loop->index] ? 'true' : 'false' }}">
                            <x-custom_icon name="dots-vertical" class="inline-block w-4 h-4 text-gray-500" />
                        </button>

                        @if ($showDropdowns[$loop->index])
                        <div class="z-10 absolute flex top- right-0 rounded-lg bg-gray-100 text-gray-200 after:absolute after:-top-1 after:right-[20px] after:h-0 after:w-0 after:-translate-x-1/2 after:rotate-45 after:border-8 after:border-gray-50 after:content-['']">
                        <div id="dropdown" class="z-10 w-40 rounded-lg bg-gray-50 shadow">
                                <div class="px-4 pt-2 text-sm font-semibold uppercase text-left text-gray-400"><p>Actions</p></div>

                                <ul class="pb-2 text-sm text-left text-gray-700" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                    <a href="#" class="block px-4 py-2 font-semibold text-violet-400 hover:bg-gray-100">Download PDF</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 font-semibold text-violet-400 hover:bg-gray-100">Duplicate Invoice</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 font-semibold text-red-800 hover:bg-gray-100">Delete draft</a>
                                    </li>
                                </ul>
                                <hr />
                                <div class="px-4 text-left pb-1 pt-4 text-sm font-semibold uppercase text-gray-400"><p>Connections</p></div>
                                <ul class="pb-2 text-sm text-gray-700 text-left" aria-labelledby="dropdownDefaultButton">
                                    <li class="flex flex-row  items-center">
                                    <a href="#" class="block pl-4 pr-2 py-2 font-semibold text-violet-400 hover:bg-gray-100">View customer</a>
                                    <x-heroicons::micro.solid.arrow-long-right class="w-6 h-6 text-violet-400 pt-1 font-bold" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                    </td>
                                    </tr>
                @endforeach
                
            </tbody>
            </table>
        </div>
    </div>


    

</div>






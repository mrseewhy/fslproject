<?php

namespace App\Livewire\Pages\Client;

use App\Models\Casefile;
use App\Models\ClientContractAgreement;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Session;

#[Layout('layouts.client')]

class ContractAgreement extends Component
{
    public $case_id;
    public $signed;

    public function mount(){
        $this->case_id = Session::get('case_id');
    }

    public function agreementSigned (){

        $this->validate([
            'signed'=> 'filled',
        ]);

        ClientContractAgreement::create([
            'casefile_id' => Session::get('case_id'),
            'signed' => true,
        ]);

        session()->forget('case_id');

        return $this->redirect('/dashboard');

    }
    public function render()
    {
        $case = Casefile::find($this->case_id);
        return view('livewire.pages.client.contract-agreement', [
            'case'=> $case
        ]);
    }
}

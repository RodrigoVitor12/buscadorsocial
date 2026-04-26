<?php

use Livewire\Component;

new class extends Component {
    public function changePlan () {
        $plan_price;
        switch(session('selected_plan')) {
            case 'Starter':
                $plan_price = '0,00';
                break;
            case 'One':
                $plan_price = '90,00';
                break;
            case 'Two':
                $plan_price = '160,00';
                break;
            case 'Bronze':
                $plan_price = '300,00';
                break;
            case 'Prata':
                $plan_price = '400,00';
                break;
            case 'Ouro':
                $plan_price = '700,00';
                break;
            case 'Semestre Max':
                $plan_price = '990,00';
                break;
        }
        $user = Auth::user();
        $user->plan = session('selected_plan');
        $user->payment_status = 'pendente';
        $user->plan_price = $plan_price;
        $user->save();
        
        session()->forget('selected_plan');
    }
};
?>

<div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-4 flex items-center justify-between mb-4 mt-4">
    @if (session('selected_plan'))
        <div>
            <p class="text-sm text-yellow-400">
                Plano selecionado:
                <span class="font-semibold text-yellow-300">
                    {{ session('selected_plan') }}
                </span>
            </p>
            
                <button wire:click="changePlan" class="px-4 mt-4 py-2 bg-yellow-500 text-black rounded-lg font-medium hover:bg-yellow-400 transition ">
                    Confirmar mudança
                </button>
        </div>
    @else
         <p class="text-sm text-yellow-400">Plano Alterado com Sucesso! Atualize a página</p>
    @endif

</div>

<?php

use Livewire\Component;

new class extends Component
{
   public function checkPayment() {
    $user = Auth::user();
    $user->payment_status = 'em analise';
    $user->save();
   }
};
?>

<div>
    @if (auth()->user()->payment_status == 'pendente')
        <button wire:click="checkPayment" class="px-4 py-2 bg-yellow-500 text-black rounded-lg font-medium hover:bg-yellow-400 transition mt-4">
            Confirmar pagamento
        </button>
    @else
        <p class="text-white mt-2">Seu pedido de pagamento foi enviado, sua conta será ativada em até 24h</p>
    @endif
</div>
<?php

use Livewire\Component;

new class extends Component {
    public $users;

    public function mount($users) {
        $this->users = $users;
    }

    public function handleActive () {
        dd('Ativo');
    }
};
?>

<tbody class="text-gray-300">

    <!-- USER -->
    @foreach ($users as $user)
        <tr class="border-t border-gray-700 hover:bg-[#111315] transition">
            <td class="p-4">{{$user->name}}</td>
            <td class="p-4">{{$user->email}}</td>
            <td class="p-4">
                @foreach ($user->ip_address as $ip)
                    [{{ $ip }}] /
                @endforeach
            </td>

            <td class="p-4">
                <span class="px-3 py-1 text-xs rounded-lg bg-yellow-500 text-gray-900">
                    {{$user->status}}
                </span>
            </td>

            <td class="p-4 flex gap-2 flex-wrap">

                <!-- Toggle Status -->
                <button wire:click="handleActive" class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition">
                   {{$user->status == 'ativo' ? 'desativar' : 'ativo'}}
                </button>

                <!-- Edit IP -->
                <button class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-white hover:text-black transition">
                    Alterar IP
                </button>

                <!-- Delete -->
                <button
                    class="px-3 py-1 text-xs rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white transition">
                    Deletar
                </button>

            </td>
        </tr>
    @endforeach

</tbody>

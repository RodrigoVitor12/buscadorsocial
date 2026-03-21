<?php

use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $users;

    public function mount($users) {
        $this->users = $users;
    }

    public function handleActive ($id) {
        $user = User::find($id);

        $user->status = $user->status == 'ativo' ? 'inativo' : 'ativo';

        $user->save();

        $this->users = User::all();
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
                <span class="px-3 py-1 text-xs rounded-lg text-gray-900 {{$user->status == 'ativo' ? 'bg-yellow-500' : 'bg-red-500' }}">
                    {{$user->status}}
                </span>
            </td>

            <td class="p-4 flex gap-2 flex-wrap">

                <!-- Toggle Status -->
                <button 
                    wire:click="handleActive({{$user->id}})" 
                    class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition"
                >
                   {{$user->status == 'ativo' ? 'desativar' : 'ativar'}}
                </button>

                <!-- Edit IP -->
                <a href="{{ route('admin.update-info-user', $user->id) }}" class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-white hover:text-black transition">
                    Alterar Plano
                </a>

                <!-- Delete -->
                <button
                    class="px-3 py-1 text-xs rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white transition">
                    Deletar
                </button>

            </td>
        </tr>
    @endforeach

</tbody>

<?php

use Livewire\Component;
use App\Models\Clicks;

new class extends Component {
    public $link;
    public $perfil;
    public $title;
    public $description;

    public function saveClick() {
        Clicks::create([
            'link' => $this->link,
            'perfil' => $this->perfil,
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => auth()->user()->id
        ]);
    }
};
?>

<a wire:click="saveClick" href="{{ $link }}" target="_blank"
    class="inline-flex items-center gap-1 
                    text-amber-400 font-medium 
                    hover:text-amber-300 transition-colors">
    Acessar
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3h7m0 0v7m0-7L10 14" />
    </svg>
</a>

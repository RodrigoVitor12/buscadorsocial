<?php

use Livewire\Component;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

new class extends Component {

    public $profile;
    public $title;
    public $description;
    public $link;

    public $isFavorited = false;

    public function mount($profile, $title, $description, $link)
    {
        $this->profile = $profile;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;

        $this->checkIfFavorited();
    }

    public function checkIfFavorited()
    {
        $this->isFavorited = Favorite::where('user_id', Auth::id())
            ->where('link', $this->link)
            ->exists();
    }

    public function toggle()
    {
        $favorite = Favorite::where('user_id', Auth::id())
            ->where('link', $this->link)
            ->first();

        if ($favorite) {
            $favorite->delete();
            $this->isFavorited = false;
        } else {
            Favorite::create([
                'profile' => $this->profile,
                'title' => $this->title,
                'description' => $this->description,
                'link' => $this->link,
                'user_id' => Auth::id(),
            ]);

            $this->isFavorited = true;
        }
    }
};
?>

<button 
    wire:click="toggle"
    type="button"
    class="px-4 py-2 rounded-lg cursor-pointer transition-all duration-200
    {{ $isFavorited 
        ? 'bg-green-500 hover:bg-green-600 text-white' 
        : 'bg-yellow-500 hover:bg-yellow-600 text-black' }}">
    
    {{ $isFavorited ? '✓ Favoritado' : 'Salvar como Favorito' }}
</button>

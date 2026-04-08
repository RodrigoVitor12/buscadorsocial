<div class="max-w-3xl w-full bg-[#0f172a] rounded-2xl p-6 
            border border-amber-500/40 
            shadow-[0_0_0_1px_rgba(251,191,36,0.15)]">

    {{-- Top --}}
    <div class="flex items-center gap-3 mb-4">
        {{-- <span class="px-3 py-1 text-sm font-medium 
                     text-pink-400 bg-pink-500/10 
                     border border-pink-500/20
                     rounded-full">
            {{$rede}}
        </span> --}}

        <div class="flex items-center gap-1 text-sm text-slate-400">
            {{-- Ícone usuário --}}
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-4 h-4 opacity-70" 
                 fill="none" 
                 viewBox="0 0 24 24" 
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M5.121 17.804A9 9 0 1118.364 4.56 
                         9 9 0 015.12 17.804z" />
            </svg>
            {{$perfil}}
        </div>
    </div>

    {{-- Username --}}
    <h2 class="text-2xl font-semibold text-amber-400 mb-3">
        <span class="font-normal text-amber-400/80">• {{$title}}</span>
    </h2>

    {{-- Description --}}
    <p class="text-slate-400 text-base leading-relaxed mb-4">
        {{$description}}
    </p>

    {{-- Link --}}
    <div class="flex justify-around">
        <livewire:link-access :link="$link" :perfil="$perfil" :title="$title" :description="$description" wire:key="{{$description}}" />

        <livewire:favorite :profile="$perfil" :title="$title" :description="$description" :link="$link" />
    </div>
</div>



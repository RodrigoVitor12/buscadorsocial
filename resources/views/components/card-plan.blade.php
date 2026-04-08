<div>
    <div class="bg-[#181A1D] border border-gray-700 rounded-2xl p-6 text-center">
            <h3 class="text-lg font-semibold text-white mb-2">{{$typePlan}}</h3>
            <p class="text-3xl font-bold text-yellow-500 mb-4">R$ {{$price}}</p>

            <ul class="text-sm text-gray-400 space-y-2 mb-6">
                <li>{{$credits}} créditos</li>
                <li>{{$daysToUse}}</li>
                <li>Até {{$results}} resultados</li>
                <li>R$ {{$priceForSearch}} por busca</li>
                <li class="text-green-400">{{$benefits ? $benefits : ''}}</li>
            </ul>

            @if ($userPlan != $typePlan)
                <a href="{{ route('plan.select', $typePlan) }}" class="w-full bg-yellow-500 text-gray-900 p-2 rounded-lg font-medium hover:opacity-90">
                    Escolher plano 
                </a>
            @else
                <a href="{{ route('plan.select', $typePlan) }}" class="w-full bg-green-500 text-gray-900 p-2 rounded-lg font-medium hover:opacity-90">
                    Plano Atual
                </a>
            @endif
        </div>
</div>
@if (!$loggedUser->cards->count() == 0)
    @foreach ($loggedUser->cards as $paymentMethod)
        <x-card :card="$paymentMethod" />
    @endforeach
    @error('card_id')
        <div class="text-xs mt-1 text-rose-500">{{ $message }}</div>
    @enderror
@else
    <div class="p-4 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">


        <p class="text-sm font-medium text-red-800">You must Have a card to complete this transaction !!!</p>

    </div>

@endif





<div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none"
    aria-hidden="true"></div>

<!-- Add card button -->
<a href="{{ route('pay') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
        <path
            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
    </svg>
    <span class="xs:block ml-2">Add Card</span>
</a>

<div
    {{ $attributes->merge([
        'class' => 'w-48 h-28 rounded-xl overflow-hidden shadow-lg mt-2 mb-3 border-b rounded-b-[30px] transform transition duration-200 hover:scale-105'
    ]) }}
>
    <div class="relative p-4">
        @if($card_title->isEmpty())
            <div class="font-bold text-xl mb-2 text-center border border-gray-300 rounded-md shadow-lg montserrat-bold">
                Card Title
            </div>
        @else
            <div
                class="font-bold text-xl mb-2 text-center rounded-md shadow-lg montserrat-bold
                    @if ($card_title == 'Pending') bg-yellow-400 @endif
                    @if ($card_title == 'On Process') bg-blue-400 @endif
                    @if ($card_title == 'Released') bg-green-400 @endif
                    @if ($card_title == 'Revenue') bg-orange-400 @endif
                    @if ($card_title == 'Paid') bg-green-400 @endif
                    p-2">
                {{ $card_title }}
            </div>
        @endif

        <p class="text-gray-700 text-xl px-2 text-center montserrat-bold">
            {{ $slot }}
        </p>
    </div>
</div>

<!-- Font Import -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Font Style -->
<style>
    .montserrat-bold {
        font-family: "Montserrat", serif;
        font-weight: 700;
        color: black;
    }
</style>

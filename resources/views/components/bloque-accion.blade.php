<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg font-bold text-black px-4 pb-6 my-2 max-w-5xl mx-auto">
        @if (isset($title))
            <h2 class="bg-white font-bold text-center text-xl my-2">
                    {{ $title }}
            </h2>
        @endif
        <div class="space-y-2">
            {{$slot}}
        </div>
</div>
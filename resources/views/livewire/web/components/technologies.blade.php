<div class="w-full">

    <div class="max-w-screen-lg mx-auto flex flex-wrap">
        @for ($i = 0; $i < 12; $i++)
            <div class="p-2 aspect-square w-1/2 md:w-1/4 lg:w-1/6">
                <div class="w-full h-full rounded border border-dracula-pink-300 bg-dracula-darker-800 flex flex-col justify-center items-center">

                    <x-devicon-php class="w-24 h-24" />
                    <span class="text-lg font-semibold">PHP</span>
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="h-svh">
    <div class="w-full h-full max-w-screen-lg mx-auto px-4 flex flex-col items-center justify-center">
        <div class="text-center font-roboto space-y-2 mb-4">
            <h1 class="text-4xl md:text-6xl capitalize font-bold" x-data="{ intersect: false }"
                x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-up animate-delay-100' : 'opacity-0'">
                Vitor Bizarra
            </h1>
            <h2 class="text-2xl md:text-5xl capitalize font-semibold" x-data="{ intersect: false }"
                x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-up animate-delay-200' : 'opacity-0'">
                Desenvolvedor Back-end
            </h2>
            <p class="font-montserrat" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-up animate-delay-300' : 'opacity-0'">
                E às vezes front-end.
            </p>
        </div>
        <div class="flex flex-wrap gap-4 font-montserrat font-semibold justify-center items-center">
            <button
                class="flex items-center gap-1.5 px-4 py-3 border bg-dracula-purple-800 border-dracula-purple-800 rounded-lg hover:bg-dracula-light-50 hover:text-dracula-purple-800 hover:border-dracula-light-50 transition-all ease-in-out"
                x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-up animate-delay-[400ms]' : 'opacity-0'">
                <x-fas-envelope class="h-5 w-5" />
                <span class="leading-tight">Contato</span>
            </button>
            <button
                class="flex items-center gap-1.5 px-4 py-3 border border-dracula-light-50 rounded-lg hover:bg-dracula-light-50 hover:text-zinc-900 transition-all ease-in-out"
                x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-up animate-delay-[500ms]' : 'opacity-0'">
                <x-fab-github class="h-5 w-5" />
                <span class="leading-tight">GitHub</span>
            </button>
        </div>
    </div>
</div>

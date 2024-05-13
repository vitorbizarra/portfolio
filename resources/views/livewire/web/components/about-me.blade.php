<div class="min-h-svh bg-zinc-900 flex items-center">
    <div class="max-w-screen-xl mx-auto px-4 py-8 lg:py-16">
        <div class="flex flex-col md:flex-row md:items-center gap-8 lg:gap-16">
            <div class="w-full md:w-1/2">
                <h1 x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    class="text-2xl lg:text-4xl font-roboto font-bold mb-4 relative before:absolute before:bottom-0 before:translate-y-2 before:h-0.5 lg:before:h-1 before:w-16 before:bg-dracula-purple-600"
                    :class="intersect ? 'animate-fade-right animate-delay-100' : 'opacity-0'">
                    Sobre
                </h1>
                <h2 x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    class="text-lg lg:text-2xl font-roboto mb-4 lg:mb-8"
                    :class="intersect ? 'animate-fade-right animate-delay-200' : 'opacity-0'">
                    Conheça um pouco <br> sobre mim
                </h2>
                <div class="text-gray-200 font-montserrat space-y-4">
                    <p x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                        :class="intersect ? 'animate-fade-right animate-delay-300' : 'opacity-0'">
                        Desenvolvedor Backend PHP, técnico em Análise e Desenvolvimento de Sistemas pela
                        ETEC Fernando Prestes de Sorocaba e, atualmente, cursando o tecnólogo também em Análise e
                        Desenvolvimento de Sistemas na Facens.
                    </p>
                    <p x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                        :class="intersect ? 'animate-fade-right animate-delay-300' : 'opacity-0'">
                        Possuo experiência em PHP, Laravel, Livewire Filament, Alpine.js, Tailwind CSS, além de
                        habilidades
                        em integração de APIs e gerenciamento de código com Git e GitHub.
                    </p>

                </div>
            </div>
            <img src="{{ asset('svgs/undraw_programming_re_kg9v.svg') }}"
                class="w-full md:w-1/2 h-full object-contain object-center select-none pointer-events-none"
                x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-delay-200' : 'opacity-0'">
        </div>
    </div>
</div>

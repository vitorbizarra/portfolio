<div class="w-full bg-zinc-800 rounded-t-3xl py-8 lg:py-16">
    <div class="flex flex-col md:flex-row gap-4 md:gap-8 max-w-screen-lg mx-auto font-roboto px-4 space-y-4">
        <div class="w-full md:w-1/2">
            <h1 x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                class="text-2xl lg:text-4xl font-roboto font-bold mb-4 relative before:absolute before:bottom-0 before:translate-y-2 before:h-0.5 lg:before:h-1 before:w-16 before:bg-dracula-purple-600"
                :class="intersect ? 'animate-fade-right animate-delay-100' : 'opacity-0'">
                Contato
            </h1>
            <h2 x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                class="text-lg lg:text-2xl font-roboto mb-4 lg:mb-8"
                :class="intersect ? 'animate-fade-right animate-delay-200' : 'opacity-0'">
                Me envie uma mensagem através do formulário ou me encontre pelos meios abaixo:
            </h2>
            <ul
                class="list-inside space-y-4 text-lg lg:text-xl font-montserrat text-gray-200 *:w-full *:inline-flex *:items-center *:gap-2">
                <li x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    :class="intersect ? 'animate-fade-right animate-delay-100' : 'opacity-0'">
                    <x-fas-envelope class="h-4 w-4 lg:h-6 lg:w-6" />
                    <a href="mailto:eu@vitorbizarra.dev.br" target="_blank" class="hover:underline">
                        eu@vitorbizarra.dev.br
                    </a>
                </li>
                <li x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    :class="intersect ? 'animate-fade-right animate-delay-200' : 'opacity-0'">
                    <x-fab-github class="h-4 w-4 lg:h-6 lg:w-6" />
                    <a href="https://github.com/vitorbizarra" target="_blank" class="hover:underline">
                        github.com/vitorbizarra
                    </a>
                </li>
                <li x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    :class="intersect ? 'animate-fade-right animate-delay-300' : 'opacity-0'">
                    <x-fab-linkedin class="h-4 w-4 lg:h-6 lg:w-6" />
                    <a href="https://linkedin.com/in/vitor-bizarra" target="_blank" class="hover:underline">
                        in/vitor-bizarra
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/2 space-y-4">
            <div class="" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-delay-100' : 'opacity-0'">
                <x-input label="Nome" placeholder="Seu nome" />

            </div>

            <div class="" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-delay-200' : 'opacity-0'">
                <x-input label="Seu melhor email" placeholder="seu@email.com" />

            </div>

            <div class="" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-delay-300' : 'opacity-0'">
                <x-input label="Assunto" placeholder="Motivo do contato" />

            </div>

            <div class="" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-delay-[400ms]' : 'opacity-0'">
                <x-textarea label="Mensagem" placeholder="Escreva aqui sua mensagem" />

            </div>

            <button type="submit"
                class="!mt-8 w-full flex items-center justify-center gap-1.5 px-4 py-3 border border-dracula-light-50 rounded-lg hover:bg-dracula-light-50 hover:text-zinc-900 transition-all ease-in-out"
                x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-delay-[500ms]' : 'opacity-0'">
                <x-fas-paper-plane class="h-5 w-5" /> <span>Enviar</span>
            </button>
        </div>
    </div>
</div>

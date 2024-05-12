<div class="max-w-screen-lg mx-auto px-4 py-8 lg:py-16">
    <div class="flex flex-col justify-center">
        <div class="text-right">
            <h1 x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                class="text-2xl lg:text-4xl font-roboto font-bold mb-4 relative before:absolute before:bottom-0 before:right-0 before:translate-y-2 before:h-0.5 lg:before:h-1 before:w-16 before:bg-dracula-purple-600"
                :class="intersect ? 'animate-fade-left animate-delay-100' : 'opacity-0'">
                Tecnologias
            </h1>
            <h2 x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                class="text-lg lg:text-2xl font-roboto mb-4 lg:mb-8"
                :class="intersect ? 'animate-fade-left animate-delay-200' : 'opacity-0'">
                Conheça algumas tecnologias <br> com as quais trabalho
            </h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach ($technologies as $technology)
                <div x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    class="aspect-square rounded border border-dracula-purple-600 bg-zinc-800 flex flex-col gap-2 justify-center items-center
                    odd:animate-delay-100
                    even:animate-delay-200

                    md:[&:nth-child(4n-3)]:animate-delay-[100ms]
                    md:[&:nth-child(4n-2)]:animate-delay-[200ms]
                    md:[&:nth-child(4n-1)]:animate-delay-[300ms]
                    md:[&:nth-child(4n)]:animate-delay-[400ms]

                    lg:[&:nth-child(6n-5)]:animate-delay-[100ms]
                    lg:[&:nth-child(6n-4)]:animate-delay-[200ms]
                    lg:[&:nth-child(6n-3)]:animate-delay-[300ms]
                    lg:[&:nth-child(6n-2)]:animate-delay-[400ms]
                    lg:[&:nth-child(6n-1)]:animate-delay-[500ms]
                    lg:[&:nth-child(6n)]:animate-delay-[600ms]
                    "
                    :class="intersect ? 'animate-fade-up animate-delay-500' : 'opacity-0'">

                    @svg($technology->icon, 'w-16 h-16')

                    <span class="font-semibold font-montserrat">{{ $technology->name }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

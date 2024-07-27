<div class="pt-10 pb-10 bg-indigo-50">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">

            <h1 class="my-4 text-5xl font-bold leading-tight text-blue-600">
                Commission d'Equivalence des Niveaux d'Etudes
            </h1>
            <p class="leading-normal text-2xl mb-8 font-serif">
                La porte d'acces aux equivalences des
                titres academiques obtenus hors de la Republique Democratique du Congo
            </p>
            @guest
                <a wire:navigate
                    class="mx-auto lg:mx-0 hover:underline bg-blue-600 text-white text-3xl font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                    href="/register">
                    Accéder
                </a>
            @endguest
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-3 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{ asset('images/hero.png') }}" />
            <p class="uppercase tracking-loose w-full"><span class="text-blue-600">Soumettre</span>, <span
                    class="text-red-600">Suivre</span>, <span class="text-blue-600">Receptionner</span> et <span
                    class="text-red-600">Verifier</span></p>
        </div>
    </div>
</div>

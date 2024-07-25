<div class=" py-10 bg-indigo-50">
    <div class="flex justify-center">
        <p
            class="  text-center  text-black text-xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Apropos de la Commission
        </p>
    </div>
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">

        <!--Right Col-->
        <div class="w-full md:w-2/5 py-3 text-center ">

            <img class=" shadow-lg- h-auto max-w-lg rounded-full" width="600"
                src="{{ asset('images/about-img.jpg') }}" />
        </div>
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">

            <p class=" text-xl mb-8 font-serif">
                Créée par l'ordonnance numéro 209 du 28 juin 1964, la Commission d'équivalence des niveaux
                d'Etudes
                accorde
                les équivalences aux titres académiques obtenus à l'étranger conformément à la réglementation en
                vigueur
                en République
                démocratique du Congo.
            </p>

        </div>
    </div>
    <div class="flex justify-center">
        <a wire:navigate href="/register"
            class=" hover:underline text-center bg-blue-600 text-white text-xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Accéder
        </a>
    </div>
</div>

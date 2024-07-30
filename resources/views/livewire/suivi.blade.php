<div class="w-full  py-1 mb-16 px-4 sm:px-6 lg:px-8 mx-auto min-h-screen">

    <ol class="flex items-center w-full text-xs text-gray-900 font-medium sm:text-base ">
        <li
            class="flex w-full relative text-indigo-600  after:content-['']  after:w-full after:h-0.5  after:bg-indigo-600 after:inline-block after:absolute lg:after:top-5 after:top-3 after:left-4">
            <div class="block whitespace-nowrap z-10">
                <span
                    class="w-6 h-6 bg-indigo-600 border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-3 text-sm text-white lg:w-10 lg:h-10">1</span>
                <span class="hidden md:block lg:block">Verification</span>
            </div>
        </li>
        <li
            class="flex w-full relative text-gray-900  after:content-['']  after:w-full after:h-0.5  after:bg-gray-200 after:inline-block after:absolute lg:after:top-5 after:top-3 after:left-4">
            <div class="block whitespace-nowrap z-10">
                <span
                    class="w-6 h-6 bg-indigo-50 border-2 border-indigo-600 rounded-full flex justify-center items-center mx-auto mb-3 text-sm text-indigo-600 lg:w-10 lg:h-10">2</span>

                <span class="hidden md:block lg:block"> Authentification</span>
            </div>
        </li>

        <li
            class="flex w-full relative text-gray-900  after:content-['']  after:w-full after:h-0.5  after:bg-gray-200 after:inline-block after:absolute lg:after:top-5  after:top-3 after:left-4">
            <div class="block whitespace-nowrap z-10">
                <span
                    class="w-6 h-6 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center mx-auto mb-3 text-sm  lg:w-10 lg:h-10">3</span>

                <span class="hidden md:block lg:block">Preparation</span>
            </div>
        </li>
        <li
            class="flex w-full relative text-gray-900  after:content-['']  after:w-full after:h-0.5  after:bg-gray-200 after:inline-block after:absolute lg:after:top-5 after:top-3 after:left-4">
            <div class="block whitespace-nowrap z-10">
                <span
                    class="w-6 h-6 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center mx-auto mb-3 text-sm  lg:w-10 lg:h-10">4</span>

                <span class="hidden md:block lg:block">Attente Signature</span>
            </div>
        </li>
        <li class="flex relative text-gray-900  ">



            <div class="block whitespace-nowrap z-10">
                <span
                    class="w-6 h-6 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center mx-auto mb-3 text-sm  lg:w-10 lg:h-10">5</span>

                <span class="hidden md:block lg:block"> Retrait</span>
            </div>
        </li>
    </ol>






    <div class="container mx-auto mt-16 ">
        <div>

            <div class="bg-blue-50 relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
                <div class="flex justify-center bg-blue-50">
                    <img src="{{ url('storage', $dossier->photo) }}" alt=""
                        class="rounded-full mx-auto absolute -top-14 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                </div>


                <div class="mt-20">
                    <p class="font-bold text-center text-md text-blue-600 font-sans">Demande d'Equivalence concernant :
                    </p>
                    <h2 class="font-bold text-center text-3xl text-gray-900 font-sans">{{ $dossier->nom }}
                        {{ $dossier->postnom }} {{ $dossier->prenom }}</h2>
                    <p class="text-center text-md text-gray-400 font-medium">{{ $dossier->grade }} en
                        {{ $dossier->option }}</p>

                    <p class="text-center text-md text-gray-400 font-medium">{{ $dossier->nom_univ_fr }} </p>
                    <p class="text-center text-md text-gray-400 font-medium">{{ $dossier->pays_etude }} </p>
                    <p class="text-center text-md text-gray-400 font-medium">{{ $dossier->email_requerant }} </p>
                    <p class="text-center text-md text-gray-400 font-medium">{{ $dossier->phone_requerant }} </p>
                    <p>
                        <span>

                        </span>
                    </p>
                    <div class="my-5 px-6">
                        <div href="#"
                            class="text-gray-900 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-100 font-mono">
                            <p> Dossier
                                Numero
                                : {{ $dossier->num_dossier }}</p>
                            <p> Enregistre le
                                {{ $dossier->created_at->format('d-m-Y') }}
                                à {{ $dossier->created_at->format('H:i:s') }}</ </p>
                        </div>

                    </div>
                    <!--
                    <div class="flex justify-between items-center my-5 px-6">
                        <a href=""
                            class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Facebook</a>
                        <a href=""
                            class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Twitter</a>
                        <a href=""
                            class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Instagram</a>
                        <a href=""
                            class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Email</a>
                    </div>
                -->
                    <div class="w-full">

                        <div class="mt-5 w-full flex flex-col items-center overflow-hidden text-sm">
                            <div class="bg-blue-200 w-full">
                                <h3 class="font-medium text-gray-900 text-center text-lg px-6 bg-blue-200">Situation du
                                    Dossier</h3>
                            </div>
                            <a href="#"
                                class="w-full font-sans border-t border-gray-100 text-2xl bg-gray-100 text-center text-blue-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">

                                {{ $dossier->statut }} <br>
                                <span class="text-gray-500 text-sm">Depuis {{ $dossier->updated_at->format('d-m-Y') }}
                                    à
                                    {{ $dossier->updated_at->format('H:i:s') }}</span>
                            </a>

                            <!--
                            <a href="#"
                                class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                    class="rounded-full h-6 shadow-md inline-block mr-2">
                                Added new profile picture
                                <span class="text-gray-500 text-xs">42 min ago</span>
                            </a>

                            <a href="#"
                                class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                    class="rounded-full h-6 shadow-md inline-block mr-2">
                                Posted new article in <span class="font-bold">#Web Dev</span>
                                <span class="text-gray-500 text-xs">49 min ago</span>
                            </a>

                            <a href="#"
                                class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                    class="rounded-full h-6 shadow-md inline-block mr-2">
                                Edited website settings
                                <span class="text-gray-500 text-xs">1 day ago</span>
                            </a>

                            <a href="#"
                                class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150 overflow-hidden">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                    class="rounded-full h-6 shadow-md inline-block mr-2">
                                Added new rank
                                <span class="text-gray-500 text-xs">5 days ago</span>
                            </a>
                        -->
                            <a wire:navigate
                                class="bg-red-400 text-white text-sm px-4 py-2 right-0 my-1 focus:outline-none"
                                href="/user-espace">Retour</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>

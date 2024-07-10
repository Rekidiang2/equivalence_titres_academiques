<form wire:submit.prevent='demander' class="max-w-2xl mx-auto">
    <div class="flex justify-center">
        <p
            class="text-center  text-black text-xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Formulaire de Demande
        </p>
    </div>
    <!-- Step 1 -->

    <div>
        <div class="mb-5">
            <p class="bg-blue-600 text-white font-bold text-lg pl-3">Identite</p>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group bg-gray-300 rounded-full">

            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="photo" id="photo"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('first_name') border-red-500 @enderror">

                @error('photo')
                <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Joindre
                    votre Photo</label>
            </div>

        </div>
        <!-- nom postnom & prenom -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="nom" id="nom"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('first_name') border-red-500 @enderror"
                    placeholder=" ">
                @error('nom')
                <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nom</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="postnom" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Postnom</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="prenom" id="prenom"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="prenom"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Prenom</label>
            </div>
        </div>
        <!-- genre, lieu & date de naissance -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Genre</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Lieu de Naissance</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date de Naissance</label>
            </div>
        </div>
        <!-- nationalite, type identite & numero identite -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nationalite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Type Piece d'Identite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Numero Piece d'Identite</label>
            </div>
        </div>

        <!-- email & phone -->

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Addresse Email</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Telephone</label>
            </div>
        </div>

    </div>

    <!-- Step 2 -->

    <div>
        <div class="mb-5">
            <p class="bg-blue-600 text-white font-bold text-lg pl-3">Institution de Formation</p>
        </div>


        <!-- nom d'origine,  nom en francais & secteur -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nom d'Origine</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nom en Francais</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Secteur</label>
            </div>
        </div>
        <!-- date creatiom, Pays & province -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date de Creation</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Pays</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Province</label>
            </div>
        </div>
        <!-- email & telephone -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email 1</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email 2</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Telephone</label>
            </div>
        </div>

        <!-- FIN -->


        <!-- Step 3 -->

        <div>
            <div class="mb-5">
                <p class="bg-blue-600 text-white font-bold text-lg pl-3">Cursus Academique</p>
            </div>


            <!-- num diplome, grade & option -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Numero Diplome</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Grade</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Option</label>
                </div>
            </div>
            <!-- date debut cursus, date fin cursus, date delivrance diplome -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="date" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date Debut Cursus</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="date" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date Fin Cursus</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="date" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date Delivrance Diplome</label>
                </div>
            </div>


            <!-- FIN -->


        </div>

        <!-- Step 3 -->

        <div>
            <div class="mb-5">

                <p class="bg-blue-600 text-white font-bold text-lg pl-3">
                    Joindre
                    Documents</p>
            </div>


            <!-- num diplome, grade & option -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Lettre de la Demande</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Identite</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Preuve de Sejour</label>
                </div>
            </div>
            <!-- date debut cursus, date fin cursus, date delivrance diplome -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Dernier Diplome </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text- text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Diplomes Precedents</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Tout les releves de Cottes</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" name="floating_email" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-md  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    Diplome de Base</label>
            </div>


            <!-- FIN -->


        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>
</form>

<form wire:submit.prevent='demander' class="max-w-4xl mx-auto">





    <div class="mb-5">
        <p class="bg-blue-600 text-white font-bold text-lg pl-3">Identite</p>
    </div>
    <label for="name" class="mb-1 block text-base font-medium text-[#07074D] text-center">
        Votre Photo
    </label>
    <div class="flex justify-center mb-3">
        <div
            class="relative flex flex-col text-gray-700 bg-gray-100 shadow-md bg-clip-border rounded-xl w-4xl items-center  justify-center ">
            <div
                class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-60 h-50 flex items-center justify-center">
                @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" alt="profile-picture" />
                @endif
            </div>
            <div class="p-2 text-center">


                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Joindre
                    Photo</label>
                <input wire:model="photo"
                    class="block w-full py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('photo') border-red-500 @enderror"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">




            </div>
            @error('photo')
            <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
            @enderror
        </div>
    </div>


    <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/3">
            <div class="mb-2">
                <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
                    Nom
                </label>
                <input wire:model='nom' placeholder="Votre Nom"
                    class="w-full rounded-md border text-base font-medium focus:shadow-md text-[#6B7280] outline-none focus:border-[#6A64F1] py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('nom') border-red-500 @enderror "
                    id="nom" type="text">
                @error('nom')
                <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="w-full px-3 sm:w-1/3">
            <div class="mb-5">
                <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
                    Postnom
                </label>
                <input type="text" wire:model="postnom" id="postnom" placeholder="Votre Postnom"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('postnom') border-red-500 @enderror" />
                @error('postnom')
                <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="w-full px-3 sm:w-1/3">
            <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
                Prenom
            </label>
            <div class="mb-5">
                <input type="text" wire:model="prenom" id="state" placeholder="Votre Prenom"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('prenom') border-red-500 @enderror" />
                @error('prenom')
                <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
            </div>
        </div>

    </div>
    <div class="mb-5">
        <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
            Full Name
        </label>
        <input type="text" name="name" id="name" placeholder="Full Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
    </div>
    <div class="mb-5">
        <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
            Phone Number
        </label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
    </div>
    <div class="mb-5">
        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
            Email Address
        </label>
        <input type="email" name="email" id="email" placeholder="Enter your email"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
    </div>
    <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                    Date
                </label>
                <input type="date" name="date" id="date"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                    Time
                </label>
                <input type="time" name="time" id="time"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
        </div>
    </div>

    <div class="mb-5 pt-3">
        <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
            Address Details
        </label>
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <input type="text" name="area" id="area" placeholder="Enter area"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <input type="text" name="city" id="city" placeholder="Enter city"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <input type="text" name="state" id="state" placeholder="Enter state"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <input type="text" name="post-code" id="post-code" placeholder="Post Code"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
            </div>
        </div>
    </div>

    <div>
        <button type="submit"
            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
            Book Appointment
        </button>
    </div>
</form>


<!-- FORM -->
<form wire:submit.prevent='demander'>

<div class="flex items-center justify-center px-12 py-2">
    <!-- Author: FormBold Team -->



    <div class="w-full mx-auto 2xl:max-w-7xl flex flex-col justify-center py-4 relative p-8">

        <div
            class="prose text-gray-500 prose-sm prose-headings:font-normal prose-headings:text-xl mx-auto max-w-lg w-full">
            <div>
                <!--
                    <h1>Multi step form</h1>
                    <p class="text-balance">Fill in the form to see how it works.</p>
                    -->
            </div>
        </div> <!-- Starts component -->
        <div class="mt-2 border-t pt-2 bg-blue-600">
            <div x-data="{ step: 1, formData: { name: '', email: '', username: '', password: '' } }" class="rounded-3xl bg-white shadow-2xl border p-0 lg:p-8 lg:pt-1 mt-6">
                <!-- Step 1 -->
                <div x-show="step === 1">
                    <div>
                        <h2 class="text-lg font-medium text-gray-500 text-center">
                            Etape 1:Information Personnelle
                        </h2>
                    </div>

                    <div class="space-y-2 mt-6 border-t pt-2">

                        <div class="grid md:grid-cols-3 md:gap-6">
                            <div class="relative z-0 w-full mb-2 group">
                                <div class="flex justify-center mb-2">
                                    <div
                                        class="relative flex flex-col text-gray-700 bg-gray-100 shadow-md bg-clip-border rounded-xl w-4xl items-center  justify-center ">
                                        <label for="name" class="block text-sm text-gray-700 px-4">Joindre
                                            Photo</label>
                                        <div
                                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-30 h-30 flex items-center justify-center">
                                            @if ($photo)
                                                <img src="{{ $photo->temporaryUrl() }}" alt="Votre Photo"
                                                    class="object-contain h-36 w-36" />
                                            @else
                                                <img src="{{ asset('images/no-image.jpg') }}" alt="Votre Photo"
                                                    class="object-contain h-36 w-36" />
                                            @endif
                                        </div>
                                        <div class="p-2 text-center">
                                            <input wire:model="photo"
                                                class="block w-full py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('photo') border-red-500 @enderror"
                                                aria-describedby="user_avatar_help" id="user_avatar"
                                                type="file">
                                        </div>
                                        @error('photo')
                                            <p class=" text-red-600 mt-2 text-sm" id="password-error">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="relative z-0 w-full mb-1 group">
                                <!-- Nom -->
                                <div>
                                    <label for="nom" class="block text-sm text-gray-700 px-4">Nom</label>
                                    <input wire:model="nom" type="text" id="nom" x-model="formData.nom"
                                        class="block w-full h-8  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('nom') border-red-500 @enderror"
                                        placeholder="Votre nom ">
                                    @error('nom')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <!-- Postnom -->
                                <div>
                                    <label for="postnom"
                                        class="block text-sm text-gray-700 px-4">Postnom</label>
                                    <input wire:model="postnom" type="text" id="postnom"
                                        x-model="formData.postnom"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('postnom') border-red-500 @enderror"
                                        placeholder="Votre postnom ">
                                    @error('postnom')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Prenom -->
                                <div>
                                    <label for="prenom"
                                        class="block text-sm text-gray-700 px-4">Prenom</label>
                                    <input wire:model="prenom" type="text" id="prenom"
                                        x-model="formData.prenom"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('prenom') border-red-500 @enderror"
                                        placeholder="Votre prenom ">
                                    @error('prenom')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Genre -->
                                <div>
                                    <label for="genre" class="block text-sm text-gray-700 px-4">Genre</label>
                                    <input wire:model="genre" type="text" id="genre"
                                        x-model="formData.genre"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('genre') border-red-500 @enderror"
                                        placeholder="Votre Genre ">
                                    @error('genre')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="relative z-0 w-full mb-2 group">
                                <!-- Lieu de Naissance -->
                                <div>
                                    <label for="lieu_naissance" class="block text-sm text-gray-700 px-4">Lieu de
                                        Naissance</label>
                                    <input wire:model="lieu_naissance" type="text" id="lieu_naissance"
                                        x-model="formData.lieu_naissance"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('lieu_naissance') border-red-500 @enderror"
                                        placeholder="Votre lieu de naissance ">
                                    @error('lieu_naissance')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Date de Naissance -->
                                <div>
                                    <label for="date_naissance" class="block text-sm text-gray-700 px-4">Date de
                                        Naissance</label>
                                    <input wire:model="date_naissance" type="text" id="date_naissance"
                                        x-model="formData.date_naissance"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('date_naissance') border-red-500 @enderror"
                                        placeholder="Votre date de naissance ">
                                    @error('date_naissance')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Type Identite -->
                                <div>
                                    <label for="type_identite" class="block text-sm text-gray-700 px-4">Type
                                        Piece d'Identite</label>
                                    <input wire:model="type_identite" type="text" id="type_identite"
                                        x-model="formData.type_identite"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('type_identite') border-red-500 @enderror"
                                        placeholder="Type Piece d'Identite ">
                                    @error('type_identite')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Numero Identite -->
                                <div>
                                    <label for="numero_identite"
                                        class="block text-sm text-gray-700 px-4">Numero
                                        Piece d'Identite</label>
                                    <input wire:model="numero_identite" type="text" id="numero_identite"
                                        x-model="formData.numero_identite"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('numero_identite') border-red-500 @enderror"
                                        placeholder="Numero Piece d'Identite ">
                                    @error('numero_identite')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="grid md:grid-cols-3 md:gap-6">

                            <div class="relative z-0 w-full mb-2 group">
                                <!-- Nationalite -->
                                <div>
                                    <label for="nationalite"
                                        class="block text-sm text-gray-700 px-4">Nationalite</label>
                                    <input wire:model="nationalite" type="text" id="nationalite"
                                        x-model="formData.nationalite"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('nationalite') border-red-500 @enderror"
                                        placeholder="Votre Nationalite ">
                                    @error('nationalite')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Addresse -->
                                <div>
                                    <label for="addresse"
                                        class="block text-sm text-gray-700 px-4">Addresse</label>
                                    <input wire:model="addresse" type="text" id="addresse"
                                        x-model="formData.addresse"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('addresse') border-red-500 @enderror"
                                        placeholder="Votre Addresse ">
                                    @error('addresse')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="relative z-0 w-full mb-2 group">
                                <div>
                                    <label for="email"
                                        class="block text-sm text-gray-700 px-4">Email</label>
                                    <input wire:model="email" type="text" id="email"
                                        x-model="formData.email"
                                        class="block w-full h-8  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('email') border-red-500 @enderror"
                                        placeholder="Votre Email ">
                                    @error('email')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="identite_file"
                                        class="block text-sm text-gray-700 px-4">Joindre Identite</label>
                                    <input wire:model="identite_file" type="text" id="identite_file"
                                        x-model="formData.identite_file"
                                        class="block w-full h-10  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('identite_file') border-red-500 @enderror"
                                        placeholder="Votre Email ">
                                    @error('identite_file')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="relative z-0 w-full mb-2 group">
                                <!-- Numero Telephone -->
                                <div>
                                    <label for="numero_identite"
                                        class="block text-sm text-gray-700 px-4">Numero
                                        Telephone</label>
                                    <input wire:model="phone" type="text" id="phone"
                                        x-model="formData.phone"
                                        class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('phone') border-red-500 @enderror"
                                        placeholder="Numero Telephone ">
                                    @error('phone')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="visa_file" class="block text-sm text-gray-700 px-4">Joindre
                                        Visa</label>
                                    <input wire:model="visa_file" type="text" id="visa_file"
                                        x-model="formData.visa_file"
                                        class="block w-full h-10  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('visa_file') border-red-500 @enderror"
                                        placeholder="Votre Email ">
                                    @error('visa_file')
                                        <p class="text-sm text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4"> <button
                            class="rounded-full bg-blue-600 px-8 py-2 h-12 text-sm font-semibold text-white hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full"
                            @click="step++">Suivant</button> </div>
                </div> <!-- Step 2 -->
                <div x-show="step === 2" style="display: none;">
                    <h2 class="text-lg font-medium text-gray-500 mb-4 text-center">
                        Etape 2: Information de l'Universite
                    </h2>
                    <div class="grid md:grid-cols-3 md:gap-6 border-t">

                        <div class="relative z-0 w-full mb-2 group">
                            <!-- Nom Universite (origine) -->
                            <div>
                                <label for="nom_origine" class="block text-sm text-gray-700 px-4">Nom
                                    Universite (origine)</label>
                                <input wire:model="nom_origine" type="text" id="nom_origine"
                                    x-model="formData.nom_origine"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('nom_origine') border-red-500 @enderror"
                                    placeholder="Nom Universite (origine) ">
                                @error('nom_origine')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Nom Universite (Francais) -->
                            <div>
                                <label for="nom_fr" class="block text-sm text-gray-700 px-4">Nom Universite
                                    (Francais)</label>
                                <input wire:model="nom_fr" type="text" id="nom_fr"
                                    x-model="formData.nom_fr"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('nom_fr') border-red-500 @enderror"
                                    placeholder="Nom Universite (Francais)">
                                @error('nom_fr')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Site Universite (Francais) -->
                            <div>
                                <label for="siteweb" class="block text-sm text-gray-700 px-4">Site Web de
                                    Universite
                                </label>
                                <input wire:model="siteweb" type="text" id="siteweb"
                                    x-model="formData.siteweb"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('siteweb') border-red-500 @enderror"
                                    placeholder="Site Web de Universite">
                                @error('siteweb')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <div>
                                <label for="secteur" class="block text-sm text-gray-700 px-4">Secteur (Public
                                    ou Prive)</label>
                                <input wire:model="secteur" type="text" id="secteur"
                                    x-model="formData.secteur"
                                    class="block w-full h-8  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('secteur') border-red-500 @enderror"
                                    placeholder="secteur (Public ou Prive) ">
                                @error('secteur')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="annee_creation" class="block text-sm text-gray-700 px-4">Annee
                                    Creation</label>
                                <input wire:model="annee_creation" type="text" id="annee_creation"
                                    x-model="formData.annee_creation"
                                    class="block w-full h-10  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('annee_creation') border-red-500 @enderror"
                                    placeholder="Votre Email ">
                                @error('annee_creation')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Email Universite (1) -->
                            <div>
                                <label for="siteweb" class="block text-sm text-gray-700 px-4">Email de
                                    Universite (1)
                                </label>
                                <input wire:model="etab_email1" type="text" id="etab_email1"
                                    x-model="formData.etab_email1"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('etab_email1') border-red-500 @enderror"
                                    placeholder="Email de Universite (1)">
                                @error('etab_email1')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                        </div>

                        <div class="relative z-0 w-full mb-2 group">
                            <!-- Numero Telephone -->
                            <div>
                                <label for="pays" class="block text-sm text-gray-700 px-4">Pays</label>
                                <input wire:model="pays" type="text" id="pays"
                                    x-model="formData.pays"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('pays') border-red-500 @enderror"
                                    placeholder="Pays d'Etudes ">
                                @error('pays')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="province_ville" class="block text-sm text-gray-700 px-4">Province
                                    ou Ville</label>
                                <input wire:model="province_ville" type="text" id="province_ville"
                                    x-model="formData.province_ville"
                                    class="block w-full h-10  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('province_ville') border-red-500 @enderror"
                                    placeholder="Province ou ville de l'Universite ">
                                @error('province_ville')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Email Universite (2) -->
                            <div>
                                <label for="etab_phone1" class="block text-sm text-gray-700 px-4">Telephone
                                    Universite
                                </label>
                                <input wire:model="etab_phone1" type="text" id="etab_phone1"
                                    x-model="formData.etab_phone1"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('etab_phone1') border-red-500 @enderror"
                                    placeholder="Telephone de Universite">
                                @error('etab_phone1')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="mt-4 flex flex-wrap gap-2"> <button
                            class="rounded-full bg-blue-50 px-8 py-2 h-12 text-sm font-semibold text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full"
                            @click="step--">Précédent</button> <button
                            class="rounded-full bg-blue-600 px-8 py-2 h-12 text-sm font-semibold text-white hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full"
                            @click="step++">Suivant</button> </div>
                </div>

                <!-- Step 3 -->
                <div x-show="step === 3" style="display: none;">
                    <h2 class="text-lg font-medium text-gray-500 mb-4 text-center">
                        Etape 3 : Cursus Academique
                    </h2>
                    <div class="grid md:grid-cols-3 md:gap-6 border-t">

                        <div class="relative z-0 w-full mb-2 group">
                            <!-- Grade Academique -->
                            <div>
                                <label for="grade" class="block text-sm text-gray-700 px-4">Grade
                                    Academique</label>
                                <input wire:model="grade" type="text" id="grade"
                                    x-model="formData.grade"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('grade') border-red-500 @enderror"
                                    placeholder="Votre Grade Academique ">
                                @error('grade')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Option ou Filiere d'Etudes -->
                            <div>
                                <label for="option" class="block text-sm text-gray-700 px-4">Option ou
                                    Filiere d'Etudes</label>
                                <input wire:model="option" type="text" id="option"
                                    x-model="formData.option"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('option') border-red-500 @enderror"
                                    placeholder="Option ou Filiere d'Etudes">
                                @error('option')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Site Universite (Francais) -->
                            <div class="bg-gray-100">
                                <label for="siteweb" class="block text-sm text-gray-700 px-4">Site Web de
                                    Universite</label>
                                <input wire:model="siteweb" type="text" id="siteweb"
                                    x-model="formData.siteweb"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('siteweb') border-red-500 @enderror"
                                    placeholder="Site Web de Universite">
                                @error('siteweb')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <div>
                                <label for="num_diplome" class="block text-sm text-gray-700 px-4">Numero
                                    Diplome</label>
                                <input wire:model="num_diplome" type="text" id="num_diplome"
                                    x-model="formData.num_diplome"
                                    class="block w-full h-8  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('num_diplome') border-red-500 @enderror"
                                    placeholder="Numero Diplome ">
                                @error('num_diplome')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="date_delivrance" class="block text-sm text-gray-700 px-4">Date
                                    Delivrance Diplome</label>
                                <input wire:model="date_delivrance" type="text" id="date_delivrance"
                                    x-model="formData.date_delivrance"
                                    class="block w-full h-10  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('annee_creation') border-red-500 @enderror"
                                    placeholder="Votre Email ">
                                @error('date_delivrance')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Email Universite (1) -->
                            <div>
                                <label for="diplome_file" class="block text-sm text-gray-700 px-4">Joindre
                                    Diplome</label>
                                <input wire:model="diplome_file" type="text" id="diplome_file"
                                    x-model="formData.diplome_file"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('diplome_file') border-red-500 @enderror"
                                    placeholder="Joindre Diplome">
                                @error('diplome_file')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                        </div>

                        <div class="relative z-0 w-full mb-2 group">
                            <!-- Numero Telephone -->
                            <div>
                                <label for="date_debut_cursus" class="block text-sm text-gray-700 px-4">Date
                                    Debut Cursus</label>
                                <input wire:model="date_debut_cursus" type="text" id="date_debut_cursus"
                                    x-model="formData.date_debut_cursus"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('date_debut_cursus') border-red-500 @enderror"
                                    placeholder="Pays d'Etudes ">
                                @error('date_debut_cursus')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="date_fin_cursus" class="block text-sm text-gray-700 px-4">Date Fin
                                    Cursus</label>
                                <input wire:model="date_fin_cursus" type="text" id="date_fin_cursus"
                                    x-model="formData.date_fin_cursus"
                                    class="block w-full h-10  px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('date_fin_cursus') border-red-500 @enderror"
                                    placeholder="Date Fin Cursus">
                                @error('date_fin_cursus')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Joindre les Releves de Cotes -->
                            <div>
                                <label for="releve_file" class="block text-sm text-gray-700 px-4">Joindre les
                                    Releves de Cotes</label>
                                <input wire:model="etab_phone1" type="text" id="etab_phone1"
                                    x-model="formData.etab_phone1"
                                    class="block w-full h-8 px-4 py-2 text-blue-500 focus:border-blue-500 text-md  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('etab_phone1') border-red-500 @enderror"
                                    placeholder="Joindre les Releves de Cotes">
                                @error('etab_phone1')
                                    <p class="text-sm text-red-600 mt-2" id="password-error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="mt-4 flex flex-wrap gap-2"> <button
                            class="rounded-full bg-blue-50 px-8 py-2 h-12 text-sm font-semibold text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full"
                            @click="step--">Précédent</button> <button
                            class="rounded-full bg-blue-600 px-8 py-2 h-12 text-sm font-semibold text-white hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full"
                            @click="step++">Suivant</button> </div>
                </div>

                <!-- Step 4 -->
                <div x-show="step === 4" style="display: none;">
                    <h2 class="text-lg font-medium text-gray-500">
                        Step 3: Confirmation
                    </h2>
                    <div class="mt-12 space-y-4 font-medium text-sm text-gray-500">
                        <p>
                            Name: <span x-text="formData.name"></span> </p>
                        <p>
                            Email: <span x-text="formData.email"></span> </p>
                        <p>
                            Username: <span x-text="formData.username"></span> </p>
                    </div> <!-- Add more fields as needed -->
                    <div class="mt-4 flex flex-wrap gap-2"> <button
                            class="rounded-full bg-blue-50 px-8 py-2 h-12 text-sm font-semibold text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full"
                            @click="step--">Précédent</button> <button
                            class="rounded-full bg-blue-600 px-8 py-2 h-12 text-sm font-semibold text-white hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full">Submit</button>
                    </div>
                </div>
            </div>
        </div> <!-- Ends component -->
        <!-- Starts links to tutorial -->
        <!--
        <div class="pointer-events-none fixed inset-x-0 bottom-0 sm:flex sm:justify-center p-2">
            <div
                class="pointer-events-auto flex w-full max-w-md divide-x divide-neutral-200 rounded-lg bg-white shadow-xl border">
                <div class="flex w-0 flex-1 items-center p-4">
                    <div class="w-full">
                        <p class="text-sm font-medium text-neutral-900">Tutorial</p>
                        <p class="mt-1 text-sm text-neutral-500">
                            How to create a multistep form with Tailwind CSS and Alpinejs
                        </p>
                        <p class="mt-2 text-xs text-orange-600 underline"> <a
                                href="https://lexingtonthemes.com">
                                by © Lexington Themes</a> </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col divide-y divide-neutral-200">
                        <div class="flex h-0 flex-1"> <a
                                href="https://lexingtonthemes.com/tutorials/how-to-create-a-multistep-form-with-tailwind-css-and-alpinejs/"
                                type="button"
                                class="flex w-full items-center justify-center rounded-none rounded-tr-lg border border-transparent px-4 py-3 text-sm font-medium text-orange-600 hover:text-orange-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-orange-600">Tutorial</a>
                        </div>
                        <div class="flex h-0 flex-1"> <a
                                href="https://github.com/Lexington-Themes/lexington-tutorials/blob/main/src/pages/multistep/index.astro"
                                class="flex w-full items-center justify-center rounded-none rounded-br-lg border border-transparent px-4 py-3 text-sm font-medium text-neutral-700 hover:text-neutral-500 focus:outline-none focus:ring-2 focus:ring-orange-600">Get
                                the code</a> </div>
                    </div>
                </div>
            </div>
        </div> --><!-- Ends links to tutorial -->

    </div>


</div>
</form>
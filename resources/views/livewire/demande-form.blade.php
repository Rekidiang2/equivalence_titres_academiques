<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto bg-white">
    <div class="flex justify-center">
        <p
            class="text-center  text-black text-xl font-bold rounded-full my-1 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Formulaire de Demande
        </p>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent='demander'>
        <!-- Form Title -->
        <div class="mb-5">
            <p class="bg-blue-600 text-white font-bold text-lg pl-3">Information Personnelle</p>
        </div>
        <!-- Image Input -->
        <div
            class="relative flex flex-col text-gray-700 bg-gray-100 shadow-md bg-clip-border rounded-xl w-4xl items-center  justify-center mb-4">
            <label for="name" class="block text-sm text-gray-700 px-4">Joindre
                Photo</label>
            <div
                class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-30 h-30 flex items-center justify-center">
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" alt="Votre Photo" class="object-contain h-36 w-36" />
                @else
                    <img src="{{ asset('images/no-image.jpg') }}" alt="Votre Photo" class="object-contain h-36 w-36" />
                @endif
            </div>
            <div class="p-2 text-center">
                <input wire:model="photo"
                    class="block w-full py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('photo') border-red-500 @enderror"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
            </div>
            @error('photo')
                <p class=" text-red-600 mt-2 text-sm" id="password-error">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- nom postnom & prenom -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="nom" id="nom"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('nom') border-red-500 @enderror"
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
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('postnom') border-red-500 @enderror"
                    placeholder=" " />
                @error('postnom')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Postnom</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="prenom" id="prenom"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('prenom') border-red-500 @enderror"
                    placeholder=" " />
                @error('prenom')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="prenom"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Prenom</label>
            </div>
        </div>
        <!-- genre, lieu & date de naissance -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="genre" id="genre"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('genre') border-red-500 @enderror"
                    placeholder=" ">
                @error('genre')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Genre</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="lieu_naissance" id="lieu_naissance"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('lieu_naissance') border-red-500 @enderror"
                    placeholder=" ">
                @error('lieu_naissance')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Lieu de Naissance</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="date_naissance" id="date_naissance"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_naissance') border-red-500 @enderror"
                    placeholder=" ">
                @error('date_naissance')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="date_naissance"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date de Naissance</label>
            </div>
        </div>
        <!-- nationalite, type identite  & numero identite -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="nationalite" id="nationalite"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('nationalite') border-red-500 @enderror"
                    placeholder=" ">
                @error('nationalite')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="nationalite"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nationalite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="type_identite" id="type_identite"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('type_identite') border-red-500 @enderror"
                    placeholder=" ">
                @error('type_identite')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="type_identite"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Type Piece d'Identite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="numero_identite" id="numero_identite"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('numero_identite') border-red-500 @enderror"
                    placeholder=" ">
                @error('numero_identite')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="numero_identite"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Numero Piece d'Identite</label>
            </div>
        </div>
        <!-- addresse, email  & telephone -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="addresse_requerant" id="addresse_requerant"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('addresse_requerant') border-red-500 @enderror"
                    placeholder=" ">
                @error('addresse_requerant')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="addresse_requerant"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Addresse</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="email_requerant" id="email_requerant"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('email_requerant') border-red-500 @enderror"
                    placeholder=" ">
                @error('email_requerant')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="email_requerant"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="phone_requerant" id="phone_requerant"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('phone_requerant') border-red-500 @enderror"
                    placeholder=" ">
                @error('phone_requerant')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="phone_requerant"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Telephone</label>
            </div>
        </div>
        <div class="mb-5">
            <p class="bg-blue-600 text-white font-bold text-lg pl-3">Information sur l'Universite</p>
        </div>
        <!-- nom universite origine, nom universite francais  & secteur -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="nom_univ_origine" id="nom_univ_origine"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('nom_univ_origine') border-red-500 @enderror"
                    placeholder=" ">
                @error('nom_univ_origine')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="nom_univ_origine"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nom de l'Universite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="nom_univ_fr" id="nom_univ_fr"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('nom_univ_fr') border-red-500 @enderror"
                    placeholder=" ">
                @error('nom_univ_fr')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="nom_univ_fr"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nom Universite en Francais</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="secteur_univ" id="secteur_univ"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('secteur_univ') border-red-500 @enderror"
                    placeholder=" ">
                @error('secteur_univ')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="secteur_univ"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Secteur (Public/Prive)</label>
            </div>
        </div>
        <!-- date creation, pays  & province -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="date_creation" id="date_creation"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_creation') border-red-500 @enderror"
                    placeholder=" ">
                @error('date_creation')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="date_creation"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date de Creation</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="pays_etude" id="pays_etude"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('pays_etude') border-red-500 @enderror"
                    placeholder=" ">
                @error('pays_etude')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="pays_etude"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Pays d'Etudes</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="province_ville_etude" id="province_ville_etude"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('province_ville_etude') border-red-500 @enderror"
                    placeholder=" ">
                @error('province_ville_etude')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="province_ville_etude"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Province ou Ville</label>
            </div>
        </div>
        <!-- site web, email universite  & telephone universite -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="siteweb_univ" id="siteweb_univ"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('siteweb_univ') border-red-500 @enderror"
                    placeholder=" ">
                @error('siteweb_univ')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="siteweb_univ"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Site web de l'Universite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="email_univ" id="email_univ"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('email_univ') border-red-500 @enderror"
                    placeholder=" ">
                @error('email_univ')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="email_univ"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email de l'Universite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="phone_univ" id="phone_univ"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('phone_univ') border-red-500 @enderror"
                    placeholder=" ">
                @error('phone_univ')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="phone_univ"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Telephone de l'Universite</label>
            </div>
        </div>
        <div class="mb-5">
            <p class="bg-blue-600 text-white font-bold text-lg pl-3">Cursus Academique</p>
        </div>
        <!-- Grade, option  & Numero diplome -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="grade" id="grade"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('grade') border-red-500 @enderror"
                    placeholder=" ">
                @error('grade')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="grade"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Grade Academique</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="option" id="option"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('option') border-red-500 @enderror"
                    placeholder=" ">
                @error('option')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="option"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Option ou Filiere</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="num_diplome" id="num_diplome"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('num_diplome') border-red-500 @enderror"
                    placeholder=" ">
                @error('num_diplome')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="num_diplome"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Numero du Diplome</label>
            </div>
        </div>
        <!-- date diplome, date debut cursus  & date fin cursus -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" wire:model="date_diplome" id="date_diplome"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_diplome') border-red-500 @enderror"
                    placeholder=" ">
                @error('date_diplome')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="date_diplome"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date Delivrance Diplome</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" wire:model="date_debut_cursus" id="date_debut_cursus"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_debut_cursus') border-red-500 @enderror"
                    placeholder=" ">
                @error('date_debut_cursus')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="date_debut_cursus"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date Debut Cursus</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" wire:model="date_fin_cursus" id="date_fin_cursus"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_fin_cursus') border-red-500 @enderror"
                    placeholder=" ">
                @error('date_fin_cursus')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="date_fin_cursus"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date Fin Cursus</label>
            </div>
        </div>
        <!-- Mode Enseignement -->
        <div class="grid md:grid-cols-1 md:gap-6">

            <div class="relative z-0 w-full mb-5 group">
                <select wire:model="mode_enseignement"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('mode_enseignement') border-red-500 @enderror"
                    id="">
                    <option disabled selected>Choisir Mode Enseignement</option>
                    <option value="Presentiel">Presentiel</option>
                    <option value="Online">Online</option>
                    <option value="Online">Mixte</option>
                </select>
                <!--<input type="text" wire:model="releve_file" id="releve_file"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('releve_file') border-red-500 @enderror"
                    placeholder=" ">-->
                @error('mode_enseignement')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="releve_file"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Mode Enseignement</label>
            </div>
        </div>
        <div class="mb-5">
            <p class="bg-blue-600 text-white font-bold text-lg pl-3">Joindre Documents</p>
        </div>
        <!-- Piece d'identite, preuve de sejour  & lettre de demande -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="lettre_demande_copy" id="lettre_demande_copy"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('lettre_demande_copy') border-red-500 @enderror"
                    placeholder=" ">
                @error('lettre_demande_copy')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="lettre_demande_copy"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Lettre de Demande</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="piece_identite_copy" id="piece_identite_copy"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('piece_identite_copy') border-red-500 @enderror"
                    placeholder=" ">
                @error('piece_identite_copy')
                    Date Debut Cursus
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="piece_identite_copy"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Piece d'Identite</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="preuve_sejour_copy" id="preuve_sejour_copy"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('preuve_sejour_copy') border-red-500 @enderror"
                    placeholder=" ">
                @error('preuve_sejour_copy')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="preuve_sejour_copy"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Preuve de Sejour</label>
            </div>
        </div>
        <!-- Diplome Base, Diplome Universitaire  & Releve de cote -->
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="diplome_base_copy" id="diplome_base_copy"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('diplome_base_copy') border-red-500 @enderror"
                    placeholder=" ">
                @error('diplome_base_copy')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="diplome_base_copy"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Diplome de Base</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="diplome_univ_copy" id="diplome_univ_copy"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('diplome_univ_copy') border-red-500 @enderror"
                    placeholder=" ">
                @error('diplome_univ_copy')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="diplome_univ_copy"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Diplomes Universitaires</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="releve_cote_copy" id="releve_cote_copy"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('releve_cote_copy') border-red-500 @enderror"
                    placeholder=" ">
                @error('releve_cote_copy')
                    <p class=" text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
                <label for="releve_cote_copy"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Releves de Cote</label>
            </div>
        </div>


        <!-- Submit Button -->
        <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800 ">Soumettre
            Demande</button>


    </form>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.hook('message.processed', (message, component) => {
                if (message.response.payload.uploaded) {
                    // Display the progress (if applicable)
                    let progressElements = document.querySelectorAll('progress');
                    progressElements.forEach(progress => progress.value = 100);
                }
            });
        });
    </script>



</div>

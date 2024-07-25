<div class="w-full  mb-4  py-2 px-4 sm:px-6 lg:px-8 mx-auto bg-indigo-50">
    <div class="flex justify-center">
        <p
            class="text-center text-black text-xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Enregistrement Paiement
        </p>
    </div>

    <!-- Information sur le demandeur -->
    <div class="grid md:grid-cols-1 md:gap-6 mb-6">
        <div class="relative z-0 w-full mb-5 group">
            <p class="text-md text-center text-gray-500 dark:text-gray-400">En Faveur de :</p>
            <input type="text"
                class="block py-2.5 text-center px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                readonly value="{{ $demande->fullName }}" />
            <p class="text-center text-gray-500 text-md">Demande Numéro : {{ $demande->id }}</p>
        </div>
    </div>

    <!-- Formulaire de paiement -->
    <form wire:submit.prevent="payement" class="px-16">

        <!-- Note de perception -->
        <div class="mb-5">
            <p class="bg-blue-200 text-black font-bold text-center text-md pl-3">Note de Perception</p>
        </div>
        <input type="hidden" wire:model="demande_id" id="demande_id" value="{{ $demande->id }}">

        <div class="grid md:grid-cols-3 md:gap-6 mb-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="numero_note" id="numero_note"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('numero_note') border-red-500 @enderror"
                    placeholder=" " />
                @error('numero_note')
                    <p class="text-red-600 mt-2">{{ $message }}</p>
                @enderror
                <label for="numero_note"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Numero
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" wire:model="date_taxation" id="date_taxation"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_taxation') border-red-500 @enderror"
                    placeholder=" " />
                @error('date_taxation')
                    <p class="text-red-600 mt-2">{{ $message }}</p>
                @enderror
                <label for="date_taxation"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date Signature
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="copie_note" id="copie_note"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('copie_note') border-red-500 @enderror"
                    placeholder=" " />
                @error('copie_note')
                    <p class="text-red-600 mt-2">{{ $message }}</p>
                @enderror
                <label for="copie_note"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Joindre Copie
                </label>
            </div>
        </div>

        <!-- Bordereau de paiement -->
        <div class="mb-5">
            <p class="bg-blue-200 text-black font-bold text-center text-md pl-3">Bordereau de Paiement</p>

        </div>
        <div class="grid md:grid-cols-3 md:gap-6 mb-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" wire:model="numero_bordereau" id="numero_bordereau"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('numero_bordereau') border-red-500 @enderror"
                    placeholder=" " />
                @error('numero_bordereau')
                    <p class="text-red-600 mt-2">{{ $message }}</p>
                @enderror
                <label for="numero_bordereau"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Numero
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" wire:model="date_bordereau" id="date_bordereau"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('date_bordereau') border-red-500 @enderror"
                    placeholder=" " />
                @error('date_bordereau')
                    <p class="text-red-600 mt-2">{{ $message }}</p>
                @enderror
                <label for="date_bordereau"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Date Bordereau
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="copie_bordereau" id="copie_bordereau"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('copie_bordereau') border-red-500 @enderror"
                    placeholder=" " />
                @error('copie_bordereau')
                    <p class="text-red-600 mt-2">{{ $message }}</p>
                @enderror
                <label for="copie_bordereau"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Joindre Copie
                </label>
            </div>
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-3 text-center dark:focus:ring-blue-800">
            Enregistrer
        </button>
        <a href="/user-espace"
            class="w-full border-4 block text-blue-600 hover:bg-blue-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800">
            Annuler
        </a>
    </form>
</div>

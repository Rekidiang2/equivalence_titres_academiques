<div class="w-full max-w-[85rem] py-11 px-4 sm:px-6 lg:px-8 mx-auto h-screen">



    <div class="text-center mt-16">
        <p class="mt-2 text-xl underline text-gray-600 dark:text-gray-400">
            Dossier N0 : {{ $dossier->num_dossier }}

        </p>
        <span class="text-sm">Enregistre le {{ $dossier->created_at->format('d-m-Y') }}</span>
        <span class="text-sm">à {{ $dossier->created_at->format('H:i:s') }}</span>
    </div>

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6 mt-5">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div
                    class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                    <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xl uppercase tracking-wide text-blue-800 ">
                            Requerant
                        </p>

                    </div>
                    <div class="mt-1 text-xl flex items-center gap-x-2">
                        <div>{{ $dossier->nom }} {{ $dossier->postnom }} {{ $dossier->prenom }}</div>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <p class="text-sm  tracking-wide text-gray-500">
                            {{ $dossier->email_requerant }}
                        </p>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <p class="text-sm  tracking-wide text-gray-500">
                            {{ $dossier->phone_requerant }}
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <div>Grade & Option</div>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <p class="text-sm  tracking-wide text-gray-500">
                            {{ $dossier->grade }} | {{ $dossier->option }}
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <div>Pays d'Etudes</div>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <p class="text-sm  tracking-wide text-gray-500">
                            {{ $dossier->pays }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div
                    class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                    <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                        <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                        <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xl uppercase tracking-wide text-blue-800">
                            Statut du Dossier
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2 bg-green-500">
                        <span class=" py-1 px-3 rounded text-white shadow">{{ $dossier->statut }}</span>


                    </div>
                    <div class="flex items-center gap-x-2">
                        <p class="text-md py-2   tracking-wide text-gray-500">
                            Depuis {{ $dossier->updated_at->format('d-m-Y') }} à
                            {{ $dossier->updated_at->format('H:i:s') }}

                        </p>
                    </div>
                    <div class="flex items-center bg-blue-100 px-2 gap-x-2 rounded-xl">
                        <p class="text-sm py-2   tracking-wide text-gray-500">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque recusandae quas reiciendis
                            commodi impedit. Fugit officia dolores saepe, voluptatibus ratione id ab, nesciunt
                            consequatur blanditiis ipsa, laboriosam perferendis ullam excepturi?
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Grid -->

</div>

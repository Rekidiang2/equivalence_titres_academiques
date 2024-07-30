<div class="w-full max-w-[95rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto mt-0 bg-white min-h-screen ">
    <!-- Nouvelle demande -->
    <div class="flex justify-center">
        <a wire:navigate href="/demande-form"
            class=" hover:underline text-center bg-white text-blue-600 text-lg font-bold rounded-full my-3  px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Nouvelle Demande
        </a>
    </div>
    <!-- Page tabs -->
    <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-neutral-700" aria-label="Tabs"
        role="tablist">
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-blue-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 active"
            id="bar-with-underline-item-1" data-hs-tab="#bar-with-underline-1" aria-controls="bar-with-underline-1"
            role="tab">
            Demandes
        </button>
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-blue-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-400"
            id="bar-with-underline-item-2" data-hs-tab="#bar-with-underline-2" aria-controls="bar-with-underline-2"
            role="tab">
            Dossiers
        </button>

    </nav>

    <div class="mt-3">
        <!-- Mes demandes tab -->
        <div id="bar-with-underline-1" role="tabpanel" aria-labelledby="bar-with-underline-item-1">
            <!--
            <caption
                class="p-5 bg-blue-400 mb-5 text-2xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Mes Demandes
            </caption>
        -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4 ">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    @if (count($demandes) > 0)
                        <thead class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-2">
                                    Numero Demande
                                </th>
                                <th scope="col" class="px-4 py-2">
                                    Nom Complet
                                </th>

                                <th scope="col" class="px-4 py-2">
                                    Genre
                                </th>
                                <th scope="col" class="px-4 py-2">
                                    Grade
                                </th>
                                <th scope="col" class="px-4 py-2">
                                    Option
                                </th>
                                <th scope="col" class="px-4 py-2">
                                    etablissement
                                </th>
                                <th scope="col" class="px-4 py-2">
                                    Pays d'Etudes
                                </th>
                                <th scope="col" class="px-4 py-2">
                                    Statut Payement
                                </th>


                                <th scope="col" class="px-4 py-2">
                                    <span class="sr-only">Action</span>
                                </th>

                                <th scope="col" class="px-4 py-2">
                                    <span class="sr-only">Action</span>
                                </th>

                            </tr>
                        </thead>
                    @endif
                    <?php
                    $confirmes = 0;
                    $nonpayes = 0;
                    $nonconfirmes = 0;
                    ?>
                    @if (!is_null($demandes) && count($demandes) > 0)




                        @foreach ($demandes as $demande)
                            @if (!isset($demande->id))
                                {{ $nonpayes += 1 }}
                            @elseif($demande->deja_paye == 0)
                                {{ $nonconfirmes += 1 }}
                            @else
                                {{ $confirmes += 1 }}
                            @endif


                            <tbody>
                                <tr
                                    class="bg-gray-200bg-blue-50 border-b dark:bg-gray-800 dark:border-gray-700 pb-10 shadow-md ">
                                    <th scope="row" class="px-4 py-1  whitespace-nowrap dark:text-white">
                                        {{ $demande->dmd_id }}
                                    </th>
                                    <th scope="row" class="px-4 py-1   dark:text-white">
                                        {{ $demande->fullName }}
                                    </th>

                                    <td class="px-4 py-1">
                                        {{ $demande->genre }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $demande->grade }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $demande->option }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $demande->nom_univ_fr }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $demande->pays_etude }}
                                    </td>

                                    <td class="px-4 py-1 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        @if (!isset($demande->id))
                                            <span class="bg-red-100 py-1 px-3 rounded text-red-800 shadow">
                                                Non Paye
                                            </span>
                                        @elseif($demande->deja_paye == 1)
                                            <span class="bg-blue-100 py-1 px-3 rounded text-blue-800 font-medium">
                                                confirmé
                                            </span>
                                        @else
                                            <span class="bg-yellow-100 py-1 px-3 rounded text-yellow-800 ">
                                                Attente <br> Confirmation
                                            </span>
                                        @endif


                                    </td>

                                    <td class="px-1 py-2 text-right ml-4  rounded-xl">
                                        <a wire:navigate href="/voir-demande/{{ $demande->dmd_id }}">
                                            <button type="button"
                                                class="my-2 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center  dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-800">Voir
                                                <svg class="h-6 w-6 inline-block text-green-700" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <circle cx="12" cy="12" r="2" />
                                                    <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                                    <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                                </svg></button>


                                        </a>

                                    </td>

                                    @if (!isset($demande->id))
                                        <td class="px-1 py-2 text-right ml-4  rounded-xl ">
                                            <a wire:navigate href="/user-espace/{{ $demande->dmd_id }}">
                                                <button type="button"
                                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center  dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Paiement
                                                    <svg class="h-6 w-6 inline text-blue-800" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </td>
                                    @endif
                                </tr>


                            </tbody>
                        @endforeach

                        @if (count($demandes) > 1)
                            <p
                                class="p-1 m-1 text-center text-xl text-blue-800 rounded-lg  dark:bg-gray-800 dark:text-blue-400 mb-10">
                                Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                    {{ count($demandes) }}</em> demandes soumises.
                            </p>
                        @else
                            <p
                                class="p-1 m-1 text-center text-xl text-blue-800 rounded-lg bg-blue-5 dark:bg-gray-800 dark:text-blue-400 mb-10">
                                Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                    {{ count($demandes) }}</em> demande soumise.
                            </p>
                        @endif

                        @if ($nonpayes > 0)
                            @if ($nonpayes > 1)
                                <p
                                    class="m-1 p-1 text-center bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg mb-0 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500">
                                    Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                        {{ $nonpayes }}</em> demandes non payées. Cliquez sur <em
                                        class="font-semibold underline text-blue-600">Paiement</em>. pour enregistrer
                                    vos paiements.

                                </p>
                            @else
                                <p
                                    class="m-1 p-1 text-center bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg mb-0 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500">
                                    Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                        {{ $nonpayes }}</em> demande non payée. Cliquez sur <em
                                        class="font-semibold underline text-blue-600">Paiement</em>. pour enregistrer
                                    votre paiement.

                                </p>
                            @endif
                        @endif


                        @if ($nonconfirmes > 0)
                            @if ($nonconfirmes > 1)
                                <p
                                    class="p-1 mb-1 text-sm text-center text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300">
                                    Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                        {{ $nonconfirmes }}</em> paiements en attente de confirmation.
                                </p>
                            @else
                                <p
                                    class="p-1 mb-1 text-center text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300">
                                    Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                        {{ $nonconfirmes }}</em> paiement en attente de confirmation.
                                </p>
                            @endif
                        @endif

                        @if ($confirmes > 0)
                            @if ($confirmes > 1)
                                <p
                                    class="p-1 m-1 text-center text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                                    Cliquez sur
                                    l'onglet 'Dossier' pour suivre l'évolution de vos <em
                                        class="font-semibold text-gray-800 dark:text-neutral-200">

                                        {{ $confirmes }}</em> dossiers.

                                </p>
                            @else
                                <p
                                    class="p-1 m-1 text-center text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                                    Cliquez sur
                                    l'onglet <b>Dossier</b> pour suivre l'évolution de votre dossier.

                                </p>
                            @endif
                        @endif





                        @if (!isset($demande->id))
                            <!--
                            <p class="dark:text-neutral-400 text-center mb-2 text-red-600">Veuillez
                                enregistrer votre
                                payement en cliquant sur <em class="font-semibold underline text-blue-600">Payement</em>
                            </p>
                        -->

                            <div>
                        @endif
                    @else
                        <p
                            class="p-1 m-1 text-xl text-center text-yellow-800 rounded-lg  dark:bg-gray-800 dark:text-yellow-300 mb-10">
                            Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                aucune demande</em> soumise.
                        </p>


                    @endif
                </table>

            </div>

            <!-- pagination start -->
            <div class="flex justify-end mt-6">
                {{-- $demandes->links() --}}
            </div>
            <!-- pagination end -->

        </div>
        <!-- Mes dossiers tab -->
        <div id="bar-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-2">

            <!--
            <caption
                class="p-5 mb-5 text-xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Mes Dossiers
            </caption>
-->


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4 pt-5 ">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    @if (!is_null($dossiers) && count($dossiers) > 0)


                        <thead class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Numero Dossier
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom Complet
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Genre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Grade
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Option
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pays d'Etudes
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Statut
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>



                        @foreach ($dossiers as $dossier)
                            <tbody>
                                <tr
                                    class="bg-gray-200bg-blue-50 border-b dark:bg-gray-800 dark:border-gray-700 pb-10 shadow-md ">
                                    <th scope="row" class="px-6 py-4  whitespace-nowrap dark:text-white">
                                        {{ $dossier->num_dossier }}
                                    </th>
                                    <th scope="row" class="px-6 py-4   dark:text-white">
                                        {{ $dossier->nom }} {{ $dossier->postnom }} {{ $dossier->prenom }}
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $dossier->genre }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dossier->grade }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dossier->option }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dossier->pays_etude }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <span
                                            class="bg-green-100 py-1 px-3 rounded text-green-800  shadow">{{ $dossier->statut }}</span>
                                    </td>
                                    <td class="px-1 py-2 text-right ml-4  rounded-xl">
                                        <a wire:navigate href="/suivi/{{ $dossier->id }}">
                                            <button type="button"
                                                class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 my-1 text-center  dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Suivi
                                                <svg class="w-4 h-4 inline-block text-sm text-blue-700  dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 10 16">
                                                    <path
                                                        d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
                                                </svg></button>
                                        </a>
                                    </td>
                                </tr>


                            </tbody>
                        @endforeach
                        @if (count($dossiers) > 1)
                            <p
                                class="p-1 m-1 text-center text-xl text-blue-800 rounded-lg  dark:bg-gray-800 dark:text-blue-400 mb-10">
                                Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ count($dossiers) }}</em>
                                dossiers.
                            </p>
                            <p
                                class="p-1 m-1 text-center text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                                Cliquez sur <em class="font-semibold text-gray-800 dark:text-neutral-200">Suivi</em>
                                pour voir l'evolution votre dossier.

                            </p>
                        @else
                            <p
                                class="p-1 m-1 text-center text-xl text-blue-800 rounded-lg  dark:bg-gray-800 dark:text-blue-400 mb-10">
                                Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ count($dossiers) }}</em>
                                dossier.
                            </p>
                            <p
                                class="p-1 m-1 text-center text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                                Cliquez sur <em class="font-semibold text-gray-800 dark:text-neutral-200">Suivi</em>
                                pour voir l'evolution votre dossier.

                            </p>
                        @endif
                    @else
                        @if ($confirmes <= 0)
                            <p
                                class="p-1 m-1 text-xl text-center text-yellow-800 rounded-lg dark:bg-gray-800 dark:text-yellow-300 mb-10">
                                Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">Aucun</em>
                                dossier.
                            </p>
                        @endif

                        @if ($confirmes - count($dossiers) > 0)
                            <p
                                class="p-1 mb-1 text-sm text-center text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300">
                                Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ $confirmes - count($dossiers) }}</em>
                                dossiers en cours de verification, dont les details serons affichés dans 24 heures.
                            </p>
                        @endif



                    @endif








                </table>
            </div>
        </div>

    </div>


</div>

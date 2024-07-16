<div class="w-full max-w-[95rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto mt-10">
    <!-- Nouvelle demande -->
    <div class="flex justify-center">
        <a href="/demande-form"
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
            <caption
                class="p-5 bg-blue-400 mb-5 text-2xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Mes Demandes
            </caption>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    @if (count($demandes) > 0)
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
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
                                    <span class="sr-only">Edit</span>
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
                            {{ $nonpayes = 0 }}
                            {{ $nonconfirmes = 0 }}
                            @if (!isset($demande->id))
                                {{ $nonpayes += 1 }}
                            @elseif($demande->deja_paye == 0)
                                {{ $nonconfirmes += 1 }}
                            @else
                                {{ $confirmes += 1 }}
                            @endif


                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $demande->dmd_id }}
                                    </th>
                                    <th scope="row"
                                        class="px-4 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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

                                    <td class="px-4 py-1 whitespace-nowrap  text-sm text-gray-800 dark:text-gray-200">
                                        @if (!isset($demande->id))
                                            <span class="bg-red-500 py-1 px-3 rounded text-white shadow">
                                                Non Paye
                                            </span>
                                        @elseif($demande->deja_paye == 1)
                                            <span class="bg-blue-500 py-1 px-3 rounded text-white shadow">
                                                confirmé
                                            </span>
                                        @else
                                            <span class="bg-yellow-200 py-1 px-3  text-black shadow">
                                                Attente <br> Confirmation
                                            </span>
                                        @endif


                                    </td>

                                    <td class="px-1 py-1 text-right ml-4  rounded-xl border-2">
                                        <a href="/user-espace/2"
                                            class="font-medium bg-green-400 rounded-xl border-1 border-gray text-white text-xl py-1 px-1 dark:text-blue-500 hover:underline">Voir</a>
                                    </td>

                                    @if (!isset($demande->id))
                                        <td class="px-1 py-2 text-right ml-4  rounded-xl ">
                                            <a href="/user-espace/{{ $demande->dmd_id }}"
                                                class="font-medium  bg-blue-400 rounded-xl border-4 border-gray text-white text-xl py-1 px-1 dark:text-blue-500 hover:underline ">Paiement</a>
                                        </td>
                                    @endif
                                </tr>


                            </tbody>
                        @endforeach
                        <p
                            class="p-1 m-1 text-center text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400">
                            Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                {{ count($demandes) }}</em> demande soumise.
                        </p>
                        @if ($nonpayes > 0)
                            <p
                                class="m-1 p-1 text-center bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg mb-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500">
                                Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                    {{ $nonpayes }}</em> Demandes non payees, Veuillez
                                enregistrer votre
                                payement en cliquant sur <em
                                    class="font-semibold underline text-blue-600">Payement</em>.
                            </p>
                        @endif


                        @if ($nonconfirmes > 0)
                            <p class="text-red-500 dark:text-neutral-400 text-center mb-2"> Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">

                                    {{ $nonconfirmes }}</em> Demandes dont la confirmation de payement sont en
                                Cours
                                <em class="font-semibold underline text-black-600">Merci Pour votre patience</em>.
                            </p>
                        @endif

                        @if ($confirmes > 0)
                            <p class="text-blue-800 bg-white dark:text-neutral-400 text-center mb-2"> Veuillez cliquer
                                sur
                                l'onglet Dossiers pour suivre l'evolution de vos <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">

                                    {{ $confirmes }}</em> dossiers.

                            </p>
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
                            class="p-1 m-1 text-xl text-center text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300">
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


            <caption
                class="p-5 mb-5 text-xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Mes Dossiers
            </caption>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    @if (!is_null($dossiers) && count($dossiers) > 0)
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dossier->num_dossier }}
                                    </th>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                        {{ $dossier->pays }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <span
                                            class="bg-green-200 py-1 px-3 rounded text-black shadow">{{ $dossier->statut }}</span>
                                    </td>
                                    <td class="px-5 py-3  text-right ">
                                        <a href="/user-espace/{{ $dossier->id }}"
                                            class="font-medium text-xl bg-blue-500 rounded-2xl px-5 py-2  text-white dark:text-blue-500 hover:underline">Suivi</a>
                                    </td>
                                </tr>


                            </tbody>
                        @endforeach
                        <p class="text-gray-500 dark:text-neutral-400 text-center">
                            Vous avez <em
                                class="font-semibold text-gray-800 dark:text-neutral-200">{{ count($dossiers) }}</em>
                            dossiers.
                        </p>
                        @if ($confirmes > 0)
                            <p class="text-gray-500 dark:text-neutral-400 text-center">
                                Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ $confirmes - count($dossiers) }}</em>
                                payement non confirmer.
                            </p>
                        @endif
                    @else
                        @if (count($dossiers) == 0 && $confirmes < 0)
                            <p class="text-gray-500 dark:text-neutral-400 text-center">
                                Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">aucun</em>
                                dossiers enregistre.
                            </p>
                            <p
                                class="p-1 m-1 text-xl text-center text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300">
                                Vous avez <em class="font-semibold text-gray-800 dark:text-neutral-200">

                                    aucune demande</em> soumise.
                            </p>
                        @else
                            <!--
                            <p class="text-gray-500 dark:text-neutral-400 text-center">
                                Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ $confirmes }}</em>
                                dossiers en cours d'enregistrent.
                            </p>
                        -->
                            <p
                                class="p-1 m-1 text-xl text-center text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300">
                                Vous avez <em
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ $confirmes }}</em>
                                dossiers en cours d'enregistrent.
                            </p>
                        @endif


                    @endif

                    @if ($confirmes <= 0)
                        <!--
                        <p class="text-gray-500 dark:text-neutral-400 text-center">
                            Vous avez <em
                                class="font-semibold text-gray-800 dark:text-neutral-200">{{ $confirmes - count($dossiers) }}</em>
                            dossiers en cours d'enregistrent.
                        </p>
                    -->
                    @endif



                </table>
            </div>
        </div>

    </div>


</div>

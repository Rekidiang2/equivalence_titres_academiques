<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto h-screen">
    <div class="flex justify-center">
        <a href="/demande-form"
            class=" hover:underline text-center bg-white text-blue-600 text-lg font-bold rounded-full my-3  px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Nouvelle Demande
        </a>
    </div>
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
        <div id="bar-with-underline-1" role="tabpanel" aria-labelledby="bar-with-underline-item-1">
            <p class="text-gray-500 dark:text-neutral-400 text-center">
                This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">first</em> item's tab body.
            </p>
            <caption
                class="p-5 mb-5 text-xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Mes Demandes
            </caption>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Numero Demande
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
                                Paye ?
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                01
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Kiese Diangebeni Reagan
                            </th>

                            <td class="px-6 py-4">
                                Masculin
                            </td>
                            <td class="px-6 py-4">
                                Master
                            </td>
                            <td class="px-6 py-4">
                                Math-Informatique
                            </td>
                            <td class="px-6 py-4">
                                France
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap rounded-full text-sm text-gray-800 dark:text-gray-200">
                                <span class="bg-red-500 py-1 px-3 rounded text-white shadow">Non</span>
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="/user-espace/2"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir</a>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/payement"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Paiement</a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>
        <div id="bar-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-2">
            <p class="text-gray-500 dark:text-neutral-400 text-center">
                This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">second</em> item's tab body.
            </p>

            <caption
                class="p-5 mb-5 text-xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Mes Dossiers
            </caption>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

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
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                082023-0089
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Kiese Diangebeni Reagan
                            </th>

                            <td class="px-6 py-4">
                                Masculin
                            </td>
                            <td class="px-6 py-4">
                                Master
                            </td>
                            <td class="px-6 py-4">
                                Math-Informatique
                            </td>
                            <td class="px-6 py-4">
                                France
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                    class="bg-green-500 py-1 px-3 rounded text-white shadow">En cours de
                                    traitement</span></td>
                            <td class="px-6 py-4 text-right">
                                <a href="/user-espace/2"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Suivi</a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>


</div>

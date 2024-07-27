<div class=" bg-white">

    <div class="flex justify-center">
        <p
            class="  text-center  text-black text-xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Conditions et Procedures
        </p>
    </div>

    <nav class="relative z-0 mx-10 flex border rounded-xl overflow-hidden dark:border-neutral-700" aria-label="Tabs"
        role="tablist">
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-blue-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 active"
            id="bar-with-underline-item-1" data-hs-tab="#bar-with-underline-1" aria-controls="bar-with-underline-1"
            role="tab">
            Conditions
        </button>
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-blue-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-400"
            id="bar-with-underline-item-2" data-hs-tab="#bar-with-underline-2" aria-controls="bar-with-underline-2"
            role="tab">
            Procedures
        </button>

    </nav>


    <div class="mt-3 mx-10">
        <!-- Condition tab -->
        <div id="bar-with-underline-1" role="tabpanel" aria-labelledby="bar-with-underline-item-1">
            <!--
            <caption
                class="p-5 bg-blue-400 mb-5 text-4xl font-semibold text-center rtl:text-center text-gray-900  dark:text-white dark:bg-gray-800">
                Conditions
            </caption>
        -->
            <div class="relative overflow-x-auto sm:rounded-lg mt-4">
                <div class="bg-white-50 flex justify-center pt-5 pb-10">
                    <div class="container mx-auto px-4">
                        <div class="grid md:grid-cols-1 gap-8" x-data="{ selected: 1 }">
                            <p class="text-center text-xl text-blue-800">Conditions</p>

                            <!-- Column 1 -->
                            <p
                                class="p-1 m-1 text-md text-center text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-yellow-300">
                                Traduction de tous les documents dans une langue autre que le
                                français

                            </p>
                            <div class="bg-blue-50 max-w-full mx-auto border border-gray-200">

                                <ul class="shadow-box">
                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 1 ? selected = 1 : selected = null">
                                            <div class="flex items-center justify-between">
                                                <h1 class="text-md">
                                                    1. Lettre de Demande
                                                    d'Equivalence </h1>
                                                <svg :class="{ 'transform rotate-180': selected == 1 }"
                                                    class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container1"
                                            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6 text-gray-500">
                                                <p>Elle est adressée au Directeur-Chef des Services Scolaires de
                                                    l'Enseignement Supérieur et Universitaire ; </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 2 ? selected = 2 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 2. Documents a
                                                    Joindre
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 2 }"
                                                    class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container2"
                                            x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6">
                                                <ul class="text-gray-500 list-disc pl-3">
                                                    <li>

                                                        Copie du diplôme pour lequel vous demandez l'équivalence, dûment
                                                        légalisée par l'ambassade du pays de formation ;

                                                    </li>
                                                    <li>Le statut juridique de l'établissement de formation ;</li>
                                                    <li>Preuve de résidence ou visa étudiant et passeport pour les
                                                        étrangers ;</li>
                                                    <li>La composition du jury et, si nécessaire, le procès-verbal de
                                                        délibération de soutenance ;</li>
                                                    <li>Photocopie du Diplôme d'État (baccalauréat) à authentifier à
                                                        l'EPSP ;</li>
                                                    <li>Authentification du dernier titre académique obtenu en
                                                        République Démocratique du Congo (voir Conditions
                                                        d'Authentification) ;</li>
                                                    <li>Copie de tous les relevés de notes et/ou de tous les certificats
                                                        intermédiaires déjà obtenus et certifiés ;</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 3 ? selected = 3 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 3. Frais a
                                                    Payer
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 2 }"
                                                    class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container3"
                                            x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6">
                                                <ul class="text-gray-500 list-disc pl-3">

                                                    <li>Demande d'équivalence : 55 USD ;</li>
                                                    <li>Frais Bancaire : 30 000 CDF ;</li>
                                                    <li>Frais Administratifs : 100 000 CDF ;</li>


                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mes dossiers tab -->
        <div id="bar-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-2">
            <!--
            <caption
                class="p-5 bg-blue-400 mb-5 text-2xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Procedures
            </caption>
        -->
            <div class="relative overflow-x-auto sm:rounded-lg mt-4">
                <div class="  flex justify-center pt-5 pb-10">
                    <div class="container mx-auto px-4">
                        <div class="grid md:grid-cols-1 gap-8" x-data="{ selected: 1 }">
                            <p class="text-xl text-center text-blue-800">Procedures

                            </p>

                            <!-- Column 1 -->
                            <div class="bg-blue-50 max-w-full mx-auto border border-gray-200">

                                <ul class="shadow-box">
                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 1 ? selected = 1 : selected = null">
                                            <div class="flex items-center justify-between">
                                                <h1 class="text-md ">
                                                    1. Connexion </h1>
                                                <svg :class="{ 'transform rotate-180': selected == 1 }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container1"
                                            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6 text-gray-500">
                                                <p>Connectez-vous en cliquant [ici] si vous n'avez pas encore créé de
                                                    compte vous pouvez en créer un [ici] c'est simple et rapide. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 3 ? selected = 3 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 2. Soumission de la
                                                    Demande
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 3 }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container2"
                                            x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6">
                                                <p>Une fois que vous vous serez connecté, vous serez dirigé vers votre
                                                    espace utilisateur. Ensuite, vous pourrez cliquer sur le bouton
                                                    "Nouvelle demande", remplir le formulaire d'équivalence, et enfin,
                                                    cliquer sur le bouton "Soumettre" situé en bas du formulaire.
                                                    Veuillez noter que vous devez joindre les copies de vos documents
                                                    tel que mentionné dans les conditions.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 3 ? selected = 3 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 3. Enregistrement du
                                                    Paiement
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 2 }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container3"
                                            x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6 text-gray-500">
                                                <p>Après la soumission de la demande, celle-ci sera répertoriée dans
                                                    votre espace utilisateur. Vous pourrez alors cliquer sur Paiement à
                                                    l'extrême droite pour enregistrer le paiement pour valider votre
                                                    demande. </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 4 ? selected = 4 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 4. Suivre le Dossier
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 4 }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container4"
                                            x-bind:style="selected == 4 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6 text-gray-500">
                                                <p>Après vérification de votre paiement et des documents constituant
                                                    votre demande, le dossier lié à votre demande apparaîtra dans votre
                                                    espace utilisateur. Vous pourrez alors cliquer sur Suivi à l'extrême
                                                    droite pour voir l'évolution de son traitement. </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 5 ? selected = 5 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 5. Reception
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 5 }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container5"
                                            x-bind:style="selected == 5 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6 text-gray-500">
                                                <p>La copie de l'arrêté portant équivalence de votre diplôme ainsi que
                                                    la notification vous seront envoyées par email. </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative border-b border-gray-200">
                                        <button type="button" class="w-full px-6 py-3 text-left"
                                            @click="selected !== 6 ? selected = 6 : selected = null">
                                            <div class="flex items-center justify-between"> <span> 6. Verification
                                                </span>
                                                <svg :class="{ 'transform rotate-180': selected == 6 }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container6"
                                            x-bind:style="selected == 6 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                            <div class="px-6 pb-6 text-gray-500">
                                                <p>

                                                    Connectez-vous en cliquant [ici] si vous n'avez pas encore créé de
                                                    compte vous pouvez en créer un [ici] c'est simple et rapide.

                                                    Les requérants ou les tiers peuvent vérifier l'authenticité de
                                                    l'arrêté portant équivalence en cliquant sur le menu Vérification et
                                                    en insérant le numéro complet de votre arrêté, puis en cliquant sur
                                                    le bouton Vérifier. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>










                        </div>
                    </div>
                </div>


            </div>

        </div>


        <!------------------------------------------------------------------------------------------------>

        @guest
            <div class="flex justify-center">
                <a wire:navigate href="/register"
                    class=" hover:underline text-center bg-blue-600 text-white text-xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Accéder
                </a>
            </div>
        @endguest



    </div>

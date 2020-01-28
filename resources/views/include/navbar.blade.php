<!--Navbar-->

<div class="bg-gray-800 shadow">

        <div class="container mx-auto px-4 ">
            <div class="flex justify-center">
                <a href="/accueil">
                    <button type="button" class="block">
                        <img class="h-24 w-24 rounded-full ml-2 mt-2 " src="/img/Logo1.png" alt="PlaceToGo">
                    </button>
                </a>
            </div>

            <div class="flex items-center justify-between py-1">
                <div class="hidden sm:flex sm:items-center">
                <a href="#" class="text-gray-400 text-sm font-semibold hover:text-purple-600 mr-5">Fonctionnalités</a>
                <a href="/profil" class="text-gray-400 text-sm font-semibold hover:text-purple-600 mr-5">Compte</a>
                <a href="#" class="text-gray-400 text-sm font-semibold hover:text-purple-600 mr-5">Annonces</a>
                <a href="#" class="text-gray-400 text-sm font-semibold hover:text-purple-600 mr-5">MentionsLégales</a>
                <a href="/logout" class="text-gray-400 text-sm font-semibold hover:text-gray-600 mb-1">Déconnexion</a>
                </div>

                @if (Auth:: check() == 0)
                    <div class="hidden sm:flex sm:items-center">
                    <a href="/login" class="text-gray-400 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600 mr-2">Connexion</a>
                    <a href="/register" class="text-gray-400 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Inscription</a>
                    </div>
                @endif

            </div>

            <div class="block sm:hidden bg-gray-800 border-t-2 py-2">
                <div class="flex flex-col">
                <a href="/ccm" class="text-gray-400 text-sm font-semibold hover:text-gray-600 mb-1">Comment ça marche ?</a>

                @if (Auth:: check() == 1)
                <a href="/profil" class="text-gray-400 text-sm font-semibold hover:text-gray-600 mb-1">Mon Compte</a>
                @endif

                <a href="/depot" class="text-gray-400 text-sm font-semibold hover:text-gray-600 mb-1">Déposer une annonce</a>

                @if (Auth:: check() == 1)
                    <a href="/logout" class="text-gray-400 text-sm font-semibold hover:text-gray-600 mb-1">Déconnexion</a>
                @endif

                @if (Auth:: check() == 0)
                    <div class="flex justify-between items-center border-t-2 pt-2">
                        <a href="login" class="text-gray-400 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-white bg-gray-700">Se Connecter</a>
                        <a href="/register" class="text-gray-400 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600 bg-gray-700">S'inscrire</a>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
<!-- Fin NavBar-->

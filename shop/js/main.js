var shop = angular.module('shop', ['ngRoute']);

shop.config(function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl : 'templates/home.php',
                controller  : 'mainController'
            })

            .when('/Roman', {
                templateUrl : 'templates/roman.php',
                controller  : 'romanController'
            })

            .when('/Manga', {
                templateUrl : 'templates/manga.php',
                controller  : 'mangaController'
            })

            .when('/Conte', {
                templateUrl : 'templates/conte.php',
                controller  : 'conteController'
            })

            .when('/parutions', {
                templateUrl : 'templates/parutions.php',
                controller  : 'parutionsController'
            })

            .when('/auteurs', {
                templateUrl : 'templates/auteurs.php',
                controller  : 'auteursController'
            })

            .when('/editions', {
                templateUrl : 'templates/editions.php',
                controller  : 'editionsController'
            })

            .when('/profil', {
                templateUrl : 'templates/profil.php',
                controller  : 'profilController'
            })

            .when('/panier', {
                templateUrl : 'templates/panier.php',
                controller  : 'panierController'
            });
});

shop.controller('mainController', function($scope) {});
shop.controller('romanController', function($scope) {});
shop.controller('mangaController', function($scope) {});
shop.controller('conteController', function($scope) {});
shop.controller('parutionsController', function($scope) {});
shop.controller('auteursController', function($scope) {});
shop.controller('editionsController', function($scope) {});
shop.controller('profilController', function($scope) {});
shop.controller('panierController', function($scope) {});
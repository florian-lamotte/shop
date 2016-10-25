var admin = angular.module('admin', ['ngRoute']);

admin.config(function($routeProvider) {
        $routeProvider
            .when('/admin', {
                templateUrl : 'templates/dashboard.php',
                controller  : 'dashboardController'
            })
            .when('/admin_livres', {
                templateUrl : 'templates/admin_livres.php',
                controller  : 'adminlivresController'
            })
            .when('/admin_utilisateurs', {
                templateUrl : 'templates/admin_utilisateurs.php',
                controller  : 'adminutilisateursController'
            })
            .when('/admin_auteurs', {
                templateUrl : 'templates/admin_auteurs.php',
                controller  : 'adminauteursController'
            })
            .when('/admin_genres', {
                templateUrl : 'templates/admin_genres.php',
                controller  : 'admingenresController'
            })
            .when('/admin_editions', {
                templateUrl : 'templates/admin_editions.php',
                controller  : 'admineditionsController'
            })
            .when('/ajouter_auteur', {
                templateUrl : 'templates/ajouter_auteur.php',
                controller  : 'ajouterauteurController'
            })
            .when('/modifier_auteur', {
                templateUrl : 'templates/modifier_auteur.php',
                controller  : 'modifierauteurController'
            })
            .when('/supprimer_auteur', {
                templateUrl : 'templates/supprimer_auteur.php',
                controller  : 'supprimerauteurController'
            })
            .when('/ajouter_livre', {
                templateUrl : 'templates/ajouter_livre.php',
                controller  : 'ajouterlivreController'
            })
            .when('/modifier_livre', {
                templateUrl : 'templates/modifier_livre.php',
                controller  : 'modifierlivreController'
            })
            .when('/supprimer_livre', {
                templateUrl : 'templates/supprimer_livre.php',
                controller  : 'supprimerlivreController'
            })
            .when('/ajouter_genre', {
                templateUrl : 'templates/ajouter_genre.php',
                controller  : 'ajoutergenreController'
            })
            .when('/modifier_genre', {
                templateUrl : 'templates/modifier_genre.php',
                controller  : 'modifiergenreController'
            })
            .when('/supprimer_genre', {
                templateUrl : 'templates/supprimer_genre.php',
                controller  : 'supprimergenreController'
            });
});

admin.controller('dashboardController', function($scope) {});
admin.controller('adminlivresController', function($scope) {});
admin.controller('adminutilisateursController', function($scope) {});
admin.controller('adminauteursController', function($scope) {});
admin.controller('admingenresController', function($scope) {});
admin.controller('admineditionsController', function($scope) {});
admin.controller('ajouterauteurController', function($scope) {});
admin.controller('modifierauteurController', function($scope) {});
admin.controller('supprimerauteurController', function($scope) {});
admin.controller('ajouterlivreController', function($scope) {});
admin.controller('modifierlivreController', function($scope) {});
admin.controller('supprimerlivreController', function($scope) {});
admin.controller('ajoutergenreController', function($scope) {});
admin.controller('modifiergenreController', function($scope) {});
admin.controller('supprimergenreController', function($scope) {});
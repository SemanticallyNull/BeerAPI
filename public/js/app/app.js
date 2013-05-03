angular.module('beercheck', []).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.
      when('/', {templateUrl: 'partials/publichome.html', controller: BeerListCtrl}).
      when('/scaninfo', {templateUrl: 'partials/home.html', controller: BeerCtrl}).
      when('/beer/:beerId', {templateUrl: 'partials/beer.html', controller: BeerCtrl}).
      when('/scanlog', {templateUrl: 'partials/take.html', controller: BeerTakeCtrl}).
      otherwise({redirectTo: '/'});
}]);
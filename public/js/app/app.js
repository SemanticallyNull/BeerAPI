angular.module('beercheck', []).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.
      when('/', {templateUrl: 'partials/home.html', controller: BeerCtrl}).
      when('/beer/:beerId', {templateUrl: 'partials/beer.html', controller: BeerCtrl}).
      when('/log', {templateUrl: 'partials/take.html', controller: BeerTakeCtrl}).
      otherwise({redirectTo: '/'});
}]);
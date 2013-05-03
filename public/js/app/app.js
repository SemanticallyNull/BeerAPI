var app = angular.module('beercheck', []);
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
      when('/', {templateUrl: 'partials/publichome.html', controller: BeerListCtrl}).
      when('/popular', {templateUrl: 'partials/popular.html', controller: PopularListCtrl}).
      when('/scaninfo', {templateUrl: 'partials/home.html', controller: BeerCtrl}).
      when('/beer/:beerId', {templateUrl: 'partials/beer.html', controller: BeerCtrl}).
      when('/scanlog', {templateUrl: 'partials/take.html', controller: BeerTakeCtrl}).
      when('/stock', {templateUrl: 'partials/stock.html', controller: BeerStockCtrl}).
      when('/stock/:barcode', {templateUrl: 'partials/stock-number.html', controller: BeerStockAddCtrl}).
      otherwise({redirectTo: '/'});
}]);
app.directive('xngFocus', function() {
  return {
    link: function(scope, elm, attrs) {
      scope.$watch(attrs.xngFocus, function whenMyListChanges(newValue, oldValue) {
        elm[0].focus();
      });
    }
  };
});

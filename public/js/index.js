function BeerListCtrl($scope,$http) {
  $http.get('/beers').success(function(data){
    $scope.beers = data;
  });
  $scope.order = 'abv';
};
function BeerCtrl($scope,$http,$routeParams) {
  $scope.beerId = $routeParams.beerId
  $http.get('/beer/'+$routeParams.beerId).success(function(data){
    $scope.beer = data;
  });
  $scope.order = 'abv';
};
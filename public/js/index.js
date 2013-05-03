function BeerListCtrl($scope,$http) {
  $http.get('/beers').success(function(data){
    $scope.beers = data;
  });
};
function BeerCtrl($scope,$http,$routeParams) {
  $scope.beerId = $routeParams.beerId
  $http.get('/beer/'+$routeParams.beerId).success(function(data){
    $scope.beer = data;
  });
};
function BeerTakeCtrl($scope,$http,$routeParams) {
  var beerdata;
  $http.get('/beers').success(function(data){
    beerdata = data;
  });
  $scope.take = function() {
    if(this.beercode) {
      $http.get('/beer/'+this.beercode+'/take').success(function(data){
        $scope.beer = data;
      });
    }
  }
};
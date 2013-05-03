function BeerListCtrl($scope,$http) {
  $http.get('/beers?api_key='+apikey).success(function(data){
    $scope.beers = data;
  });
};
function BeerCtrl($scope,$http,$routeParams) {
  $scope.beerId = $routeParams.beerId
  $http.get('/beer/'+$routeParams.beerId+'?api_key='+apikey).success(function(data){
    $scope.beer = data;
  });
};
function BeerTakeCtrl($scope,$http,$routeParams) {
  var beerdata;
  $http.get('/beers?api_key='+apikey).success(function(data){
    beerdata = data;
  });
  $scope.take = function() {
    if(this.beercode) {
      $http.get('/beer/'+this.beercode+'/take?api_key='+apikey).success(function(data){
        $scope.beer = data;
      });
    }
  }
};
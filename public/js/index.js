function BeerListCtrl($scope,$http,$location) {
  if(apikey !== '') { $location.path('/scaninfo') }
  $http.get('/beers').success(function(data){
    $scope.beers = data;
  });
};
function BeerCtrl($scope,$http) {
  $scope.info = function() {
    if(this.beercode) {
      $http.get('/beer/'+this.beercode).success(function(data){
        $scope.beer = data;
      });
    }
  }
};
function BeerTakeCtrl($scope,$http,$routeParams) {
  $scope.take = function() {
    if(this.beercode) {
      $http.get('/beer/'+this.beercode+'/take?api_key='+apikey).success(function(data){
        $scope.beer = data;
      });
    }
  }
};
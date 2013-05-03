function BeerListCtrl($scope,$http,$location) {
  if(apikey !== '') { $location.path('/scaninfo') }
  $http.get('/beers').success(function(data){
    $scope.beers = data;
  });
};
function PopularListCtrl($scope,$http,$location) {
  $http.get('/popular').success(function(data){
    $scope.beers = data;
  });
};
function BeerCtrl($scope,$http) {
  $scope.info = function() {
    if(this.beercode) {
      $http.get('/beer/'+this.beercode).success(function(data){
        $scope.beer = data;
        $scope.beercode = "";
      });
    }
  }
};
function BeerTakeCtrl($scope,$http,$routeParams) {
  $scope.take = function() {
    if(this.beercode) {
      $http.get('/beer/'+this.beercode+'/take?api_key='+apikey).success(function(data){
        $scope.beer = data;
        $scope.beercode = "";
      });
    }
  }
};
function BeerStockCtrl($scope,$http,$location) {
  $scope.stock = function() {
    if(this.beercode) {
      barcode = this.beercode
      $http.get('/beer/'+barcode).success(function(data){
          $location.path('/stock/'+data.barcode)
      });
    }
  }
};
function BeerStockAddCtrl($scope,$http,$location,$routeParams) {
  $http.get('/beer/'+$routeParams.barcode).success(function(data){
    $scope.beer = data;
  });
  $scope.stock = function() {
    if(this.number) {
      number = this.number;
      $http.get('/beer/'+$routeParams.barcode+'/add/'+number+'?api_key='+apikey).success(function(data){
          $scope.beer = data;
          $location.path('/stock');
      });
    }
  }
};
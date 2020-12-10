var app = angular.module('myApp', []);
app.controller('Cust', function($scope, $http) {
    $http.get("Data_cust.php")
    .then(function (response) {
        $scope.custom = response.data.customerx;});
});
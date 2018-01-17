var app = angular.module('myApp', []);

app.controller('myCtrl', function ($scope, $http){
   
    $http.get('Consulta_Caracteristicas.php').then(function (response)
    {           
        $scope.caracteristicas = response.data; 
        console.log(response.data);
    });
    
    
});


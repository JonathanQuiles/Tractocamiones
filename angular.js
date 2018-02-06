// Creación del módulo
var gallery_app = angular.module("myApp", []);



gallery_app.directive("fileInput", function($parse){
    return{
        link: function($scope, element, attrs){
            element.on("change", function(event){
                var files = event.target.files;
                $parse(attrs.fileInput).assign($scope, element[0].files);
                $scope.$apply();
            });
        }
    }
});



gallery_app.controller("myCtrl", function($scope, $http){

    $scope.uploadImage = function(){
    var form_data = new FormData();
    angular.forEach($scope.files, function(file){
        console.log(file);
        form_data.append('file[]', file);
    });

        console.log("Aqui no truena");

    $http.post('image_upload.php', form_data,
    {
        transformRequest: angular.identity,
        headers: {'Content-Type': undefined,'Process-Data': false}
    })
    .then(function(response){
        alert(response);
        $scope.show_images();
    });
}



$scope.show_images = function(){
    $http.get("show_images.php")
        .then(function(data){
        $scope.uploaded_images = data;
    });
}
});

/*
// Creación del módulo
var app = angular.module('myApp', []);


app.controller('myCtrl', function($scope, $http){
   
    $http.get('consultar.php').then(function (response)
    {           
        $scope.caracteristicas = response.data; 
        console.log(response.data);
    });
    

    $scope.Agregar = function(){  
            
           $scope.datos = {
                'modelo':$scope.modelo, 
                'precio':$scope.precio, 
                'transmicion':$scope.transmicion, 
                'motor':$scope.motor, 
                'age':$scope.age, 
                'marca':$scope.marca, 
                'tipo':$scope.tipo, 
                'descripcion':$scope.descripcion
            }; 

        
           $http.post("agregar.php", $scope.datos).then(function(data){   
                $scope.caracteristicas = response.data; 
                console.log(response.data);
           });    
      };  
    
    
    $scope.Cargar = function(id, modelo, marca, precio, tipo, age, transmicion, motor, descripcion){
        
        $scope.id2 = id;
        $scope.modelo2 = modelo;
        $scope.marca2 =marca;
        $scope.precio2 =precio;
        $scope.tipo2 = tipo;
        $scope.age2 = age;
        $scope.transmicion2 = transmicion;
        $scope.motor2 = motor;
        $scope.descripcion2 = descripcion;
    };
    
    
    $scope.Modificar = function(){
        
        $scope.datos = {
            'id':$scope.id2,
            'modelo':$scope.modelo2, 
            'precio':$scope.precio2, 
            'transmicion':$scope.transmicion2, 
            'motor':$scope.motor2, 
            'age':$scope.age2, 
            'marca':$scope.marca2, 
            'tipo':$scope.tipo2, 
            'descripcion':$scope.descripcion2
        }; 
        
        $http.put('modificar.php', $scope.datos).then(function(data){
                $scope.id2 = null;
                $scope.modelo2 = null;  
                $scope.precio2 = null;  
                $scope.transmicion2 = null;  
                $scope.motor2 = null;  
                $scope.age2 = null;  
                $scope.tipo2 = null;  
                $scope.marca2 = null; 
                $scope.descripcion2 = null;
        });   
    };
    

    $scope.Delete = function(id){  
           if(confirm("Estas seguro que quieres eliminar este campo?"))  
           {  
                $http.post("delete.php", {'id':id}).then(function(data){                        
                });  
           }  
           else  
           {  
                return false;  
           }  
      };
    
    
    

});

*/
var moheera = angular.module('moheera',[]);


moheera.config(function ($routeProvider) {
	$routeProvider
		.when('/',{
			controller : "base",
			templateUrl : "index.php/home"
		})
		.when('/products',{
			controller : "products",
			templateUrl : "index.php/products"
		})
		.when('/done',{
			controller : "done",
			templateUrl : "index.php/done"
		})
		.otherwise({
			redirectTo : '/'
		})

});

//Factory
moheera.factory('allProduct',function () {
	factory = {};

	factory.productsList = [];

	return factory;

});



//controllers

//The controller to be called when loging to the home page
moheera.controller('base',function ($scope,$http,$location) {
	$scope.showProducts = function () {
		//Route to the 'products' page
		alert($('#mb').serialize());
		$location.path('products');
	};
});

//The products page controller
moheera.controller('products',function ($scope,$http,$location,allProduct) {

	//Add a product to the 'allProducts' factory
	$scope.addProduct = function () {
		allProduct.productsList.push({
			"pName" : $scope.product_name,
			"pCat" : $scope.product_category,
			"pDesc" : $scope.product_desc
		});

		//Empty the add product form values
		$scope.product_name = '';
		$scope.productsList = '';
		$scope.product_desc = '';

	}

	$scope.submitProducts = function () {
		//Route to the 'donr' page
		$location.path('done');
	}

	$scope.displayProductsList = allProduct.productsList;

});

//The 'done' page controller
moheera.controller('done',function ($scope,$http,$location) {
	
});






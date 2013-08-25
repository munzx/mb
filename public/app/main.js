//Initiate the App
var moheera = angular.module('moheera',[]);

//The routing configurations
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
		.when('/manage/:param',{
			controller : "base",
			templateUrl : 'inedx.php/manage'
		})
		.otherwise({
			redirectTo : '/'
		})

});

//Factory
moheera.factory('allProduct',function () {
	factory = {};

	//The user products list
	factory.productsList = [];

	return factory;

});



//controllers

//The controller to be called when loging to the home page
moheera.controller('base',function ($scope,$http,$location) {
	$scope.showProducts = function () {
		//Route to the 'products' page
		$http.post('manage/mbcheck',$('#mb').serialize())
			.success(function () {
				$location.path('products');
			})
			.error(function () {
				alert('kindly , fill up all of the form fields');
			})
		//$location.path('products');
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

		//Empty the "add product" form values
		$scope.product_name = '';
		$scope.productsList = '';
		$scope.product_desc = '';

	}

	$scope.submitProducts = function () {
		//Route to the 'donr' page
		$http.post('manage/productscheck',allProduct.productsList)
			.success(function () {
				$location.path('done');
			})
			.error(function () {
				alert('Kindly , fill up all of the form fields');
			});
	}

	$scope.displayProductsList = allProduct.productsList;

});

//The 'done' page controller
moheera.controller('done',function ($scope,$http,$location) {
	
});






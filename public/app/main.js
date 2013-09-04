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
moheera.factory('mbData',function () {

	var factory = {};

	factory.theData = [];

	return factory;

});


moheera.factory('allProduct',function () {
	factory = {};

	//The user products list
	factory.productsList = [];

	return factory;

});


//controllers

//The controller to be called when loging to the home page
moheera.controller('base',function ($scope,$http,$location,mbData) {

	$scope.showProducts = function () {

		//the mb data
		mbData.theData.push({
			"firstName" : $scope.firstName,
			"lastName" : $scope.lastName,
			"email" : $scope.email,
			"brand" : $scope.brand,
			"gender" : $scope.gender,
			"age" : $scope.age,
			"price" : $scope.price,
			"style" : $scope.style,
			"mb.target_customer1" : $scope.emirates,
			"mb.target_customer2" : $scope.gcc,
			"mb.target_customer3" : $scope.arab,
			"mb.target_customer4" : $scope.asian,
			"mb.target_customer5" : $scope.european,
			"mb.target_customer6" : $scope.african,
			"mb.target_customer7" : $scope.latino,
			"mb.objectives_1" : $scope.option1,
			"mb.objectives_2" : $scope.option2,
			"mb.objectives_3" : $scope.option3,
			"mb.objectives_4" : $scope.option4,
			"mb.objectives_5" : $scope.option5,
			"mb.objectives_6" : $scope.option6,
			"otherObjectives" : $scope.otherObjectives,
			"valueProposition" : $scope.valueProposition,
			"competetion" : $scope.competetion

		});


		//Route to the 'products' page
		$http.post('manage/mbcheck',mbData)
			.success(function () {
				$location.path('products');
			})
			.error(function () {
				alert('kindly , fill up all of the form fields');
			})
		//$location.path('products');
	}

	$scope.mbForm = function () {
		
	}


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
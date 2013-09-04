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
		//the param is there to accept REST
		.when('/manage/:param',{
			controller : "base",
			templateUrl : 'inedx.php/manage'
		})
		.otherwise({
			redirectTo : '/'
		})

});

//=========================================== Factory ============================================//
moheera.factory('mbData',function () {

	var factory = {};

	factory.theData = {};

	return factory;

});


moheera.factory('allProduct',function () {
	factory = {};

	//The user products list
	factory.productsList = [];

	return factory;

});


//=========================================== controllers ========================================

//The controller to be called when loging to the home page
moheera.controller('base',function ($scope,$http,$location,mbData) {

	//Save the form fields values that the user has entered in case he went back to the page

	//the oprions and radio button values are not working!!!!
	$scope.firstName = mbData.theData.firstName;
	$scope.lastName = mbData.theData.lastName;
	$scope.email = mbData.theData.email;
	$scope.brand = mbData.theData.brand;
	$scope.gender = mbData.theData.gender;
	$scope.age = mbData.theData.age;
	$scope.price = mbData.theData.price;
	$scope.style = mbData.theData.style;
	$scope.emirates = mbData.theData.emirates;
	$scope.gcc = mbData.theData.gcc;
	$scope.arab = mbData.theData.arab;
	$scope.asian = mbData.theData.asian;
	$scope.european = mbData.theData.european;
	$scope.african = mbData.theData.african;
	$scope.latino = mbData.theData.latino;
	$scope.option1 = mbData.theData.option1;
	$scope.option2 = mbData.theData.option2;
	$scope.option3 = mbData.theData.option3;
	$scope.option4 = mbData.theData.option4;
	$scope.option5 = mbData.theData.option5;
	$scope.option6 = mbData.theData.option6;
	$scope.otherObjectives = mbData.theData.otherObjectives;
	$scope.valueProposition = mbData.theData.valueProposition;
	$scope.competetion = mbData.theData.competetion;



	$scope.showProducts = function () {

		//the mb data
		mbData.theData = {
			"firstName" : $scope.firstName,
			"lastName" : $scope.lastName,
			"email" : $scope.email,
			"brand" : $scope.brand,
			"gender" : $scope.gender,
			"age" : $scope.age,
			"price" : $scope.price,
			"style" : $scope.style,
			"emirates" : $scope.emirates,
			"gcc" : $scope.gcc,
			"arab" : $scope.arab,
			"asian" : $scope.asian,
			"european" : $scope.european,
			"mafrican" : $scope.african,
			"latino" : $scope.latino,
			"option1" : $scope.option1,
			"option2" : $scope.option2,
			"option3" : $scope.option3,
			"option4" : $scope.option4,
			"option5" : $scope.option5,
			"option6" : $scope.option6,
			"otherObjectives" : $scope.otherObjectives,
			"valueProposition" : $scope.valueProposition,
			"competetion" : $scope.competetion

		};

		//Route to the 'products' page
		$http.post('manage/mbcheck',mbData)
			.success(function () {
				$location.path('products');
			})
			.error(function () {
				alert('kindly , fill up all of the form fields');
			});
	}

});


//The products page controller
moheera.controller('products',function ($scope,$http,$location,allProduct) {

	//Add a product to the 'allProducts' factory
	$scope.addProduct = function () {
		if ($scope.product_name && $scope.product_category && $scope.product_desc){
			allProduct.productsList.push({
				"pName" : $scope.product_name,
				"pCat" : $scope.product_category,
				"pDesc" : $scope.product_desc
			});
		};

		//Empty the "add product" form values
		$scope.product_name = '';
		$scope.productsList = '';
		$scope.product_desc = '';

	}

	//Submit the products page then show either the done page or an error message depends on the response
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
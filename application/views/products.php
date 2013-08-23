<div class="row">
	<div class="twelve columns orange">
		<h2 style='color:#ffffff;'>Products</h2>
	</div>
</div>

<div class="row" ng-controller='products'>

	<div class="twelve columns">
		<form class='custom'>

			<h5>Product name</h5>
			<input type='text' ng-model='product_name' id='product_name'>

			<h5>Product Category</h5>
			<select class='button' ng-model='product_category'>
				<option>Clothes</option>
				<option>Arts</option>
				<option>Households</option>
				<option>Perfuems</option>
				<option>Electronics</option>
				<option>Handicarfts</option>
				<option>Shoes</option>
			</select>

			<h5>Product Description</h5>
			<p>Kindly , mention the materials , colours , sizes and prices</p>
			<textarea ng-model='product_desc'></textarea>

			<button ng-click='submitProducts()' class='button'>Submit</button>
			<button ng-click='addProduct()' class='button'>Add Product</button>

		</form>

		<table class='twelve'>
			<thead>
				<tr>
					<td>Product Name</td>
					<td>Product Type</td>
				</tr>
			</thead>
			<tbody>
				<tr ng-model='displayProductsList' ng-repeat='item in displayProductsList'>
					<td>{{item.pName}}</td>
					<td>{{item.pCat}}</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

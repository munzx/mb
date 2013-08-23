<div class="row">
    <div class="twelve columns orange">
        <h2 style='color : #ffffff;'>Marketing Brief</h2>
    </div>
</div>

<form method='post' id='mb' name='mb' class="custom" ng-controller='base'>
    <div class="row">
        <div class="twelve columns">

            <h5 for='mb.brand_name'>What is your <i>Brand</i> name?</h5>
            <input ng-model='mbtest' id='mbtest' name='mbtest' type='text'>

            <h5>How do you see your products?</h5>
            <fieldset>
                <legend>Gender</legend>

                <label for='mb1'><input name='mb.gender' value='faminine' id='mb1' type='radio' style="display:none;"><span class='custom radio'></span>More Faminine</label>
                <label for='mb2'><input name='mb.gender' value='masculine' id='mb2' type='radio' style="display:none;"><span class='custom radio'></span>More Masculine</label>
                <label for='mb3'><input name='mb.gender' value='both' id='mb3' type='radio' style="display:none;"><span class='custom radio'></span>Both</label>
            </fieldset>

            <fieldset>
                <legend>Age</legend>

                <label for='mb4'><input name='mb.age' id='mb4' value='young' type='radio' style="display:none;"><span class='custom radio'></span>Young</label>
                <label for='mb5'><input name='mb.age' id='mb5' value='mature' type='radio' style="display:none;"><span class='custom radio'></span>Mature</label>
            </fieldset>

            <fieldset>
                <legend>Price</legend>

                <label for='mb6'><input name='mb.price' id='mb6' value='economy' type='radio' style="display:none;"><span class='custom radio'></span>Economy</label>
                <label for='mb7'><input name='mb.price' id='mb7' value='luxury' type='radio' style="display:none;"><span class='custom radio'></span>Luxury</label>
            </fieldset>


            <fieldset>
                <legend>Style</legend>

                <label for='mb8'><input name='mb.style' id='mb8' value='serious' type='radio' style="display:none;"><span class='custom radio'></span>Serious</label>
                <label for='mb9'><input name='mb.style' id='mb9' value='playful' type='radio' style="display:none;"><span class='custom radio'></span>Playful</label>
                <label for='mb10'><input name='mb.style' id='mb10' value='both' type='radio' style="display:none;"><span class='custom radio'></span>Both</label>
            </fieldset>




            <fieldset>

                <legend>Targeted Customers</legend>

                <label for='mb11'><input id='mb11' name='mb.target_customer1' value='UAE' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Emiratis</label>
                <label for='mb12'><input id='mb12' name='mb.target_customer2' value='GCC' type='checkbox' style="display:none;"><span class='custom checkbox'></span>GCC Nationalities</label>
                <label for='mb13'><input id='mb13' name='mb.target_customer3' value='ARAB' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Arabs</label>
                <label for='mb14'><input id='mb14' name='mb.target_customer4' value='ASIAN' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Asians</label>
                <label for='mb15'><input id='mb15' name='mb.target_customer5' value='EUROPEAN' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Eurpeans</label>
                <label for='mb16'><input id='mb16' name='mb.target_customer6' value='AFRICANS' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Africans</label>
                <label for='mb17'><input id='mb17' name='mb.target_customer7' value='LATINA' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Latinos</label>

            </fieldset>



            <fieldset>

                <legend>Objectives</legend>

                <label for='mb18'><input id='mb18' name='mb.objectives_1' value='Maintaining the society’s culture and traditions' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Maintaining the society’s culture and traditions</label>
                <label for='mb19'><input id='mb19' name='mb.objectives_2' value='Enhancing self-confidence and believes' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Enhancing self-confidence and believes</label>
                <label for='mb20'><input id='mb20' name='mb.objectives_3' value='Changing a specific stereotype or image' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Canging a specific stereotype or image</label>
                <label for='mb21'><input id='mb21' name='mb.objectives_4' value='Enhancing the local economy by providing alternative competing products' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Enhancing the local economy by providing alternative competing products</label>
                <label for='mb22'><input id='mb22' name='mb.objectives_5' value='Enhancing self-confidence by promoting beauty and elegance' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Enhancing self-confidence by promoting beauty and elegance</label>
                <label for='mb23'><input id='mb23' name='mb.objectives_6' value='Increasing awareness about a certain subject/issue/cause' type='checkbox' style="display:none;"><span class='custom checkbox'></span>Increasing awareness about a certain subject/issue/cause</label>

                <label style='font-weight:bold;margin-top:20px;'>If you have any other objective/s please feel free to share with us :</label>
                <input type='text' name='mb.other_objectives'>

            </fieldset>



            <h5>What makes your product different than others?</h5>
            <input type='text' name='value_proposition'>


            <h5>How do you describe the competition to your product in the market?</h5>

            <fieldset>

                <legend>Levels</legend>

                <label for='mb24'><input name='mb.competetion' value='huge' id='mb24' type='radio' style="display:none;"><span class='custom radio'></span>Huge</label>
                <label for='mb25'><input name='mb.competetion' value='meduim' id='mb25' type='radio' style="display:none;"><span class='custom radio'></span>Meduim</label>
                <label for='mb26'><input name='mb.competetion' value='small' id='mb26' type='radio' style="display:none;"><span class='custom radio'></span>Small</label>
                <label for='mb27'><input name='mb.competetion' value='none' id='mb27' type='radio' style="display:none;"><span class='custom radio'></span>None</label>

            </fieldset>

        </div>
    </div>

    <button ng-click='showProducts()' class='button'>Next</button>
</form>

<div style='margin-bottom:10px;'></div>


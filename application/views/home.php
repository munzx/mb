<div ng-controller='base'>

    <div class="row">
        <div class="twelve columns orange">
            <h2 style='color : #575757;'>Marketing Brief</h2>
        </div>
    </div>

    <form id='mb' ng-submit='mbForm()' name='mb' novalidate>
        <div class="row">
            <div class="twelve columns">

                <h5 for='mb.first_name'>First name</h5>
                <input id='mb.first_name' ng-model='firstName' name='mb.first_name' type='text' required>

                <h5 for='mb.last_name'>Last name</h5>
                <input id='mb.last_name' ng-model='lastName' name='mb.last_name' type='text' required>

                <h5 for='mb.email'>Email</h5>
                <input id='mb.email' ng-model='email' name='mb.email' type='email' required>

                <h5 for='mb.email'>Brand name</h5>
                <input id='mb.brand' ng-model='brand' name='mb.brand' type='text' required>

                <h5>How do you see your products?</h5>
                <fieldset>
                    <legend>Gender</legend>

                    <label for='mb1'><input ng-model='gender' name='mb.gender' value='faminine' id='mb1' type='radio' ng-checked='true'>More Faminine</label>
                    <label for='mb2'><input ng-model='gender' name='mb.gender' value='masculine' id='mb2'  type='radio'>More Masculine</label>
                    <label for='mb3'><input ng-model='gender' name='mb.gender' value='both' id='mb3'  type='radio'>Both</label>
                </fieldset>

                <fieldset>
                    <legend>Age</legend>

                    <label for='mb4'><input ng-model='age' name='mb.age' id='mb4' value='young' type='radio' ng-checked='true'>Young</label>
                    <label for='mb5'><input ng-model='age' name='mb.age' id='mb5' value='mature' type='radio'>Mature</label>
                </fieldset>

                <fieldset>
                    <legend>Price</legend>

                    <label for='mb6'><input ng-model='price' name='mb.price' id='mb6' value='economy' type='radio' ng-checked='true'>Economy</label>
                    <label for='mb7'><input ng-model='price' name='mb.price' id='mb7' value='luxury' type='radio'>Luxury</label>
                </fieldset>


                <fieldset>
                    <legend>Style</legend>

                    <label for='mb8'><input ng-model='style' name='mb.style' id='mb8' value='serious' type='radio' ng-checked='true'>Serious</label>
                    <label for='mb9'><input ng-model='style' name='mb.style' id='mb9' value='playful' type='radio'>Playful</label>
                    <label for='mb10'><input ng-model='style' name='mb.style' id='mb10' value='both' type='radio'>Both</label>
                </fieldset>




                <fieldset>

                    <legend>Targeted Customers</legend>

                    <label for='mb11'><input id='mb11' ng-model='emirates' name='mb.target_customer1' value='UAE' type='checkbox'></span>Emiratis</label>
                    <label for='mb12'><input id='mb12' ng-model='gcc' name='mb.target_customer2' value='GCC' type='checkbox'></span>GCC Nationalities</label>
                    <label for='mb13'><input id='mb13' ng-model='arab' name='mb.target_customer3' value='ARAB' type='checkbox'></span>Arabs</label>
                    <label for='mb14'><input id='mb14' ng-model='asian' name='mb.target_customer4' value='ASIAN' type='checkbox'></span>Asians</label>
                    <label for='mb15'><input id='mb15' ng-model='european' name='mb.target_customer5' value='EUROPEAN' type='checkbox'></span>Eurpeans</label>
                    <label for='mb16'><input id='mb16' ng-model='african' name='mb.target_customer6' value='AFRICANS' type='checkbox'></span>Africans</label>
                    <label for='mb17'><input id='mb17' ng-model='latino' name='mb.target_customer7' value='LATINA' type='checkbox'></span>Latinos</label>

                </fieldset>



                <fieldset>

                    <legend>Objectives</legend>

                    <label for='mb18'><input id='mb18' ng-model='option1' name='mb.objectives_1' value='Maintaining the society’s culture and traditions' type='checkbox'></span>Maintaining the society’s culture and traditions</label>
                    <label for='mb19'><input id='mb19' ng-model='option2' name='mb.objectives_2' value='Enhancing self-confidence and believes' type='checkbox'></span>Enhancing self-confidence and believes</label>
                    <label for='mb20'><input id='mb20' ng-model='option3' name='mb.objectives_3' value='Changing a specific stereotype or image' type='checkbox'></span>Canging a specific stereotype or image</label>
                    <label for='mb21'><input id='mb21' ng-model='option4' name='mb.objectives_4' value='Enhancing the local economy by providing alternative competing products' type='checkbox'></span>Enhancing the local economy by providing alternative competing products</label>
                    <label for='mb22'><input id='mb22' ng-model='option5' name='mb.objectives_5' value='Enhancing self-confidence by promoting beauty and elegance' type='checkbox'></span>Enhancing self-confidence by promoting beauty and elegance</label>
                    <label for='mb23'><input id='mb23' ng-model='option6' name='mb.objectives_6' value='Increasing awareness about a certain subject/issue/cause' type='checkbox'></span>Increasing awareness about a certain subject/issue/cause</label>

                    <label style='font-weight:bold;margin-top:20px;'>If you have any other objective/s please feel free to share with us :</label>
                    <input type='text' ng-model='otherObjectives' name='mb.other_objectives'>

                </fieldset>



                <h5>What makes your product different than others?</h5>
                <input type='text' ng-model='valueProposition' name='value_proposition' required>


                <h5>How do you describe the competition to your product in the market?</h5>

                <fieldset>

                    <legend>Levels</legend>

                    <label for='mb24'><input ng-model='competetion' name='mb.competetion' value='huge' id='mb24' type='radio'>Huge</label>
                    <label for='mb25'><input ng-model='competetion' name='mb.competetion' value='meduim' id='mb25' type='radio' ng-checked='true'>Meduim</label>
                    <label for='mb26'><input ng-model='competetion' name='mb.competetion' value='small' id='mb26' type='radio'>Small</label>
                    <label for='mb27'><input ng-model='competetion' name='mb.competetion' value='none' id='mb27' type='radio'>None</label>

                </fieldset>

            </div>
        </div>

        <button ng-disabled='mb.$invalid'; ng-click='showProducts()' style='color:#575757;' class='button'>Next</button>
    </form>

    <div style='margin-bottom:10px;'></div>

</div>

    <div class="appContainer">
    <div class="book">
        <div id="recipes"></div>
        <div id="titlePage"></div>
        <div id="controls">
        <button class="button" onclick="previousRecipe()">Previous</button>
        <button class="button" onclick="nextRecipe()">Next</button>
        </div>
    </div>

    <div class="formContainer">
        <form class="form">
            <p class="title">New Recipe</p>
            <input type="button" value="Add your recipe" onclick="addRecipe(), clearText()"/>
            <input type="button" value="Add another step" onclick="addInput()"/>
            <input type="button" value = "Clear text" onclick="clearText()"/>
            <input type="button" value="Delete step" onclick="deleteStep()"/>
            <input class="recipeName" type="text" size="100" placeholder="Enter the name of your Recipe."/>
            <input class="step" type="text" placeholder="Enter your next step" size="100"/>
        </form>
    </div>
    </div>
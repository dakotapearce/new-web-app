
var titlePage = document.getElementById("titlePage")
var pages = document.getElementById("recipes")
var book = []
var numberRecipe = 0
var newRecipe 
var iteration = -1

// This is a object constructor for my array 

function recipe(name, number, steps) {
    this.name = name
    this.number = number
    this.steps = steps
}

// function for adding the recipe to the book 


function addRecipe() {

  var recipeName = document.getElementsByClassName("recipeName")[0].value
  var recipeNumber = numberRecipe
  var recipeSteps = Array.from(document.getElementsByClassName('step'))

  for (var i = 0; i < recipeSteps.length; i++) {

    recipeSteps[i] = (i + 1) + ". " + recipeSteps[i].value + "<br>"
  }

  newRecipe = new recipe(recipeName, recipeNumber, recipeSteps)

 
  // an if statement to check that there are properties to the object
  book[recipeNumber] = newRecipe

  if (newRecipe.name == "") {
    book.pop()
    numberRecipe--
  }

  if (book.length - 1 == 0) {
    document.getElementById("recipes").innerHTML = "<p>Page " + book[0].number + "</p><p id='recipeTitle'>" + book[0].name + "</p><p>" + book[0].steps.join("") + "</p>"
  }

  numberRecipe++
}

// helper function for changing the title page while flipping through the book



function pageFlip() {

  if (iteration == -1) {
    document.getElementById("titlePage").style.display = "block"
    document.getElementById("recipes").style.display = "none"
  }
  else {
    document.getElementById("titlePage").style.display = "none"
    document.getElementById("recipes").style.display = "block"
  }
}

setInterval(pageFlip(), 10)

// function to change between the recipe book

function nextRecipe() {

    if (iteration < book.length - 1) {
      iteration++
    }
    else {
      iteration = -1
    }

    pageFlip()

    document.getElementById("recipes").innerHTML = "<p>Page " + book[iteration].number + "</p><p id='recipeTitle'>" + book[iteration].name + "</p><p>" + book[iteration].steps.join("") + "</p>"

}

function previousRecipe() {

  if (iteration > -1) {
    iteration--
  }
  else {
    iteration = book.length - 1
  }

  pageFlip()

  document.getElementById("recipes").innerHTML = "<p>Page " + book[iteration].number + "</p><p id='recipeTitle'>" + book[iteration].name + "</p><p>" + book[iteration].steps.join("") + "</p>"
}

// The function below creates more steps to add to a recipe

function addInput() {
    var parent = document.getElementsByClassName("form")[0]
     
    var newStep = document.createElement("input")
    newStep.setAttribute("type", "text")
    newStep.setAttribute("placeholder", "Enter your next step.")
    newStep.setAttribute("size", "100")
    newStep.setAttribute("class", "step")

    parent.appendChild(newStep)

}

// the function to clear all text in all fields
function clearText() {
  document.getElementsByClassName("recipeName")[0].value = ""

  var stepArray = document.getElementsByClassName("step")
  stepArray[0].value = ""

  for (var i = stepArray.length - 1; i >= 0; i--) {
    
    stepArray[i].value = ""
  }
}

// The function for deleting the last step in the recipe 

function deleteStep() {
  var stepArray = document.getElementsByClassName("step")
  stepArray[stepArray.length - 1].parentNode.removeChild(stepArray[stepArray.length -1])
}   


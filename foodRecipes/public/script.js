const searchBox = document.getElementById("searchBox");
const searchBtn = document.getElementById("searchBtn");
const recipeContainer = document.getElementById("recipe-container");
const recipeCloseBtn = document.getElementById("closeBtn");
const recipeDetailsContent = document.getElementById("recipe-details-content");

//Function to get recipe.
const fetchRecipies = async (query) => {
  recipeContainer.innerHTML = `<h1 class="mt-5 text-center">Fetching Recipes...</h1>`;
  try {
    const data = await fetch(`https://www.themealdb.com/api/json/v1/1/search.php?s=${query}`);
    const response = await data.json();
    recipeContainer.innerHTML = "";
    response.meals.forEach((meal) => {
      const recipeDiv = document.createElement("div");
      recipeDiv.classList.add("recipe");
      recipeDiv.innerHTML = `
              <div class="card mt-5 m-3">
                  <div class="card1">
                      <img src="${meal.strMealThumb}" class="card-img-top">
                  </div>
                  <div class="card-body d-flex" style="justify-content:space-between;">
                      <div>
                          <h5 class="card-title">${meal.strMeal}</h5>
                          <p class="card-text"><span>${meal.strArea}</span> Dish </p>
                          <p class="card-text">Belongs to <span>${meal.strCategory}</span> Category </p>
                      </div>
                      <div style="width: auto;">
                          <p class="card-text text-center" style="width: 30px;"><a href="${meal.strYoutube}"><img class="img-fluid" style="width:20px; float:right;" src="images/youtube.png"></a></p>
                      </div>
                  </div>
              </div>
          `;
      const buttons = document.createElement("button");
      buttons.textContent = "View Recipe";
      recipeDiv.appendChild(buttons);
  
      //Adding EventListener to recipe button.
      buttons.addEventListener("click", () => {
        openRecipePopUp(meal);
      });
  
      recipeContainer.appendChild(recipeDiv);
      console.log(meal);
    });
  } catch (error) {
    recipeContainer.innerHTML = `<h1 class="mt-5 text-center">Error in Fetching Recipes...</h1>`;
  }
};

//Function to fetch ingredients and measurements.
const fetchIngredient = (meal) => {
  let ingredientsList = "";
  for (let i = 1; i < 20; i++) {
    const ingredient = meal[`strIngredient${i}`];
    if (ingredient) {
      const measure = meal[`strMeasure${i}`];
      ingredientsList = ingredientsList + `<li>${measure} ${ingredient}</li>`;
    }
    else {
      break;
    }
  }
  return ingredientsList;
}

const openRecipePopUp = (meal) => {
  recipeDetailsContent.innerHTML = `
    <h2 class="recipeName">${meal.strMeal}</h2>
    <h3>Ingredient:</h3>
    <ul class="ingredientList">${fetchIngredient(meal)}</ul>
    <div class="recipeInstructions">
      <h3>Ingredients:</h3>
      <p>${meal.strInstructions}</p>
    </div>
  `;
  recipeDetailsContent.parentElement.style.display = "block";
}

recipeCloseBtn.addEventListener("click", () => {
  recipeDetailsContent.parentElement.style.display = "none";
})

searchBtn.addEventListener("click", (e) => {
  e.preventDefault();
  const searchInput = searchBox.value.trim();
  if (!searchInput) {
    recipeContainer.innerHTML = `<h1 class="text-center mt-3 mb-3">Type the meal in the search box</h1>`;
    return;
  }
  fetchRecipies(searchInput);
});

const countryInput = document.getElementById("countryInput");
const search = document.getElementById("search");
const search_result = document.getElementById("search_result");
const flag = document.getElementById("flag");
const coatOfArm = document.getElementById("coatOfArm");
const names = document.getElementById("name");
const capital = document.getElementById("capital");
const continent = document.getElementById("continent");
const population = document.getElementById("population");
const Currency = document.getElementById("Currency");
const CurrencyShort = document.getElementById("CurrencyShort");
const language = document.getElementById("language");
const Error = document.getElementById("error");

search.addEventListener("click", () => {
    let countryName = countryInput.value.trim();
    let finalURL = `https://restcountries.com/v3.1/name/${countryName}?fullText=true`;

    fetch(finalURL)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            search_result.style.display = "block";
            countryData = data[0];
            flag.src = countryData.flags.svg;
            coatOfArm.src = countryData.coatOfArms.svg;
            names.innerHTML = countryData.name.common;
            capital.innerHTML = countryData.capital;
            continent.innerHTML = countryData.continents;
            population.innerHTML = countryData.population;
            Currency.innerHTML = countryData.currencies[Object.keys(countryData.currencies)].name;
            CurrencyShort.innerHTML = Object.keys(countryData.currencies)[0];
            language.innerHTML = Object.values(countryData.languages);
        });
});
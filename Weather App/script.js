const API_KEY = `2409495193bf1aba7dacde51c3967e99`;
const form = document.querySelector('form');
const search = document.querySelector('#search');
const weather = document.querySelector('#weather');

const getWeather = async (city) => {
    weather.innerHTML = `<h4>Loading...</h4>`;
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${API_KEY}&units=metric`;
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);
    return showWeather(data);
}

const showWeather = (data) => {
    if (data.cod == "404") {
        weather.innerHTML = `
            <h6>City is Not Found</h6>
            <img src="image/error.png" id="error">
        `;
    }
    weather.innerHTML = `
        <div>
            <img src="https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png" alt="">
        </div>
        <div>
            <h2>${data.main.temp} ℃</h2>
            <h4>${data.weather[0].main}</h4>
        </div>
    `;
}

form.addEventListener(
    'submit',
    function (e) {
        getWeather(search.value);
        e.preventDefault();
    }
)
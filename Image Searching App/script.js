let generateBtn = document.querySelector('.generateBtn');
let input = document.querySelector('input');
let select = document.querySelector('select');

let img_container = document.querySelector('.img_container');
const generateImage = async (userValue, imgQuantity) => {
    let url = `https://pixabay.com/api/?key=21429723-19ab12aea7da1e1ee93e821d5&q=${userValue}&image_type=photo`;

    const response = await fetch(url);

    if (response.ok) {
        const data = await response.json();

        if (data.hits.length == 0) {
            // console.log(`image not found`);
            return (`<h4>Imgae Not Found!</h4>`);
        }

        try {
            console.log(data);
            const imgSrc = data.hits.slice(0, imgQuantity).map((element, index) => {
                return `
                    <div class="card_img">
                        <img src="${element.largeImageURL}" alt="">
                        <button onclick="handleDownload('${element.largeImageURL}', '${element.tags}')" class="dwnBtn" title="download image"><i class="fa-regular fa-circle-down" aria-hidden="true"></i></button>
                        
                    </div>
                `;
            })
                .join("");

            img_container.innerHTML = imgSrc;
        } catch (error) {
            console.log(error);
        }
    }
}

generateBtn.addEventListener('click', () => {
    let inputValue = input.value;
    let selectValue = select.value;

    if (inputValue && selectValue) {
        generateImage(inputValue, selectValue);
    }
});

const handleDownload = (imgsrc, imgName) => {
    let imgNamedata = imgName.split(',')[0];
    fetch(imgsrc).then((res) => res.blob()).then((blob) => {
        let url = URL.createObjectURL(blob);
        let a = document.createElement('a');
        a.href = url;
        a.download = `${imgNamedata}.jpg`;

        a.click();
    });
};
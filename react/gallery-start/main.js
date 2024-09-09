const displayedImage = document.querySelector('.displayed-img');
const thumbBar = document.querySelector('.thumb-bar');

const btn = document.querySelector('button');
const overlay = document.querySelector('.overlay');

/* Declaring the array of image filenames */
const imageFiles = ['images/pic1.jpg','images/pic2.jpg','images/pic3.jpg','images/pic4.jpg','images/pic5.jpg'];

/* Declaring the alternative text for each image file */
const imageTexts = ['Closeup of a human eye','cloud','flower','egypt','butterfly']

/* Looping through images */
for(const fileName of imageFiles){
    const newImage = document.createElement('img');
    newImage.setAttribute('src', fileName);
    newImage.setAttribute('alt', `ファイル名: ${fileName}`);
    thumbBar.appendChild(newImage);
    newImage.addEventListener('click',()=>{
        displayedImage.src = newImage.src;
        displayedImage.alt = newImage.alt;
    });
};

const originalText = "Darken";
const changeText = "Lighten";

btn.addEventListener('click',(e) => {
    if(btn.textContent === originalText){
        btn.setAttribute("dark","light");
        btn.textContent = changeText;
        overlay.style.backgroundColor = "rgb(0,0,0,0.5)";
    }else{
        btn.setAttribute("light","dark");
        btn.textContent = originalText;
        overlay.style.backgroundColor = "rgb(0 0 0 / 0%)";
    }
})

/* Wiring up the Darken/Lighten button */

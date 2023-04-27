const container = document.querySelector('.container') 
const apiURL = 'https://source.unsplash.com/random/'
const numlinhas = 10

for (let i = 0; i < numlinhas; i++) {
    const img = document.createElement('img');
    img.src = `${apiURL} ${getRandomSize()}`
    container.appendChild(img)
}

function getRandomSize(){
    return `{getRandomNumber()}x${getRandomNumber()}`
}

function getRandomNumber() {
    return Math.floor(Math.random()*10) + 300
}
// fetch('https://smashbros-unofficial-api.vercel.app/api/v1/ultimate/characters/mario').then(res => res.json()).then(data=>console.log(data))
// console.log(fetch('https://smashbros-unofficial-api.vercel.app/api/'));

// console.log(fetch('https://randomuser.me/api'));

// console.log(fetch('https://rickandmortyapi.com/api'));

// console.log(fetch('https://smashbros-unofficial-api.vercel.app/api/v1/ultimate/characters/mario'));

function getNewSWAPI() {
  const baseSwapiURL = 'https://swapi.dev/api/people/'
  let num = Math.ceil(Math.random() * 79);
  if(num==17){
    num=50;
  }
  console.log(num);
  let newURL= baseSwapiURL + String(num);
  return newURL;
}


// let swapiURL = 'https://swapi.dev/api/people/3';
async function getSwapi() {
  let newURL = getNewSWAPI();
  const result = await fetch(newURL);
  const info = await result.json();
  console.log(info);
  const {name} = info;

  document.getElementById('name').textContent = name;
}

// const swapiTwoURL= 'https://swapi.dev/api/people/4'
async function getSwapiTwo() {
  let newerURL = getNewSWAPI();
  const res = await fetch(newerURL);
  const data = await res.json();
  console.log(data);
  const {name} = data;

  document.getElementById('nameTwo').textContent = name;
}
getSwapi();
getSwapiTwo();
document.getElementById("characterOne").addEventListener("click", getSwapi);
document.getElementById("characterOne").addEventListener("click", getSwapiTwo);




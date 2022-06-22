
function getNewSWAPI() {
  const baseSwapiURL = 'https://swapi.dev/api/people/'
  let num = Math.ceil(Math.random() * 79);
  if(num==17){
    num=50;
  }
  // console.log(num);
  let newURL= baseSwapiURL + String(num);
  return newURL;
}

function changeWinner() {
  document.getElementById('setWinner').value = 0;
  document.getElementById('name').style.textDecoration = "underline";
  document.getElementById('nameTwo').style.textDecoration = "none";
}
function changeWinnerTwo() {
  document.getElementById('setWinner').value = 1;
  document.getElementById('name').style.textDecoration = 
  "none";
  document.getElementById('nameTwo').style.textDecoration = "underline";
}

async function getSwapi() {
  document.getElementById('name').textContent = 'Loading Character...';
  let newURL = getNewSWAPI();
  const result = await fetch(newURL);
  const info = await result.json();
  // console.log(info);
  const {name} = info;

  document.getElementById('name').textContent = name;

  // console.log(charName.value);
    document.getElementById('winnerOne').value = name;
}

async function getSwapiTwo() {
  document.getElementById('nameTwo').textContent = 'Loading Character...';
  let newerURL = getNewSWAPI();
  const res = await fetch(newerURL);
  const data = await res.json();
  // console.log(data);
  const {name} = data;

  document.getElementById('nameTwo').textContent = name;
  // console.log(charNameTwo.value);
  document.getElementById('nameTwo').value = name;
}

getSwapi();
getSwapiTwo();
document.getElementById("characterOne").addEventListener("click", getSwapi);
document.getElementById("characterOne").addEventListener("click", getSwapiTwo);

document.getElementById("charOneWin").addEventListener("click", changeWinner);
document.getElementById("charTwoWin").addEventListener("click", changeWinnerTwo);




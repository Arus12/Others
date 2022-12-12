const xhttp = new XMLHttpRequest();
const flightsEle = document.getElementById("flights");
let data = [];
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      data = JSON.parse(xhttp.responseText);
      flightsEle.innerHTML = "mdksa";
      console.log(data[0].destination);
      console.log(data);
      for(let flight of data){
      let flightEle = document.createElement("div");
      flightEle.innerHTML = `${flight.type}|${flight.destination}`; 
      flightsEle.appendChild(flightEle); 
      }
    }
  };
  xhttp.open("GET", "load.php", true);
  xhttp.send();
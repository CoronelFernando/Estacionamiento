obtenerCajones();
window.setInterval("obtenerCajones()", 10000);


function obtenerCajones(){
  var xml = new XMLHttpRequest();
  xml.open('GET', 'home/cajones', true);
  xml.addEventListener('load', function(){
    var jsonData = JSON.parse(xml.responseText);
    //estacionamiento1(jsonData);
    parking(jsonData);
    //console.log(jsonData);
  });
  xml.send();
}


//parking();

function parking(jsonData){
  document.getElementById('container').innerHTML = '';
  //Edificio
  var street0 = banquetas('100%', '20px', 'street0', 'top');
  container.appendChild(street0);
  var street = banquetas('5%', '200px', 'street', 'top');
  container.appendChild(street);
  var edificios = edificio('90%', '200px', 'banqueta', 'top');
  container.appendChild(edificios);
  var street1 = banquetas('5%', '200px', 'street', 'top');
  container.appendChild(street1);
  var street2 = banquetas('100%', '40px', 'street0', 'top');
  container.appendChild(street2);

  //banquetita
  var streetx = banqueta('100%', '12px', 'streetx');
  container.appendChild(streetx);
  

    //dibujar cajones
  var street3 = calles('15%', '250px', 'street3', 'top');
  container.appendChild(street3); 
  var nCajones = 5;
  for (var i = 0; i < nCajones; i++) {
    var lineaAmarilla = lineasAmarillas('0.5%', '250px', 'lineaAmarilla' + i);
    container.appendChild(lineaAmarilla);
    //console.log(jsonData[i]);
    var Drawer = drawer('13.4%','250px',(i+1), jsonData[i].caj_status_id, 'top');
    container.appendChild(Drawer);
    if((nCajones - i) == 1){
      var lineaAmarilla = lineasAmarillas('0.5%', '250px', 'lineaAmarilla' + i);
      container.appendChild(lineaAmarilla);
    }    
  }
  var street4 = calles('15%', '250px', 'street4', 'top');
  container.appendChild(street4);
  var street5 = calles('100%', '100px', 'street5', 'top');
  container.appendChild(street5);
 
}



window.onload = function () {
  let data;
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        data = JSON.parse(this.response)
        console.log('dataonlaod',data.vin)
        createListe(data.vin);
        addEventSearch(data.vin);
    }
  };
  
  xhttp.open("GET", "data.json", true);
  xhttp.send();
}

createListe = (vins) => {
  console.log('data',vins);
  let ul = document.getElementById('listVin');
  let li = '';
  
  if (vins && vins.length) {
    vins.forEach(vin => {
      li += `<li class="list-group-item" id="${vin.id}">${vin.name}</li>`;
    });
  }
  console.log('li',li);
  ul.innerHTML = li;
  li = ul.getElementsByTagName('li');
  console.log('litab',li);
  for (l of li) {
    addClick(l,vins);
  }
  addEventSave(vins,);
}

select = (li,vins) => {
  const form = document.getElementById('frmWine').elements
  console.log(li.id);
  let vinSelect;
  vins.map(vin => {
    if ( vin.id == li.id) vinSelect = vin;
  })
  for (elem of form) {
      console.log('elem',elem.id);
      if (vinSelect[elem.id]) {
          elem.value = vinSelect[elem.id]
      }
  }
  
  console.log('vinselect',vinSelect);
  console.log('form',form);
  
}

addClick = (li,vins) => {
  li.addEventListener('click',() => select(li,vins));
}

addEventSave = (vins) => {
    const btSubmit = document.getElementById('btSubmit');
    btSubmit.addEventListener('click',() => save(btSubmit, vins));
}

addEventSearch = (vins) => {
    console.log('addEventSearch',vins)
    const btSearch = document.getElementById('btSearch');
    btSearch.addEventListener('click',() => search(btSearch, vins));
}

search = (btn, vins) => {
    let input = document.getElementById('keyword');
    let inputValue = input.value;
    let vinsSelect
    const  regex = new RegExp(inputValue,"i");
    console.log('input',input.value);
    console.log('vin',vins);
    vinsSelect = vins.filter(vin => vin.name.search(regex)!= -1);
    console.log('vinsSelect',vinsSelect);
    createListe(vinsSelect);
}
winesFormat = (form, vins) => {
  let vinSelect;
  vins.map(vin => {
    if ( vin.id == li.id) vinSelect = vin;
  })
    
}

save = (button, vins) => {
    console.log(button.form.elements);
  /*
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(this.readyState==4) {
        switch(this.status) {
            case 200:
                    console.log(this.status, this.statusText, 'vin ajouté');
                    break;
            case 400:
                    console.log(this.status, this.statusText, 'Syntaxe de la requête erroné!');
        }
    }
  };
  xhttp.open("POST", "mockserveur.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(`data=data`);
  */
    
}


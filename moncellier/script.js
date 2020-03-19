
let vins;
const pictureUrl = "http://localhost/caviste/caviste/public/pics"

window.onload = function () {
  btnNewWine = document.getElementById('newWine')
  btDelete = document.getElementById('btDelete')
  
  btnNewWine.addEventListener('click',() => newWine());
  btDelete.addEventListener('click',() => deleteWine());

 var myInit = { method: 'GET' };
 let apiUrl = "http://localhost:8888";
 
 fetch(apiUrl+"/api/wines",myInit).then( (response) => {
  if (response.ok) {
    response.json().then( res => {
      vins = res 
      createListe(vins);
      addEventSearch(vins);
    })
  }
 })
}

deleteWine = () => {
  const apiUrl = "http://localhost:8888";
  const id = document.getElementById('id');
  if (!id.value) {
    newWine
  } else {
    var myInit = {
      method: 'DELETE',
      mode: 'cors',
      headers: {
        'Content-type': 'application/json; charset=UTF-8' 
       },
    };
    
    fetch(`${apiUrl}/api/wines/${id.value}`,myInit).then( (response) => {
     if (response.ok) {
       response.json().then( res => {
         console.log(res);
         document.location.reload(true); 
       })
     }
    })
  }
}

newWine = () => {
  btnNewWine = document.getElementById('newWine')
  const form = document.getElementById('frmWine').elements
  for (elem of form) {
     elem.value = '';
  }

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
  const image = document.getElementById('image')
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
  console.log('picture',pictureUrl+'/'+vinSelect.picture);
  image.src = pictureUrl+'/'+vinSelect.picture;
  console.log('vinselect',vinSelect);
  console.log('form',form);
  
}

addClick = (li,vins) => {
  li.addEventListener('click',() => select(li,vins));
}

addEventSave = (vins) => {
    const btSubmit = document.getElementById('btSubmit');
    btSubmit.addEventListener('click',(e) => save(e,btSubmit, vins));
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

save = (e,button, vins) => {
    console.log(button.form.elements);
    console.log(e);
    const form = document.getElementById('frmWine').elements
    const image = document.getElementById('image')
    vin = {};
    for (elem of form) {
      console.log('elem',elem.id);
      vin[elem.id] = elem.value;
      }
    
    vin.picture = image.src.substr(image.src.lastIndexOf('/')+1);
    console.log('vinpicture',vin.picture);
    const method = vin.id ? 'PUT': 'POST';

    var myInit = {
      method,
      body: JSON.stringify(vin),
      mode: 'cors',
      headers: {
        'Content-type': 'application/json; charset=UTF-8' 
       },
    };
    let apiUrl = "http://localhost:8888";
    const api = method === 'PUT' ? `${apiUrl}/api/wines/${vin.id}`: `${apiUrl}/api/wines`;
    
    fetch(api,myInit).then( (response) => {
     if (response.ok) {
       response.json().then( res => {
         console.log(res);
       })
     }
    })    
}


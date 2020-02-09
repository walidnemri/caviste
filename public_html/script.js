const vins = [
  {
    id: 0,
    name: 'Terre de Bussière',
    grapes: 'merlot',
    country: 'France',
    years: 2016,
  },
  {
    id: 1,
    name: 'Vieilles Vignes',
    grapes: 'Grenache',
    country: 'France',
    years: 2017,
  },
];

console.log('vins',vins);

createListe = (vins) => {
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
    addClick(l);
  }
}

select = (li) => {
  
  console.log(li.id);
  let vinSelect;
  vins.map(vin => {
    if ( vin.id == li.id) vinSelect = vin;
  })
  console.log('vinselect',vinSelect);

}

addClick = (li) => {
  li.addEventListener('click',() => select(li));
}

createListe(vins);

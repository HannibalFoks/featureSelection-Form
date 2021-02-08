let size;
let form = document.forms[0];

let nav = document.getElementById('navMenu');
nav.addEventListener('mouseover', function(e) {
    let target = e.target;

    let targetParent = target.closest('.menu-item');

    if (targetParent) {
        let subm = targetParent.getElementsByClassName('submenu')[0];
        close();
        if (subm) {
            subm.style.display = 'block';
        }
    }
});
nav.addEventListener('mouseout', function(e) {
    let target = e.target;
    let targetParent = target.closest('.menu-item');

    if (targetParent) {
        close();
    }
});


function close() {
    let s = document.getElementsByClassName('submenu');
    for (let i = 0; i < s.length; i++) {
        s[i].style.display = 'none';
    }
}

function fun3() {
    let polz = document.getElementById('polzH');
    let p = document.getElementById('Ppolz');
    let ClothSZ = document.getElementById('Clothsize');
    let sizeString = polz.value + ' м.';
    p.innerHTML=sizeString;
    ClothSZ.style.width = polz.value+'px';
    size = sizeString;
}
function GetSel() {
    let sel = document.getElementById('typeCloth').selectedIndex;
    let option = document.getElementById('typeCloth').options;
    return option[sel].value;
}
function GetRadio() {
    let radi = document.getElementsByName('popup-raid')
    let SelectRadi = 'Ничего не выбрано';
    radi.forEach((element) =>
    {
     if (element.checked) {
         SelectRadi = element.value;
     }
    })
return SelectRadi;
}
function GetChBox() {
    let chBox = document.getElementById('inp1');
    if (!chBox.checked) {
        return 'Доставка не выбрана'
    }
        return chBox.value;
}

function funMain() {
    let message = 'Вы выбрали ткань: ' + GetSel()+ '\nТип ткани: ' +GetRadio()+ '\nДлина - '
        + size + '\nВаши персональные данные: ' + form.elements.name.value +'\n'
        + form.elements.phone.value +'\n'+ form.elements.email.value + GetChBox();
    alert(message);
}

let size;
let form = document.forms[0];
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
    console.log(document.getElementById('typeCloth'));
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
        return 'Не выбрано'
    }
        return chBox.value;
}

function funMain() {
    let message = 'Вы выбрали ткань ' + GetSel()+ '\n тип ткани ' +GetRadio()+ '\n длина '
        + size + '\n ваши данные ' + form.elements.name.value +'\n'+ form.elements.phone.value +'\n'+ form.elements.email.value;
    alert(message);
}

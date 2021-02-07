<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Практика по JS</title>


    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="popupBlock">
        <form onsubmit="funMain(); return false" id="PopupForm">
            <div class="popupBlock-Top" >
                <h2 class="popupBlock_H1 fontsStyle-Raleway">
                    Заказать ткань
                </h2>
            </div>
            <div class="popupBlok__items">
                <div class="popup_radioGroup">
                    <h3 class="typeCloth__label fontsStyle-Raleway">Выберете ткань</h3>
                    <br>
                    <select id="typeCloth">
                        <option class="fontsStyle-Raleway" value="Алтабас">Алтабас</option>
                        <option class="fontsStyle-Raleway" value="Ацетат">Ацетат</option>
                        <option class="fontsStyle-Raleway" value="Байка">Байка</option>
                        <option class="fontsStyle-Raleway" value="Бареж">Бареж</option>
                        <option class="fontsStyle-Raleway" value="Брокат">Брокат</option>
                        <option class="fontsStyle-Raleway" value="Вискоза">Вискоза</option>
                        <option class="fontsStyle-Raleway" value="Войлок">Войлок</option>
                        <option class="fontsStyle-Raleway" value="Гипюр">Гипюр</option>
                        <option class="fontsStyle-Raleway" value="Деним">Деним</option>
                        <option class="fontsStyle-Raleway" value="Донегаль">Донегаль</option>
                        <option class="fontsStyle-Raleway" value="Жатка">Жатка</option>
                    </select>
                </div>

                <div class="popup_radioGroup flex-colm fontsStyle-Raleway ">
                    <label><input class="popupInp_elem radioGroup_elem" type="radio" name="popup-raid" value="Высшая категория"> Высшая категория</label>
                    <label><input class="popupInp_elem radioGroup_elem"  type="radio" name="popup-raid" value="Первая категория"> Первая категория</label>
                    <label><input class="popupInp_elem radioGroup_elem" type="radio" name="popup-raid" value="Вторая категория"> Вторая категория</label>
                </div>

                <div class="popup_radioGroup">
                    <h3 class="typeCloth__label ClothSize__h3 fontsStyle-Raleway">Выберете длину тркани</h3>
                    <p id="Ppolz">метры</p>
                    <input type="range" min="1" max="350" step="1" oninput="fun3()" id="polzH">
                    <div id="Clothsize"></div>
                </div>

                <div class="popupBlock__percinInfo flex-colm popup-inpBlokc fontsStyle-Raleway ">
                    <h3 class="typeCloth__label">Введите личные данный</h3>
                    <label class="">
                        <input type="text" name="name" class="popupInp_elem percinInfo" placeholder="Введите Ф.И.О."></label>
                    <label class="">
                        <input type="tel" name="phone" class="popupInp_elem percinInfo" placeholder="Введите телефон"></label>
                    <label class="">
                        <input type="email" name="email" class="popupInp_elem percinInfo" placeholder="Введите email"></label>
                </div>
                <div class="decor"></div>
                <label class="delivery"><input class="delivery popupInp_elem" type="checkbox" id="inp1" value="Доставка заказа"> Заказать доставку</label>
                <br>
                <input type="submit" name="go" value="Отправить">
            </div>
        </form>
    </div>

<script type="text/javascript" src="jsPract.js"></script>
</body>
</html>
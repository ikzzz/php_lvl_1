function renderAllGoods() {
    var str = "getAllGoods=" + '1';
    $.ajax({
        url: '../controllers/Admin.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: str, // данные, которые передаем на сервер
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            console.log(dateAnswer);
            var table = '<table class="table table-hover"><thead><tr><th scope="col">Наименование</th><th scope="col">Количество</th><th scope="col">Сумма</th></tr></thead><tbody >';
            var i = 0;
            for (var key in dateAnswer) {
                table += '<tr class="rowGoods' + dateAnswer[key].id + '">';
                table += '<th>' + dateAnswer[key].nameFull + '</th>';
                table += '<td><i class="fas fa-plus addToBasket" onclick="addToBasket(' + dateAnswer[key].id + ')" data-id=' + dateAnswer[key].id + '></i>';
                table += '<div class="basketOneCount' + dateAnswer[key].id + '">' + dateAnswer[key].count + '</div>';
                table += '<i class="fas fa-minus deleteToBasket" onclick="deleteToBasket(' + dateAnswer[key].id + ')" data-id=' + dateAnswer[key].id + '></i></td>';
                table += '<td><div class="basketOneSum' + dateAnswer[key].id + '">' + dateAnswer[key].count * dateAnswer[key].price + '</div></td></tr>';
                i++;
            }
            table += $('</table>');
            var modal = $('.modal-body');
            $('.modal-body').empty();
            modal.append(table);
        }
    });
};


function renderBasketModal() {
    var str = "getBasketGoods=" + '1';
    $.ajax({
        url: '../controllers/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: str, // данные, которые передаем на сервер
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
			var sumGood = 0;
            var table = '<table class="table table-hover"><thead><tr><th scope="col">Наименование</th><th scope="col">Количество</th><th scope="col">Сумма</th></tr></thead><tbody >';
            for (var key in dateAnswer) {
				sumGood += dateAnswer[key].count * dateAnswer[key].price;
                table += '<tr class="rowGoods' + dateAnswer[key].id + '">';
                table += '<th>' + dateAnswer[key].nameFull + '</th>';
                table += '<td><div class="countModal"><div class="simbolModal"><i class="fas fa-plus" onclick="addToBasket(' + dateAnswer[key].id + ')" data-id=' + dateAnswer[key].id + '></i></div>';
                table += '<div class="basketOneCount' + dateAnswer[key].id + '">' + dateAnswer[key].count + '</div>';
                table += '<div class="simbolModal"><i class="fas fa-minus" onclick="deleteToBasket(' + dateAnswer[key].id + ')" data-id=' + dateAnswer[key].id + '></i></div></div></td>';
                table += '<td><div class="basketOneSum' + dateAnswer[key].id + '">' + dateAnswer[key].count * dateAnswer[key].price + '</div></td></tr>';
            };
			table += '<tr class="">';
                table += '<td></td><th>Сумма заказа</th>';
                table += '<td><div class="bascketTotalSum">'+sumGood+'</div></td></tr>';
            table += ('</table>');
            var modal = $('.modal-body');
            modal.empty();
            modal.append(table);
        }
    });
};

function addToBasket(idGood) {
    var str = "addBasketid=" + idGood;
    $.ajax({
        url: '../controllers/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: str, // данные, которые передаем на сервер
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            if (dateAnswer) {
                $('.basketInfoOut').html('<strong>Корзина</strong>' + '<br>' + '<strong>' + dateAnswer[0] + '</strong>');
                $('.basketOneCount' + idGood).html(dateAnswer[2]);
                $('.basketOneSum' + idGood).html(dateAnswer[3]);
				$('.bascketTotalSum').html(dateAnswer[4]);
            }
        }
    });
};
function nextGoods(dateAnswer) {
    var str = "nextGoods=" + 1;
    $.ajax({
        url: '../controllers/Product.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: str, // тип ожидаемых данных в ответе
        data: str, // данные, которые передаем на сервер
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            alert(' ' + POST +);
            }
        }
};




function deleteToBasket(idGood) {
    var str = "deleteToBasketid=" + idGood;
    $.ajax({
        url: '../controllers/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: str, // данные, которые передаем на сервер
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            console.log(dateAnswer);
            if (dateAnswer[2] > 0) {
                $('.basketInfoOut').html('<strong>Корзина</strong>' + '<br>' + '<strong>' + dateAnswer[0] + '</strong>');
                $('.basketOneCount' + idGood).html(dateAnswer[2]);
                $('.basketOneSum' + idGood).html(dateAnswer[3]);
				$('.bascketTotalSum').html(dateAnswer[4]);
            } else if (dateAnswer[0] == null) {
                console.log(dateAnswer[0]);
                $('.basketInfoOut').html('<strong>Корзина</strong>' + '<br>' + '<strong>товаров нет(</strong>');
                renderBasketModal();
            } else {
                renderBasketModal();
            }
        }
    });
};

function addNewGood() {
    //preventDefault(); // делаем отмену действия браузера и формируем ajax
   var str = "addNewGood=" + 1;
   
    // данные с формы завернем в переменную для ajax
    $.ajax({
        type: 'POST', // тип запроса
        url: '../controllers/Admin.php', // куда будем отправлять, можно явно указать
        data: str, // данные, которые передаем
        success: function (data) { // в случае успешного завершения
            console.log("Завершилось успешно"); // выведем в консоли успех
            console.log(data); // выведем в консоли успех
            renderAdminAjax();
        },
        error: function (data) { // в случае провала
            console.log("Завершилось с ошибкой"); // сообщение об ошибке
            console.log(data); // и данные по ошибке в том числе
        }
    });
};

function scanDirLoadFiles() {
    //preventDefault(); // делаем отмену действия браузера и формируем ajax
   var str = "scanDirLoadFiles=" + 1;
    // данные с формы завернем в переменную для ajax
    $.ajax({
        type: 'POST', // тип запроса
        url: '../controllers/Admin.php', // куда будем отправлять, можно явно указать
        data: str, // данные, которые передаем
        success: function (data) { // в случае успешного завершения
            console.log("Завершилось успешно"); // выведем в консоли успех
            console.log(data); // выведем в консоли успех
            renderAdminAjax();
			setTimeout( function() { $( "#scanDirLoadFiles" ).modal( "hide" ) }, 3000 );
        },
        error: function (data) { // в случае провала
            console.log("Завершилось с ошибкой"); // сообщение об ошибке
            console.log(data); // и данные по ошибке в том числе
        }
    });
};



function editGood(idGood) {
    //preventDefault(); // делаем отмену действия браузера и формируем ajax
    //var formData = $('#form'+idGood).serialize();
    var formData = new FormData($('#form' + idGood)[0]);
    console.log(formData);
    // данные с формы завернем в переменную для ajax
    $.ajax({
        type: 'POST', // тип запроса
        url: '../controllers/Admin.php', // куда будем отправлять, можно явно указать
        data: formData, // данные, которые передаем
        cache: false, // кэш и прочие настройки писать именно так (для файлов)
        // (связано это с кодировкой и всякой лабудой)
        contentType: false, // нужно указать тип контента false для картинки(файла)
        processData: false, // для передачи картинки(файла) нужно false
        success: function (data) { // в случае успешного завершения
            console.log("Завершилось успешно"); // выведем в консоли успех
            console.log(data); // выведем в консоли успех
            renderAdminAjax();
        },
        error: function (data) { // в случае провала
            console.log("Завершилось с ошибкой"); // сообщение об ошибке
            console.log(data); // и данные по ошибке в том числе
        }
    });

};

function deleteGood(id) {
    var str = "deleteGoodid=" + id;
    $.ajax({
        url: '../controllers/Admin.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: str, // данные, которые передаем на сервер
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            renderAdminAjax();
        }
    });
};
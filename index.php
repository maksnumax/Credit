<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Кредит</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/my.css"/>

    <script src="./js/jquery.js"></script>
</head>
<body class="bg-white">
<div class="black-spinner-show" id="background-spinner"></div>
<div class="spinner" id="spinner">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
<div class="body_frame">
    <div class="body_black_frame"></div>
    <div class="form_containter">
        <div class="containter_form_zise">
            <div class="containet_middle_size">
                <div class="col-lg-4 col-xs-12">
                    <form action="/form.php" method="post" id="form">
                        <div class="block_input">
                            <div class="block_input">
                                <p class="title-input">Сумма покупки</p>
                                <input type="text" required name="price" class="press_input price-bind" id="price"<?php
                                if (isset($_POST['price']) && !empty($_POST['price']))
                                    echo "value =\"{$_POST['price']}\" "
                                ?>
                                       placeholder="50000">
                            </div>
                            <div class="block_input">
                                <p class="title-input">Номер телефона</p>
                                <input type="tel" required name="phone" class="press_input" id="inputphone"
                                    <?php
                                    if (isset($_POST['phone']) && !empty($_POST['phone']))
                                        echo "value =\"{$_POST['phone']}\" "
                                    ?>
                                       placeholder="+7(926)123-45-67">
                            </div>
                            <div class="block_input">
                                <p class="title-input">E-mail адрес</p>
                                <input type="email" name="customer_email" required class="press_input"
                                       id="customer_email"
                                    <?php
                                    if (isset($_POST['customer_email']) && !empty($_POST['customer_email']))
                                        echo "value =\"{$_POST['customer_email']}\" "
                                    ?>
                                       placeholder="test@example.com">
                            </div>

                        </div>
                        <button class="getVal" id="credit-link">Сделать предварительный расчет</button>
                        <!--<button class="visible-xss getVal">Рассчитать</button>-->
                        <button type="submit" class="send_button send_button_1">Оформить</button>
                        <!--    <button type="submit" form="form" class="visible-xss send_button send_button_2">Прододжить оформление</button>    -->
                    </form>


                </div>
                <div class="col-lg-8 col-xs-12">
                    <div class="wallet-b">
                        <div class="calc-credit">
                            <div class="clearfix"></div>
                            <div class="slide payc">
                                <h6>Первоначальный взнос, %</h6>
                                <div class="sum" data-min="0" data-max="30" data-step="10" data-default="0"></div>
                                <ul class="sum">
                                    <li>0%</li>
                                    <li>10%</li>
                                    <li>20%</li>
                                    <li>30%</li>
                                </ul>
                                <span class="val sum"></span>
                                <input type="text">
                            </div>
                            <div class="slide  type2">
                                <h6>Срок, мес.</h6>
                                <div class="per" data-min="3" data-max="15" data-step="3" data-default="12"></div>
                                <span class="val per"></span>
                                <ul class="per">
                                    <li>3 мес.</li>
                                    <li>6 мес.</li>
                                    <li>9 мес.</li>
                                    <li>12 мес.</li>
                                    <li>15 мес.</li>
                                </ul>
                            </div>
                            <div class="finanse-res">
                                <h4 class="price">Стоимость покупки <span class="fr"><em>С</em></span><span
                                        data-attr-price="0" class="pricess">0</span></h4>
                                <div class="clearfix"></div>
                                <hr/>
                                <h4 class="perv-vznos">Первоначальный взнос<span></span></h4>
                                <div class="clearfix"></div>
                                <h4 class="sum">Сумма займа <span></span></h4>
                                <div class="clearfix"></div>
                                <h4 class="ezh-platej">Ежемесячный платеж <span></span></h4>
                                <div class="clearfix"></div>
                                <hr/>
                                <h4 class="itogo">Итого переплата <span></span></h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/additional-methods.min.js"></script>
    <script src="./js/calc.js"></script>
    <script src="./js/uniform.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/touchpunch.js"></script>
    <script src="./js/dynamic.js"></script>
    <script src="./js/jquery.maskedinput.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#inputphone").mask("+7(999)99-99-999");

            $('#form').validate({
                rules: {
                    price: {
                        required: true,
                        minlength: 2,
                        pattern: '[0-9]+$'
                    },
                    phone: {
                        required: true,
//                minlength: 10,
//               maxlength: 12,
//                pattern: '[+]+[0-9]+$'
                    }
                },


                messages: {
                    price: {
                        required: 'Сумма обязательна к заполнению',
                        minlength: 'Сумма должна быть больще 9 рублей',
                        pattern: 'Неверый формат'
                    },
                    phone: {
                        required: 'Введите номер в заданом формате',
                        //    minlength: 'Слишком короткий телефон',
                        //   maxlength: 'Слишком длинный телефон',
                        //  pattern:  'Введите телефон в правильном формате +70000000000'
                    },
                    customer_email: {
                        required: 'Поле Email обязательно к заполнению',
                        email: 'Введите Email в правильном формате exemple@mail.ru'

                    }

                },
                submitHandler: function (form) {
                    $(form).ajaxSubmit({
                        url: 'form.php',
                        dataType: 'json',
                        beforeSend: function () {
                            $('#background-spinner').show();
                            $('#spinner').show();
                        },

                        success: function (data) {
                            if (data.userWebLink) {
                                window.location.replace(data.userWebLink);
                            }
                            else {
                                $('#background-spinner').hide();
                                $('#spinner').hide();
                                alert('Возникла ошибка: ' + data.error);

                            }
                        },
                        error: function (data) {
                            $('#background-spinner').hide();
                            $('#spinner').hide();
                            alert('Возникла ошибка' + data);

                        }
                    });

                }


            });
        });
        $('#credit-link').click(function (e) {
            e.preventDefault();
        })
    </script>
</html>

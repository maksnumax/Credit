
<?php 
spl_autoload_register(function ($class_name) {
    require_once 'Class/' . $class_name . '.php';
});

$NewForm = new NewPay('56','y2FhQP1qE2');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница оплаты</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/my.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>
<body>
<div class="body_frame">
<div class="body_black_frame"></div>
<div class="form_containter">
<div class="containter_form_zise">
<div class="containet_middle_size">

<div class="form_header">Введите данные</div>
<?php 

   echo "<div class=\"block_input\"><input type=\"text\" name=\"customer_email\" required disabled class=\"press_input\" value =\"{$_POST['price']}\"></div>";
   echo "<div class=\"block_input\"><input type=\"text\" name=\"customer_email\" required disabled class=\"press_input\" value =\"{$_POST['customer_email']}\"></div>";
     echo "<div class=\"block_input\"><input type=\"text\" name=\"customer_email\" required disabled class=\"press_input\" value =\"{$_POST['phone']}\"></div>";

?>
                 <? $form=$NewForm->generate_form(rand(1,100000),$_POST['price'],$_POST['customer_email'],$_POST['phone']);
                 echo $form;
                        ?>
                    </form>
                    </div>
</div>
                    </div>
                    </div>
                    
               
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/additional-methods.min.js"></script>
    <script type="text/javascript">
     $(function(){
    $('#form').validate({
        rules: {
         phone: {
              required: true,
               minlength: 10,
               maxlength: 12,
              pattern: '[+]+[0-9]+$'
          },
          price:{
            required:true,
            minlength: 2,
          }
        },

        messages: {
            phone: {
required: 'Введите номер в заданом формате',
minlength: 'Слишком короткий телефон',
maxlength: 'Слишком длинный телефон',
pattern:  'Введите телефон в правильном формате +70000000000'
},
email:{
    required: 'Поле Email обязательно к заполнению',
    email:  'Введите Email в правильном формате exemple@mail.ru'

},
price:{
    required: 'Сумма обязательна к заполнению',
    minlength: 'Сумма должна быть больще 9 рублей'
}

        }
    });
}); 
    </script>
</html>


<?php 
spl_autoload_register(function ($class_name) {
    require_once 'Class/' . $class_name . '.php';
});

$NewForm = new NewPay('001','sicretic');
?>

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
<body>
<div class="body_frame">
<div class="body_black_frame"></div>
<div class="form_containter">
<div class="containter_form_zise">
<div class="containet_middle_size">
 <div class="col-lg-4 col-lg-offset-4 col-xs-12">
<form action="/index.php"  method="post" id="return-form">
   <div class="block_input">
   <input type="text" name="price" required readonly="" class="press_input" value ="<?php echo $_POST['price'] ?>"></div>
      <div class="block_input"><input type="text" name="phone" required readonly="" class="press_input" value ="<?php echo $_POST['phone'] ?>"></div>
  <div class="block_input"><input type="text" name="customer_email" required readonly="" class="press_input" value ="<?php echo $_POST['customer_email'] ?>"></div>
  </form>
  <button type="submit" class="hidden-xs getVal" form="return-form">Изменить данные</button>
  <button type="submit" class="visible-xss getVal" form="return-form">Изменить данные</button>


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
<script src="./js/calc.js"></script>
  <script src="./js/uniform.js"></script>
  <script src="./js/jquery-ui.js"></script>
  <script src="./js/touchpunch.js"></script>
  <script src="./js/dynamic.js"></script>
    <script type="text/javascript">
     $(function(){
    $('#form').validate({
        rules: {
         phone: {
              required: true,
               minlength: 8,
               maxlength: 15
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

<?php
    include_once __DIR__.'/classes/employee.php';
    include_once __DIR__.'/classes/creditCard.php';
    include_once __DIR__.'/classes/food.php';
    include_once __DIR__.'/classes/product.php';
    include_once __DIR__.'/classes/user.php';

    $employee = new Employee(10,3,'manager','fernando','ricucci','fernucci001','000000', true, 'via marconi, 10', 'ferni47@pippo.com','3335558877999');
    $user = new User('giovanni','bubbolo','efestus','dsadfadfsdvvsv',false,'via birba, 24','piripero@gnagna.com','33354458165468',new CreditCard('55550000044488','000','01/01/2020','giovanni','1'));
    $newCard = new CreditCard('12412414141','000','2022-05-12','ferni',10);
    ?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php OOP e-commerce</title>
    </head>
    <body>
    <?php  
        echo $newCard->setIsExpire($newCard->cardExpireDate);
        var_dump($newCard);
        var_dump($employee);
        var_dump($user);
        var_dump(new DateTime())
    ?>
</body>
</html>
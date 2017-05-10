# rossvyaz-num2reg
Определение региона по номеру телефона используя реестр Россвязи https://www.rossvyaz.ru/activity/num_resurs/registerNum/

Пример:

    #!/usr/bin/php
    <?php

    require_once __DIR__ . DIRECTORY_SEPARATOR . './Num2reg.php';


    $num2reg = new Num2reg();
    //$num2reg->updatedb();			//вызвать при первом запуске, а так же с некоторой периодичностью, например, раз в месяц.
    $ret = $num2reg->search(89101234567);
    
    var_dump($ret);


Вывод:

    array(8) {
      ["code"]=>
      int(910)
      ["number_min"]=>
      string(10) "9101200000"
      ["number_max"]=>
      string(10) "9101499999"
      ["number_count"]=>
      int(300000)
      ["oper"]=>
      string(50) "ПАО "Мобильные ТелеСистемы""
      ["reg_code"]=>
      string(2) "52"
      ["region_orig"]=>
      string(34) "Нижегородская обл."
      ["region"]=>
      string(41) "Нижегородская область"
    }


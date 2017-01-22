<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
 <title>数组</title>
<body>
<?php
  /*
   * 数组定义及应用
   */
   //定义一个数组 默认下标是0开始 
   $array =  array("1","2");  
   //输出这个数组的值
   for ( $i = 0;$i<count($array);$i++)
   {
       echo $array[$i]."<br/>";
   }
   echo  "<br/>";
   $arr[0] = "1";
   $arr[1] ="2";
   for ($i=0;$i<count($arr);$i++)
   {
       echo $array[$i]."<br/>";
   }
   
   //指定下标的数组 
   $arr["logo"] = "北京";
   $arr["conten"]="你好";
   //输出这个下标的数组
   /*
    * 通过for循环是输不出结果的报错的,因为$arr前面已经定义过
    * 此时可以用foeach
    */
 /*  for ($i=0;$i<count($arr);$i++)
   {
       echo $arr[$i].".";
   }*/
   //$k 为数组下标 ，$v为值
   foreach ($arr as $k =>$v )
   {
       echo  $k.$v."<br/>";
   }
   
   //$k 直接输出数组中的值 
   foreach ($arr as $k)
   {
       echo $k;
   }
  // var_dump($array);
  // $arr["logo"]="北京";
 //  var_dump($arr);
 
   /**
    *在PHP中null 等价于 ""; 
    */
   $arr[null]="背景";
   echo $arr[null];
   echo $arr[""];
   
   $arry[0]="11";
   $arry[1]="hello";
   $arry[2]="ho";
   unset($arry[1]);
?>
</body>
</html>
<?php
 
class A{
  function showA(){
    echo "I am show method in A Class<br>";
  }
}
 
class B extends A{
  function showB(){
    echo "I am show method in B Class<br>";
  }
}
   
class C extends B{
  function showC(){
    echo "I am show method in C Class<br>";
  }
}
   
  
$obj=new C;
$obj->showA();
$obj->showB();
$obj->showC();
 
?>
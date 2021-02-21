<?php


function test($callback){

    //exemplo processo lento
  $callback();
}

test(function(){
 
     echo "terminou!";
});
<?php

if(!function_exists('func_Title')){

    function func_Title(?string $title = null): string {
           return $title                     //if $title
           ? $title .' | '.config('app.name') //then
           : config('app.name');            //else
    }
}
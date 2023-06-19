<?php

namespace App\Enums;

enum TableStatus:string
{
    case Pending ='0';
    case Avaliable ='1';
    case Unavaliable ='2';
}
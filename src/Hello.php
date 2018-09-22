<?php
/**
 * Created by PhpStorm.
 * User: Vũ Tiến Định
 * Date: 9/22/18
 * Time: 10:47 PM
 * Contact: tiendinh595@gmail.com
 */

namespace Dinhvt\HelloComposer;

class  Hello
{
    function __construct()
    {
        echo "demo composer package:";
        print_r(__CLASS__);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 04-10-2016
 * Time: 16:47
 */

switch ($_GET['language']) {
    case 'da':
        print_r("Hej ".$_GET['name']);
        break;
    case 'en':
        print_r("Hello ".$_GET['name']);
        break;
    case 'se':
        print_r("Tjena ".$_GET['name']);
        break;
    default:
        print_r("Error: Unknown language");
}

<?php
/**
 * Web programming hand-in 1, exercise 2b
 * User: Boris Lykke Nielsen, 20125327
 * Date: 04-10-2016
 * Time: 16:47
 *
 * Returns a personalized welcome message based on input provided in a GET request.
 * The scripts supports Danish, English, and Swedish languages.
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

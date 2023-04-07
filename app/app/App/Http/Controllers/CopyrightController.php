<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "

    .---.         .---.                  _              
    : .; :        : .  :                :_;             
    :   .'.-..-.  : :: : .--.  ,-.,-.,-..-. .--.  ,-.,-.
    : .; :: :; :  : :; :' .; ; : ,. ,. :: :' .; ; : ,. :
    :___.'`._. ;  :___.'`.__,_;:_;:_;:_;:_;`.__,_;:_;:_;
           .-. :                                        
           `._.'                                        
    .---.      .-.                 
    : .; :    .' `.                
    :  _.'.--.`. .'.--. .--.  .--. 
    : :  ' '_.': :' '_.': ..'`._-.'
    :_;  `.__.':_;`.__.':_;  `.__.'    
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}

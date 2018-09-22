<?php
/**
 * Created by PhpStorm.
 * User: newyo
 * Date: 9/22/2018
 * Time: 3:53 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
        }

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
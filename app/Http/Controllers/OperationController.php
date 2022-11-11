<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function sum($a, $b)
    {
        $sum = $a + $b;
        return view(
            'home.operation',
            [
                'sum' => $sum
            ]
        );
    }
    public function multiplication($a, $b)
    {
        $multiplication = $a * $b;
        return view(
            'home.operation',
            ['multiplication' => $multiplication]
        );
    }
    public function operation($tipo, $a, $b)
    {
        switch ($tipo) {
            case 'suma':
                $res = $a + $b;
                break;
            case 'resta':
                $res = $a - $b;
                break;
            case 'multi':
                $res = $a * $b;
                break;
            case 'div':
                $b != 0 ? $res = $a / $b : $res = "No se puede dividir";
                break;
            default:
                $res = 'No valido';
                break;
        }

        return view(
            'home.operation',
            ['res' => $res]
        );
    }
}

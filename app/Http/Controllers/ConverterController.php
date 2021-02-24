<?php

namespace App\Http\Controllers;

use Colombo\Converters\Exceptions\Result\CanNotWriteResultException;
use Colombo\Converters\Helpers\Converter;
use Illuminate\Http\Request;

class ConverterController extends Controller
{
    public function index()
    {
        $input = "C:/Users/Asus/Desktop/test.pdf";
        $output = "C:/Users/Asus/Desktop/Hellos.txt";

        $converter = new \App\Converter\Converter();

        $result = $converter->handle($input,$output);

        try {
            $result->saveTo('C:/Users/Asus/Desktop/test.txt');
        } catch (CanNotWriteResultException $e) {
            dd($result);
        }

    }
}

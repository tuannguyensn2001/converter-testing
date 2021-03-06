<?php

namespace Tests\Unit;

use App\Converter\Converter;
use Colombo\Converters\ConvertedResult;
use Colombo\Converters\Drivers\ConverterInterface;
use Colombo\Converters\Drivers\PdfToText;
use Colombo\Converters\Exceptions\Result\CanNotWriteResultException;
use PHPUnit\Framework\TestCase;
use Throwable;


class ConverterTest extends TestCase
{

    /** @test
     */
    public function unit_test_converter()
    {
       $converter = new PdfToText();

       $path = "C:/Users/Asus/Desktop/test.pdf";
       $outputFormat = "txt";


       $this->assertInstanceOf(ConvertedResult::class,$converter->convert($path,$outputFormat));


    }

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }



}

<?php


namespace App\Converter;



use Colombo\Converters\Exceptions\Result\CanNotWriteResultException;

class Converter
{
    public function check(): bool
    {
        return true;
    }

    public function handle(string $input,string $output,string $type='txt')
    {
        $converter = new \Colombo\Converters\Helpers\Converter();

        try {
            $converter->setInput($input);
        } catch (\Exception $e) {

        }

        $converter->setOutputFormat($type);

        $result = null;

        try {
            $result = $converter->run();
        } catch (\Exception $exception) {

        }

//        if ($result && $result->isSuccess()) {
//            try {
//                $result->saveTo($output);
//            } catch (CanNotWriteResultException $e) {
//
//            }
//        } else {
//            dd($result->getErrors());
//        }

        return $result;
    }

}

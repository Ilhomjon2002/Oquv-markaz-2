<?php


namespace app\router;
use app\router\IRequest;


class Request implements IRequest
{
    function __construct()
    {
        $this->bootstrapSelf();
    }
    private function bootstrapSelf()
    {
        // Bu yerda esa toCamelCase funksiyasini ishlatib 
        // har bir funksiyaga qo'llab chiqilmoqda.
        foreach ($_SERVER as $key => $value) {

            $this->{$this->toCamelCase($key)} = $value;
            // var_dump($this->toCamelCase($key));
            // var_dump($key);
            // var_dump($value);
            // echo "<br>";
        }
    }
    private function toCamelCase($string)
    {
        //$_SERVER ni ichidagi funksiyalarni qulaylashtirish uchun 
        // Misol uchun "REQUEST_METHOD"  dan-->  "requestMethod" ga
        $result = strtolower($string);
        preg_match_all('/_[a-z]/', $result, $matches);
        foreach ($matches[0] as $match) {
            $c = str_replace('_', '', strtoupper($match));
            // Matinning ichidagi _ belgisini bo'sh joy bilan almashtirish
            $result = str_replace($match, $c, $result);
        }
        return $result;
    }

    public function getBody()
    {
        if ($this->requestMethod === "GET") {
            var_dump('bu GET so\'rov');
            return;
        }

        if ($this->requestMethod == "POST") {
            $body = array();
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }

            return $body;
        }
    }
}

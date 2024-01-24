<?php

namespace app\router;
use app\router\IRequest;


class Router
{
    private $request;
    private $supportedHttpMethods = array(
        "GET",
        "POST"
    );

    function __construct(IRequest $request)
    {
        $this->request = $request;
    }


    function __call($name, $args)
    {
        list($route, $method) = $args;
        if (!in_array(strtoupper($name), $this->supportedHttpMethods)) {
            $this->invalidMethodHandler();
        }
        $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
    }


    private function formatRoute($route)
    {
        $result = rtrim($route, '/');
        if ($result === '') {
            return '/';
        }
        return $result;
    }


    private function invalidMethodHandler()
    {
        header("{$this->request->serverProtocol} 405 Method Not Allowed");
    }


    private function defaultRequestHandler()
    {
        header("{$this->request->serverProtocol} 404 Not Found");
        die();
    }


    function resolve()
    {
        // Barcha routelar va ularga so'rov jo'natilganda ishga 
        // tushadigan funksiyalar nomlarini bitta massivga olish
        $methodDictionary = $this->{strtolower($this->request->requestMethod)};
        // agar biz so'rov jo'natayotgan routening pathInfo si bo'lsa
        // uni $formatedRoute o'zgaruvchisiga olish agar bo'lmasa '/' ni olish
        if (isset($this->request->pathInfo)) {
            $formatedRoute = $this->formatRoute($this->request->pathInfo);
        } else {
            $formatedRoute = '/';
        }
        // agar biz so'rov jo'natayotgan route $methodDictionary o'zgaruvchisida bo'lsa
        // undagi funksiyani parametr sifatida olish.Aks holda xato chiqarsin.
        if (isset($methodDictionary[$formatedRoute])) {
            $method = $methodDictionary[$formatedRoute];
        } else {
            $this->defaultRequestHandler();
        }
        if (is_null($method)) {
            $this->defaultRequestHandler();
            return;
        }
        // echo "<pre>";
        // var_dump($method);
        // echo "</pre>";
        echo call_user_func_array($method, array($this->request));
    }


    function __destruct()
    {
        $this->resolve();
    }

}

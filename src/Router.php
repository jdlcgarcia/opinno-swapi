<?php

namespace OpinnoSwapi;

abstract class Router
{
    const BASE_CONTROLLER = '\OpinnoSwapi\controller\\';
    const ALLOWED_ROUTES = [
        "", "/",
        "search", "film",
        "error"
    ];
    const SUFFIX_CONTROLLER = 'Controller';
    const SUFFIX_ACTION = "Action";

    public static function route()
    {
        $parsedRequestQuery = self::parseParameters();
        if (!self::allowedRoute($parsedRequestQuery[0])) {
            $parsedRequestQuery[0] = "error";
        }
        self::loadControllerAction($parsedRequestQuery);
    }

    /**
     * @param $route
     * @return bool
     */
    private static function allowedRoute($route): bool
    {
        return in_array($route, self::ALLOWED_ROUTES);
    }

    /**
     * @return array
     */
    private static function parseParameters()
    {
        if (sizeof($_GET) == 0) {
            $_GET['url'] = "";
        }
        return explode("/", $_GET['url']);
    }

    /**
     * @param array $parsedRequestQuery
     */
    private static function loadControllerAction($parsedRequestQuery)
    {
        $request = $parsedRequestQuery[0];
        unset($parsedRequestQuery[0]);
        switch ($request) {
            case '/' : case '' : case 'search':
                $controller = "index";
                $action = "index";
                break;
            case 'film':
                $controller = "index";
                $action = "film";
                break;
            default:
                $controller = "error";
                $action = "index";
        }

        $controllerName = self::BASE_CONTROLLER . ucfirst($controller) . self::SUFFIX_CONTROLLER;
        $objController = new $controllerName();
        $actionName = $action . self::SUFFIX_ACTION;
        $objController->$actionName($parsedRequestQuery);
    }
}
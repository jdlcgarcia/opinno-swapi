<?php

namespace OpinnoSwapi;

abstract class Router
{
    const BASE_CONTROLLER = '\OpinnoSwapi\controller\\';
    const ALLOWED_ROUTES = [
        [
            "controller" => "index",
            "action" => "index"
        ]
    ];

    public static function route()
    {
        $parsedParameters = self::parseParameters();

        if (self::allowedControllerAction($parsedParameters["controller"], $parsedParameters["action"])) {
            self::loadControllerAction($parsedParameters);
        }

    }

    /**
     * @param $controller
     * @param $action
     * @return bool
     */
    private static function allowedControllerAction($controller, $action): bool
    {
        return in_array(["controller" => $controller, "action" => $action], self::ALLOWED_ROUTES);
    }

    /**
     * @return array
     */
    private static function parseParameters()
    {
        $parsedParameters = [];
        $queryParameters = explode("&", $_SERVER['QUERY_STRING']);
        foreach ($queryParameters as $queryParameter) {
            $parsedParameter = explode("=", $queryParameter);
            $parsedParameters[$parsedParameter[0]] = $parsedParameter[1];
        }
        return $parsedParameters;
    }

    /**
     * @param array $parsedParameters
     */
    private static function loadControllerAction(array $parsedParameters): void
    {
        $controllerName = self::BASE_CONTROLLER . ucfirst($parsedParameters['controller']) . 'Controller';
        $controller = new $controllerName();
        $actionName = $parsedParameters['action'] . "Action";
        unset($parsedParameters['action']);
        unset($parsedParameters['controller']);
        $controller->$actionName($parsedParameters);
    }
}
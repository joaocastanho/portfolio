<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/// @brief
class ControllerAuth extends \HHH\Controller
{
    /// @brief
    ///
    /// @param $request
    /// @param $response
    public function pageLogin(Request $request, Response $response)
    {
        $model = $this->getModel('Admin');


        $response->getBody()->write("Login page");

        return $response;
    }
}

<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/// @brief
class ControllerIndex extends \HHH\Controller
{
    /// @brief
    ///
    /// @param $request
    /// @param $response
    public function index(Request $request, Response $response)
    {
        $model = $this->getModel('Admin');

        $html = "<pre>" . print_r($model->getAll(), true) . "</pre>";

        return $this->view->render($response, 'index.tpl', [
            'content' => $html
        ]);
    }
}

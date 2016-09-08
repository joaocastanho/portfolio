<?php
namespace HHH;

/// @brief
abstract class Service
{
    /// @brief
    protected $container;

    /// @brief
    ///
    /// @param $container
    public function __construct($container)
    {
        $this->container = $container;
    }

    /// @brief
    ///
    /// @param $name
    public function __get($name)
    {
        if (isset($this->container->$name))
            return $this->container->$name;
        parent::__get($name);
    }

    /// @brief
    ///
    /// @param $service
    protected function getService($service)
    {
        return new $service($this->container);
    }

    /// @brief
    ///
    /// @param $controller
    /// @param $prefix
    protected function getController($controller, $prefix = "Controller")
    {
        $controller = $prefix.$controller;
        return new $controller($this->container);
    }

    /// @brief
    ///
    /// @param $model
    /// @param $prefix
    protected function getModel($model, $prefix = "Model")
    {
        $model = $prefix.$model;
        return new $model($this->container);
    }
}

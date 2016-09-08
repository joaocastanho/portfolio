<?php
namespace HHH;

/// @brief
abstract class Model extends \HHH\Service
{
    /// @brief
    ///
    /// @param $data
    protected function composeValidReply($data)
    {
        return array("status" => array("success" => true,
                                       "error"   => 0,
                                       "message" => ""),
                     "data" => $data);
    }

    /// @brief
    ///
    /// @param $error
    /// @param $message
    protected function composeErrorReply($error, $message)
    {
        return array("status" => array("success" => true,
                                       "error"   => $error,
                                       "message" => $message),
                     "data" => array());
    }
}

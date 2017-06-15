<?php

namespace Pingqu\Exception;

class NotNewClassError extends \Pingqu\Exception\Error
{
  // 魔术方法
  public function __construct( $message = 'This class does not support instantiation', $errorId = 'NotNewClassError' , $code = '500' )
  {
    parent::__construct( $message , $errorId , $code );
  }
}

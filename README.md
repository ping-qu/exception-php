pingqu exception
===================

Installation - 安装
------------

```bash
composer require ping-qu/pingqu-exception
```

Usage - 使用
-----


### 1、抛出异常

```php

throw new \Pingqu\Exception\Error("测试一个异常", 'TEST_A_EXCEPTION');

```

### 2、抛出自定义继承异常

```php

class UserError extends \Pingqu\Exception\Error
{
  // 魔术方法
  public function __construct( $message = 'Unknown Error' , $errorId = 'UNKNOWN_ERROR' , $code = '400', $errorData = array() )
  {
    parent::__construct( $message , $errorId , $code, $errorData );
  }
}

throw new UserError("测试一个异常", 'TEST_A_EXCEPTION');

```

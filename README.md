# laravel-snowflake

Laravel snowflake 使用Twitter的SnowFlake算法，分布式生成唯一id

### 安装方法 ###

```php
composer require youthage/snowflake
```

### 配置方法 ###

.env 配置工作机器ID,如下

```php
#工作机器ID, 0-1023, 如果不配置，默认为1
SNOWFLAKE_WORK_ID=1023
```

### 使用方法 ###


```php
<?php

namespace App\Http\Controllers;

use Snowflake;
class IndexController extends Controller
{
    public function index()
    {
        $id = Snowflake::nextId();
        echo $id;
    }
}

```


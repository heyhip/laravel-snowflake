<?php

namespace Ysnowflake;

use Illuminate\Support\ServiceProvider;

class SnowflakeServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('snowflake', function () {
            $workId = config('baseconfig.SNOWFLAKE_WORK_ID');
            return new Snowflake($workId);
        });
    }

    /**
     * 获取由提供者提供的服务
     *
     * @return array
     */
    public function provides()
    {
        return ['snowflake'];
    }
}

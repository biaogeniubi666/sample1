<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

// 在 AuthServiceProvider 类中对授权策略进行设置
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *  
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        \App\Models\User::class  => \App\Policies\UserPolicy::class,
        // policies 属性用于将各种模型（如User）对应到管理它们的授权策略上。
        // 我们需要为用户模型 User 指定授权策略app\Policies\UserPolicy.php。
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

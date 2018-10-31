<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUser, User $user)
    // update 方法接收两个参数，第一个参数默认为当前登录用户实例，第二个参数则为要进行授权修改的用户实例。
    {
        return $currentUser->id === $user->id;
        // 如果2个id 相同时，则代表两个用户是相同用户，用户通过授权，可以接着进行下一个操作。
    }

    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
        // 只有当前用户拥有管理员权限且删除的用户不是自己时才显示链接
    }

}

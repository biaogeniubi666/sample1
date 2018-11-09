<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;  
// 加上用户模型文件路径，才能找到User
use Illuminate\Http\Request;
// UsersController 包含用户的注册、用户个人中心、已登录用户信息修改等相关业务内容
class UsersController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }

    public function signup()  // 注册界面跳转
    {
        return view('users.signup');
    }

    public function show(User $user) //用户个人中心页面跳转
    {
        return view('users.show',compact('user'));
    }
    // show() 方法传参时声明了类型 —— Eloquent 模型 User，
    // 对应的变量名 $user 会匹配路由片段中的 {user}，
    // 这样，Laravel 会自动注入与请求 URI 中传入的 ID 对应的用户模型实例(ID:1)。

    public function store(Request $request) // 注册功能
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        
        $user = User::create([ 
            // 用户模型User::create()可以将信息写入数据库
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        // 临时保存用户数据的方法 - 会话（Session）
        // session() 方法来访问会话实例，flash方法为存入一条缓存的数据，在下一次请求内生效。
        // 之后我们可以使用 session()->get('success') 通过键名来取出对应会话中的数据，取出的结果为 欢迎，您将在这里开启一段新的旅程~。
        
        return redirect()->route('users.show', [$user]);
       // $user 是 User 模型对象的实例。route() 方法会自动获取 Model 的主键，也就是数据表 users 的主键 id 
    }

    public function edit(User $user)  // 编辑资料页面验证和跳转
    // 隐性路由模型绑定功能，直接读取对应 ID 的用户实例 $user
    {
        $this->authorize('update', $user);//这里 update 是指授权类里的 update 授权方法
        return view('users.edit', compact('user'));
        // compact('user')绑定$user和视图users
    }

    public function update(User $user, Request $request) //修改资料动作的权限验证
    // update 方法接收两个参数，第一个为自动解析用户 id 对应的用户实例对象，第二个则为更新用户表单的输入数据
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            // 'password' => 'required|confirmed|min:6'
            // 先对用户提交的信息进行验证
            'password' => 'nullable|confirmed|min:6'
            // 将用户密码验证的 required 规则换成 nullable，这意味着当用户提供空白密码时也会通过验证
        ]);

        $this->authorize('update', $user);
        // 授权策略定义完成之后，通过在用户控制器中使用 authorize 方法来验证用户授权策略。
        // 第一个为授权策略的名称update，第二个为进行授权验证的数据，即可能要被修改或其他操作的用户数据
        //这里 update 是指授权类里的 update 授权方法，$user 对应传参 update 授权方法的第二个参数。
        $data = [];
        $data['name'] = $request->name;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        // 有名称只改名称，有密码再改密码
        $user->update($data);

        // $user->update([
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
            // 调用 update 方法对用户对象进行更新
        

        session()->flash('success', '个人资料更新成功！');
            // 会话反馈
        return redirect()->route('users.show', $user->id);
    }

    public function __construct()   //在用户的注册、用户个人中心、已登录用户信息修改中使用
    {
        $this->middleware('auth', [     //构建中间件‘auth’，并定义相应的动作，用于其他方法中       
            'except' => ['show', 'signup', 'store', 'index']
        ]);
        // Laravel 提供身份验证（Auth）中间件来过滤未登录用户的 edit, update 动作。
        // __construct()是PHP的构造器方法，用于创建一个类对象，类似于PYTHON的类。
        // __construct 方法中调用了 middleware 方法，该方法接收两个参数，第一个为中间件的名称Auth，第二个为要进行过滤的动作
        // 'except'为除了指定的 ['show', 'create', 'store']之外，其他动作都需要进行Auth身份验证。相反的是only方法，指定动作需要进行Auth身份验证
        //  Auth 中间件在过滤指定动作时，如该用户未通过身份验证（未登录用户），默认将会被重定向到 /login 登录页面。
    
        $this->middleware('guest', [
            'only' => ['signup']
            // guest 选项用于指定一些只允许未登录用户访问的动作
            //'only' => ['create']只让未登录用户访问注册'create'动作。登录动作限制在另一个控制器内。
            // 已登录用户访问create时，会自动跳转到 Laravel 默认指定的页面 /home
        ]);
    
    }

    public function index() // 列出用户列表功能
    {
        $users = User::paginate(10);
        // 使用 paginate 方法来指定每页生成的数据数量为 10 条
        return view('users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $this->authorize('destroy', $user);
        // 删除授权策略 destroy 我们已经在上面创建了，
        // 这里我们在用户控制器中使用 authorize 方法来对删除操作进行授权验证即可。
        // 在删除动作的授权中，我们规定只有当前用户为管理员，
        // 且被删除用户不是自己时，授权才能通过。
        $user->delete();
        session()->flash('success', '成功删除用户！');
        return back();
        //在 destroy 动作中，我们首先会根据路由发送过来的用户 id 进行数据查找，
        // 查找到指定用户之后再调用 Eloquent 模型提供的 delete 方法对用户资源进行删除，
        // 成功删除后在页面顶部进行消息提示。最后将用户重定向到上一次进行删除操作的页面，
        // 即用户列表页。
    }


}







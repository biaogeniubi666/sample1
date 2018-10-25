@foreach (['danger', 'warning', 'success', 'info'] as $msg)
{{-- 载入四个不同的键名，由不同的样式展示效果 --}}
    @if(session()->has($msg))
    {{-- session()->has($msg) 可用于判断会话中 $msg 键对应的值是否为空，若为空则在页面上不进行显示。 --}}
        <div class="flash-message">
                <p class="alert alert-{{ $msg }}">
                        {{ session()->get($msg) }}
                        {{-- 取出在controller里保存的session对应的值并在页面显示 --}}
                </p>
        </div>
    @endif
@endforeach
{{-- 这个是局部视图，需要加入全局视图中才可以使用 --}}

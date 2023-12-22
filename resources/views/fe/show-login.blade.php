<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <link rel="icon" type="" href="{{asset('/web/images/logo2.png')}}">--}}
    <link rel="stylesheet" href="{{asset('/web/css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Moon Light</title>
    <style>
        .show{
            position: relative;
            margin-right: 10px;
            text-align: center;
        }
        .toast-body a{
            text-decoration: none;
            color: #8f2c24;
        }
    </style>
</head>
<body>
<section>
    <img src="{{asset('/web/images/img.jpg')}}" class="bg" alt="">
    {{--    <div class="toast show" th:if="${noti}" >--}}
    {{--        <div class="toast-header">--}}
    {{--            <strong class="me-auto" th:text="${noti}"></strong>--}}
    {{--            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>--}}
    {{--        </div>--}}
    {{--        <div class="toast-body">--}}
    {{--            <a th:href="@{/home}">Trở về trang chủ</a>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    @if(\Illuminate\Support\Facades\Session::has('error'))
        <div class="toast show" >
            <div class="toast-header">
                <strong class="me-auto">{{\Illuminate\Support\Facades\Session::get('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                <a th:href="@{/home}">Trở về trang chủ</a>
            </div>
        </div>
    @endif
    <div class="login">
        <h2>Login</h2>
        <a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
            </svg></a>
        <form action="" method="post">
            @csrf
            <div class="inputBox">
                <input type="email" id="email"   placeholder="Email" name="email" required>
            </div>
            <div class="inputBox">
                <input type="password" id="password"  name="password" placeholder="Password" required>
            </div>
            <div class="inputBox">
                <input type="submit"  value="login" id="btn">
            </div>
            <div class="group">
                <a href="#">Forget Password</a>
                <a href="{{route('show.signup')}}">Sign Up</a>
            </div>
        </form>
    </div>
</section>
{{--<script src="@{../cms/js/myjs.js}"></script>--}}
</body>
</html>
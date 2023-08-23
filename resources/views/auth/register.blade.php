<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    body {
        background-image: url('1303457.jpg');
    }

    .register {



        margin-top: 3%;

        padding: 3%;

    }

    .register-left {

        text-align: center;

        color: #fff;

        margin-top: 4%;

    }

    .register-left input {

        border: none;

        border-radius: 1.5rem;

        padding: 2%;

        width: 60%;

        background: #f9f8fa;

        font-weight: bold;

        color: #383d41;

        margin-top: 30%;

        margin-bottom: 3%;

        cursor: pointer;

    }

    .register-right {

        background: #f8f9fa;

        border-top-left-radius: 10% 50%;

        border-bottom-left-radius: 10% 50%;

    }

    .register-left img {

        margin-top: 15%;

        margin-bottom: 5%;

        width: 35%;

        -webkit-animation: mover 2s infinite alternate;

        animation: mover 1s infinite alternate;

    }

    @-webkit-keyframes mover {

        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }

    }

    @keyframes mover {

        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }

    }

    .register-left p {

        font-weight: lighter;

        padding: 12%;

        margin-top: -9%;

    }

    .register .register-form {

        padding: 10%;

        margin-top: 10%;

    }

    .btnRegister {

        float: right;

        margin-top: 10%;

        border: none;

        border-radius: 1.5rem;

        padding: 2%;

        background: #0062cc;

        color: #fff;

        font-weight: 600;

        width: 50%;

        cursor: pointer;

    }

    .register .nav-tabs {

        margin-top: 3%;

        border: none;

        background: #0062cc;

        border-radius: 1.5rem;

        width: 28%;

        float: right;

    }

    .register .nav-tabs .nav-link {

        padding: 2%;

        height: 34px;

        font-weight: 600;

        color: #fff;

        border-top-right-radius: 1.5rem;

        border-bottom-right-radius: 1.5rem;

    }

    .register .nav-tabs .nav-link:hover {

        border: none;

    }

    .register .nav-tabs .nav-link.active {

        width: 100px;

        color: #0062cc;

        border: 2px solid #0062cc;

        border-top-left-radius: 1.5rem;

        border-bottom-left-radius: 1.5rem;

    }

    .register-heading {

        text-align: center;

        margin-top: 8%;

        margin-bottom: -15%;

        color: #495057;

    }
</style>

<!------ Include the above in your HEAD tag ---------->

@if (session('message'))
    <span class="aler alert-danger">

        <strong>{{ session('message') }}</strong>

    </span>
@endif

<div class="container register">

    <div class="row">

        <div class="col-md-3 register-left">

            <img src="https://static.vecteezy.com/system/resources/previews/015/370/017/original/gaming-console-illustration-isolated-on-transparent-background-free-png.png"
                alt="" />

            <h3>Welcome</h3><br><br><br>

            <a class="btn btn-success" href="{{ route('welcome.login') }}"> Login</a><br />

        </div>

        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <h3 class="register-heading">Register</h3>

                    <div class="row register-form">

                        <div class="col-md-6">

                            <form action="{{ route('auth.register') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <!-- Equivalent to... -->
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Full Name" value=""
                                        name="name" />
                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </div>

                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Country" value=""
                                        name="country" />

                                    @if ($errors->has('country'))
                                        {{ $errors->first('country') }}
                                    @endif
                                </div>
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Phone number" value=""
                                        name="numberphone" />
                                    @if ($errors->has('numberphone'))
                                        {{ $errors->first('numberphone') }}
                                    @endif
                                </div>
                                <div class="form-group">

                                    <input type="email" class="form-control" placeholder="Your Email *" value=""
                                        name="email" />
                                    @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </div>



                                <div class="form-group">

                                    <input type="password" class="form-control" placeholder="Password *" value=""
                                        name="password" />

                                    @if ($errors->has('password'))
                                        {{ $errors->first('password') }}
                                    @endif
                                </div>


                                <div class="form-group">

                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" name="password_confirmation" />

                                </div>
                                <div class="form-group">

                                    <select class="form-control" name="role">

                                        @foreach ($roles as $role)
                                            @if ($role->id !== 3)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @if ($errors->has('role'))
                                        {{ $errors->first('role') }}
                                    @endif
                                </div>

                                <input type="submit" class="btnRegister" value="Register" />

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div

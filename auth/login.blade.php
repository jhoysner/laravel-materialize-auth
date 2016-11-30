@extends('layouts.app')

@section('content')
    <div class="row">
<br>
<br>
        <div class="col s12 m4 offset-m4 offset-4 card-panel" >
     

            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <h1>Inicia sesion</h1>

                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email">E-mail Address</label>
                    @if ($errors->has('email'))
                        <div class="col s12">
                            <span class="red-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                    @endif
                </div>

                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}" required>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <p class="col s12">
                  <input type="checkbox" id="remember" name="remember" />
                  <label for="remember">Remember Me</label>
                </p>

                <div class="input-field col s12">
                    <p>
                        <a class="" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </p>
                    <p>
                        <button type="submit" class="btn waves-effect waves-light red">Login</button>
                    </p>
                    <brs>

                </div>
            </form>
       

            <div class="divider"></div>
            
        </div>



    </div>
@endsection
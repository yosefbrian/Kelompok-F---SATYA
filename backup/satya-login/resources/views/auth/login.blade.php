@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
  </head>
  <body style="background-image:http://peternakandody.id.tc/wp-content/uploads/sites/281/2015/08/itik-bebek.jpg">
    <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  </body>
</html>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Masuk ke Satya</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <!-- <div class="row">
                          <form class="col s12">
                            <div class="row">
                              <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">First Name</label>
                              </div>
                              <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telephone</label>
                              </div>
                            </div>
                          </form>
                        </div> -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding-left:200px;">
                            <!-- <label class="col-md-4 control-label">Alamat e-mail</label> -->

                            <!-- <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"> -->

                                <div class="input-field col s6">
                                  <i class="material-icons prefix">email</i>
                                  <input id="icon_prefix" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                  <label for="icon_prefix">Alamat e-mail</label>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Sandi</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password"> -->
                                <div class="sandi" style="padding-left:200px;">

                                  <div class="input-field col s6" style="padding-left: 0px;">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_telephone" type="password" class="form-control" name="password">
                                    <label for="icon_telephone">Sandi</label>
                                  </div>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="form-group" style="padding-left:-100px">
                                  <div class="col-md-6 col-md-offset-4">
                                    <p>
                                      <input type="checkbox" name="remember" class="filled-in" id="filled-in-box" checked="checked" />
                                      <label for="filled-in-box">Ingat saya</label>
                                    </p>
                            </div>
                        </div>

                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Ingat saya
                                    </label>
                                </div> -->
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                <button class="btn waves-effect waves-light blue" type="submit" name="action">Masuk
                                  <i class="material-icons right">send</i>
                                </button>
                                <a class="waves-effect waves-teal btn-flat" href="{{ url('/password/reset')}}" >Lupa sandi anda?</a>
                              </div>
                        </div>

<!--
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Masuk
                                </button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

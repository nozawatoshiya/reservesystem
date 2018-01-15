@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        {!!Form::open(['class'=>'form-horizontal'])!!}
                            <div class="form-group {{ $errors->has('email')? 'has-error':''}}">
                                {!!Form::label('email','アカウント',['class'=>'col-md-4 control-label'])!!}
                                <div class="col-md-6">
                                {!!Form::email('email','',['class'=>'form-control','placeholder'=>'メールアドレス'])!!}
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                  </div>
                            </div>
                            <div class="form-group {{ $errors->has('password')? 'has-error':''}}">
                                {!!Form::label('password','パスワード',['class'=>'col-md-4 control-label'])!!}
                                <div class="col-md-6">
                                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'パスワード'])!!}
                                    @if($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                    @endif
                                  </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!!Form::submit('ログイン',['class'=>'btn btn-primary'])!!}
                                </div>
                            </div>
                            <div class="checkbox">
                              <div class="col-md-6 col-md-offset-4">
                                <label>
                                    {!!Form::checkbox('remember', '1', false) !!}
                                    パスワード忘れたわ
                                </label>
                              </div>
                            </div>
                        {!!Form::close()!!}
                        <div class="col-md-6 col-md-offset-4">
                            <a href="#" class="forgot-password">
                                パスワード忘れたん？
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

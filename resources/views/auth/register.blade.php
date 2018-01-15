@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">会員登録</div>

                <div class="panel-body">

                  @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="閉じる"><span aria-hidden="true">×</span></button>
                    </div>
                  @endif
                  @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="閉じる"><span aria-hidden="true">×</span></button>
                    </div>
                  @endif

                  {!!Form::open(['class'=>'form-horizontal'])!!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      {!!Form::label('name','氏名',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::text('name','',['class'=>'form-control','placeholder'=>'氏名'])!!}
                        @if($errors->has('name'))
                            <span class="help-block">
                                <strong>{{$errors->first('name')}}</strong>
                              </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('postalCode') ? ' has-error' : '' }}">
                      {!!Form::label('postalCode','〒',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::text('postalCode','',['class'=>'form-control','placeholder'=>'郵便番号（ハイフンあり）'])!!}
                        @if($errors->has('postalCode'))
                            <span class="help-block">
                                <strong>{{$errors->first('postalCode')}}</strong>
                              </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                      {!!Form::label('address','住所',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::text('address','',['class'=>'form-control','placeholder'=>'住所'])!!}
                        @if($errors->has('address'))
                            <span class="help-block">
                                <strong>{{$errors->first('address')}}</strong>
                              </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('building') ? ' has-error' : '' }}">
                      {!!Form::label('building','建物',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::text('building','',['class'=>'form-control','placeholder'=>'建物名'])!!}
                        @if($errors->has('building'))
                            <span class="help-block">
                                <strong>{{$errors->first('building')}}</strong>
                              </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('phoneNum') ? ' has-error' : '' }}">
                      {!!Form::label('phoneNum','携帯電話',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::text('phoneNum','',['class'=>'form-control','placeholder'=>'携帯電話（ハイフンあり）'])!!}
                        @if($errors->has('phoneNum'))
                            <span class="help-block">
                                <strong>{{$errors->first('phoneNum')}}</strong>
                              </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      {!!Form::label('email','メールアドレス',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::email('email','',['class'=>'form-control','placeholder'=>'メールアドレス'])!!}
                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{$errors->first('email')}}</strong>
                              </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      {!!Form::label('email_confirmation','確認メールアドレス',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::email('email_confirmation','',['class'=>'form-control','placeholder'=>'確認メールアドレス'])!!}
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
                      {!!Form::label('password_confirmation','確認パスワード',['class'=>'col-md-4 control-label'])!!}
                      <div class="col-md-6">
                        {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'確認パスワード'])!!}
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                          {!!Form::submit('登録', ['class' => 'btn btn-primary'])!!}
                        </div>
                    </div>

                  {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

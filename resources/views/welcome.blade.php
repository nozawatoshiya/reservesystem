@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="row">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="title m-b-md">
                「ABC」！
              </div>
              <div class="form-group">
                {!!Form::open(['url'=>route('welcome')])!!}
                  {!!Form::submit('ログイン',['class'=>'btn btn-primary','name'=>'flag'])!!}
                  {!!Form::submit('会員登録',['class'=>'btn btn-success','name'=>'flag'])!!}
                {!!Form::close()!!}
              </div>
            </div>
          </div>

        </div>

      </div>
  </div>
@endsection

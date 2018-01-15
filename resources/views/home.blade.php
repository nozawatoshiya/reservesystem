@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                      予約履歴
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#registModal">
                      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                      新規予約登録
                    </button>

                  <!-- モーダル・ダイアログ -->
                  <div class="modal fade" id="registModal" tabindex="-1">
                     <div class="modal-dialog modal-main">
                         <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                    <h4 class="modal-title">新規登録</h4>
                              </div>
                              <div class="modal-body">
                                  {!!Form::open(['route' => 'reservedregist'])!!}
                                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                          {!!Form::label('date','日付',['class'=>'control-label'])!!}
                                              {!!Form::text('date','',['class'=>'form-control','placeholder'=>'日付'])!!}
                                                  @if($errors->has('date'))
                                                      <span class="help-block">
                                                          <strong>{{$errors->first('date')}}</strong>
                                                      </span>
                                                  @endif
                                      </div>
                                      <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                          {!!Form::label('time','時間',['class'=>'control-label'])!!}
                                              {!!Form::text('time','',['class'=>'form-control','placeholder'=>'時間'])!!}
                                                  @if($errors->has('time'))
                                                      <span class="help-block">
                                                          <strong>{{$errors->first('time')}}</strong>
                                                      </span>
                                                  @endif
                                      </div>
                                      <div class="modal-footer">
                                          {!!Form::submit('登録', ['class' => 'btn btn-primary'])!!}
                                      </div>
                                  {!!Form::close()!!}
                              </div>
                         </div>
                     </div>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="contener">
                    <h4>件数:{{$count}} 件</h4>
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>日付</th>
                                  <th>時間</th>
                                  <th>管理番号</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($result as $data)
                                  <tr>
                                      <td>{{date('Y/m/d',strtotime($data->日付))}}</td>
                                      <td>{{date('H:i',strtotime($data->時間))}}</td>
                                      <td>{{$data->シーケンス}}</td>
                                  </tr>
                              @endforeach
                          </tdbody>
                      </table>
                  </div>
                    {{ $result->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

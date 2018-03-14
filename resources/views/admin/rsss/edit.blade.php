@extends('admin.layouts.default')
@section('content')
<h3>Bảng DetailWebsites</h3>
{{-- nhận thông điệp từ controller --}}
<div>
  @if(Session::has('thongbao'))
    <span class="alert alert-success">{{ Session::get('thongbao') }}</span>
  @endif
</div>
{!! Form::model($rss, ['route' => ['rss.update', 'id' => $rss->id], 'method' => 'put', 'class' => 'col-12']) !!}
  <div class="form-group">
    {{ Form::label('domainName','domainName')}}
    {{ Form::text('domainName',null, ['class'=>'form-control']) }}
  </div>  
  <div class="form-group">
    {{ Form::label('menuTag','menuTag ')}}
    {{ Form::text('menuTag',null,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
    {{form::label('bodyTag','bodyTag')}}
    {{form::text('bodyTag',null,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
    {{form::label('exceptTag','exceptTag:')}}
    {{form::text('exceptTag',null,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
    {{form::label('ignoreHomePage','ignoreHomePage:')}}
    <div class="form-check form-check-inline">
      {!! Form::radio('ignoreHomePage',1, null, ['class' =>'form-check-input', 'id' => 'yes1']) !!}
      {{Form::label('yes1','Yes',['class'=>'form-check-label'])}}
     </div>
    <div class="form-check form-check-inline">
      {!!Form::radio('ignoreHomePage',0, null, ['class' =>'form-check-input', 'id' => 'no1'])!!}
      {{Form::label('no1','No',['class'=>'form-check-label'])}}  
    </div>
  </div>
  <div class="form-group" >
    {{form::label('Active','Active:')}}
    <div class="form-check form-check-inline">
      {!! Form::radio('active',1, null, ['class' =>'form-check-input', 'id' => 'yes']) !!}
      {{Form::label('yes','Yes',['class'=>'form-check-label'])}}
     </div>
    <div class="form-check form-check-inline">
      {!!Form::radio('active',0, null, ['class' =>'form-check-input', 'id' => 'no'])!!}
      {{Form::label('no','No',['class'=>'form-check-label'])}}  
    </div>
  </div>
  <div class="form-group"> 
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {{ Form::button('Cancel', ['onclick' => 'history.go(-1)', 'class'=>'btn btn-danger']) }}
  </div>
{!! Form::close() !!}
@endsection
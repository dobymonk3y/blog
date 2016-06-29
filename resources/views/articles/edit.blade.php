@extends('app')
@section('content')
@if($errors->any())
    <ul class="alert alert-danger">
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
    </ul>
@endif
    <h1>{{$article->title}}</h1>
    {!! Form::model($article,['method'=>'PATCH','url'=>'articles/'.$article->id]) !!}
	<div class="form-group">
	   {!! Form::label('title','标题:') !!}
	   {!! Form::text('title',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	   {!! Form::label('content','正文:') !!}
	   {!! Form::textarea('content',null,['class'=>'form-control']) !!}
	</div>
	<!--这里的时间只有YMD, 没有HIS, 需要再MODEL文件中做处理-->
	<div class="form-group">
	    {!! Form::label('published_at','发表时间:') !!}
	    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
           {!! Form::submit('提交修改',['class'=>'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
<script type="text/javascript">
    $(function() {
	$(".js-example-basic-multiple").select2({
	    placeholder: "Select a state"
	});
    });
</script>
@endsection

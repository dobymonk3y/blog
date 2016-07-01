@extends('app')
@section('content')
<!--
@if($errors->any())
    <ul class="alert alert-danger">
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
    </ul>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->
@include('errors/list')
    <h1>撰写新文章{{\Auth::user()->id}}{{\Auth::user()->name}}</h1>
    {!! Form::open(['url'=>'articles']) !!}
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
            {!! Form::label('tag_list','选择标签') !!}
            {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple']) !!}
	</div>
	<div class="form-group">
           {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
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

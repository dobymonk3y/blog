<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Controllers\Controller;

use App\Models\Article;
use Carbon;
use Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	//$title = '文章标题1';
	//$infos = $title.'的简介内容';
	//$first = 'first';
	//$last = 'last';
	//return view('articles.lists')->with('title',$title);
	//return view('articles.lists',['title'=>$title,'infos'=>$infos]);
	//使用compact 传递参数到前台页面
	//return view('articles.lists',compact('title','infos','first','last'));
	//$articles = Article::where('published_at','<=',Carbon\Carbon::now())->latest()->get();
	$articles = Article::latest()->published()->get();
	return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
    public function store(Requests\StoreArticleRequest $request)
    {
        $input = $request->all();
	$input['intro'] = mb_substr($input['content'],0,32);
	$input['published_at'] = Carbon\Carbon::now();
	$res = Article::create($input);
	return redirect('/');
    }
    */
    public function store(Request $request)
    {
	$input = $request->all();
	$validator = Validator::make($input, [
    	    'title' => 'required|min:8',
    	    'content' => 'required',
	]);
	if ($validator->fails()) 
 	{
	    return redirect('article/create')->withErrors($validator);
 	}
	$input['intro'] = mb_substr($input['content'],0,32);
	$input['published_at'] = Carbon\Carbon::now();
	Article::create($input);
	return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	//$article = Article::find($id);
	//查询判断  方式一
	//if(is_null($article)){
	//    abort(404);
	//}
	//查询判断  方式二
	$article = Article::findOrFail($id);
	return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function published($query)
    {
	$query->where('published_at','<=',Carbon/Carbon::now());
    }
}

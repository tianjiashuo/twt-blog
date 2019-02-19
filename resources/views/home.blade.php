@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>
                    Welcome, {{$username}}
                    </h2>
                        <a href="{{env('BASE_URL')}}AddBlog">发表博文</a>
                    <br>
                    <br>
                    <h3>
                    Your Blogs:
                    </h3>
                    <br>
                    <font size = "3">
                        @for($i = 0; $i < count($Blogs) ; $i ++)
                    <a href ="{{env('BASE_URL')}}displayBlog/{{$Blogs[$i]->mid}}">{{$Blogs[$i] -> title}}</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$Blogs[$i]-> addtime}}
                            <a href ="{{env('BASE_URL')}}DeleteBlog/{{$Blogs[$i]->mid}}">删除</a>
                            <a href ="{{env('BASE_URL')}}{{$Blogs[$i]->mid}}">修改</a>
                    </font>
                    <br>
                        @endfor
                </div>
            </div>
        </div>
    </div>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="{{env('BASE_URL')}}AllBlogs">浏览所有博文</a>




@endsection

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
                    <h1>
                    {{$Blogs[0]-> title}}
                    </h1>
                    <h3>
                        {{$Blogs[0]-> uname}}
                    </h3>
                    <br>
                    <font size = '3'>
                        {{$Blogs[0]-> content}}
                        <br>
                        {{$Blogs[0]-> addtime}}
                    </font>
                    <br>
                    <h3>
                    Comment
                    </h3>
                    <br>
                    <font size = '3'>
                    @for($i = 0; $i < count($Comment) ; $i ++)
                    {{$Comment[$i]-> cid}}
                    &nbsp&nbsp&nbsp
                    {{$Comment[$i]-> uname}}
                    <br>
                    {{$Comment[$i]-> content}}
                    <br>
                    {{$Comment[$i]-> addtime}}
                    </font>
                    <br>
                    @endfor     
                </div>
            </div>
        </div>
    </div>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="http://127.0.0.1:8080/AllBlogs">浏览所有博文</a>




@endsection




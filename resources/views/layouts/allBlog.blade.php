<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2019/2/17
 * Time: 20:10
 */
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
                             {{$username}}
                        </h2>
                        <br>
                        <br>
                        <h3>
                            All Blogs:
                        </h3>
                        <br>
                        <font size = "3">
                            @for($i = 0; $i < count($blogs) ; $i ++)
                                <a href="http://127.0.0.1:8080/displayBlog">{{$blogs[$i]-> title}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$time[$i]-> addtime}}
                                </a>
                        </font>
                        <br>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
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
                    <br>
                    <br>
                    <h3>
                    Your Blogs:
                    </h3>
                    <br>
                    <font size = "3">
                    @for($i = 0; $i < count($blogs) ; $i ++)
                    {{$blogs[$i]-> title}}
                    </font>
                    <br>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

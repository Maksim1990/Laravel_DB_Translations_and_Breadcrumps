@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Translate</div>

                    <div class="panel-body">
                        <div>
                            {{trans('validation.readonly')}}

                            @php
                            //var_dump($translateItem->text);
                            @endphp
                            <ul>
                            @foreach($translateItem->text as $lang=>$item)
                                <li>[{{$lang}}] => {{$item}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
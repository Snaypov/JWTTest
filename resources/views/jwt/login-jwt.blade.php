@extends('layouts.app')

@section('content')
    @if (isset($res))
        {{-- @foreach ($res as $item)
            <h1>{{$item}}</h1>
        @endforeach     --}}
        <h1>{{$res}}</h1>
    @endif
    <form action="api/login" method="POST">
        <div class="form-group container" style="margin-top: 35px">
            <div class="row" style="padding: 20px 20px;">
                <div class="col" style="border-right: 1px solid gray">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" placeholder="Enter your email" name="email">
                </div>
                <div class="col">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center" style="margin: 0 auto; padding-top: 20px">
                <button class="btn btn-primary text-center" style="width: 80px;">Send</button>
            </div>
        </div>
    </form>
@endsection

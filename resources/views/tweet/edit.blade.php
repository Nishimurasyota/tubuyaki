@extends("layouts.layout")

@section("title","Tweet")


@section("header")
Header
@endsection
<div class="show">

    @section("mainContent")

    <p>{{$tweet->content}}</></p>

    <form action="{{route('tweet.update',$tweet->id)}}" method="post">
        @csrf
        @method("patch")
        <input type="text" name="content" value='{{$tweet->content}}'>
        <input type="submit" value="更新">
    </form>

    @endsection
</div>


@section("footer")
copyright@2022
@endsection

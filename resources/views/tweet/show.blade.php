@extends("layouts.layout")

@section("title","Tweet")


@section("header")
Header
@endsection
<div class="show">

    @section("mainContent")

    <p>{{$tweet->content}}</p>
    <br>
    <a href="{{route('tweet.edit', $tweet->id)}}"><button>編集</button></a>
    <form action="" method="post">
        @csrf
        @method("delete")
        <input type="submit" value="削除">
    </form>

    @endsection
</div>


@section("footer")
copyright@2022
@endsection

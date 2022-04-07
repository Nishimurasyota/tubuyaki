@extends("layouts.layout")

@section("title","Tweet")


@section("header")
Header
@endsection
<div class="show">

    @section("mainContent")
    <div>
        <p>{{$tweet->content}}</p>
    </div>

    @if($tweet->comments != null)
    <div>
        @foreach($tweet->comments as $obj)
        <p>{{$obj->comment}}</p>
        <form action="/comment/delete" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$obj->id}}">
            <input type="submit" value="削除">
        </form>
        @endforeach
    </div>

    @endif
    <br>
    <a href="{{route('tweet.edit', $tweet->id)}}"><button>編集</button></a>
    <form action="" method="post">
        @csrf
        @method("delete")
        <input type="submit" value="削除">
    </form>

    <div>
        <form action="/comment/create" method="post">
            @csrf
            <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
            <input type="text" name="comment">
            <input type="submit" value="コメント送信">
        </form>
    </div>



    @endsection
</div>


@section("footer")
copyright@2022
@endsection

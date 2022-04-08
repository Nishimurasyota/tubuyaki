@extends("layouts.layout")

@section("title","Tweet")


@section("header")
Header
@endsection
<div class="show">

    @section("mainContent")
    <div class="tweet_content">
        <p>つぶやきの内容</p>
        <p>{{$tweet->content}}</p>
        <button onclick=location.href="{{route('tweet.edit', $tweet->id)}}">編集</button>
        <form action="" method="post">
            @csrf
            @method("delete")
            <input type="submit" value="削除">
        </form>
    </div>

    @if($tweet->comments != null)
    <div class="comments_text">
        <h2>コメント一覧</h2>
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

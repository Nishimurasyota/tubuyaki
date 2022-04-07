@extends("layouts.layout")

@section("title","Tweet")


@section("header")
Header
{{ \Carbon\Carbon::now()->format("Y年m月d日") }}
@endsection
<div class="index">
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    @section("sidebar")
    <h4>新規作成</h4>
    <form action="/tweet" method="post">
        @csrf
        <input type="text" name="content">
        <input type="submit" value="作成">
    </form>

    @endsection

    @section("mainContent")

    @foreach($tweets as $tweet)

    <p><a href="{{route('tweet.show',$tweet->id)}}">{{$tweet->content}}</a></p>
    @endforeach

    @endsection
</div>


@section("footer")
copyright@2022
@endsection

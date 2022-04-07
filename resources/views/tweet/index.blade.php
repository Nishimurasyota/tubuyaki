@extends("layouts.layout")

@section("title","Tweet")


@section("header")
Header
@endsection
<div class="index">
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

    <p>{{$tweet->content}}</p>
    @endforeach

    @endsection
</div>


@section("footer")
copyright@2022
@endsection

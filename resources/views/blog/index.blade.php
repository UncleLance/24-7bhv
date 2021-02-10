@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
{{--            @foreach($posts as $post)--}}
            <a class="col-12 border-bottom d-flex py-2" href="{{-- {{ route('blog.show', ['blog' => $post-id]) }} --}}">
                <div class="mr-2"><img src="https://via.placeholder.com/125x125" alt="" class="d-block"></div>
                <div>
                    {{--<h3> {{ $post->title }}</h3>--}}
                    {{--<p> {{ Str::limit($post->post_content->content, 50) }} </p>--}}
                </div>
            </a>
{{--            @endforeach--}}
        </div>
    </div>
@endsection

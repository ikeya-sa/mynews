@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    更新日：{{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    氏名：{{ Str::limit($post->name, 50) }}
                                </div>
                                <div class="gender">
                                    性別：{{ Str::limit($post->gender, 10) }}
                                </div>
                                <div class="hobby">
                                    趣味：{{ Str::limit($post->hobby, 100) }}
                                </div>
                                <div class="introduction mt-3">
                                    自己紹介<br>{{ Str::limit($post->introduction, 500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
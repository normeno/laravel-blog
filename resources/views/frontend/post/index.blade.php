@extends('layouts.frontend')

@section('content')

<div id="page-content" class="archive-page container">
    <div class="">
        <div class="row">
            <div id="main-content" class="col-md-8">
                @if(isset($posts) && count($posts) > 0)
                    @foreach($posts as $post)
                        <div class="box">
                            <a href="#"><h2 class="vid-name">{!! $post->title !!}</h2></a>
                            <div class="info">
                                <h5>By <a href="#">{!! $post->user->name !!}</a></h5>
                                <span><i class="fa fa-calendar"></i> {!! $post->updated_at !!}</span>
                                <span><i class="fa fa-comment"></i> {!! $post->comments !!} Comments</span>
                                <span><i class="fa fa-heart"></i>{!! $post->likes !!}</span>
                            </div>
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <div class="zoom-caption">
                                    </div>
                                    <img src="{!! $post->cover !!}" />
                                </div>
                                <p>
                                    {!! $post->text !!}
                                    <a href="#">MORE...</a>
                                </p>
                            </div>
                        </div>
                        <hr class="line">
                    @endforeach

                    <div class="box text-center">
                            {!! $posts->render() !!}
                    </div>
                @endif

            </div>
            <div id="sidebar" class="col-md-4">
                <div class="widget">
                    <img src="http://lorempixel.com/400/200" />
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-follow">
                    <div class="heading"><h4>{{ trans('site.follow_us')  }}</h4></div>
                    <div class="content">
                        <ul class="list-inline">
                            <li>
                                <a href="facebook.com/">
                                    <div class="box-facebook">
                                        <span class="fa fa-facebook fa-2x icon"></span>
                                        <span>1250</span>
                                        <span>Fans</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="facebook.com/">
                                    <div class="box-twitter">
                                        <span class="fa fa-twitter fa-2x icon"></span>
                                        <span>1250</span>
                                        <span>Fans</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="facebook.com/">
                                    <div class="box-google">
                                        <span class="fa fa-google-plus fa-2x icon"></span>
                                        <span>1250</span>
                                        <span>Fans</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-post">
                    <div class="heading"><h4>{{ trans('site.featured')  }}</h4></div>
                    <div class="content">
                        @if(isset($featured) && count($featured) > 0)
                            @foreach($featured as $f)
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            {{ link_to_route('posts.view', '', ['sdf', str_slug($f->title, '-')]) }}
                                        </div>
                                        <img src="{!! $f->cover !!}" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">{!! $f->title !!}</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">{!! $f->user->name !!}</a></h6>
                                            <span><i class="fa fa-calendar"></i>{!! $f->created_at !!}</span>
                                            <span><i class="fa fa-heart"></i>{!! $f->likes !!}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
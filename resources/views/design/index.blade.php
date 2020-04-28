@extends('layouts.master')
@section('title',"Index page title here")
@section('content')

    {{--start container--}}
    <section class="container">
        <div class="mindex-wapper">
            <div class="row">
                <div class="col-md-4 col-sm-7 offset-md-2">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/4PRkZuv6c9k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="mehrab-index-button-group">
                        <button class="btn mbtn-index">Giver</button>
                        <button class="btn mbtn-index">Seeker</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


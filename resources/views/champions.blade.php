@extends('template')
@section('title', 'champions')

@section('content')
    <div class="container" style="padding: 100px 0">
        <div class="row row-cols-5">

            @foreach ($champions as $champion)
                <div class="col gy-4 gx-4">
                    <a href="/champions/{{$champion->name}}" class="link-light text-decoration-none">
                        <div class="card" style="border: 0;">
                            <img src={{$champion->image_url}} class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-uppercase fst-italic">{{$champion->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection

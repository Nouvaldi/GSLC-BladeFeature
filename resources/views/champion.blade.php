@extends('template')
@section('title', $champions->name)

@section('content')
    <div class="container-fluid text-center bg-dark">
        <div class="row" style="padding-top: 100px">
            <div class="col">
                <img src={{$champions->image_url}} alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-light text-uppercase fw-bold fst-italic" style="margin-top: -250px; margin-bottom: -10px">{{$champions->title}}</p>
                <h1 class="display-1 text-light text-uppercase fw-bold fst-italic" >{{$champions->name}}</h1>
            </div>
        </div>

        <div class="container bg-dark align-items-top">
            <div class="row justify-content-center" style="padding: 50px 0">
                <div class="col-2 mt-4 border-end border-light">
                    <p class="text-warning text-uppercase border-bottom border-light">Role</p>

                    @if ($champions->role == 'Mage')
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Mage-1-120x102.png" alt="" style="max-width: 80px;">

                    @elseif ($champions->role == 'Tank')
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Tank-1-120x102.png" alt="" style="max-width: 80px;">

                    @elseif ($champions->role == 'Fighter')
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Fighter-1-120x102.png" alt="" style="max-width: 80px;">

                    @elseif ($champions->role == 'Assassin')
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Assassin-1-120x102.png" alt="" style="max-width: 80px;">

                    @elseif ($champions->role == 'Marksman')
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Marksman-1-120x102.png" alt="" style="max-width: 80px;">

                    @elseif ($champions->role == 'Support')
                    <img src="https://i.pinimg.com/originals/bf/3f/88/bf3f88c18d6385422c5bb23a595327d0.png" alt="" style="max-width: 80px;">

                    @endif

                    <p class="text-light">{{$champions->role}}</p>
                </div>
                <div class="col-4 mt-4" >
                    <p class="text-warning text-uppercase border-bottom border-light">Lore</p>
                    <p class="text-light">{{$champions->lore}}...</p>
                </div>
            </div>
        </div>

    </div>

@endsection

@extends('layouts.app')

@section('title', '出品した商品')

@section('content')

<div class="container">
    {{-- <div class="row col-8 offset-2"> --}}
        @foreach ($sold_items as $item)

        <div class="card mb-3 col-8 offset-2" style="max-height: 200px;">
            <div class="row  ">
                <div class="col-md-4">
                    <img src="/storage/item-images/{{$item->item_image}}" alt="" style="height:140px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        {{-- <p class="card-text">{{ $item->description }}</p> --}}
                        <p class="card-text">￥{{ $item->price }}</p>
                        <p class="card-text"><small class="text-muted">{{ $item->created_at }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection

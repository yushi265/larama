@extends('layouts.app')

@section('title', '出品する')

@section('content')

<div class="container">
    <div class="col-8 offset-2">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="card">
        <div class="card-body col-8 offset-2">

            <div class="font-weight-bold text-center border-bottom pb-3 pt-3 mb-3" style="font-size: 24px">出品する</div>

            <form action="{{ route('sell') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>商品画像</div>
                    <span class="item-image-form image-picker">
                        <input type="file" name="item-image" class="d-none" accept="image/png,image/jpeg,image/gif" id="item-image" />
                        <label for="item-image" class="d-inline-block" role="button">
                            @if (!empty($user->avatar_file_name))
                            <img src="/storage/item-images/{{$user->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width: 300px; height: 300px;">
                            @else
                            <img src="/images/item-image-default.png" style="object-fit: cover; width: 300px; height: 300px;">
                            @endif
                        </label>
                    </span>
                    @error('item-image')
                        <div style="color: #E4342E;" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">商品名</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="入力してください" value="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">説明</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" name="description" aria-describedby="emailHelp" placeholder="入力してください" value="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">カテゴリー</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                        <option>選択してください</option>
                        @foreach ($categories as $category)
                            <optgroup label="{{ $category->name }}">{{ $category->name }}</optgroup>
                                @foreach ($category->secondaryCategories as $secondary)
                                    <option label="{{ $secondary->name}}" value="{{ $secondary->id }}">{{ $secondary->name }}</option>
                                @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">状態</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="condition">
                        <option>選択してください</option>
                        @foreach ($conditions as $condition)
                            <option label="{{ $condition->name }}" value="{{ $condition->id }}">{{ $condition->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">金額</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleInputEmail1" name="price" aria-describedby="emailHelp" placeholder="入力してください" value="">
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">出品する</button>
            </form>
        </div>
    </div>
</div>

@endsection

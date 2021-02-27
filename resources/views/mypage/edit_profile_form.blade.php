@extends('layouts.app')

@section('content')

<div class="container col-6">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="font-weight-bold text-center border-bottom pb-3 pt-3" style="font-size: 24px">プロフィール編集</div>

            <form action="{{ route('edit-profile') }}" method="post" enctype="multipart/form-data" class="mt-5">
                @csrf
                <span class="avatar-form image-picker">
                    <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
                    <label for="avatar" class="d-inline-block">
                        @if (!empty($user->avatar_file_name))
                            <img src="/storage/avatars/{{$user->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
                        @else
                            <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
                        @endif
                    </label>
                </span>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">ニックネーム</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="入力してください" value="{{ $user->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">変更する</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <a class="btn btn-primary btn-md" href="{{ route('dogfacility.create') }}">
            <i class="far fa-create"></i>＋新規投稿する
        </a>
        @foreach ($dogfacilities as $dogfacility)
            <div class="card-wrap">
                <div class="card mt-3">
                    <div class="card-header">
                        {{ $dogfacility->user->name }}
                    </div>
                    <div class="card-body">
                        <h3>
                            {{ $dogfacility->title }}
                        </h3>
                        <p class="mb-4">
                            {{ $dogfacility->body }}
                        </p>
                        <div class="text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                詳細
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
@endsection
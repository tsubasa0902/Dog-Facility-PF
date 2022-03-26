@extends('layouts.app')

@section('content')
<div class="full-page">
  <div class="mb-5">
    <img class="top-img" src="/images/dog01.jpeg" alt="">
    <h2 class="top-mg font-weight-bold">
      大型犬オーナーの皆さんで<br>情報共有するアプリです
    </h2>
  </div>

  <div class="about container py-5">
    <div class="row">
      <div class="col-md-6 mb-5">
        <h2 class="font-weight-bold text-center mb-4">大型犬オーナーで情報を共有</h2>
        <p class="lead">大型犬と一緒にお出かけできる施設をみんなで共有しませんか？<br>
          愛犬との写真をアップして最高の思い出を共有しましょう！</p>
      </div>
      <div class="col-md-6">
        <img src="./images/dog.jpeg" class="w-100" alt="">
      </div>
    </div>
  </div>

  <div class="about2 container py-5">
    <div class="row">
      <div class="about-img col-md-6">
        <img src="./images/dog03.jpeg" class="w-100" alt="">
      </div>
      <div class="about-mg col-md-6 mb-5">
        <h2 class="font-weight-bold text-center mb-4">コメント機能</h2>
        <p class="lead">コメント機能を活用してみんなで意見交換してみましょう！</p>
      </div>
    </div>
  </div>
</div>

<div class="test">
  <div class="container py-5">
    <div class="col-md-12">
      <h2 class="font-weight-bold text-center">Dogfacilityで情報共有しませんか？</h2>
    </div>
    <div class="row form-group justify-content-center mt-4 mb-1">
      <a href=" {{ route('login.guest')}}" class="btn btn-lg btn-secondary mr-5">ゲストログイン</a>
      <a href=" {{ route('register')}}" class="btn btn-lg btn-secondary ">会員登録</a>
    </div>
  </div>
</div>
@endsection
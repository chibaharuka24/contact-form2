@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<form class="contact-form" action="/contacts/confirm" method="post">
    <div class="title">
        <h2>お問い合わせ</h2>
    </div>
        <div class="contact-form_name">
            <div class="name">お名前</div>
            <input type="text" name="name" value="テスト太郎">
        </div>
        <div class="contact-form_email">
            <div class="email">メールアドレス</div>
            <input type="email" name="email" value="">
        </div>
        <div class="contact-form_tel">
            <div class="tel">電話番号</div>
            <input type="text" name="tel" value="">
        </div>
        <div class="contact-form_content">
            <div class="content">お問い合わせ内容</div>
            <input type="textBox" name="content" value="">
        </div>
        <div class="contact-form_button">
            <input type="submit" name="button" value="送信">
        </div>

</form>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<form class="contact-form" action="/contacts/confirm" method="post">
    @csrf
    <div class="title">
        <h2>お問い合わせ</h2>
    </div>
        <div class="contact-form-row name">
            <div class="contact name">お名前</div>
            <input class="contact-form-text" type="text" name="name" placeholder="テスト太郎" value="{{old('name')}}">
        </div>
        <div class="error">
                @error('name')
                    {{ $message }}
                @enderror
        </div>
        <div class="contact-form-row email">
            <div class="contact email">メールアドレス</div>
            <input class="contact-form-text" type="text" name="email" placeholder="test@example.com" value="{{old('email')}}">
        </div>
        <div class="error">
                @error('email')
                    {{ $message }}
                @enderror
        </div>
        <div class="contact-form-row tel">
            <div class="contact tel">電話番号</div>
            <input class="contact-form-text" type="text" name="tel" placeholder="09012345678" value="{{old('tel')}}">
        </div>
        <div class="error">
                @error('tel')
                    {{ $message }}
                @enderror
        </div>
        <div class="contact-form-row content">
            <div class="content">お問い合わせ内容</div>
            <textarea  name="content" placeholder="資料をいただきたいです">{{old('content')}}</textarea>
        </div>
    </div>
    <div class="contact-form_button">
        <button class="contact-form_button-submit" type="submit">送信</button>
    </div>
</form>
@endsection
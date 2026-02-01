@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<form class="contact-form" action="/contacts/confirm" method="post">
    @csrf
    <div class="title">
        <h3>お問い合わせ</h3>
    </div>
        <div class="contact-form-row name">
            <div class="contact name required">お名前</div>
            <div>
                <input class="contact-form-text" type="text" name="name" placeholder="テスト太郎" value="{{old('name')}}">
                <div class="error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="contact-form-row email">
            <div class="contact email required">メールアドレス</div>
            <dov>
                <input class="contact-form-text" type="text" name="email" placeholder="test@example.com" value="{{old('email')}}">
                <div class="error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="contact-form-row tel">
            <div class="contact tel required">電話番号</div>
            <div>
                <input class="contact-form-text" type="text" name="tel" placeholder="09012345678" value="{{old('tel')}}">
                <div class="error">
                    @error('tel')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="contact-form-row content">
            <div class="contact content">お問い合わせ内容</div>
            <div>
                <textarea  name="content" placeholder="資料をいただきたいです">{{old('content')}}</textarea>
            </div>
        </div>
    </div>
    <div class="contact-form_button">
        <button class="contact-form_button-submit" type="submit">送信</button>
    </div>
</form>
@endsection
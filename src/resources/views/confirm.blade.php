@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection

@section('content')
<form class="" action="/contacts" method="post">
    @csrf
    <div class="title2">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <div class="contact-form_content">
    <table>
        <tr>
            <td class="title">お名前</td>
            <td class="confirm">{{ $contact['name']}}</td>
        </tr>
        <tr>
            <td class="title">メールアドレス</td>
            <td class="confirm">{{ $contact['email']}}</td>
        </tr>
        <tr>
            <td class="title">電話番号</td>
            <td class="confirm">{{ $contact['tel']}}</td>
        </tr>
        <tr>
            <td class="title">お問い合わせ内容</td>
            <td class="confirm">{{ $contact['content']}}</td>
        </tr>
    </table>
    <div class="contact-form_button">
        <button class="contact-form_button-submit" type="submit">送信</button>
    </div>
</form>

@endsection

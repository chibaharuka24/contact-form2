@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection

@section('content')
<form class="" action="/contacts" method="post">
    @csrf
    <div class="contact-form_content">
    <table>    
        <tr>
            <th>お名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>お問い合わせ内容</th>
        </tr>
        <tr>
            <td>{{ $inputs['name']}}</td>
            <td>{{ $inputs['email']}}</td>
            <td>{{ $inputs['tel']}}</td>
            <td>{{ $inputs['content']}}</td>
        </tr>
    </table>
    <button class="contact-form_button-submit" type="submit">送信</button>
</form>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <!-- head に追加 -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <div class="thanks-message text-center">
        お問い合わせありがとうございます
    </div>
</div>
@endsection
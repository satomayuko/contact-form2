@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4 fw-bold">お問い合わせ内容の確認</h2>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3 row align-items-center">
            <label class="col-sm-4 col-form-label fw-bold text-end">お名前</label>
            <div class="col-sm-8">
                <input type="text" name="name" readonly class="form-control" value="{{ $contact['name'] }}">
            </div>
        </div>

        <div class="mb-3 row align-items-center">
            <label class="col-sm-4 col-form-label fw-bold text-end">メールアドレス</label>
            <div class="col-sm-8">
                <input type="email" name="email" readonly class="form-control" value="{{ $contact['email'] }}">
            </div>
        </div>

        <div class="mb-3 row align-items-center">
            <label class="col-sm-4 col-form-label fw-bold text-end">電話番号</label>
            <div class="col-sm-8">
                <input type="tel" name="tel" readonly class="form-control" value="{{ $contact['tel'] }}">
            </div>
        </div>

        <div class="mb-3 row align-items-center">
            <label class="col-sm-4 col-form-label fw-bold text-end">お問い合わせ内容</label>
            <div class="col-sm-8">
                <textarea name="content" readonly class="form-control" rows="5">{{ $contact['content'] }}</textarea>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary me-2">送信する</button>
            <button type="button" class="btn btn-secondary" onclick="history.back()">修正する</button>
        </div>
    </form>
</div>
@endsection
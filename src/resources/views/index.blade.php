<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 700px;">
    <h2 class="text-center mb-4 fw-bold">お問い合わせ</h2>

    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="mb-3 row align-items-center">
            <label for="name" class="col-sm-4 col-form-label fw-bold text-end">
                お名前 <span class="text-muted" style="opacity: 0.5;">必須</span>
            </label>
            <div class="col-sm-8">
                <input type="text" name="name" id="name"
                    class="form-control"
                    style="max-width: 300px;"
                    value="{{ old('name') }}"
                    placeholder="テスト太郎">
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 row align-items-center">
            <label for="email" class="col-sm-4 col-form-label fw-bold text-end">
                メールアドレス <span class="text-muted" style="opacity: 0.5;">必須</span>
            </label>
            <div class="col-sm-8">
                <input type="email" name="email" id="email"
                    class="form-control"
                    style="max-width: 300px;"
                    value="{{ old('email') }}"
                    placeholder="test@example.com">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 row align-items-center">
            <label for="tel" class="col-sm-4 col-form-label fw-bold text-end">
                電話番号 <span class="text-muted" style="opacity: 0.5;">必須</span>
            </label>
            <div class="col-sm-8">
                <input type="tel" name="tel" id="tel"
                    class="form-control"
                    style="max-width: 300px;"
                    value="{{ old('tel') }}"
                    placeholder="090-1234-5678">
                @error('tel')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 row align-items-start">
            <label for="body" class="col-sm-4 col-form-label fw-bold text-end">
                お問い合わせ内容
            </label>
            <div class="col-sm-8">
                <textarea name="content" id="content" rows="5"
                    class="form-control"
                    style="max-width: 400px;"
                    placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                    @error('content')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-dark px-5">送信</button>
        </div>
    </form>
</div>
@endsection
<!-- エラーの場合の画面表示 -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>エラーが起こっています。</strong>

        <br><br>

        <ul>
            {{-- エラー内容を全て表示 --}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

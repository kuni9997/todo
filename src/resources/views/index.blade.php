@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

    @section('content')
    <div class="state">
        <div class="state__success">
            <p class="state__success--text">Todoを作成しました</p>
        </div>
    </div>
    <div class="content">
        <div class="content--position">
            <div class="content__input">
                <form action="/todos" method="post" class="content__input-form">
                    @csrf
                    <div class="content__input-form--textarea">
                        <input type="text" class="content__input-text" name='content'>
                    </div>
                    <div class="content__input-form-button">
                        <button class="content__input-form-button--submit">作成</button>
                    </div>
                </form>
            </div>
            <div class="content__list">
                <h2 class="content__list-header">Todo</h2>
                <table class="content__list-table">
                    <form action="/update" method="post">
                    @foreach ($contents as $content)
                    <tr>
                        <th class="content__list-table--header">{{$content->content}}</th>
                        <th>
                            <div class="content__list-button">
                                <button class="content__list-button--up">更新</button>
                                <button class="content__list-button--down">削除</button>
                            </div>
                        </th>
                    </tr>
                    </form>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
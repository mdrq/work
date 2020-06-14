@extends('layouts.layouts')
@section('title', 'キャラクター一覧ページ')
@section('content')

@foreach($characters as $chara)
<div class="">キャラクター名：{{ $chara->name }}</div>
{{-- 所属：{{ $chara->belong }} --}}
<div class="">誕生日：{{ $chara->birth_date->format('n月j日') }}</div>

@endforeach

@endsection
@section('footer')
@endsection
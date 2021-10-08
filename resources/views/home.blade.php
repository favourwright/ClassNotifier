@extends('layouts.app')
@section('style')
<style>
h1, h2, p{line-height:1em;}
</style>
@endsection

@section('content')
<h1>Hi, {{$data->name}}</h1>
<h2>Thanks for your interest in our web app</h2>
<p>Your email has been recorded and you'll start receiving notifications about activities of your class from now</p>
@endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", ()=>{
})
</script>
@endsection

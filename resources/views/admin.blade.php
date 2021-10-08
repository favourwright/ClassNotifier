@extends('layouts.app')
@section('style')
<style>
h1, h2, p{line-height:1em;}
.admin{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}
</style>
@endsection

@section('content')
<div class="admin">
    <h1>Hi, {{$data->name}}</h1>
    <p>You're registered as a {{$data->category}}</p>
    <form method="POST">
        <input name="detail" type="text">
        <button>Notify</button>
    </form>
</div>
@endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", ()=>{
    document.querySelector("form").addEventListener("submit",ev=>{
        ev.preventDefault()
        alert("Emails have been sent")
    })
})
</script>
@endsection

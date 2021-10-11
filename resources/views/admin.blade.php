@extends('layouts.app')
@section('style')
<style>
h1, h2, h3, p{font-weight:300;line-height:1em;}
.admin{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}
.admin input{
    display:inline-block;
    padding:16px;
    font-size:16px;
    color:#000;
    background:rgba(255, 255, 255, 0.6);
}
button{
    padding:16px;
    font-weight:bold;
}
.admin input, button{
    border-radius:14px;
}
</style>
@endsection

@section('content')
<div class="admin">
    <h1>Hi, {{$data->name}}</h1>
    <h3>You're registered as a {{$data->category}}</h3>
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

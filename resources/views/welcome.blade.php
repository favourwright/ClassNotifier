@extends('layouts.app')
@section('style')
<style>
    .register label{
        display:block;
        float:left;
        width:100%;
    }
    label span{
        padding-left:10px;
    }
    label:not(:last-child){
        margin-bottom:10px;
    }
    .register{
        padding:4%;
        background:rgba(0, 0, 0, 0.1);
        border-radius:16px;
        float: left;
    }
    .register input{
        display:block;
        width:100%;
        padding:16px;
        font-size:16px;
        border-radius:14px;
        color:#000;
        background:rgba(255, 255, 255, 0.6);
    }
    .main h1{
        font-weight:300;
        font-size:40px;
        line-height:.6em;
    }
    .main p{
        font-weight:300;
        font-size:18px;
        line-height:1em;
    }
    button{
        padding:10px 20px;
        border-radius:10px;
        background:#daa520;
        font-size:16px;
        font-weight:bold;
        float: right;
        margin-top:10px;
    }
    select{
        display:block;
        padding:10px;
        border-radius:10px;
    }
</style>
@endsection

@section('content')
<h1>Register</h1>
<p>Hi, fill this form to start receiving class notifications</p>
<form class="register" name="register" method="POST" action="/register">
    @csrf
    <label for="fullname">
        <span>Fullname</span>
        <input name="fullname" type="text" placeholder="Enter fullname">
    </label>
    <label for="reg">
        <span>Reg. number</span>
        <input name="reg" type="text" placeholder="Enter Reg. number">
    </label>
    <label for="email">
        <span>Email</span>
        <input name="email" type="text" placeholder="Enter your email">
    </label>
    <label for="category">
        <span>Category</span>
        <select name="category">
            <option value="student">Student</option>
            <option value="rep">Class representative</option>
            <option value="lecturer">Lecturer</option>
        </select>
    </label>
    <label for="password">
        <span>Password</span>
        <input name="password" type="password" placeholder="Enter your password">
    </label>
    <button type="submit">Submit</button>
</form>
@endsection

@section('script')
<script>
// same as JQuery $(document).ready()
document.addEventListener("DOMContentLoaded", ()=>{
    // Register()
})
const Register=()=>{
    const form = document.querySelector(".register")
    form.addEventListener("submit", ev=>{
        ev.preventDefault()
        const data = ()=>{
            form.querySelectorAll("label")
        }

        fetch('register', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json',},
            body: JSON.stringify({"data":"haha"}),
        })
        // .then(response => response.json())
        .then(data => {
            console.log('Success:', data)
        })
        .catch((error) => {
            console.error('Error:', error)
        })
    })
}
</script>
@endsection

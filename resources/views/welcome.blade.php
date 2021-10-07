<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Class Notification App</title>
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%;height:100%;}
            body {
                margin:0;
                font-family: 'Nunito', sans-serif;
                background:#692be2;
                float: left;
                height:100%;
            }
            a{background-color:transparent}[hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}
            *,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
            a{color:inherit;text-decoration:inherit}
            .main{
                height:100%;
                width:100%;
                padding:6%;
                display:flex;
                justify-content:center;
            }
            .register label{
                display:block;
                float:left;
                width:100%;
            }
            label:not(:last-child){
                margin-bottom:20px;
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
            .register h1{
                font-weight:300;
                font-size:40px;
                line-height:.6em;
            }
            .register p{
                font-weight:300;
                font-size:18px;
                line-height:1em;
            }
            button{
                padding:10px 20px;
                border-radius:10px;
                background:#ffbc00;
                font-size:14px;
                font-weight:bold;
            }
        </style>
    </head>
    <body class="main">
        <main>
            <form class="register">
                <h1>Register</h1>
                <p>Hi, fill this form to start receiving class notifications</p>
                <label for="fullname">
                    <input name="fullname" type="text" placeholder="Enter fullname">
                </label>
                <label for="reg">
                    <input name="reg" type="text" placeholder="Enter Reg. number">
                </label>
                <label for="email">
                    <input name="email" type="text" placeholder="Enter your email">
                </label>
                <button type="submit">Submit</button>
            </form>
        </main>
    </body>
    <script>
        // same as JQuery $(document).ready()
        document.addEventListener("DOMContentLoaded", ()=>{
            Register()
        })
        const Register=()=>{
            const form = document.querySelector(".register");
            form.addEventListener("click", ev=>{
                ev.preventDefault()
                console.log("working now");
            })
        }
    </script>
</html>

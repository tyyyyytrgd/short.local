



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
 <style media="screen">
     .box{

         width: 1000px;
         margin: 0 auto;
         border: 1px solid #ccc;
         background-color: lightblue;
     }
     </style>
<body>
<br>
<br>
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
        <div class="container box">
            <div class="card-header">
                <form action="/save" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="long_url" placeholder="Past Long URL" class="form-control">

                        <button type="submit">Create Short URL</button>
                    </div>

                </form>
            </div>
    </div>

</body>



<html>
<head>
    <title>Send Email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
</head>
<body>
    <h2 style="margin-left: 10px;margin-top: 10px">Send mail to your Friend</h2><br>

    <div class="col-md-4">

        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable">
                {{Session('error')}}
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                {{Session('success')}}
            </div>
        @endif

        <form action="{{route('send-email')}}" class="form-group" method="post">

            {{csrf_field()}}

            <label for="">Enter Recievers Email :</label>

            <input type="email" name="email" id="email" class="form-control">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <br>

            <label for="">Subject :</label>

            <input type="text" name="subject" class="form-control">
            @if ($errors->has('subject'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('subject') }}</strong>
                </span>
            @endif

            <br>

            <label for="">Your Message :</label>

            <textarea name="msg" id="" cols="5" rows="5" class="form-control"></textarea>
            @if($errors->has('msg'))
                <div class="alert alert-danger alert-dismissible">{{$errors->first('msg')}}</div>
            @endif

            <br>

            <input type="submit" class="btn btn-success" name="send" class="form-control">

        </form>
    </div>
</body>
</html>
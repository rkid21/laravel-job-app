<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Job</h1>

    <div class="error">
        @if($errors->any()){
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        }
        @endif
    </div>
    <form method="post" action="{{route('job.store')}}">
        @csrf
        @method('post')
        <div class="input-text">
            <label for="">Name</label>
            <input type="text" name="title" id="">
        </div>
        <div class="input-text">
            <label for="">Details</label>
            <input type="text" name="details" id="">
        </div>
        <div class="input-text">
            <label for="">Job Req</label>
            <input type="text" name="jobreq" id="">
        </div>
        <div class="submit">
            <input type="submit" value="Save a new Job">
        </div>
    </form>
</body>
</html>
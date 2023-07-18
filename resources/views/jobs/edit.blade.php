<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Job</h1>

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
    <form method="post" action="{{route('job.update',['job' => $job] )}}">
        @csrf
        @method('put')
        <div class="input-text">
            <label for="">Name</label>
            <input type="text" name="title" id="" value="{{$job->title}}">
        </div>
        <div class="input-text">
            <label for="">Details</label>
            <input type="text" name="details" id="" value="{{$job->details}}">
        </div>
        <div class="input-text">
            <label for="">Job Req</label>
            <input type="text" name="jobreq" id="" value="{{$job->jobreq}}">
        </div>
        <div class="submit">
            <input type="submit" value="Update a new Job">
        </div>
    </form>
</body>
</html>
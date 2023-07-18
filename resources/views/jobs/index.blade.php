@extends('layouts.app')
@section('content')
    <img src="img/index.png" class="img-fluid float-end" alt="index">
    <div class="container">
      <p class="fs-1 text-center">We are one call away to <br>start your career. Making new <br> opportinities everyday.
      </p>
      <p class="fs-4 text-uppercase text-center" style="font-weight: lighter;">Let's End you Job Search</p>
      <div class="d-grid col-6 mx-auto">
        <button class="btn btn-primary" onclick="location.href='php/applicant-acc.php'"
            style="border-radius: 28px; background: rgb(48, 172, 255); border: none; font-weight: bold; margin-bottom: 20px;"
            type="button">Get Started</button>
    </div>
      <p><a class="link-opacity-100"
          href="https://www.facebook.com/Vvbsi/">VvelascoBusinnessSolutionInc</a></p>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-solid fa-envelope"></i>
    </div>

    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Details</th>
                <th>JobReq</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($jobs as $job)
                <tr>
                    <td>{{$job->id}}</td>
                    <td>{{$job->title}}</td>
                    <td>{{$job->details}}</td>
                    <td>{{$job->jobreq}}</td>
                    <td>
                        <a href="{{route('job.edit', ['job' => $job])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('job.delete', ['job' => $job])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                
            @endforeach
            <tr>
                    <a href="{{route('job.create')}}">Add</a>
                </tr>
        </table>
    </div>

    <div class="footer">
      <p>Outsourcing Philippines | Hiring Jobs in Manila, Cebu & Davao | All Rights Reserved ©2020 V'Valeros</p>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>
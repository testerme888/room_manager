<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MDB Login Form</title>
  <!-- MDB CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
  <!-- Font Awesome for social icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- Error Messages --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <form action="{{route('auth.register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" id="form2Example1" name="name" class="form-control" />
          <label class="form-label" for="form2Example1">Name</label>
        </div>
<!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form2Example1" name="email" class="form-control" />
          <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form2Example2" name="password" class="form-control" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" name="password_confirmation" id="form2Example2" class="form-control" />
          <label class="form-label" for="form2Example2">Confirm Password</label>
        </div>
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>

          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
          <p>a member? <a href="{{route('login')}}">Login</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MDB JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
</html>

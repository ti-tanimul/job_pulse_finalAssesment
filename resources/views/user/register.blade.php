<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="card-title text-center">Registeration</div>
                        </div>
                        <div class="card-body">
                            @if(Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form action="{{ route('user_register') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label ">User Type</label><br>
                                    <select name="type" id="" class="form-control shadow">
                                        <option>Select Type</option>
                                        <option value="2">Company</option>
                                        <option value="3">Candidate</option>
                                    </select>
                                    
                                </div>
                                <div class="mb-3">
                                  <label class="form-label ">Name</label>
                                  <input type="text" class="form-control shadow" name="name">
                                </div>
                                <div class="mb-3">
                                  <label class="form-label ">Email</label>
                                  <input type="email" class="form-control shadow" name="email">
                                </div>
                                <div class="mb-3">
                                  <label class="form-label ">Password</label>
                                  <input type="password" class="form-control shadow" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                              </form>
                              <br>
                              <div class="btn btn-outline-success" ><a href="{{ route('user-login') }}">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
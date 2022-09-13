<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: " *";
            color: red;
        }
    </style>
  </head>
  <body class="bg-dark">
    <div class="container mt-4 card p-3">
        <form action="{{ url('/') }}/customer" method="post">
            <!-- @csrf -->
            <!-- {{-- <pre>
                @php
                    print_r($errors->all());
                @endphp
            </pre> --}} -->
            <h3 class="text-center text-primary">Customer Registration</h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <!-- <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="{{ old('name') }}"> -->
                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="">
                    <span class="text-danger">
                        <!-- @error('name')
                            {{ $message }}
                        @enderror -->
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <!-- <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" value="{{ old('email') }}"> -->
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" value="">
                    <span class="text-danger">
                        <!-- @error('email')
                            {{ $message }}
                        @enderror -->
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="">
                    <span class="text-danger">
                        <!-- @error('password')
                            {{ $message }}
                        @enderror -->
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password:</label>
                    <input type="password" class="form-control" name="confirm_password" id="" placeholder="">
                    <span class="text-danger">
                        <!-- @error('confirm_password')
                            {{ $message }}
                        @enderror -->
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Country:</label>
                    <input type="text" class="form-control" name="country" id="" placeholder="">
                    <span class="text-danger">
                        <!-- @error('country')
                            {{ $message }}
                        @enderror -->
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="">State:</label>
                    <input type="text" class="form-control" name="state" id="" placeholder="">
                    <span class="text-danger">
                        <!-- @error('state')
                            {{ $message }}
                        @enderror -->
                    </span>
                </div>
            </div>
            <div class="form-group">
              <label for="">Address:</label>
              <textarea class="form-control" name="address" id="" rows="3"></textarea>
              <span class="text-danger">
                <!-- @error('address')
                    {{ $message }}
                @enderror -->
            </span>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Gender:</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O">
                            <label class="form-check-label" for="inlineRadio3">Other</label>
                        </div>
                    </div>
                    <!-- <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span> -->
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date of Birth:</label>
                    <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="">
                    <!-- <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span> -->
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
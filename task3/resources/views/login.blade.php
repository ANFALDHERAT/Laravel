<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>here is login bage</h1>


<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="input user name"/><br>
    <span style="color:red">@error('username'){{ $message }} @enderror</span><br><br>
    <input type="text" name="phone" placeholder="Input phone" /><br />
    <span style="color:red">@error('phone'){{ $message }}@enderror</span><br /><br />
    <input type="email" name="email" placeholder="Input email" /><br />
    <span style="color:red">@error('email'){{ $message }}@enderror</span><br /><br />

    <input type="password" name="userpassword" placeholder="input password"/><br>
    <span style="color:red">@error('userpassword'){{ $message }}@enderror</span><br><br>
    <input type="password" name="confirm" placeholder="Confirm password" /><br />
    <span style="color:red">@error('confirm'){{ $message }}@enderror</span><br><br>
    <button type="submit" >log in</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

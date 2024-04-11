<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      $('a[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'bottom',
        html: true
      });
    </script>
  </head>
  <body>
    <div class="container my-5">
      <h2>What's happenning?</h2>
        <form>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="inputUsername" class="form-label">Username</label>
            <input type="username" class="form-control" id="inputUsername" aria-describedby="usernameHelp">
          </div>
          <div class="mb-3">
            <label for="inputMessage" class="form-label">Message</label>
            <textarea class="form-control" id="inputMessage" rows="3"></textarea>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">R, u, a, robot?</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      <br>
    </div>
  </body>
</html>
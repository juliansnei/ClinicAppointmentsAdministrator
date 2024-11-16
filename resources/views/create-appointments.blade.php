<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Assigning Medical appointment</title>
  </head>
  <body>

    <div class="card">
        <h5 class="card-header">Assigned new medical appointment</h5>
        <div class="card-body">
          <p class="card-text">
            <form action="{{ route('medical-appointments.store') }}" method="POST">
              @csrf
              <label for="">Illment</label>
              <input type="text" name="illness" class="form-control" required>
              <label for="">Comment</label>
              <input type="text" name="comment" class="form-control" required>
              <label for="">Appointment Date</label>
              <input type="date" name="appointment_date" class="form-control" required>
              <br>
              <a href="{{ route("medical-appointments.index") }}" class="btn btn-info">
                  <span class="fa-solid fa-rotate-left"></span> Regresar
              </a>
              <button class="btn btn-primary">
                  <span class="fa-solid fa-user-plus"></span> Agregar
              </button>
          </form>
          </p>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
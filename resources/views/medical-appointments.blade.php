<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>List of medical appointments</title>
  </head>
  <body>
    <div class="card">
        <h5 class="card-header">Patient Medical appointments</h5>
        <div class="card-body">
          <h5 class="card-title">Medical appointments Lists</h5>
          <p>
            <a href="{{ route('medical-appointments.create') }}" class="btn btn-primary">Asigned Appointment</a>
          </p>
          <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Illment</th>
                        <th>Comment</th>
                        <th>Appointment Date</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->illness }}</td>
                            <td>{{ $item->comment }}</td>
                            <td>{{ $item->appointment_date }}</td>
                            <td>
                                <form>
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fa-solid fa-pen-to-square fa-fw"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fa-solid fa-user-xmark"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $datos->links() }}
                    </div>
                </div>
            </div>
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
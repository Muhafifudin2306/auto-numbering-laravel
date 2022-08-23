<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Numbering with Laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container col-lg-6"">
        <div id="title" style="margin-top: 50px">
            <div class="title">
                <h4> Prefix Table </h4>
            </div>
        </div>
        <div id="button_add" style="margin-top: 50px">
            <a href="/addprefix" type="button" class="btn btn-primary"> +Add Prefix </a>
        </div>
    </div>
    <div id="table_body" style="margin-top: 30px">
        <div class="container col-lg-6">
            <table class="table table-bordered align-middle">
                <thead class="table table-primary">
                    <tr style="text-align: center">
                        <th width="50px">ID</th>
                        <th width="200px">Prefix</th>
                        <th width="50px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prefix as $pre)
                        <tr>
                            <td align="center">{{ $pre->id }} </td>
                            <td> {{ $pre->prefix }} </td>
                            <td align="center"> <a href="{{ route('edit', $pre->id) }}" class="btn btn-warning"
                                    style="margin-right: 5px" type="button"> Edit
                                </a>
                                <a href="{{ route('destroy', $pre->id) }}" class="btn btn-danger" type="button"> Hapus
                                </a>



                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>

</html>

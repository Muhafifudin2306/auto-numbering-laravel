<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tambah Data Invoice </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container col-lg-8"">
        <div id="title" style="margin-top: 50px">
            <div class="title">
                <h4> Tambah Data Invoice </h4>
            </div>
        </div>

        <div id="form" style="margin-top: 50px">
            <form action="{{ url('/invoiceadd') }}" method="post">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="customer" class="form-label">Customer</label>
                    <input type="text" class="form-control" name="customer">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total Amount</label>
                    <input type="number" class="form-control" name="total">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Prefix</label>
                    <select class="form-select" aria-label="Default select example" name="series_id">
                        <option selected disabled>-- Pilih Prefix --</option>
                        @foreach ($prefix as $pre)
                            <option value="{{ $pre->id }}">{{ ucfirst($pre->prefix) }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

</body>

</html>

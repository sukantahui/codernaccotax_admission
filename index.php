<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Welcome</h1>
    <div class="container">
        <form action="">
            <div class="d-flex flex-column flex-md-row">
                <!-- Entering student name -->
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="student-name">Student Name</label>
                        <input type="text" class="form-control" id="student-name" aria-describedby="studentNameHelp" placeholder="Enter your name">
                        <small id="studentNameHelp" class="form-text text-muted">Enter your full name</small>
                    </div>
                </div>
                <!-- Entering student dob -->
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="dob">Date of birth</label>
                        <input type="date" class="form-control" id="dob" aria-describedby="studentDOBHelp" placeholder="Enter your Date of birth">
                        <small id="studentDOBHelp" class="form-text text-muted">Enter your Date of birth</small>
                    </div>
                </div>
                <!-- Entering student sex -->
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="dob">Sex</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                    </div>
                </div>
            </div>


        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
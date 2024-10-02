<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="">
            <div class="d-flex flex-column flex-md-row">

                <!-- Entering student name -->
                <div class="col col-md-4 mt-2 ">
                    <div class="form-group">
                        <label for="student-name"><strong>Student Name</strong></label>
                        <input type="text" class="form-control" id="student-name" aria-describedby="studentNameHelp" placeholder="Enter your name">
                        <small id="studentNameHelp" class="form-text text-muted">Enter your full name</small>
                    </div>
                </div>
                <!-- Entering student dob -->
                <div class="col  col-md-4 mt-2">
                    <div class="form-group">
                        <label for="dob"><strong>Date of birth</strong></label>
                        <input type="date" class="form-control" id="dob" aria-describedby="studentDOBHelp" placeholder="Enter your Date of birth">
                        <small id="studentDOBHelp" class="form-text text-muted">Enter your Date of birth</small>
                    </div>
                </div>
                <!-- Entering student sex -->
                <div class="container mt-md-4 height-md-8 mt-2">
                    <label><strong>SEX</strong></label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                                <label class="form-check-label" for="others">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row">
                <div class="col col-md-4 mt-2">
                    <div class="form-group">
                        <label for="guardian-name"><strong>Guardian Name</strong></label>
                        <input type="text" class="form-control" id="guardian-name" aria-describedby="guardianNameHelp" placeholder="Enter your name">
                        <small id="guardianNameHelp" class="form-text text-muted">Enter Your Guardian Name Here</small>
                    </div>
                </div>
                <div class="col  col-md-4 mt-2">
                    <div class="form-group">
                        <label for="contact"><strong>Contact</strong></label>
                        <input type="text" class="form-control" id="contact" aria-describedby="studentContactHelp" placeholder="Enter Your Contact Number">
                        <small id="studentContactHelp" class="form-text text-muted">Enter Your Contact Number</small>
                    </div>
                </div>
                <div class="container mt-md-4 height-md-8 mt-2">
                </div>



        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
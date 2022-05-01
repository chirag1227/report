<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Submission form</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row register">
            <h1>Project Submission</h1>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 reg">
                <form class="form-horizontal hr" action="/submitreport" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                <label class="control-label col-sm-3" for="title">Project Members:</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="members" name="members" placeholder="Enter the names" required>
                    </div>
                 </div>
                 <label class="control-label col-sm-3" for="title">Project Topic:</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="topic" name="topic" placeholder="Enter project topic" required>
                    </div>
                    <div class="form">
                    <label class="control-label col-sm-3" for="title">Project summary:</label>
                    <div class="col-sm-8"> <textarea placeholder="Project summary...." class="form-control" id="title" name="title" required></textarea>

                    </div>
                </div>
                <div class="form">
                    <label class="control-label col-sm-3" for="title">Upload project:</label>
                    <div class="col-sm-8"><input type="file" name="file"  class="form-control" id="word" required>
                        <span>
                            @error('file')
                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form">
                    <label class="control-label col-sm-3" for="title">Project Github URL :</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="url" name="url" placeholder="Enter Github URL">
                    </div>
                </div>
                <div class="form">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>
                 </div>
</div>
</div>
</body>
</html>

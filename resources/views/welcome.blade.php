<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment It!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #fff
        }

        .container {
            background-color: #eef2f5;
            width: 400px
        }

        .name {
            font-size: 13px;
            font-weight: 500;
            margin-left: 6px;
            color: #56575b
        }

        .comment {
            font-size: 13px;
            font-weight: 500;
            color: #56575b
        }

        .shadowed-box {
            width: 350px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 10px 10px 5px #aaaaaa
        }
    </style>
</head>
<body>
    <div class="container justify-content-center mt-5 border-left border-right pb-3 rounded pt-1">
        <div class="d-flex justify-content-center pt-3 pb-2"> <input type="text" name="name" placeholder="Name" class="form-control"> </div>
        <div class="d-flex justify-content-center pt-3 pb-2"> <textarea name="comment" placeholder="Comment" class="form-control"></textarea> </div>
        <div class="d-flex justify-content-center pt-3 pb-2"> <button type="submit" class=" btn btn-success">Submit</button></div>
        <div id="comment-section" class="d-flex justify-content-center py-2">
            <div class="shadowed-box py-2 px-2"> <span class="comment">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat tempora illo incidunt quo iste, magnam aspernatur quasi labore! Quod, autem.</span>
                <div class="d-flex justify-content-between py-1 pt-2">
                    <div><span class="name">John Doe</span></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
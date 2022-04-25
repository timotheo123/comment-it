<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment It!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
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
            <div class="pt-3 pb-2"> <p>Loading comments...</p></div>
        </div>
    </div>
    <script>
        $(function(){
            get_list().then((data) => refresh_comment_section(data));
        });

        function get_list(){
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: "list",
                    method: "GET",
                    dataType: "JSON",
                    success: function(response){
                        resolve(response.data);
                    },
                    error: function(){
                        alert("Error occurred. Please try again.");
                        reject(false);
                    }
                });
            });
        }

        function refresh_comment_section(list){
            $("#comment-section").empty();
            let str = list.length > 0 ? "" : `<div class="pt-3 pb-2"> <p>No comments yet.</p></div>`;

            for(i in list){
                str += comment_card(list[i].name, list[i].comment);
            }

            $("#comment-section").html(str);
        }

        function comment_card(name, comment){
            return `<div class="shadowed-box py-2 px-2"> 
                        <span class="comment">${comment}</span>
                        <div class="d-flex justify-content-between py-1 pt-2">
                            <div><span class="name">- ${name}</span></div>
                        </div>
                    </div>`;
        }
    </script>
</body>
</html>
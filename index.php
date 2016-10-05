<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
</head>
<body>
<script type="text/javascript">
$(function(){
  $("#myform").ajaxForm({
    beforeSend:function(){
      $(".progress").show();
    },
    uploadProgress:function(event, position, total, percentcomplete){
      $(".progress-bar").width(percentcomplete + "%");
      $("#progress-text").html(percentcomplete + "%").appendTo("#progress-text");
      if(percentcomplete == 100){
        alert("Upload Complete");
      }
    },
    success:function(){
      $(".progress").hide();
    },
    complete:function(){}
  });
  $(".progress").hide();
});
</script>

<div class="container">
  <h2>Animated Progress Bar</h2>
  <p>The .active class animates the progress bar:</p>
  <form action="upload.php" method="post" enctype="multipart/form-data" id="myform">
    <label for="file">FileName:</label>
    <input class="from-control" type="file" name="file" id="file" required><br>
    <input class="btn btn-info" type="submit" name="upload_btn" value="upload">

    <br><br>
    <div class="progress" style="width:100%">
      <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:0%">
        <div id="progress-text">0%</div>
      </div>
    </div>
  </form>
</div>

</body>
</html>


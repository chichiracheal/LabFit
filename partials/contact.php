<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.min.css">
    <title>Gui</title>
</head>
<body>
<div class="col-md-6 mb-3 text-light">
		<div class="contactForm">
		<form action="#" method="post" id="form" >
                   
				<h2>Send Message</h2>
                <div id="hello"></div>
				<div class="inputBox">
					<input type="text" name="fullname" >
					<span>Full Name</span>
				</div>
				<div class="inputBox">
					<input type="email" name="email" >
					<span>Email</span>
				</div>
				<div class="inputBox">
					<textarea name="message" id="" cols="5" rows="5"></textarea>
					<span>Type your Message here...</span>
				</div>
			
				<div class="mb-3">
                    <button type="submit" class="btn btn-primary" id="submit" name="submit" value="1">Send Message</button>
                </div>
			</form>
		</div>
		</div>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(function(){
            $("#form").submit(function(event){
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "server.php",
                    method: "post",
                    data: formData,
                    dataType: "json",
                    success: function(res){
                       if(res.success==true){
                        $("#hello").addClass("alert");
                        $("#hello").removeClass("alert-danger");
                        $("#hello").addClass("alert-success");
                        $("#hello").html(res.message);

                       }else{
                        $("#hello").addClass("alert");
                        $("#hello").removeClass("alert-success");
                        $("#hello").addClass("alert-danger");
                        $("#hello").html(res.message);

                       }
                    }
                })
            })
        })
    </script>
</body>
</html>
<?php
include("header.php")
?>
<style type="text/css">
	.text-small{
		font-size: 12px;
	}
</style>

<div class="container mt-5" style="min-height: 600px;">
	<div class="row mt-5">
		<div class="col-md-6 offset-md-3">
			<form action="save.php" method="post">
			<div class="card">
				<div class="card-header">
					<h5>User Registraion</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input id="full_name" name="full_name" type="text" class="form-control">
						<p id="full_name_msg" class="text-danger text-small"></p>
					</div>
					<div class="form-group">
						<label>Username/Email</label>
						<input id="username" type="text" name="username" class="form-control">
						<p id="username_msg" class="text-danger text-small"></p>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input id="pass" type="password" name="pass" class="form-control">
						<p id="pass_msg" class="text-danger text-small"></p>
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input id="re_pass" type="password" name="re_pass" class="form-control">
						<p id="re_pass_msg" class="text-danger text-small"></p>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea id="add" name="add" class="form-control"></textarea>
						<p id="add_msg" class="text-danger text-small"></p>
					</div>
					<div class="form-group">
						<label>City</label>
						<select id="city" class="form-control" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Mumbai</option>
							<option>Bhopal</option>
							<option>Pune</option>
							<option>Delhi</option>
						</select>
						<p id="city_msg" class="text-danger text-small"></p>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<br />
						Male <input id="male" type="radio" name="gender" value="male">
						Female <input id="female" type="radio" name="gender" value="female">
						<p id="gender_msg" class="text-danger text-small"></p>
					</div>
				<div class="form-group">
						<label>Contact</label>
						<input type="text" id="contact" name='contact' class="form-control">
						<p id="contact_msg" class="text-danger text-small"></p>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" id="submit" value="Signup" class="btn btn-success">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#username").blur(function(){
			var a = $(this).val();
			var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			
			if(a != "" && re.test(a) == true)
			{
				$.ajax({
					url : "check_username.php",
					type : "post",
					data : { username : a },
					success : function(rec){
						//alert(rec);
						if(rec==1)
						{
							$("#username").addClass("is-invalid");
							$("#username_msg").html("This Username not avalable");	
						}
						else
						{
							$("#username").removeClass("is-invalid");
							$("#username_msg").html("");
						}
					}
				})
			}
		})


		$("#submit").click(function(){
			
			var a = $("#full_name").val();
			var b = $("#username").val();
			var c = $("#pass").val();
			var d = $("#re_pass").val();
			var e = $("#city").val();

			var f = $("#male").is(":checked");
			/*
				if your click on male radio button then f = true otherwise f = false
			*/
			var g = $("#female").is(":checked");


			var h = $("#contact").val();
			var i = $("#add").val();


			var check = true;


			if(a==""){
				$("#full_name").addClass("is-invalid");
				$("#full_name_msg").html("Insert Your Full Name");
				check = false;
			}
			else{
				$("#full_name").removeClass("is-invalid");
				$("#full_name_msg").html("");
			}
			if(b==""){
				$("#username").addClass("is-invalid");
				$("#username_msg").html("Insert Your Username/Email");
				check = false;
			}
			else{
				$("#username_msg").html("");
				var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
				if(re.test(b) == false)
				{
					check = false;
					$("#username").addClass("is-invalid");
					$("#username_msg").html("Your Username/Email is not Correct");
				}
				else{
					$("#username").removeClass("is-invalid");
					$("#username_msg").html("");
				}
			}
			if(c==""){
				check = false;
				$("#pass").addClass("is-invalid");
				$("#pass_msg").html("Insert Your Password");
			}
			else{

				$("#pass").removeClass("is-invalid");
				$("#pass_msg").html("");
			}
			if(d==""){
				check = false;
				$("#re_pass").addClass("is-invalid");
				$("#re_pass_msg").html("Insert Your Re-Password");
			}
			else{

				$("#re_pass_msg").html("");
				if(c != d)
				{
					$("#re_pass").addClass("is-invalid");
					check = false;
					$("#re_pass_msg").html("Your Password and Re-Password is not Matched");

				}
				else{

					$("#re_pass").removeClass("is-invalid");
				$("#re_pass_msg").html("");
				}

			}
			if(e=="Select"){
					$("#city").addClass("is-invalid");
				check = false;
				$("#city_msg").html("Select Your City");
			}
			else{

					$("#city").removeClass("is-invalid");
				$("#city_msg").html("");
			}
			if(i==""){
					$("#add").addClass("is-invalid");
				check = false;
				$("#add_msg").html("Inset Your Full Address");
			}
			else{

					$("#add").removeClass("is-invalid");
				$("#add_msg").html("");
			}
			if(h==""){
				check = false;
					$("#contact").addClass("is-invalid");
				$("#contact_msg").html("Insert Your Contact Number");
			}
			else{

				$("#contact_msg").html("");
				// isNaN()   -- is not a number
				if(isNaN(h)==true){
					check = false;
					$("#contact").addClass("is-invalid");
					$("#contact_msg").html("Insert Numbers only");
				}
				else{

					$("#contact_msg").html("");
					if(h.length != 10){
						$("#contact").addClass("is-invalid");
						check = false;
						$("#contact_msg").html("Insert 10 Digit Numbers");
					}
					else{
						$("#contact").removeClass("is-invalid");
						$("#contact_msg").html("");
					}
				}

			}
			if(f == false && g == false){
				check = false;
				$("#male").addClass("is-invalid");
				$("#female").addClass("is-invalid");
				$("#gender_msg").html("Select Your Gender");
			}
			else{
				$("#male").removeClass("is-invalid");
				$("#female").removeClass("is-invalid");
				$("#gender_msg").html("");
			}

			return check;


			
		});
	});
</script>
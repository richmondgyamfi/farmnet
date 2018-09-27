<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</head>
<body>
	
	<div class="container col-md-4 border border-dark" style=" background-color: #AAAAAA; margin-top: 10px;" id="Registration">
		<h2 class="text-center">Sign Up</h2>
        <form role="form" class="form-horizontal">
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">
                Name</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control">
                            <option>Mr.</option>
                            <option>Ms.</option>
                            <option>Mrs.</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Full Name" />
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">
                Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Email" />
            </div>
        </div>
        <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label">
                Mobile</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">
                Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Password" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-5 control-label">
                Re-Enter Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="repassword" placeholder="Re-Enter Password" />
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm-2">
            </div> -->
            <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-primary btn-sm">
                    Save & Continue</button>
                <button type="button" class="btn btn-default btn-sm data-dismiss" data-dismiss="modal" aria-hidden="true">
                    Cancel</button>
            </div>
            <div class="col-sm-12 text-center">
            	<p>Already a User? <a href="index.php">Login</a></p>
            </div>
            <div class="col-sm-12 text-center">
            	<p><a href="index.php">Back</a> to home page</p>
            </div>
        </div>
        </form>
    </div>
</body>
</html>
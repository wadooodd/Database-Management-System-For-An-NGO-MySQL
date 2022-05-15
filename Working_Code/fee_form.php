<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="p-3 mb-2 bg-warning text-dark">
<head><title>Fees Form</title></head>
<body>
    <H1 align="center">HAMARAY BACHAY</H1>
    <H1 align="center">Fee Submission FORM</H1>
</body>
<hr>

<br>

<form method='post' action="fee_insert.php">
    <div>
        <b>Fee ID: </b><input type="text" name="feeid" placeholder="Enter Fee ID" class='form-control' required>        
    </div>
    <div>
        <b>Reason: </b><input type="text" name="reason" placeholder="Enter Reason For Discount" class='form-control' required>        
    </div>
    <div>
        <b>Fee Amount: </b><input type="text" name="fee" placeholder="Enter Fee amount" class='form-control' required>        
    </div>
    <div>
        <b>Discount Amount: </b><input type="text" name="discount" placeholder="Enter Discount Amount" class='form-control' required>        
    </div>
   
   
    <br>
    <button type="submit" class="btn btn-danger active">Submit</button>
</form>
</div>
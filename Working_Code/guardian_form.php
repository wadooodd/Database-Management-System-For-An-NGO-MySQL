<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="p-3 mb-2 bg-warning text-dark">
<head><title>Guardian Information Form</title></head>
<body>
    <H1 align="center">HAMARAY BACHAY</H1>
    <H1 align="center">GUARDIAN INFORMATION FORM</H1>
</body>
<hr>

<br>

<form method='post' action="guardian_insert.php">
    <div>
        <b>Class ID: </b><input type="text" name="Guardianid" placeholder="Enter Guardian ID" class='form-control' required>        
    </div>
    
    <b>Gender: </b><br>
    <input type="radio" name="Gender" value="Male">Male <br>
    <input type="radio" name="Gender" value="Female">Female 
<br>


    <div>
        <b>Reason of Parent's Absence: </b><input type="text" name="Reason_Absence" placeholder="Enter Reason of Absence" class='form-control' required>        
    </div>
   
   
    <br>
    <button type="submit" class="btn btn-danger active">Submit</button>
</form>
</div>
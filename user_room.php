<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="jquery-3.3.1.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
	
    <title>Personnal Space</title>
  </head>
  
  <body>
  
	<button>Create new CV</button>
	<button>View selected CV</button>
	<button>Update selected CV</button>
	<button>Delete selected CV</button>
	
	<table id="myTable" class="table table-border">
    <thead>
      <tr>
        <th>Title</th>
        <th>Updated On</th>
      </tr>
    </thead>
    <tbody>
      <tr id="clickable-row">
        <td>CV1</td>
        <td>JSP</td>
      </tr>
      <tr id="clickable-row">
        <td>CV2</td>
        <td>Un jour</td>
      </tr>
    </tbody>
  </table>
	
	<script>
	
			/* //This does the same in JS
		document.getElementById('clickable-row').onclick = function(event) {		
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				console.log("has");
			} else {
				$(this).addClass('active');
				console.log("hasn't");
			}
		}
		*/
		//Than this in jquery
		$('#myTable').on('click', '#clickable-row', function(event) {
			$(this).addClass('active').siblings().removeClass('active');
		});
	</script>
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include "heddss.php";
echo "</br>";
?>

<body>
<div class="container">
	<br/>
	<h3 class="text-center">Deleting Employees</h3>
	<br/>
	<div align="right" style="margin_bottom:5px">
		<button type="button" name="add_button"
  	    class="btn btn-warning btn-xs edit " id="add_button" onclick=" $('#bobo').show()">Add</button></td>
  	
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>User Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Gender</th>
					<th>Occupation</th>
					
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		 </table>
	</div>
</div>
   
</body>
</html>

<!--testing mordal-->
<div id="bobo" style="width:30%;margin-left: 20%; display: none;">
  
			<form method="post" id="api-crud-form">
				<div class="modal-header">
					<button type="button" class="close"
					data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Data</h4> 
				</div>
				
					<div class="form-group">
						<label>First Name</label>
						<input type=" text" name="first_name" id="first_name" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type=" text" name="quantitys" id="quantitys" class="form-control"/>
					</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info" id="button_action" name="submit" value="insert">Insert
					</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close
					</button>
				</div>
				
			</form>
		</div>

<script type="text/javascript">

	//this function runs automatical after receiving data
	$(document).ready(function(){

		fetch_data();  //this function fetch data from Fetch.php
		addingData(); //function calling on page load
		function fetch_data(){
        
        $.ajax({
        	url:"getData.php",
        	success:function(data){
        		$('tbody').html(data);//this call table body from fetch.php and render results
        	}
        })
		}

		function addingData(){

			var form_data=$(this).serialize();//this convert form data into url string
			$.ajax({
				url:"action.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					fetch_data()// we call the fetch all function
                
                if(data == 'insert'){
                	alert('data has been inserted');
                }
				}
			});
		
	}
        
	});
</script>


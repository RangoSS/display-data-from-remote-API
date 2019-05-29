<?php
// this part displays data on the website
$api_url="http://localhost/REST_API_PRACTICE/api/test_api.php?action=fetch_all";

$client=curl_init($api_url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response=curl_exec($client);
$result=json_decode($response);


$output='';

  
if(count($result) > 0){


  foreach ($result as $row) {
  	
  	 $output .='
  	 <tr>
  	     <td>'. $row->first_name .'</td>
  	      <td>'. $row->last_name.'</td>
          <td>'. $row->user_name.'</td>
          <td>'. $row->address.'</td>
          <td>'. $row->contact.'</td>
          <td>'. $row->gernder.'</td>
          <td>'. $row->occupation.'</td>
  	      <td> <button type="button" name="edit"
  	 class="btn btn-warning btn-xs edit" id="'.$row->user_id.'">Edit</button></td>
  	 <td><button type="button" name="delete"
  	 class="btn btn-warning btn-xs delete" id="'.$row->user_id.'">Delete</button></td> 
  	     
  	 </tr>
  	 ';
  }
 
}
else{
   $output .= '
   <tr>
   <td colspan="4" align="center"> No data found</td>
   </tr>';
}
 echo $output; //this is for ajax request
?>







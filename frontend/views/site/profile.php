
<link rel="stylesheet" type="text/css" href="css/site2.css">
<link rel="stylesheet" type="text/css" href="/advanced/frontend/web/assets/6fd2b1c7/css/bootstrap.css">
<script type="text/javascript" src="/advanced/frontend/web/assets/44c2529/jquery.js"></script>

<script type="text/javascript" src="/advanced/frontend/web/assets/6fd2b1c7/js/bootstrap.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('table tbody tr').click(function(){
    	$('table tbody tr').removeClass('Active');
        ($(this).addClass('Active'));

    });
});
</script>

<div class="profilePage">
<div class="container">
	<div class="row">
		<div class="profileHead col-lg-12">
			<div class="col-lg-6">
				<a href="#"><h5>myname@gmail.com</h5></a>
			</div>
				<div class="col-lg-2">
					<a href="#"><h5>my accoount</h5></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><h5>Hi, user</h5></a>
				</div>

				<div class="col-lg-2">
					<a href="#"><h5>logout</h5></a>
				</div>


		</div>
		<div class="profileContent col-lg-12">

			<div class=" leftWig col-lg-2 col-lg-offset-1">
				<h3>User Name</h3>
				<div class="profilePic">
					<img src="css/images/testimonial1.png" style="height: 150px; margin-left: 13px;">

				</div>
				<h4>Myreal Name</h4>
				<h4>myemail.gmail.com</h4>
				<h4>0977-01-734343</h4>
				<input type="submit" class="btn btn-primary" value="Edit Profile">
			</div>
			<div class="leftWig col-lg-8 col-lg-offset-1">
			
				 <ul class="nav nav-tabs nav-justified">
				    
				    <li><a data-toggle="tab" id="profileTab1" href="#menu1">ACTIVE POLICIES</a></li>
				    <li><a data-toggle="tab" id="profileTab2" href="#menu2">CLAIMS</a></li>
				    <li><a data-toggle="tab" id="profileTab3" href="#menu3">CLAIMS</a></li>
				    <li><a data-toggle="tab" id="profileTab4" href="#menu3">WISH LISTS</a></li>
				    <li><a data-toggle="tab" id="profileTab5" href="#menu3">EXPIRED POLICIES</a></li>

				  </ul>
				 <div class="tab-content">
   
						    <div id="menu1" class="profTab tab-pane fade active in">
						      <div class="table-responsive">          
						  			<table class="table">
						  				  	<thead>

										      <tr>
										        <th>Policy ID</th>
										        <th>Items</th>
										        <th>Issue Date</th>
										        <th>Expire Date</th>
										        
										      </tr>
						    				</thead>
						    			<tbody>
										      <tr>
										        <td class="example">1</td>
										        <td>Anna</td>
										        <td>Pitt</td>
										        <td>35</td>
										        
														      </tr>
										       <tr>
										        <td>1</td>
										        <td>Anna</td>
										        <td>Pitt</td>
										        <td>35</td>
										        
										      </tr>
										       <tr>
										        <td>1</td>
										        <td>Anna</td>
										        <td>Pitt</td>
										        <td>35</td>
										        
										      </tr>
										       <tr>
										        <td>1</td>
										        <td>Anna</td>
										        <td>Pitt</td>
										        <td>35</td>
										        
										      </tr>
						    			</tbody>
						 			 </table>
											  <input type="submit" class="col-lg-offset-2 btn btn-primary" value="Claims"/>
											  <input type="submit" class="btn btn-primary" value="Renew"/>
											  <input type="submit" class="btn btn-primary" value="View Policies"/>
						 		 </div>
						   	 </div>
									    <div id="menu2" class="tab-pane fade">
									      <h3>Menu 2</h3>
									      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
									    </div>
									    <div id="menu3" class="tab-pane fade">
									      <h3>Menu 3</h3>
									      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									    </div>
 				 </div>

			</div>
		</div>
		<div class="proFooter">
			<p>
				Some policies may require physical checkups or surveys – you can co-ordinate  the whole process online on your  ‘my policy’ portal or one of our 
agents can take care of the whole  process offline.
			</p>
		</div>
	</div>

</div>
</div>
<!DOCTYPE html>
<html>
<head>
	<title>Congress Information</title>
	<style type="text/css">
		a{
    		text-decoration: underline;
    		color: blue;
		}
		a:hover{
			cursor: pointer;
		}
		.surround{
			border-style: solid;
			border-width: 1px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1 align="center">Congress Information Search</h1>
	<div align="center">
		<form name="input" id="input" action="" method="post">
			<fieldset>
				Congress Database
				<select onchange="keywordGen()" name="database" id="database">
					<option disabled 
						<?php
							if(!isset($_POST["key"]) || $_POST["key"] == ""){ ?>
								selected value
							<?php 
							}; 
						?>
						
					>Select Your Option</option>
					<option
						<?php
							if(isset($_POST["database"])){ 
								if($_POST["database"] == "Legislators"){ 
							?>
									selected value = "Legislators"
							<?php 
								};
							}; 
						?>
					>Legislators</option>
					<option
						<?php
							if(isset($_POST["database"])){ 
								if($_POST["database"] == "Committees"){ 
							?>
									selected value = "Committees"
							<?php 
								};
							}; 
						?>
					>Committees</option>
					<option
						<?php
							if(isset($_POST["database"])){ 
								if($_POST["database"] == "Bills"){ 
							?>
									selected value = "Bills"
							<?php 
								};
							}; 
						?>
					>Bills</option>
					<option
						<?php
							if(isset($_POST["database"])){ 
								if($_POST["database"] == "Amendments"){ 
							?>
									selected value = "Amendments"
							<?php 
								};
							}; 
						?>
					>Amendments</option>
				</select>
				<br>
				Chamber:
				<input type="radio" name="chamber" value="senate" 
					<?php if(!isset($_POST["chamber"]) || $_POST["chamber"] == "" || $_POST["chamber"] == "senate"){?>
							checked
					<?php }; ?>
				>
				Senate
				<input type="radio" name="chamber" value="house"
					<?php if(isset($_POST["chamber"]) && $_POST["chamber"] == "house"){?>
							checked
					<?php }; ?>
				>
				House
				<br>
				<span id="keyword">
					<?php
							if(!isset($_POST["key"]) || $_POST["key"] == ""){ ?>
								Keyword*
						<?php 
							}; 
						?>
					<?php
						if(isset($_POST["database"])){ 
							if($_POST["database"] == "Legislators"){ 
					?>
								State/Representative*
						<?php 
							};
						}; 
					?>
					<?php
						if(isset($_POST["database"])){ 
							if($_POST["database"] == "Committees"){ 
					?>
									Committee ID*
						<?php 
							};
						}; 
					?>
					<?php
						if(isset($_POST["database"])){ 
							if($_POST["database"] == "Bills"){ 
					?>
									Bill ID*
						<?php 
							};
						}; 
					?>
					<?php
						if(isset($_POST["database"])){ 
							if($_POST["database"] == "Amendments"){ 
					?>
									Amendment ID*
						<?php 
							};
						}; 
					?>
				</span>
				<input type="text" name="key" id="key"
					<?php
						if(isset($_POST["key"])){ ?>
							value = "<?php echo $_POST["key"] ?>"
						<?php }; 
					?>					
				>
				<br>
				<input type="button" name="complete" value="Search" onclick="validate()">
				<input type="button" name="clear" value="Clear" onclick="formReset()">
				<br><br>
				<a href="http://sunlightfoundation.com/">Powered By Sunlight Foundation</a>

			</fieldset>
		</form>
	</div>

	<?php
		if(isset($_POST["key"]) && $_POST["key"] != ""){ 
	?>
		<?php
			if($_POST["database"] == "Legislators"){ 
		?>
			<?php
				$state = 0;
				if(strcasecmp(trim($_POST["key"]), "Alabama") == 0){
					$state = 1;
					$state_code = "AL";
				}
				if(strcasecmp(trim($_POST["key"]), "Alaska") == 0){
					$state = 1;
					$state_code = "AK";
				}
				if(strcasecmp(trim($_POST["key"]), "Arizona") == 0){
					$state = 1;
					$state_code = "AZ";
				}
				if(strcasecmp(trim($_POST["key"]), "Arkansas") == 0){
					$state = 1;
					$state_code = "AR";
				}
				if(strcasecmp(trim($_POST["key"]), "California") == 0){
					$state = 1;
					$state_code = "CA";
				}
				if(strcasecmp(trim($_POST["key"]), "Colorado") == 0){
					$state = 1;
					$state_code = "CO";
				}
				if(strcasecmp(trim($_POST["key"]), "Connecticut") == 0){
					$state = 1;
					$state_code = "CT";
				}
				if(strcasecmp(trim($_POST["key"]), "Delaware") == 0){
					$state = 1;
					$state_code = "DE";
				}
				if(strcasecmp(trim($_POST["key"]), "District Of Columbia") == 0){
					$state = 1;
					$state_code = "DC";
				}
				if(strcasecmp(trim($_POST["key"]), "Florida") == 0){
					$state = 1;
					$state_code = "FL";
				}
				if(strcasecmp(trim($_POST["key"]), "Georgia") == 0){
					$state = 1;
					$state_code = "GA";
				}
				if(strcasecmp(trim($_POST["key"]), "Hawaii") == 0){
					$state = 1;
					$state_code = "HI";
				}
				if(strcasecmp(trim($_POST["key"]), "Idaho") == 0){
					$state = 1;
					$state_code = "ID";
				}
				if(strcasecmp(trim($_POST["key"]), "Illinois") == 0){
					$state = 1;
					$state_code = "IL";
				}
				if(strcasecmp(trim($_POST["key"]), "Indiana") == 0){
					$state = 1;
					$state_code = "IN";
				}
				if(strcasecmp(trim($_POST["key"]), "Iowa") == 0){
					$state = 1;
					$state_code = "IA";
				}
				if(strcasecmp(trim($_POST["key"]), "Kansas") == 0){
					$state = 1;
					$state_code = "KS";
				}
				if(strcasecmp(trim($_POST["key"]), "Kentucky") == 0){
					$state = 1;
					$state_code = "KY";
				}
				if(strcasecmp(trim($_POST["key"]), "Louisiana") == 0){
					$state = 1;
					$state_code = "LA";
				}
				if(strcasecmp(trim($_POST["key"]), "Maine") == 0){
					$state = 1;
					$state_code = "ME";
				}
				if(strcasecmp(trim($_POST["key"]), "Maryland") == 0){
					$state = 1;
					$state_code = "MD";
				}
				if(strcasecmp(trim($_POST["key"]), "Massachusetts") == 0){
					$state = 1;
					$state_code = "MA";
				}
				if(strcasecmp(trim($_POST["key"]), "Michigan") == 0){
					$state = 1;
					$state_code = "MI";
				}
				if(strcasecmp(trim($_POST["key"]), "Minnesota") == 0){
					$state = 1;
					$state_code = "MN";
				}
				if(strcasecmp(trim($_POST["key"]), "Mississippi") == 0){
					$state = 1;
					$state_code = "MS";
				}
				if(strcasecmp(trim($_POST["key"]), "Missouri") == 0){
					$state = 1;
					$state_code = "MO";
				}
				if(strcasecmp(trim($_POST["key"]), "Montana") == 0){
					$state = 1;
					$state_code = "MT";
				}
				if(strcasecmp(trim($_POST["key"]), "Nebraska") == 0){
					$state = 1;
					$state_code = "NE";
				}
				if(strcasecmp(trim($_POST["key"]), "Nevada") == 0){
					$state = 1;
					$state_code = "NV";
				}
				if(strcasecmp(trim($_POST["key"]), "New Hampshire") == 0){
					$state = 1;
					$state_code = "NH";
				}
				if(strcasecmp(trim($_POST["key"]), "New Jersey") == 0){
					$state = 1;
					$state_code = "NJ";
				}
				if(strcasecmp(trim($_POST["key"]), "New Mexico") == 0){
					$state = 1;
					$state_code = "NM";
				}
				if(strcasecmp(trim($_POST["key"]), "New York") == 0){
					$state = 1;
					$state_code = "NY";
				}
				if(strcasecmp(trim($_POST["key"]), "North Carolina") == 0){
					$state = 1;
					$state_code = "NC";
				}
				if(strcasecmp(trim($_POST["key"]), "North Dakota") == 0){
					$state = 1;
					$state_code = "ND";
				}
				if(strcasecmp(trim($_POST["key"]), "Ohio") == 0){
					$state = 1;
					$state_code = "OH";
				}
				if(strcasecmp(trim($_POST["key"]), "Oklahoma") == 0){
					$state = 1;
					$state_code = "OK";
				}
				if(strcasecmp(trim($_POST["key"]), "Oregon") == 0){
					$state = 1;
					$state_code = "OR";
				}
				if(strcasecmp(trim($_POST["key"]), "Pennsylvania") == 0){
					$state = 1;
					$state_code = "PA";
				}
				if(strcasecmp(trim($_POST["key"]), "Rhode Island") == 0){
					$state = 1;
					$state_code = "RI";
				}
				if(strcasecmp(trim($_POST["key"]), "South Carolina") == 0){
					$state = 1;
					$state_code = "SC";
				}
				if(strcasecmp(trim($_POST["key"]), "South Dakota") == 0){
					$state = 1;
					$state_code = "SD";
				}
				if(strcasecmp(trim($_POST["key"]), "Tennessee") == 0){
					$state = 1;
					$state_code = "TN";
				}
				if(strcasecmp(trim($_POST["key"]), "Texas") == 0){
					$state = 1;
					$state_code = "TX";
				}
				if(strcasecmp(trim($_POST["key"]), "Utah") == 0){
					$state = 1;
					$state_code = "UT";
				}
				if(strcasecmp(trim($_POST["key"]), "Vermont") == 0){
					$state = 1;
					$state_code = "VT";
				}
				if(strcasecmp(trim($_POST["key"]), "Virginia") == 0){
					$state = 1;
					$state_code = "VA";
				}
				if(strcasecmp(trim($_POST["key"]), "Washington") == 0){
					$state = 1;
					$state_code = "WA";
				}
				if(strcasecmp(trim($_POST["key"]), "West Virginia") == 0){
					$state = 1;
					$state_code = "WV";
				}
				if(strcasecmp(trim($_POST["key"]), "Wisconsin") == 0){
					$state = 1;
					$state_code = "WI";
				}
				if(strcasecmp(trim($_POST["key"]), "Wyoming") == 0){
					$state = 1;
					$state_code = "WY";
				}
				$full_name = explode(" ", trim($_POST["key"]));
				$count_name = count($full_name);
				if($state == 1){
					$api_call = "http://congress.api.sunlightfoundation.com/legislators?chamber=".$_POST["chamber"]."&state=".$state_code."&per_page=all&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					$legislator_json = json_decode (file_get_contents($api_call), true);
					if ($legislator_json["count"] == 0) { ?>
						 <div align="center">The API returned zero results for the request</div>
					<?php }
					else{ ?>
							
							<br>
							<div id="table1Parent" align="center">
							<table align="center" border=2 id="table1">
								<tr align="center">
									<th>Name</th>
									<th>State</th>
									<th>Chamber</th>
									<th>Details</th>
								</tr>
								<?php
									for ($i = 0; $i < $legislator_json["count"]; $i++) { 
								?>
									<tr align="center">
										<td align="left">	<?php echo $legislator_json["results"][$i]["first_name"]." ".$legislator_json["results"][$i]["last_name"] ?>
										<td>	<?php echo $legislator_json["results"][$i]["state_name"] ?>
										<td>	<?php echo $legislator_json["results"][$i]["chamber"] ?>
										
										<td>	
												<a onclick="LegislatorTable1Generate('<?php echo $legislator_json["results"][$i]["bioguide_id"] ?>','<?php echo $legislator_json["results"][$i]["first_name"]." ".$legislator_json["results"][$i]["last_name"] ?>','<?php echo $legislator_json["results"][$i]["term_end"] ?>','<?php echo $legislator_json["results"][$i]["website"] ?>','<?php echo $legislator_json["results"][$i]["office"] ?>','<?php echo $legislator_json["results"][$i]["facebook_id"] ?>','<?php echo $legislator_json["results"][$i]["twitter_id"] ?>')">View Details</a>
									</tr>
								<?php				
								
									};
								?>


							</table>
							</div>

					<?php error_reporting(0);
					};
				}

				if ($state == 0 && $count_name == 1) {
					$api_call = "http://congress.api.sunlightfoundation.com/legislators?chamber=".$_POST["chamber"]."&query=".trim($_POST["key"])."&per_page=all&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					error_reporting(0);
					$legislator_json = json_decode (file_get_contents($api_call), true);
					if ($legislator_json["count"] == 0) { ?>
						 <div align="center">The API returned zero results for the request</div>
					<?php }
					else{ ?>
							
							<br>
							<div id="table2Parent" align="center">
							<table align="center" border=2 id="table2">
								<tr align="center">
									<th>Name</th>
									<th>State</th>
									<th>Chamber</th>
									<th>Details</th>
								</tr>
								<?php
									for ($i = 0; $i < $legislator_json["count"]; $i++) { 
								?>
									<tr align="center">
										<td align="left">	<?php echo $legislator_json["results"][$i]["first_name"]." ".$legislator_json["results"][$i]["last_name"] ?>
										<td>	<?php echo $legislator_json["results"][$i]["state_name"] ?>
										<td>	<?php echo $legislator_json["results"][$i]["chamber"] ?>
										
										<td>	
												<a onclick="LegislatorTable2Generate('<?php echo $legislator_json["results"][$i]["bioguide_id"] ?>','<?php echo $legislator_json["results"][$i]["first_name"]." ".$legislator_json["results"][$i]["last_name"] ?>','<?php echo $legislator_json["results"][$i]["term_end"] ?>','<?php echo $legislator_json["results"][$i]["website"] ?>','<?php echo $legislator_json["results"][$i]["office"] ?>','<?php echo $legislator_json["results"][$i]["facebook_id"] ?>','<?php echo $legislator_json["results"][$i]["twitter_id"] ?>')">View Details</a>
									</tr>
								<?php				
								
									};
								?>


							</table>
							</div>

					<?php };
					
				}

				if($count_name == 2 && $state == 0){
					$api_call = "http://congress.api.sunlightfoundation.com/legislators?chamber=".$_POST["chamber"]."&query=".ucfirst(strtolower($full_name[0]))."&per_page=all&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					error_reporting(0);
					$legislator_json_1 = json_decode (file_get_contents($api_call), true);
					$api_call = "http://congress.api.sunlightfoundation.com/legislators?chamber=".$_POST["chamber"]."&query=".ucfirst(strtolower($full_name[1]))."&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					$legislator_json_2 = json_decode (file_get_contents($api_call), true);
					$index = 0;
					for ($j = 0; $j < $legislator_json_1["count"]; $j++){
						for ($k = 0; $k < $legislator_json_2["count"]; $k++){
							if($legislator_json_1["results"][$j]["bioguide_id"] == $legislator_json_2["results"][$k]["bioguide_id"]){
								$legislator_json["results"][$index] = $legislator_json_1["results"][$j];
								$index++;
							}
						}	
					}
					if ($index == 0) { ?>
						 <div align="center">The API returned zero results for the request</div>
					<?php }
					else{ ?>
							
							<br>
							<div id="table4Parent" align="center">
							<table align="center" border=2 id="table4">
								<tr align="center">
									<th>Name</th>
									<th>State</th>
									<th>Chamber</th>
									<th>Details</th>
								</tr>
								<?php
									for ($i = 0; $i < $index; $i++) { 
								?>
									<tr align="center">
										<td align="left">	<?php echo $legislator_json["results"][$i]["first_name"]." ".$legislator_json["results"][$i]["last_name"] ?>
										<td>	<?php echo $legislator_json["results"][$i]["state_name"] ?>
										<td>	<?php echo $legislator_json["results"][$i]["chamber"] ?>
										
										<td>	
												<a onclick="LegislatorTable4Generate('<?php echo $legislator_json["results"][$i]["bioguide_id"] ?>','<?php echo $legislator_json["results"][$i]["first_name"]." ".$legislator_json["results"][$i]["last_name"] ?>','<?php echo $legislator_json["results"][$i]["term_end"] ?>','<?php echo $legislator_json["results"][$i]["website"] ?>','<?php echo $legislator_json["results"][$i]["office"] ?>','<?php echo $legislator_json["results"][$i]["facebook_id"] ?>','<?php echo $legislator_json["results"][$i]["twitter_id"] ?>')">View Details</a>
									</tr>
								<?php				
								
									};
								?>


							</table>
							</div>

					<?php };

				}

				if($count_name > 2){ ?>
					<br><br>
					<div align="center">Please do not enter more than two keywords</div>  

				<?php }

		 }; ?>


		<?php
			if($_POST["database"] == "Committees"){ 	

					$api_call = "http://congress.api.sunlightfoundation.com/committees?committee_id=".strtoupper(trim($_POST["key"]))."&chamber=".$_POST["chamber"]."&per_page=all&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					error_reporting(0);
					$commit_json = json_decode (file_get_contents($api_call), true);
					if ($commit_json["count"] == 0) { 
				?>
						<div align="center">The API returned zero results for the request</div>
					<?php }
					else{ ?>
							<br>
							<table align="center" border=2>
								<tr align="center">
									<th>Committee ID</th>
									<th>Committee Name</th>
									<th>Chamber</th>
								</tr>
								<?php
									for ($i = 0; $i < $commit_json["count"]; $i++) { 
								?>
									<tr align="center">
										<td  align="left">	<?php echo $commit_json["results"][$i]["committee_id"] ?>
										<td>	<?php echo $commit_json["results"][$i]["name"] ?>
										<td>	<?php echo $commit_json["results"][$i]["chamber"] ?>
									</tr>
								<?php				
								
									};
								?>


							</table>

					<?php }; ?>
		
		<?php }; ?>

		<?php
			if($_POST["database"] == "Bills"){ 
					$api_call = "http://congress.api.sunlightfoundation.com/bills?bill_id=".strtolower(trim($_POST["key"]))."&chamber=".$_POST["chamber"]."&per_page=all&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					error_reporting(0);
					$bill_json = json_decode (file_get_contents($api_call), true);
					if ($bill_json["count"] == 0) {
					?>
						<div align="center">The API returned zero results for the request</div>
					<?php }
					else{ ?>
							<br><br>
							<div id="table3Parent" align="center">
							<br>
							<table align="center" border=2 id="table3">
								<tr align="center">
									<th>Bill ID</th>
									<th>Short Title</th>
									<th>Chamber</th>
									<th>Details</th>
								</tr>
								<?php
									for ($i = 0; $i < $bill_json["count"]; $i++) { 
								?>
									<tr align="center">
										<td align="left">	<?php echo $bill_json["results"][$i]["bill_id"]?>
										<td>	<?php echo $bill_json["results"][$i]["short_title"] ?>
										<td>	<?php echo $bill_json["results"][$i]["chamber"] ?>
										
										<td>	
												<a onclick="BillTableGenerate('<?php echo $bill_json["results"][$i]["bill_id"] ?>','<?php echo $bill_json["results"][$i]["short_title"] ?>','<?php echo $bill_json["results"][$i]["sponsor"]["title"]." ".$bill_json["results"][$i]["sponsor"]["first_name"]." ".$bill_json["results"][$i]["sponsor"]["last_name"] ?>','<?php echo $bill_json["results"][$i]["introduced_on"] ?>','<?php echo $bill_json["results"][$i]["last_version"]["version_name"].", ".$bill_json["results"][$i]["last_action_at"] ?>','<?php echo $bill_json["results"][0]["last_version"]["urls"]["pdf"] ?>')" >View Details</a>
									</tr>
								<?php				
								
									};
								?>


							</table>
							</div>

					<?php }; ?>
				
		<?php }; ?>

		<?php
			if($_POST["database"] == "Amendments"){ 
		
				$api_call = "http://congress.api.sunlightfoundation.com/amendments?amendment_id=".strtolower(trim($_POST["key"]))."&chamber=".$_POST["chamber"]."&per_page=all&apikey=02c8c6f17f4b4ed9a3fe76ad65e669f0";
					error_reporting(0);
					$amend_json = json_decode (file_get_contents($api_call), true);

					if ($amend_json["count"] == 0) { 
				?>
						<div align="center">The API returned zero results for the request</div>
					<?php }
					else{ ?>
							<br>
							<table align="center" border=2>
								<tr align="center">
									<th>Amendment ID</th>
									<th>Amendment Type</th>
									<th>Chamber</th>
									<th>Introduce on</th>
								</tr>
								<?php
									for ($i = 0; $i < $amend_json["count"]; $i++) { 
								?>
									<tr align="center">
										<td align="left">	<?php echo $amend_json["results"][$i]["amendment_id"] ?>
										<td>	<?php echo $amend_json["results"][$i]["amendment_type"] ?>
										<td>	<?php echo $amend_json["results"][$i]["chamber"] ?>
										<td>	<?php echo $amend_json["results"][$i]["introduced_on"] ?>
									</tr>
								<?php				
								
									};
								?>


							</table>

					<?php }; ?>
		
		<?php }; ?>

	<?php }; ?>

	<script type="text/javascript">
		function keywordGen(){
			text = document.getElementById("keyword");
			form = document.getElementById("database");
			value = form.value;
			if (form.value == "Legislators") {
				text.innerHTML = "State/Representative*";
			}
			if (form.value == "Committees") {
				text.innerHTML = "Committee ID*";
			}
			if (form.value == "Bills") {
				text.innerHTML = "Bill ID*";
			}
			if (form.value == "Amendments") {
				text.innerHTML = "Amendment ID*";
			}
			document.getElementById("key").value = "";
			
		}

		function formReset(){
			form = document.getElementById("input");
			
			database = document.getElementById("database");
			database.value = "Select Your Option";
			key = document.getElementById("key");
			key.value = "";
			text = document.getElementById("keyword");
			text.innerHTML = "Keyword*";
			<?php $_POST = array()?>
			form.reset();
			form.submit();
			location.href = "http://cs-server.usc.edu:18276/congress.php";
		}

		function validate(){
			database = document.getElementById("database");
			console.log(database.value);
			key = document.getElementById("key");
			console.log(key.value);
			var error = 0;
			errorMessage = "Please enter the following missing information: ";
			if (database.value == ""){
				error = 1;
				errorMessage += "Congress Database ";
			}
			if (key.value.trim() == ""){
				error = 1;
				errorMessage += "Keyword";
			}
			if(error == 1){
				alert(errorMessage);
			}
			else{
				document.getElementById("input").submit();
			}
		}

		function LegislatorDetailsGenerate(value){
			input = document.getElementById("legisDetails");
			input.value = value;
			validate();
		}

		function BillDetailsGenerate(value){
			input = document.getElementById("billDetails");
			input.value = value;
			validate();
		}

		function LegislatorTable1Generate(image, name, term, website, office, facebook, twitter){
			parent = document.getElementById("table1Parent");
			parent.className = "surround";
			table = document.getElementById("table1");
			parent.removeChild(table);
			table = document.createElement("table");
			parent.innerHTML = "";
			if (image == ""){
				parent.innerHTML += "<br><br><div align='center'>No image found</div><br><br>";
			}
			else{
				parent.innerHTML += "<img src= 'https://theunitedstates.io/images/congress/225x275/"+ image + ".jpg' align='center'><br><br>";
			}
 
			parent.appendChild(table);
			if(name == ""){
				name = "NA";
			}
			if(term == ""){
				term = "NA";
			}
			if(website.trim() == ""){
				website = "NA";
			}
			if(office == ""){
				office = "NA";
			}

			if(facebook == ""){
				facebookURL = "NA";
			}
			else{
				facebookURL = "https://www.facebook.com/" + facebook;
			}
			if(twitter == ""){
				twitterURL = "NA";
			}
			else{
				twitterURL = "https://twitter.com/" + twitter;
			}
			table.style.align = "center";
			table.innerHTML = "";
			table.innerHTML += "<tr align = 'left'><td width='50%'>Full Name</td><td width='50%'>" + name + "</td></tr>";
			table.innerHTML += "<tr align = 'left'><td>Term Ends On</td><td>" + term + "<td>";
			if(website == "NA"){
				table.innerHTML += "<tr align = 'left'><td>Website</td><td>" + website + "</td></tr>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Website</td><td><a href='" + website + "' target='_blank'>" + website + "</a></td></tr>";
			}
			table.innerHTML += "<tr align = 'left'><td>Office</td><td>" + office + "<td>";
			if(facebook == ""){
				table.innerHTML += "<tr align = 'left'><td>Facebook</td><td>" + facebookURL + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Facebook</td><td><a href='" + facebookURL + "' target='_blank'>" + name + "</a></td></tr>";
			}
			if(twitter == ""){
				table.innerHTML += "<tr align = 'left'><td>Twitter</td><td>" + twitterURL + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Twitter</td><td><a href='" + twitterURL + "' target='_blank'>" + name + "</a></td></tr>";
			}

		}

		function LegislatorTable2Generate(image, name, term, website, office, facebook, twitter){
			parent = document.getElementById("table2Parent");
			parent.className = "surround";
			table = document.getElementById("table2");
			parent.removeChild(table);
			table = document.createElement("table");
			parent.innerHTML = "";
			if (image == ""){
				parent.innerHTML += "<br><br><div align='center'>No image found</div><br><br>";
			}
			else{
				parent.innerHTML += "<img src= 'https://theunitedstates.io/images/congress/225x275/"+ image + ".jpg' align='center'><br><br>";
			}
 
			parent.appendChild(table);
			if(name == ""){
				name = "NA";
			}
			if(term == ""){
				term = "NA";
			}
			if(website.trim() == ""){
				website = "NA";
			}
			if(office == ""){
				office = "NA";
			}
			if(facebook == ""){
				facebookURL = "NA";
			}
			else{
				facebookURL = "https://www.facebook.com/" + facebook;
			}
			if(twitter == ""){
				twitterURL = "NA";
			}
			else{
				twitterURL = "https://twitter.com/" + twitter;
			}
			table.style.align = "center";
			table.innerHTML = "";
			table.innerHTML += "<tr align = 'left'><td width='50%'>Full Name</td><td width='50%'>" + name + "</td></tr>";
			table.innerHTML += "<tr align = 'left'><td>Term Ends On</td><td>" + term + "<td>";
			if(website == "NA"){
				table.innerHTML += "<tr align = 'left'><td>Website</td><td>" + website + "</td></tr>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Website</td><td><a href='" + website + "' target='_blank'>" + website + "</a></td></tr>";
			}
			table.innerHTML += "<tr align = 'left'><td>Office</td><td>" + office + "<td>";
			if(facebook == ""){
				table.innerHTML += "<tr align = 'left'><td>Facebook</td><td>" + facebookURL + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Facebook</td><td><a href='" + facebookURL + "' target='_blank'>" + name + "</a></td></tr>";
			}
			if(twitter == ""){
				table.innerHTML += "<tr align = 'left'><td>Twitter</td><td>" + twitterURL + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Twitter</td><td><a href='" + twitterURL + "' target='_blank'>" + name + "</a></td></tr>";
			}
			console.log("*"+website+"*");


		}

		function LegislatorTable4Generate(image, name, term, website, office, facebook, twitter){
			parent = document.getElementById("table4Parent");
			parent.className = "surround";
			table = document.getElementById("table4");
			parent.removeChild(table);
			table = document.createElement("table");
			parent.innerHTML = "";
			if (image == ""){
				parent.innerHTML += "<br><br><div align='center'>No image found</div><br><br>";
			}
			else{
				parent.innerHTML += "<img src= 'https://theunitedstates.io/images/congress/225x275/"+ image + ".jpg' align='center'><br><br>";
			}
 
			parent.appendChild(table);
			if(name == ""){
				name = "NA";
			}
			if(term == ""){
				term = "NA";
			}
			if(website.trim() == ""){
				website = "NA";
			}
			if(office == ""){
				office = "NA";
			}
			if(facebook == ""){
				facebookURL = "NA";
			}
			else{
				facebookURL = "https://www.facebook.com/" + facebook;
			}
			if(twitter == ""){
				twitterURL = "NA";
			}
			else{
				twitterURL = "https://twitter.com/" + twitter;
			}
			table.style.align = "center";
			table.innerHTML = "";
			table.innerHTML += "<tr align = 'left'><td width='50%'>Full Name</td><td width='50%'>" + name + "</td></tr>";
			table.innerHTML += "<tr align = 'left'><td>Term Ends On</td><td>" + term + "<td>";
			if(website == "NA"){
				table.innerHTML += "<tr align = 'left'><td>Website</td><td>" + website + "</td></tr>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Website</td><td><a href='" + website + "' target='_blank'>" + website + "</a></td></tr>";
			}
			table.innerHTML += "<tr align = 'left'><td>Office</td><td>" + office + "<td>";
			if(facebook == ""){
				table.innerHTML += "<tr align = 'left'><td>Facebook</td><td>" + facebookURL + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Facebook</td><td><a href='" + facebookURL + "' target='_blank'>" + name + "</a></td></tr>";
			}
			if(twitter == ""){
				table.innerHTML += "<tr align = 'left'><td>Twitter</td><td>" + twitterURL + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Twitter</td><td><a href='" + twitterURL + "' target='_blank'>" + name + "</a></td></tr>";
			}


		}

		function BillTableGenerate(id, title, sponsor, introduceOn, lastAction, billURL){
			parent = document.getElementById("table3Parent");
			parent.className = "surround";
			table = document.getElementById("table3");
			parent.removeChild(table);
			table = document.createElement("table");
			parent.innerHTML = "";
			parent.appendChild(table);
			billText = title;
			if(title == ""){
				title = "NA";
				billText = id;
			}
			if(introduceOn == ""){
				introduceOn = "NA";
			}
			if(lastAction == ""){
				lastAction = "NA";
			}
			table.style.align = "center";
			table.innerHTML = "";
			table.innerHTML += "<tr align = 'left'><td width='50%'>Bill ID</td><td width='50%'>" + id + "</td></tr>";
			table.innerHTML += "<tr align = 'left'><td>Bill Title</td><td>" + title + "<td>";
			table.innerHTML += "<tr align = 'left'><td>Sponsor</td><td>" + sponsor + "<td>";
			table.innerHTML += "<tr align = 'left'><td>Introduced On</td><td>" + introduceOn + "<td>";
			table.innerHTML += "<tr align = 'left'><td>Last action with date</td><td>" + lastAction + "<td>";
			if(billURL == ""){
				table.innerHTML += "<tr align = 'left'><td>Bill URL</td><td>" + lastAction + "<td>";
			}
			else{
				table.innerHTML += "<tr align = 'left'><td>Bill URL</td><td><a href='" + billURL + "' target='_blank'>" + billText + "</a></td></tr>";
			}
			
		}
	</script>
</body>
</html>
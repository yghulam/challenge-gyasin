<?php
class Records {
	public $legal_name = "CrowdApex Systems Inc";
	public $business_name = "CrowdApex";
	public $business_address = "290 Bremner Blvd, Toronto, ON M5V 3L9, Canada";
	public $business_mailing_address = " Wellington St, Ottawa, ON K1A 0A9, Canada";
	public $business_phone = "+1 647 944 3023";
	public $business_fax = "+1 647 944 3024";
	public $business_email = "hello@controlledgoods.com";
	public $application_type = "New";
	public $business_title = "Employee";
	public $lang = "English";
}
$controlledGoods = [
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],

];

$model = new Records();

?>

<!doctype html>

<html lang="en">
<head>
  <title>Security Screen</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
	<div class="container">
		<div class="row">
	<ol>
		<div class="col-sm-12">
			<div class="heading">
			<h4>A. Business Information(To be completed b designed official)</h4>
		</div>
		</div>
		<div class="col-sm-12"><li><div class="col-sm-12"><label for="">Legal Name</label></div><div class="col-sm-12 blue py-2"><?= $model->legal_name ?></div> </li></div>
		<div class="col-sm-12"><li><div class="col-sm-12"><label for="">Business Name</label></div><div class="col-sm-12 lgreen py-2"><?= $model->business_name ?></div> </li></div>
		<div class="col-sm-12"><li><div class="col-sm-12"><label for="">Civic Adress</label></div><div class="col-sm-12 blue py-2"><?= $model->business_address ?></div> </li></div>
		<div class="col-sm-12"><li><div class="col-sm-12"><label for="">Mailing Address</label></div><div class="col-sm-12 blue py-2"><?= $model->business_mailing_address ?></div> </li></div>
		<div class="col-sm-6"><li><div class="col-sm-12"><label for="">Telephone Number</label></div><div class="col-sm-12 blue py-2"><?= $model->business_phone ?> </div></li></div>
		<div class="col-sm-6"><li><div class="col-sm-12"><label for="">Facsimile Number</label></div><div class="col-sm-12 blue py-2" ><?= $model->business_fax ?></div> </li></div>
		<div class="col-sm-12"><li><div class="col-sm-12"><label for="">Email Adress</label></div><div class="col-sm-12 blue py-2"><?= $model->business_email ?></div> </li></div>
		<div class="col-sm-12"><li><div class="col-sm-12"><p>Description of controlled goods the applicant may be required to examine,posses  or transfere<br>(Refere to Export control List(ECL))</p></div></li>		</div>
<div class="col-sm-12">
<table>
	<tr>
		<th>Description of controlled goods</th>
		<th>ECL Group No.</th>
		<th>ECL item No.</th>
	</tr>
	<tr>
<td>
<ol type="a">
	<?php foreach($controlledGoods as $good): ?>
		<li><?= $good['Description'] ?></li>
	<?php endforeach;?>
	</ol>
</td>
<td>
	<ul style="list-style-type:none;">
		<?php foreach($controlledGoods as $good): ?>
			<li><?=$good['Group']?></li>
		<?php endforeach;?>
	</ul>
	</td>
	<td>
	<ul style="list-style-type:none;">
		<?php foreach($controlledGoods as $good): ?>
			<li><?=$good['Item']?></li>
		<?php endforeach;?>
	</ul>
	</td>
</tr>
</table>
</div>
<div class="col-sm-12">
	<div class="heading2">
	<h4>B.Applicant Information(to be completed by the applicant)</h4>
</div>
</div>
<div class="col-sm-12"><li><div class="col-sm-4"><label for="">Type of Application</label></div><div class="col-sm-4"><input type="checkbox" name="" value=""> <label for="" class="px-2">New </label></div><div class="col-sm-4"><input type="checkbox" name="" value=""><label for="" class="px-2">Re-Assesment </label> </div> </li></div>
<div class="col-sm-12"><li><div class="col-sm-12"><label for="">business Title</label></div><div class="col-sm-3"><input type="checkbox" name="" value=""><label for="" class="px-2">Owner</label></div><div class="col-sm-3"><input type="checkbox" name="" value=""><label for="" class="px-2">Authorized-individual</label></div><div class="col-sm-3"><input type="checkbox" name="" value=""><label for="" class="px-2">Designed official</label></div>
<div class="col-sm-3"><input type="checkbox" name="" value=""><label for="" class="px-2">Offficer</label></div>
<div class="col-sm-3"><input type="checkbox" name="" value=""><label for="" class="px-2">Director</label></div>
<div class="col-sm-3"><input type="checkbox" name="" value=""><label for="" class="px-2">Employee</label></div> </li></div>
<div class="col-sm-12"><li><div class="col-sm-4"><label for="">Prefered language of correspondance</label></div><div class="col-sm-4"><input type="checkbox" name="" value=""><label for="" class="px-2">English</label></div><div class="col-sm-4"><input type="checkbox" name="" value="" class="px-2"><label for="">French</label></div> </li></div>
</ol>


	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>

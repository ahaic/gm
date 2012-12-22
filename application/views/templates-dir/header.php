<html>
<head>
<title>dir</title>
<style type="text/css" rel="stylesheet">
body {
	
	background-color: #F4F4F4;
	
}

#navbar {
	top:0;
	font:italic;
}

#navbar-inner{

background-color:black;
}

table{
width:100%;
border:1px,solid,#DDD;
}
table  {padding:8px;leight-height:25px;text-align=left;border-top:1px,solid,#DDD;}

</style>


</head>

<body>

<div id="navbar">
<div id="navbar-inner">
NAVBAR-INNER

</div>
</div>
<div id="container">


<table class="table"  >
<tbody>
<tr> <th> #</th><th>Files</th></tr>

<?php foreach ($files as $items): ?>
<tr>
<td> * </td>
<td ><a href="view/<?php echo urlencode(dirname($items))?>">    <?php echo $items;?> </a> </td>

</tr>

<?php  endforeach;?>
</tbody>	
</table>

</div>


<hr>
<?php
 echo base_url().'<p>';
echo getcwd();

?>
</body>

</html>
<html>
<head>
	
	<link rel="stylesheet" href="includes/tablesorter/themes/blue/style.css" type="text/css" id="" media="print, projection, screen" /> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

	<script type="text/javascript" src="includes/tablesorter/jquery-latest.js"></script> 
	<script type="text/javascript" src="includes/tablesorter/jquery.tablesorter.js"></script> 

	<script type="text/javascript" src="includes/jquery.quicksearch.js"></script> 

	<link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap-theme.css">

</head>
<body>

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Relatório de Vendas.</h3>
        <div align="center">Buscar<input id="search" name="text"></div>
      </div>



<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th>Autor</th> 
    <th>Ebooks</th> 
    <th>Vendas</th> 
</tr> 
</thead> 
<tbody> 

	<?php foreach ($dados as $dado) { ?>
	<tr> 
	    <td><?php echo $dado['nome_autor'];?></td> 
	    <td><?php echo $dado['total_ebooks'];?></td> 
	    <td><?php echo $dado['valor_vendas'];?></td>  
	</tr> 
	<?php } ?>

</tbody> 
</table> 
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 

$('input#search').quicksearch('table tbody tr');

</script>


</body>
</html>
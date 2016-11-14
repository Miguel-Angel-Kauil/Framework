<h2>Listado de types</h2>
<h4>Número de types: </h4> <?php  echo $typesCount; ?>
<?php if(!empty($types)): ?>
<table>
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>Options</th>
	</tr>
	<?php
		foreach ($types as $type): 
	?>
	<tr>
		<td><?php echo $type["types"]["id"]; ?></td>
		<td><?php echo $type["types"]["name"]; ?></td>
		<td>
            <?php
            echo $this->Html->link("Edit", array(
                "controller"=>"types",
                "method"=>"edit",
                "arg"=>$type["types"]["id"]
));?> |
            <?php
           echo $this->Html->link("Delete", array(
                "controller"=>"types",
                "method"=>"delete",
                "arg"=>$type["types"]["id"]
            ));?>
        </td>
        <td>
			<!--<a href="<?php echo APP_URL."/types/edit/".$user["types"]["id"]; ?>">Editar</a>-->
			<!--<a href="<?php echo APP_URL."/types/delete/".$user["types"]["id"]; ?>">Delete</a>-->
		</td>
	</tr>
	<?php 
		endforeach; 
	?>
</table>
<?php endif; ?>
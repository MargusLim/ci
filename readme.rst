<?php include_once('header.php'); ?>
	<div class = "container">
		<br></br>
		<h2>Tabel Hewan</h2>
		<?php echo anchor('welcome/create','Add Record' ,['class' => 'btn btn-primary']); ?>
		<br></br>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Hewan</th>
		      <th scope="col">Tempat Hidup</th>
					<th scope="col">Jumlah Kaki</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php if(count($posts)):?>
				<?php foreach ($posts as $post): ?>
		    <tr>
		      <td><?php echo $post ->Hewan;?></td>
		      <td><?php echo $post ->TempatHidup;?></td>
					<td><?php echo $post ->JumlahKaki;?></td>

					<td>
						<?php echo anchor('welcome/view','View' ,['class' => 'btn btn-info btn-sm']); ?>
						<?php echo anchor('welcome/update','Update' ,['class' => 'btn btn-success btn-sm']); ?>
						<?php echo anchor('welcome/delete','Delete' ,['class' => 'btn btn-danger btn-sm']); ?>
					</td>
		    </tr>
				<?php endforeach;?>
			<?php else: ?>
					<tr>
						<td>No Record Found!</td>
					</tr>
			<?php endif; ?>
		  </tbody>
		</table>
	</div>

<?php include_once('footer.php'); ?>

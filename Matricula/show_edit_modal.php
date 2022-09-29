<div class="modal fade" id="edit<?php echo $row['IDMatricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Editar</h4>
			</div>
			<form method="POST" action="update.php" enctype="multipart/form-data">
				<div class="modal-body">
                    <input type="text" name="txtIdMatricula" value="<?php echo($row['IDMatricula']); ?>" hidden>
					<?php
						$edit=$mysqli->query("SELECT * from detalle_matricula INNER JOIN curso ON curso.CodigoCurso=detalle_matricula.CodigoCurso WHERE IDMatricula='".$row['IDMatricula']."'");
                        $contador = 0;
						while($editRow=$edit->fetch_assoc())
        		    	{
					?>
					<div class="row">
                        <input type="text" name="txtCurso<?php echo($contador); ?>" value="<?php echo($editRow['CodigoCurso']); ?>" hidden>
						<div class="col-md-6">
                            <label for="selectCurso">Curso: </label><br>
						</div>
                        <div class="col-md-6">
                            <select name="selectCurso<?php echo ($contador) ?>">
								<?php
									$listaEscuelas=$mysqli->query("select * from curso");
									while($rowCurso=$listaEscuelas->fetch_assoc())
									{
								?>
									<option value="<?php echo $rowCurso['CodigoCurso']; ?>" <?php if($rowCurso['CodigoCurso']==$editRow['CodigoCurso']){ echo 'selected'; } ?>><?php echo $rowCurso['NombreCurso']; ?></option>
								<?php 
									}
								?>
							</select>
                        </div>
					</div>
                    <br>
                    <?php $contador++; } ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->
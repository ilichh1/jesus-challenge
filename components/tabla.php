
					<table id="tbContent" class="contentTab" cellspacing="0" width="100%">
						<thead>
							<tr class="firstLine">
								<th>Fecha</th>
								<th>Categoría</th>
                <th>Descripción</th>
								<th>Monto</th>
                <th>Acciones</th>
							</tr>
						</thead>
						<tbody>
              <?php
              $sql= "SELECT idRegistro,fecha,categoria,descripcion,monto
              from registro";
              $result=mysqli_query($conexion,$sql);
              while($ver=mysqli_fetch_row($result)){
                $datos=$ver[0]."||".
                       $ver[1]."||".
                       $ver[2]."||".
                       $ver[3]."||".
                       $ver[4];

               ?>
              <tr>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td><button id="edit" class="btnAct" onclick="callData('<?php echo $datos ?>')"> <i class="fas fa-edit "></i> </button>
                <button id="delete" class="btnAct"> <i class="fas fa-trash-alt "></i> </button></td>
              </tr>
              <?php
              }
               ?>
            </tbody>
          </table>

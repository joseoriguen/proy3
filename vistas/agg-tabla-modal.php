<form id="guardarTabla">
<div class="modal fade" id="dataRegTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Nueva Tabla</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax_crear"></div>
      <label for="nombreTabla" class="control-label">Nombre de Tabla:</label>
            <input type="text" class="form-control" id="nombretabla0" name="nombretabla" required maxlength="20">
      <div class="form-group">
              
      </div>
    <table id="mitabla" class="table table-bordered">
        <thead>
        <tr>
          <th></th>
          <th>Nombre de Campo</th>
          <th>Tipo Dato </th>
          <th>Tamaño</th>
          <th>Not Null</th>
        </tr>
      </thead>
      <tr>
      <td><h6>Clave</h6></td>
        <td><input type="text" class="form-control" id="nombre0" name="nombre" required maxlength="20"></td>
        <td>
        <select disabled class="form-control" id="tipo0" name="tipo">
            <option value="VARCHAR">VARCHAR</option>
            <option value="INT" selected="selected">INT</option>
            <option value="DATE">DATE</option>
          </select></td>
        <td><input type="text" class="form-control" id="tamano0" name="tamano"  maxlength="15"></td>
        <td>
          <select disabled class="form-control" id="sinull0" name="sinull">
            <option value="NO">NO</option>
            <option value="SI" selected="selected">SI</option>
          </select>
        </td>
      </tr>
      <tr>
      <td></td>
        <td><input type="text" class="form-control" id="nombre0" name="nombre" required maxlength="20"></td>
        <td>
        <select  class="form-control" id="tipo0" name="tipo">
            <option value="VARCHAR">VARCHAR</option>
            <option value="CHAR">CHAR</option>
            <option value="INT">INT</option>
            <option value="DATE">DATE</option>
            <option value="TEXT">TEXT</option>
            <option value="DECIMAL">DECIMAL</option>
            <option value="FLOAT">FLOAT</option>
            <option value="DOUBLE">DOUBLE</option> 
            <option value="BOOLEAN">BOOLEAN</option>
          </select></td>
        <td><input type="text" class="form-control" id="tamano0" name="tamano"  maxlength="15"></td>
        <td>
        <select class="form-control" id="sinull0" name="sinull">
            <option value="NO">NO</option>
            <option value="SI">SI</option>
          </select>
        </td>
      </tr>
    </table>		      
         <button type="button" id="addfila" class="btn btn-default">Agregar Fila</button>
         <button type="button" id="delfila" class="btn btn-default">Eliminar Fila</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>
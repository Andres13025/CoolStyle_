<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="../fontawesome/css/all.css" rel="stylesheet"> 
</head>
<?php

include_once "../controller/crud.php";
$modelo = new administrar();
$resultado = $modelo->mostrar_reclamos();
    echo "<center>";
/*echo "<a href='../1.menu/indice.php'>Atras</a><br>";
echo "<a href='agregar.php'>Agregar datos</a>";*/
    echo "<table class='table table-bordered' style='width:60%; border:solid; margin-top:50px'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'><a data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fas fa-file' style='color:black'></i></a></th>";
    echo "</tr>";
    echo "</thead>";
    echo "<thead>";
    echo "<th>codigo_r</th>";
    echo "<th>Observaciones</th>";
    echo "<th>Codigo_e1</th>";
    echo "<th>Accion</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>"; 
    if($resultado){
        foreach ($resultado as $row => $item){
            echo '
            <td>'.utf8_encode($item["codigo_r"]).'</td>
            <td>'.utf8_encode($item["observaciones"]).'</td>
            <td>'.utf8_encode($item["codigo_e1"]).'</td>
            <td><a href="eliminar.php?id='.$item["codigo_r"].'"><i class="fas fa-trash" style="color:black"></i></a> | <a href="editar.php?id='.$item["codigo_r"].'"><i class="fas fa-edit" style="color:black"></i></a>
            </tr>
            </tbody>
            ';
        }
        echo "</table>";
        echo "</center>";
    }


?>
<!-- Modal -->
<form action='agregar.php' method='post'>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Reclamo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      <table>
        <tr>
            <td>Observaciones</td>
            <td><input type='text' name='observaciones'></td>
        </tr>
        <tr>
            <td>codigo_e1</td>
            <td><input type='text' name='codigo_e1'></td>
        </tr>
        
    </table>
    

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="Submit" class="btn btn-primary" value='Agregar'>Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>
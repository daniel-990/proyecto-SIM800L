
        <?php 
        
            /**para evitar el bloqueo de cors para origenes desconocidos */
            header('Access-Control-Allow-Origin: *');

            require 'conexion/conexion.php';

            $sql = "SELECT id, dato, fecha FROM data";
            $datos = array();
            $result = $conexion->query($sql);

            echo '<table class="table table-striped table-dark table-bordered">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th scope="col">ID</th>';
                    echo '<th scope="col">Dato</th>';
                    echo '<th scope="col">Fecha</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                            echo '<th>'.$row['id'].'</th>';
                            echo '<td>'.$row['dato'].'</td>';
                            echo '<td>'.$row['fecha'].'</td>';
                        echo '</tr>';
                    }
                }else{
                    echo "0 resultados";
                }
            
            echo '<tbody>';
            echo '</table>';
        
        ?>

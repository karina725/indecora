<?php
            if( (isset($_POST["names"])) && (isset($_POST["ages"])) && (isset($_POST["estado"])) && (isset($_POST["surname"])) && (isset($_POST["opciones"]))) {
                echo "Bienvenido ". $_POST['names'] ; 
                echo " ". $_POST["surname"] ; 
                echo " Tu edad es ". $_POST["ages"]. " años.<br/><br/>";
                echo " Nos visitas de ". $_POST["estado"]. "<br/><br/>" ; 
                echo " Tus gustos son: ";
                foreach($_POST['opciones'] as $seleccion) {
                    echo "<p>".$seleccion ."</p>";
                }
            }
            
        ?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <div Formulario:><br/>
                Nombres:
                <input type="text" name="names"/>
                <br/><br/>
                Apellido:
                <input type="text" name="surname"/>
                <br/><br/>
                Años:
                <input type="text" name="ages"/>
                <br/><br/>
        </div>
        <div class="dinamico">
            <label for="estado">De donde nos visitas </label>
            <select id="estado" name="estado" required>
                <option value="">Estado</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Cancun">Cancun</option>
                <option value="Sonora">Sonora</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Mexico">Mexico</option>
                <option value="Guadalajra">Guadalajra</option>
            </select>
            <br/><br/>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="opciones[]" value="Cojines">Cojines <br/><br/> 
            <input type="checkbox" name="opciones[]" value="Lamparas">Lamparas <br/><br/>
            <input type="checkbox" name="opciones[]" value="Cuadros">Cuadros <br/><br/> 
            <input type="checkbox" name="opciones[]" value="Jarrones">Jarrones <br/><br/>
            <input type="checkbox" name="opciones[]" value="Esculturas">Esculturas <br/><br/>
            <input type="checkbox" name="opciones[]" value="Tapetes">Tapetes <br/><br/>
        </div>
        <input name="submit" type="submit"/>
    </form>     

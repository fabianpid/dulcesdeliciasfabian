 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulces Delicias | Pastelería Gourmet</title>
    <link rel="stylesheet" href="estilillo.css?v=1.1">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1 class="logo">Dulces Delicias</h1>
    <nav>
        <a href="#inicio">Inicio</a>
        <a href="#productos">Productos</a>
        <a href="#descuentos">Descuentos</a>
        <a href="#contacto">Contacto</a>
    </nav>
</header>

<section id="inicio" class="hero">
    <div class="hero-content">
        <h2>Momentos dulces para compartir</h2>
        <p>Expertos en crear sonrisas con el sabor de lo artesanal.</p>
        <a href="#productos" class="btn-principal">Ver Menú</a>
    </div>
</section>

<section id="productos" class="container">
    <h2 class="titulo-seccion">Nuestras Especialidades</h2>
    <div class="grid-productos">
        <div class="card">
            <img src="pastelillo.png.jpg" alt="Pastel de Fresas">
            <h3>Pastel de Fresas</h3>
            <p>Pan esponjoso de vainilla con capas de crema y fresas frescas.</p>
            <span class="precio">$250.00</span>
        </div>
        <div class="card">
            <img src="caja.png" alt="Caja de Cupcakes">
            <h3>Caja de Cupcakes</h3>
            <p>Variedad de 6 cupcakes gourmet (Vainilla, Chocolate, Red Velvet).</p>
            <span class="precio">$170.00</span>
        </div>
        <div class="card">
            <img src="frutos.jpg" alt="Tarta de Frutos Rojos">
            <h3>Tarta de Frutos Rojos</h3>
            <p>Base crocante con crema pastelera y una selección de frutos rojos.</p>
            <span class="precio">$280.00</span>
        </div>
        <br></br>
        <div class="card">
            <img src="bronie.png" alt="Brownies de Chocolate">
            <h3>Brownies de Chocolate</h3>
            <p>Chocolate semi-amargo con nueces y una textura irresistible.</p>
            <span class="precio">$45.00 c/u</span>
        </div>
        <div class="card">
            <img src="elote.jpg" alt="pan de elote">
            <h3>pan de elote</h3>
            <p>pan recien horneado sabor elote.</p>
            <span class="precio">$300.00 c/u</span>
        </div>
        <div class="card">
            <img src="manzana.jpg" alt="pay de manzana">
            <h3>pay de manzana</h3>
            <p>base crocante sabor manzana.</p>
            <span class="precio">$350.00 c/u</span>
        </div>
    </div>
</section>

<section id="descuentos" class="container">
    <h2 class="titulo-seccion">Promociones de la Semana</h2>
    <p style="text-align:center;">¡Aprovecha nuestros descuentos progresivos según el día!</p>
    <div class="tabla-descuentos">
        <table>
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Descuento</th>
                    <th>Precio Final (Pastel $250)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tu lógica de descuentos anterior integrada
                $precio_base = 250;
                for($dia = 1; $dia <= 7; $dia++) {
                    $descuento_porcentaje = $dia * 1.5; // Ejemplo de descuento incremental
                    $monto_descuento = ($precio_base * $descuento_porcentaje) / 100;
                    $precio_final = $precio_base - $monto_descuento;
                    
                    echo "<tr>
                            <td>Día $dia</td>
                            <td>$descuento_porcentaje%</td>
                            <td>$ " . number_format($precio_final, 2) . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<section id="contacto" class="form-container">
    <div class="form-card">
        <h2>Haz tu Pedido</h2>
        <p>Escríbenos y nosotros nos encargamos del resto.</p>
        <form action="pastel_1.php" method="POST">
            <div class="input-group">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
            </div>
            <div class="input-group">
                <input type="text" name="correo" placeholder="Tu correo" required>
            </div>
            <div class="input-group">
                <input type="text" name="telefono" placeholder="Tu teléfono" required>
            </div>
            <div class="input-group">
                <textarea name="mensaje" placeholder="¿Qué dulce momento buscas hoy?" required></textarea>
            </div>
            <div class="input-group">
                <input type="text" name="producto" placeholder="que deseas hoy" required>
            </div>
            <div class="input-group">
                <input type="int" name="cantidad" placeholder="ingresa la cantidad de producto que deseas" required>
            </div>
            <button type="submit" name="enviar" class="btn-submit">Enviar Pedido</button>
        </form>
    </div>
</section>

<footer>
<p>&copy; de 8 de la mañana a 9 de la noche</p>
    <p>&copy;telefono: 2281196948 redes sociales: @dulcemoment0_223</p>
    <p>&copy; 2026 Dulces Momentos - Calle Ávila Camacho #123</p>
</footer>
    <?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "pasteleria";

$con = new mysqli($host, $user, $pass, $bd);

if ($con->connect_error) {echo"error de conexion";}
else{
    echo "conexion exitosa";
     mysqli_error($con);
}
?>
</body>
</html>
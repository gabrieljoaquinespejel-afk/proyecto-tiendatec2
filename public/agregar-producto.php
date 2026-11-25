<html>
    <head>
        <title>tienda tec - Agregar Producto</title>
    </head>
    <body> 
        <header>
            <h1>bienvenido a tienda tec</h1>
            <nav>
                <a href="index.php">Inicio</a> 
                <a href="index.php">Catalogo</a> 
                <a href="index.php">Contacto</a> 
            </nav> 
        </header>
        <main>
            <section>
                <h2>Agregar Nuevo Producto</h2>
                <form action="#" method="post">
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <br>
                    <label for="categoria">Categoría:</label>
                    <input type="text" name="categoria" id="categoria" required>
                    <br>
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" min="0">
                    <br>
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock" min="0">

                    <button type="submit">Agregar Producto</button> 
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 tienda tec. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>

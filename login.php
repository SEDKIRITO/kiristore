<?php
  include("cabecera.php");
?>
    <div class="contenedor_menu">

      <h2>Iniciar sesion</h2>

      <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <circle cx="12" cy="12" r="9" />
          <circle cx="12" cy="10" r="3" />
          <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
        </svg>
      </div>

      <form id="forma" name="forma" action="validar.php" method="post">
        <div class="elemento">
          <label for="email">Correo</label>
          <input type="email" id="email" name="correo" required>
        </div>
        <div class="elemento">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="clave" required>
        </div>

        <div class="elemento">
          <input type="submit" value="Enviar">
        </div>

        <div class="elemento">
          <a href="recupera.html">Olvide mi contraseña</a>
        </div>
      </form>
    </div><!-- contenedor_menu -->
  </div><!-- Contenedor -->
</body>

</html>

<?php
  include("pie.php");
?>
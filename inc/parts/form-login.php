
  <form name="form" class="formlogin" onsubmit="return false;">
    <div class="form-group username">
      <label for="username">Usuario</label>
      <input type="text" name="username_l1" id="username_l1" required />
      <span class="error__login"></span>
    </div>

    <div class="form-group password">
      <label for="password">Contraseña</label>
      <input type="password" name="password_l1" id="password_l1" required />
      <span class="error__signup"></span>
    </div>

    <button type="submit" class="btn btn-login login">INGRESAR</button>
    <button class="btn btn-register register">REGISTRATE</button>
  </form>


  <div class="text-center mt-1 ">
    <a class="forgot-pass" href="/restablecer-contra/"><span>¿Olvidó su contraseña?</span></a>
  </div>

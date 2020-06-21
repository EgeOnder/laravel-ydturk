<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Giriş</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Kullanıcı Adı:
                    <input type="text" name="username" id="username" placeholder="Kullanıcı Adı" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Şifre:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Beni hatırla</span>
					</div>
            		<a href="#">Şifremi unuttum</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Giriş yap</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>Twitter</a>
            </div>
        </div>
    </div>
</div>

<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Kayıt Ol</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Kullanıcı Adı:
                    <input type="text" name="username" id="username-2" placeholder="Kullanıcı Adı" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    E-posta:
                    <input type="password" name="email" id="email-2" placeholder="E-posta" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Şifre:
                    <input type="password" name="password" id="password-2" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    Şifreni Tekrar Yaz:
                    <input type="password" name="password" id="repassword-2" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">Kayıt ol</button>
           </div>
        </form>
    </div>
</div>
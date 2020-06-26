    <div class="login-wrapper" id="login-content">
	    <div class="login-content">
			<a href="#" class="close">x</a>
			<h3>GİRİŞ</h3>
			<form method="post" action="#">
				<div class="row">
					 <label for="username">
						Kullanıcı Adı:
						<input type="text" name="username" id="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
					</label>
				</div>
				<div class="row">
					<label for="password">
						Şifre:
						<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
					</label>
				</div>
				<div class="row">
					<div class="remember">
                        <input type="checkbox" name="remember" value="Remember me"><span style="margin-left: 30px;">Beni hatırla</span>
                        <a href="#">Şifremi unuttum</a>
                    </div>
				</div>
			    <div class="row">
				    <button type="submit">Giriş yap</button>
			    </div>
		    </form>
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
						<input type="text" name="username" id="username-2" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
					</label>
				</div>
				<div class="row">
					<label for="email-2">
						E-posta:
                        <input type="password" name="email" id="email-2" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
					</label>
				</div>
				<div class="row">
					<label for="password-2">
						Şifre:
						<input type="password" name="password" id="password-2" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
					</label>
				</div>
				<div class="row">
					<label for="repassword-2">
						Şifreni Tekrar Yaz:
						<input type="password" name="password" id="repassword-2" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
				    </label>
				</div>
				 <div class="row">
					 <button type="submit">Kayıt ol</button>
				 </div>
			</form>
	    </div>
    </div>

    <header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Menüyü aç/kapa</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="{{ route('index') }}"><img class="logo" src="{{ asset('/images/logo1.png') }}" alt="" width="119" height="58"></a>
			    </div>
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="first">
							<a class="btn btn-default lv1" href="{{ route('diziler', 1) }}">
							DİZİLER
							</a>
						</li>
						<li class="first">
							<a class="btn btn-default lv1" href="{{ route('filmler', 1) }}">
							FİLMLER
							</a>
						</li>
					</ul>
					<livewire:search-dropdown>
					<ul class="nav navbar-nav flex-child-menu menu-right">      
						<li class="loginLink"><a href="#">Giriş yap</a></li>
						<li class="btn signupLink"><a href="#">Kayıt ol</a></li>
					</ul>
				</div>
	        </nav>
		</div>
    </header>
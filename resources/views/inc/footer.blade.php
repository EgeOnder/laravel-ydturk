<!-- footer v2 section-->
<footer class="ht-footer full-width-ft">
	<div class="row">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="{{ route('index') }}"><img class="logo" src="{{ asset('/images/logo1.png') }}" alt="logo"></a>
				 <p>-ADRES-<br>
				-ADRESSATIR2-</p>
				<p>TEL NO: <a href="#">(+XX) XXX XXX XXXX</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>EN ÇOK İZLENENLER</h4>
				<ul>
					@foreach ($popularShows as $show)
						@if ($loop->index < 6)
							<li><a href="{{ route('diziler.show', $show['id']) }}">{{ $show['name'] }}</a></li> 
						@endif
					@endforeach
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>LEGAL</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>HESAP</h4>
				<ul>
					<li><a href="#">Hesabım</a></li> 
					<li><a href="#">İzleme Listesi</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Haberin Olsun</h4>
				<p>Yeni çıkan dizileri anında izlemek için <br> bilgilendirme sistemimize abone ol.</p>
				<form action="#">
					<input type="text" placeholder="E-Posta">
				</form>
				<a href="#" class="btn">Abone ol <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
		<div class="ft-copyright">
			<div class="ft-left">
				<p><a target="_blank" href="">YDTurk</a></p>
			</div>
			<div class="backtotop">
				<p><a href="#" id="back-to-top">Yukarıya çık <i class="ion-ios-arrow-thin-up"></i></a></p>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer v2 section-->
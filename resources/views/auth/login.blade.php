<!DOCTYPE html>
<html>
<head>
	<title>MASUK</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	
	  <!-- <img src="img/ee.png" height="640" width="640"/> -->
	  
	  <!-- <img src="img/aa.jpg" alt="background" style="position: absolute; z-index: -10; width: 100%; height: 105vh;"> -->
 
 
	<div class="kotak_login">
        
            <!-- <p class="tulisan_login">penat</p>
            <center><p class="f">"Pelaporan Aplikasi Masyarakat"</p></center> -->
			<div class="t"><img src="img/ee.png" height="50%" width="50%" margin-top="50%"></div>
            <div class="h">
            <center><b><p class="z">MASUK</p></b></center>
						   <br>
			
        <form method="POST"
            action="{{ route('postLogin') }}"
            class="form-signin">
            {{ csrf_field() }}
			@include('alert')
            
			
			<center><input type="text" name="username" class="form_login" placeholder="Nama Pengguna ..">
			<br>
 
			<br>
			
			<input type="password" name="password" class="form_login" placeholder="Password .. &#xf13e;">
			<br> 
			<label for="">
			Belum Punya Akun Bang? <a href="{{route('getRegister')}}">
			Register
			</a>
			</label>
			<br>
			<input type="submit" class="tombol_login" value="KIRIM"></center>	
		</div>
			
 
            <br/>
            
			<br/>
			
		</form>
		
	</div>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>
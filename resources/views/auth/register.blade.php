<!DOCTYPE html>
<html>
<head>
	<title>REGISTRASI</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome/font-awesome.min.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<header class="masthead mb-auto">
		<div class="inner">

		  <nav class="nav nav-masthead justify-content-center">
			  
			<center>
			<a class="nav-link active" href="#">Home</a>
			<a class="nav-link" href="#">Features</a>
			<a class="nav-link" href="#">Contact</a>
			</center>
		  </nav>
		</div>
	  </header>
	  <!-- <img src="img/ee.png" height="640" width="640"/> -->
	  
	  <!-- <img src="img/aa.jpg" alt="background" style="position: absolute; z-index: -10; width: 100%; height: 105vh;"> -->
 
 
	<div class="kotak_login">
        
            <!-- <p class="tulisan_login">penat</p>
            <center><p class="f">"Pelaporan Aplikasi Masyarakat"</p></center> -->
			<div class="t">
				<img src="img/ee.png" height="50%" width="50%" margin-top="50%">
			</div>
            <div class="w">
            <center>
				<b>
					<p class="t">REGISTRASI</p>
				</b>
			</center>
			
        <form method="POST"
			action="{{ route('postRegister') }}"
			class="form-signin"
			>
			@include('alert')
            @csrf
            
			<center>
			<i class="fa fa-id-card"></i><input type="text" name="nik" value="{{ old('nik')}}" class="form_login"  required placeholder="Nomor Identitas Penduduk (NIK) .. ">
			<br> <br>
			<i class="fa fa-users"></i><input type="text" name="nama"value="{{ old('nama')}}" class="form_login" placeholder="Nama Lengkap .. ">
			<br> <br>
			<i class="fa fa-user"></i><input type="text" name="username" value="{{ old('username')}}" class="form_login" placeholder="Name Pengguna..">
			<br><br>		
			<i class="fa fa-phone"></i><input type="text" name="tlp" value="{{ old('tlp')}}" class="form_login" placeholder="No Telepon .. ">
			<br> <br>
			<i class="fa fa-unlock-alt"></i><input type="password" name="password" class="form_login" placeholder="Kata Sandi .. " >
			<br> <br>
			<i class="fa fa-unlock-alt"></i><input type="password" name="password_confirmation" class="form_login" placeholder="Konfirmasi Kata Sandi.. " > <br> 
			<!-- <input type="submit" class="tombol_login" value="KIRIM"></center>	 -->
			<button type="submit" class="tombol_login"> KIRIM</button>
			
		</div>
			
 
            <br/>
            
			<br/>
			
		</form>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
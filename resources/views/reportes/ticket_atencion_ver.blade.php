<style>
	.paciente {

margin-left: 100px;
margin-top: 45px;
margin-bottom: 2px;
}




.fecha {

margin-left: 100px;
margin-top:-30px;


}
.servicios {

margin-left: 50px;
margin-top:40px;

}
.analisis {

margin-left: 50px;
margin-top:-30px;

}

.acuenta {

margin-left: 50px;
margin-top:40px;
margin-bottom: 1px;

}

.pendiente {

margin-left: 180px;
margin-top:-50px;

}

.origen {

margin-left: 50px;
margin-top:-60px;

}

.total {

margin-left: 410px;
margin-top: -20px;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ticket de Atención</title>
</head>
<body>
	
	<div class="" style="font-size: 35px; text-align: center; margin-bottom: -15px;">
		<img src="/var/www/html/syspro/public/img/logo.jpg"  style="width: 30%;"/>
	</div>

 <div class="" style="font-size: 40px; text-align: center;margin-bottom:-60px;margin-top: 2px;">
		
		@if(Session::get('sedeName') == 'INDEPENDENCIA')
        <p><strong>MADRE TERESA- SAN JUAN DE LURIGANCHO</strong></p>
		<p><strong>RUC: 20600971116</strong></p>
		<p><strong>Teléfono: 940314839</strong></p>
		@else
        <p><strong>SEDE LOS OLIVOS</strong></p>
        <p><strong>RUC: 20600971116</strong></p>
		<p><strong>Teléfono: 940314839</strong></p>
		@endif
	    <p><strong>TICKET:{{ $ticket->id}}</strong></p>
	</div>

    <div class="" style="font-size: 40px; text-align: left;margin-bottom:-40px;">
		<p><strong>FECHA:{{ date('d/m/Y', strtotime($ticket->created_at)) }}</strong></p>
	</div>
    
    <div class="" style="font-size: 40px; text-align: left;margin-bottom:-40px;">
		<p><strong>PACIENTE:{{ $ticket->nombres}},{{ $ticket->apellidos}}</strong></p>
	</div>
    
    <div class="" style="font-size: 40px; text-align: left;margin-bottom:-40px;">
		<p><strong>DNI:{{ $ticket->dni}}</strong></p>
	</div>
    
    
     <div class="" style="font-size: 40px; text-align: left;margin-bottom:-40px;">
		<p><strong>DIRECCIÓN:{{ $ticket->direccion}}</strong></p>
	</div>
    
    <div class="" style="font-size: 40px; text-align: left;margin-bottom:-40px;">
		<p><strong>TELEFONO:{{ $ticket->telefono}}</strong></p>
	</div>

  

	
	

	
	



</body>
</html>


@php
$forma_pago = array(
	'contado' => 'Contado',
	'5d' => 'Credito 5 dias',
	'10d' => 'Credito 10 dias',
	'15d' => 'Credito 15 dias',
	'20d' => 'Credito 20 dias',
	'30d' => 'Credito 30 dias',
)
@endphp
<table class="table">
	<thead>
		<tr>
			<th scope="col" class="text-center">Farmacia</th>
			<th scope="col" class="text-center">Laboratorio</th>
			<th scope="col" class="text-center">Metodo de Pago</th>
			<th scope="col" class="text-center">Analista</th>
		</tr>
	</thead>
	<tbody>
		@isset ($pedido)
		<tr>
			<td class="text-center">{{$pedido->farmacia->nombre}}</td>
			<td class="text-center">{{$pedido->laboratorio->nombre}}</td>
			<td class="text-center">{{$forma_pago[$pedido->forma_pago]}}</td>
			<td class="text-center">{{$pedido->empleado->nombre}}</td>
		</tr>
		@endisset
	</tbody>
</table>


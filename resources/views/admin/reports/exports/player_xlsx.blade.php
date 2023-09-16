<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Role</th>
			<th>Club</th>
			<th>Height</th>
			<th>Weight</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($players as $player)
			<tr>    
				<td>{{ $player->name }}</td>
				<td>{{ $player->position->name }}</td>
				<td>{{ $player->club->name }}</td>
				<td>{{ $player->height }}</td>
				<td>{{ $player->weight }}</td>
				<td>{{ $player->status }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
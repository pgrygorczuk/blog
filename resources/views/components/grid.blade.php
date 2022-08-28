<a href="{{ url()->current().'/create' }}" class="btn btn-primary">
	Add new
</a>
<table {{ $attributes->merge(['class' => 'table']) }}>
	<thead>
		<tr>
			@foreach($fields as $field => $opts)
				<th>{{ $opts['display_as'] }}</th>
			@endforeach
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($items as $item)
			<tr>
				@foreach($fields as $field => $opts)
					<td>
						@if (array_key_exists($field, $item->getRelations()) )
							{{ $item->getAttribute($field)->describe() }}
						@else
							{{ $item->getAttribute($field) }}							
						@endif
					</td>
				@endforeach
				<td>
					<a class="btn btn-link" href="{{ url()->current().'/'.$item->id.'/edit' }}">Edit</a>
					<form method="POST" action="{{ url()->current().'/'.$item->id }}">
						@csrf
    					@method("DELETE")
						<input class="btn btn-link" type="submit" value="Delete">
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

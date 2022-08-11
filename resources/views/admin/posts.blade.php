<table>
	<thead>
		<tr>
			@foreach($items[0]::fields as $field => $opts)
				<th>{{ $opts['display_as'] }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		@foreach($items as $item)
			<tr>
				@foreach($item::fields as $field => $opts)
					<td>
						@if (array_key_exists($field, $item->getRelations()) )
							{{ $item->getAttribute($field)->describe() }}
						@else
							{{ $item->getAttribute($field) }}							
						@endif
					</td>
				@endforeach
			</tr>
		@endforeach
	</tbody>
</table>

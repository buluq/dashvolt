<table class="highlight">
	<thead>
		<tr>
			<th data-field="variable">Variabel</th>
			<th data-field="content">Isi</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>PARAMS</td>
			<td><pre>{{ var_dump(@PARAMS) }}</pre></td>
		</tr>

		<tr>
			<td>PATTERN</td>
			<td><pre>{{ var_dump(@PATTERN) }}</pre></td>
		</tr>

		<tr>
			<td>FILEREF</td>
			<td>
				<pre>{{ var_dump($dir  = Base::instance()->get('PARAMS.dir')) }}</pre>
				<pre>{{ var_dump($ref  = 'files.' . $dir) }}</pre>
				{* <pre>{{ var_dump($file = Base::instance()->get($ref)) }}</pre> *}
			</td>
		</tr>

		{* <tr>
			<td>FILE</td>
			<td><pre>{{ var_dump(@file) }}</pre></td>
		</tr> *}
	</tbody>
</table>
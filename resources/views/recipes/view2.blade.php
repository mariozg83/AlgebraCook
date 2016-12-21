<!DOCTYPE html>
<html>
	<head>
		<title>Recepti </title>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
	
	<style>
        body { font-family: 'Lato'; }
        .fa-btn { margin-right: 6px; }
    </style>
	
	</head>

	<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Recepti
                </a>
			</div>

			@if (count($recipes) >0)
			<div class="container">
					<table class="panel-heading">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Creator_id</th>
						<th>Descripton</th>
						<th>&nbsp;</th>
					</thead>
					
					<tbody>
						@foreach ($recipes as $recipe)
							<tr>
								<td class="table-text">
									<div>{{ $recipe->id }}</div>
								</td>
								<td class="table-text">
									<div>{{ $recipe->name }}</div>
								</td>
								<td class="table-text">
									<div>{{ $recipe->creator_id }}</div>
								</td>
								<td class="table-text">
									<div>{{ $recipe->descripton }}</div>
								</td>
								<td>
									<form action="/recipe2s/{{ $recipe->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										
										<button>Izbriši recept</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
	@endif
	</body>


</html>
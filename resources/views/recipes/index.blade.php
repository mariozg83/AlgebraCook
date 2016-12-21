@extends('layouts.app')

@section('title', 'Recepti')

@section ('content')
<div class="container">
	<div class="row">
	
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Recepti <br/><a href="/recipes/add">
					<i class="fa fa-btn fa-plus"></i>Dodaj novi recept</a>
				</div>
				<div class="panel-body">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						 <tr class="bg-info">
							 <th>Ime recepta</th>
							 <th>Opcije</th>
							
						 </tr>
						 </thead>
				<tbody>
				@foreach ($recipes as $recipe)
					<tr>
						<td><li class="list-group-item"><a href="recipes/view/{{ $recipe->id }}"> {{ $recipe->name }}</a></li></td>
						<td>
						<form action="/recipes/{{ $recipe->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										
										<button class="btn btn-danger">Delete</button>
							<!--{!! Form::open(array('url'=> 'recipes/{id}', 'method'=> 'post')) !!}
							{{ Form::hidden('_method', 'DELETE') }}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}-->
						</td>
					</tr>
				@endforeach	
				</tbody>
				</table>
					
				
				</ul>
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
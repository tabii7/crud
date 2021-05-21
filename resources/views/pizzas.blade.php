

<div class="content">
<div class="title  m-b-md">
<div class="content">
                <div class="title m-b-md">
                    Pizza Shop
                </div>
Pizza List
</div>
@foreach($pizzas as $pizza)
<div>
<tr>
<td>{{ $pizza->name }}</td>
<td>{{ $pizza->base }}</td>
<td>{{ $pizza->type }}</td>
<td><img src="{{ asset('upload/highlights/' .$pizza->image)}}" ></td>
</tr>
</div>
@endforeach 
<span>{{$pizzas->links()}}</span>
</div>

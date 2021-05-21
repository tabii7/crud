<div>
<h1> Order for{{$pizza->name}}  </h1>
<p>Type - {{ $pizza->type}}</p>
<p>Base - {{ $pizza->base}}</p>

<form action= "/pizzas/{{$pizza->id}}" method="post">
@csrf
@method('DELETE')
<button>complete order</button>
</form>
</div>
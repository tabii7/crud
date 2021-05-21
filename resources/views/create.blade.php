<div class="place-order">
<h1>Place new order</h1>
<form method="post" action="/pizzas" enctype="multipart/form-data">
@csrf
<div class="alert alert-danger">
@foreach($errors->all() as $error)

<li>{{$error}}</li>
@endforeach
<label>Your name</label>
<input type="text" id="name" name="name"><br>
<label>Choose Pizze type</label>
<select name="type" id="type">
 <option value="margarita">Margarita</option>
 <option value="Hawaiian">Hawaiian</option>
 <option value="Veg supreme">Veg supreme</option>
 </select><br>
 <label>Choose Base type</label>
 <select name="base" id="base">
 <option value="cheesy crust">Cheesy Crust</option>
 <option value="Thin & crispy">Thin & Crispy</option>
 <option value="thick">Thick</option>
 </select><br>
 <label>upload</label>
<input type="file" id="image" name="image"><br>
 <input type="submit" value="order pizza">
 </form>
</div>
</div>
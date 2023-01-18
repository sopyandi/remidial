<div class="head">
<h5>Nama : {{ Auth()->user()->name }}</h5>
<h1>UJIKOM SMK YPC</h1>
<form action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>
</div>

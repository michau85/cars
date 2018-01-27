<h1>Cars</h1>
<ul>
    @foreach($cars as $c)
<li>{{$c->name}}</li>
    @endforeach
</ul>
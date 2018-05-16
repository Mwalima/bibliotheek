<!doctype html>
<html>
<head>
    @include('partials.head')
</head>
<header>
    @include('partials.header2')
</header>
@include('partials.nav')
<body>


<table>
    @foreach($boeken as $boek)
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">description</th>
                <th scope="col">image link</th>
                <th scope="col">delete action</th>
                <th scope="col">update action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$boek->id}}</th>
                <td>{{$boek->id}}</td>
                <td><input type="text" name="titel" placeholder="{{$boek->titel}}" /></td>
                <td><input type="text" name="auteur" placeholder="{{$boek->auteur}}" /></td>
                <td><input type="text" name="omschrijving" placeholder="{{$boek->omschrijving}}" /></td>
                <td><input type="text" name="afbeelding" placeholder="{{$boek->afbeelding}}" /></td>
                <td>
                    {{ Form::open(['route' => ['boeken_cms.delete', $boek->id], 'method' => 'delete']) }}

                    <button type="submit">Delete</button>
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(['route' => ['boeken_cms.update', $boek->id], 'method' => 'put']) }}

                    <button type="submit">modify</button>
                    {{ Form::close() }}
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
<div>
    @include('partials.footer')
</div>
</body>
</html>
@extends('layout.helloapp')

@section('title','Person.Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            {{-- <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td> --}}
        </tr>
    @endforeach
</table>
</form>
@endsection

@section('footer')
copyright 2020 timpo.
@endsection

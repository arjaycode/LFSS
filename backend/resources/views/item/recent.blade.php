@extends('layouts.master')

@section('main-content')

<title>View Recently Reported Lost and Found Items</title>

<table border="1" cellspacing="1" cellpadding="1">
    <tr>
        <td> id </td>
        <td> What was Lost </td>
        <td> Category </td>
        <td> Primary Color </td>
        <td> Secondary Color </td>
        <td> Date Lost </td>
        <td> Time Lost </td>
        <td> Action </td>
    </tr>
    @foreach($data as $value)
        <tr>
            <td> {{ $value['id'] }} </td>
            <td> {{ $value['whatWasLost'] }} </td>
            <td> {{ $value['category'] }} </td>
            <td> {{ $value['primaryColor'] }} </td>
            <td> {{ $value['secondaryColor'] }} </td>
            <td> {{ $value['dateLost'] }} </td>
            <td> {{ $value['timeLost'] }} </td>
            <td>
                <a href="{{ route('updateItem', ['id' => $value['id']])}}">Edit</a>
                <a href="{{ route('deleteItem', ['id' => $value['id']])}}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>



@endsection
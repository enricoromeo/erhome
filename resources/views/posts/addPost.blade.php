@extends('layouts.default')

@section('content')

@section('title', 'Add Post')

<form action="{{ action('PostController@store') }}" method = "post">
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

   <table>
      <tr>
         <td>Title</td>
         <td><input type='text' name='post_title' /></td>
      </tr>
      <tr>
         <td>Text</td>
         <td><input type='text' name='post_text' /></td>
      </tr>
      <tr>
         <td colspan = '2'>
            <input type = 'submit' value = "Add Post"/>
         </td>
      </tr>
   </table>

</form>


@stop

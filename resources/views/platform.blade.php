@extends('layout.app')
@section('content')
<form action = "/create" method = "post">
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
   <table>
      <tr>
         <td>platformName</td>
         <td><input type='text' name='stud_name' /></td>
      </tr>
      <tr>
         <td colspan = '2'>
            <input type = 'submit' value = "Add student"/>
         </td>
      </tr>
   </table>
</form> 
@endsection

 
@extends('layout.app')
@section('content')
<form action = "/shows" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
       <tr>
          <td>shows</td>
          <td><input type='text' name='shows' /></td>
       </tr>
       <tr>
        <td>platform</td>
        <td><select name="platform" multiple>
            @foreach ($flights as $flight)
            <option value={{$flight->platforms}}>{{$flight->platforms}}</option>
            @endforeach
            
            
          </select></td>
     </tr>
       <tr>
          <td colspan = '2'>
             <input type = 'submit' value = "Add shows"/>
          </td>
       </tr>
    </table>
 </form>
@endsection

 
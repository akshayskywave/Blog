<html>
<head>
<title>registration form</title>
</head>

<h2 ALIGN="CENTER">{{$title}}</h2>

<form action="{{$url}}" method="post">
@csrf 
<table border="2" align="center">
<tbody>

<tr>
<td><label for="name">Name: </label></td>
<td><input id="name" maxlength="50" name="name" type="text" value="@if(isset($blogv)){{$blogv->Name}}@endif"/></td>
</tr>

<tr>
<td><label for="Username">Username: </label></td>
<td><input id="Username" maxlength="50" name="username" type="text" value="@if(isset($blogv)){{$blogv->username}}@endif"/></td>
</tr>

<tr>
<td><label for="bio">Bio :</label></td>
<td><input id="bio" maxlength="50" name="bio" type="text" value="@if(isset($blogv)){{$blogv->Bio}}@endif"/></td>
</tr>

<tr>
<td><label for="phone">Phone: </label></td>
<td><input id="phone" maxlength="50" name="phone" type="text" value="@if(isset($blogv)){{$blogv->phone}}@endif"/></td>
</tr>

<tr>
<td><label for="City">City: </label></td>
<td><input id="City" maxlength="50" name="city" type="text" value="@if(isset($blogv)){{$blogv->City}}@endif"/></td>
</tr>

<tr>
<td><label for="email">Email_Address:</label></td>
<td><input id="email" maxlength="50" name="email" type="text" value="@if(isset($blogv)){{$blogv->email}}@endif"/></td>
</tr>

<tr>
<td><label for="State">State:</label></td>
<td><input id="State" maxlength="50" name="state" type="text" value="@if(isset($blogv)){{$blogv->State}}@endif"/></td>
</tr>

<tr>
<td><label for="Country">Country:</label></td>
<td><input id="Country" maxlength="50" name="Country" type="text" value="@if(isset($blogv)){{$blogv->Country}}@endif"/></td>
</tr>

<tr>
<td><label for="Gender">Gender:</label></td>
<td><input id="Gender" maxlength="50" name="Gender" type="text" value="@if(isset($blogv)){{$blogv->Gender}}@endif"/></td>
</tr>

<tr>
<td align="right"><input name="Submit" type="Submit" value="Submit" /></td>
</tr>

</tbody>
</table>
</form>
</html>
<?php include "header.php"?>
<div class="card text-center">
  <h5 class="card-header bg-success display-3 text-light text-xs-center p-b-1 m-b-1">LOGIN</h5>
  <div class="card-body bg-dark">
   	<form method="Post" action="Login.php">
        	
            <center><table>
            <tbody>
            <tr>
            <td class="text-right align-top"><svg class="bi bi-person-fill" width="3em" height="2em" viewBox="0 0 16 16" fill="#28a745" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
            </svg></td>
            <td colspan="2"><input type="email" class="form-control text-center" name="Email"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email"></td>
            </tr>
            <tr>
        	<td class="text-right align-top"><svg class="bi bi-lock-fill" width="3em" height="2em" viewBox="0 0 16 16" fill="#28a745" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2"/>
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
            </svg></td>
            <td colspan="2"><input type="password" class="form-control text-center"  name="Password"  placeholder="Password" id="input_password"><a href="#" onclick="show_password()">Mostra</a></td>
          </tr>
          <tr>
          <td></td>
          <td colspan="2">
          <button type="submit" class="form-control  btn btn-outline-success  ">Accedi</button>
          </td>
          </tr>
  	</tbody>
    </table></center>
  </form>
  </div>
</div>
	

<?php include "footer.html"?>

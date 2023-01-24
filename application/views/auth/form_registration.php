<?php
defined('BASEPATH') or exit('No direct sccrip access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div class="jumbotron text-center bg-dark">
       
        <h1>Pengiriman</h1>
    <h3>Registration Page</h3>
    <?= $this->session->flashdata('masg') ?>
    <?php
	$name='';
	$username='';
	$email='';
	$no_telp='';
	$usertype='';
	$password='';

	
	if(isset($user)) {
		$name = $user->name;
		$username = $user->username;
		$email = $user->email;
		$no_telp = $user->no_telp;
		$usertype = $user->usertype;
		$pasword = $user->password;

	}
	?>
    </div>
    <div class="container">
    <hr>
	<form action="" method="post">

        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
        value="<?= $name ?>"  required>
        </div>
        <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"
        value="<?= $username ?>"  required>
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"
        value="<?= $email ?>"  required>
        </div>
        <div class="form-group">
        <label for="no_telp">No Telp:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter No Telp" name="no_telp"
        value="<?= $no_telp ?>"  required>
        </div>
       
        <div class="form-group">
            <tr>
                <td>User Type</td>
                <td><input type="radio" name="usertype" value="Admin" <?= $usertype == 'Admin' ? 'checked' : '' ?> required>Admin
                    <input type="radio"  name="usertype" value="Kurir" <?= $usertype == 'Kurir' ? 'checked' : '' ?> required>Kurir
                </td>
            </tr>
        </div>
       
            <tr>
                <td>
            <input type="submit" name="submit" value="REGISTRASI" class="btn btn-primary btn-sm">
                    <a href="<?= site_url('auth/login') ?>"><input type="button" value="CANCEL" class="btn btn-primary" ></a>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>
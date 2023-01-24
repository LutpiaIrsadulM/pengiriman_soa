<?php
defined('BASEPATH') or exit('No direct sccrip access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div class="jumbotron text-center bg-dark">
    <h1 >Pengiriman</h1>
    <h3>LOGIN PAGE</h3>
    </div>
    <div class="container">
    <hr>
    <?= $this->session->flashdata('asg') ?>
    <div style="color: red;"><?validation_errors()?></div>
    <form action="" method="post" class="was-validated">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="LOGIN" class="btn btn-primary"></td>
            </tr>
            <hr>
            <tr>
                <td></td>
                <td>
                    Not Have an Account? <a href="<?= site_url('auth/registration') ?>">Sign up</a></h3>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>
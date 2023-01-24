<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
	
	<?php $this->load->view("admin/_partials/sidebar.php") ?>
	
	<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
	
	<?php if ($this->session->flashdata('success')) : ?>
	<?php endif; ?>
	
	<div class="card mb-3">
					
    <?= $this->session->flashdata('asg') ?>
	
	 <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>CURRENT PHOTO</td>
                <td><img src="<?= base_url('uploads/user/' . $this->session->userdata('photo')) ?>" width="128" height="128"></td>
            </tr>
        </table>
            <tr>
                <td>NEW PHOTO</td>
                <div class="custom-file mb-3">
                <td>
                    <input class="custom-file-input" type="file" name="photo" id="" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </td>
                </div>
            </tr>

            <script>
              $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
              });
            </script>

            <tr>
                <td></td>
                <td><input type="submit" name="upload" value="UPLOAD PHOTO" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
	</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
		
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>
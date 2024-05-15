<?php //include 'includes/session.php'; 
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/conn.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<?php
					$parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
					$title = $parse['election_title'];
					?>
					<h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?></b></h1>

					<div class="row">

						<?php
						$sql = "SELECT * FROM positions ORDER BY priority ASC";
						$query = $conn->query($sql);
						while ($row = $query->fetch_assoc()) {
							$position_name = $row['description']; // Assuming the position name field in your database is 'position_name'
							echo '<div class="col-md-12 mb-4">';
							echo '<h2>' . $position_name . '</h2>'; // Display the position name
							$sql = "SELECT * FROM candidates WHERE position_id='" . $row['id'] . "'";
							$cquery = $conn->query($sql);
							while ($crow = $cquery->fetch_assoc()) {

						?>
								<div style="margin-top: 10px;" class="row shadow-md p-2 m-0 rounded shadow-md ">
									<div class="col-md-3">
										<img class="rounded-pill max-130 p-2" src="images/profile.jpg" alt="">
									</div>
									<div class="col-md-9 align-self-center">
										<h4 class="mt-3 fs-5 mb-1 fw-bold"><?php echo $crow['firstname'] . ' ' . $crow['lastname']; ?></h4> <!-- Assuming candidate name field in your database is 'candidate_name' -->
										<?php
										$sql = "SELECT COUNT(*) AS count FROM votes WHERE candidate_id='" . $crow['id'] . "'";
										$vote_query = $conn->query($sql);

										if ($vote_query->num_rows > 0) {

											$votes = $vote_query->fetch_assoc();

											$votes['count'];

											$sql = "SELECT COUNT(position_id) AS total_votes FROM votes ";
											$tv_query = $conn->query($sql);

											if ($tv_query->num_rows > 0) {

												$total_votes = $tv_query->fetch_assoc();

												$avarage = ($votes['count'] /	$total_votes['total_votes']) * 100;

												// echo $total_votes['total_votes'];
												echo '<p style="font-size:14px;" class="h5 fs-8 mb-2 fw-bold">Votes :' .  $votes['count'] . ' </p>';
												echo '<div class="progress-bar bg-warning" role="progressbar" aria-label="Example with label" style="width:' . $avarage . '%;" aria-valuenow="' . $avarage . '" aria-valuemin="0" aria-valuemax="100">' . $avarage . '%</div>';
											}
										}

										?>


									</div>
								</div>
						<?php
							}
							echo '</div>';
						}
						?>


					</div>
			</div>
			</section>

		</div>
	</div>

	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/ballot_modal.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
	<script>
		$(function() {
			$('.content').iCheck({
				checkboxClass: 'icheckbox_flat-green',
				radioClass: 'iradio_flat-green'
			});

			$(document).on('click', '.reset', function(e) {
				e.preventDefault();
				var desc = $(this).data('desc');
				$('.' + desc).iCheck('uncheck');
			});

			$(document).on('click', '.platform', function(e) {
				e.preventDefault();
				$('#platform').modal('show');
				var platform = $(this).data('platform');
				var fullname = $(this).data('fullname');
				$('.candidate').html(fullname);
				$('#plat_view').html(platform);
			});

			$('#preview').click(function(e) {
				e.preventDefault();
				var form = $('#ballotForm').serialize();
				if (form == '') {
					$('.message').html('You must vote atleast one candidate');
					$('#alert').show();
				} else {
					$.ajax({
						type: 'POST',
						url: 'preview.php',
						data: form,
						dataType: 'json',
						success: function(response) {
							if (response.error) {
								var errmsg = '';
								var messages = response.message;
								for (i in messages) {
									errmsg += messages[i];
								}
								$('.message').html(errmsg);
								$('#alert').show();
							} else {
								$('#preview_modal').modal('show');
								$('#preview_body').html(response.list);
							}
						}
					});
				}

			});

		});
	</script>
</body>

</html>
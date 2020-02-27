<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Arena</title>
    <link rel="icon" type="image/png" href="img/logo/logo_icon.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/arena.css" rel="stylesheet" type="text/css">
	<style>
		.seatimg {
			width: 100%;
		}

		.seat-text-lg {
			font-family: 'Raleway';
			color: white;
			font-size: 5rem;
		}

		.seat-text-small {
			font-family: 'Raleway';
			color: white;
			font-size: 1.5rem;
		}

		.seat-heading {
			font-family: 'Raleway';
			
			color: white;
			font-size: 2rem;
			font-weight: 800;
		}
	</style>
</head>

<body>
	<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">The Arena</span>
    <span class="site-heading-lower">A Project of Bahria Town</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">Membership</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">Schedule</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section">
        <div class="container">

    <div class="table">

        <table class="table table-hover">
            <thead><tr><th><h2 class="seat-heading">Select Seats</h2><th>
                <th>
                    <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#SeatModal">Select Seat</button>
                    
                    <div id="SeatModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Select Seat</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="MakeSeatTicket.php" method = "GET">
                                        <div class="form-group">
                                            <label for="Row">Row</label>
                                            <select name="Row">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Col">Column</label>
                                            <select name="Col">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                                <option value="J">J</option>
                                                <option value="K">K</option>
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="N">N</option>
                                            </select>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-xl">Book Seat</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </th>
                <th>
                    <input type="button" class="btn btn-primary btn-xl" value="Complete Booking" onclick="go_home()">
                    <script>
                        function go_home()
                        {
                            location.href = "UserHome.php";
                        } 
                    </script>
                </th>
            </tr></thead>
        </table>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>A</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>B</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>C</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>D</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>E</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>F</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>G</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>H</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>I</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>J</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>K</h4></strong></th>
                    <th class = "seat-text-lg" style="padding-left:45px"><h4><strong>L</h4></strong></th>
                </tr>
            </thead>
            <tbody>

				<tr>
					<td class="seat-text-small">1</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>
				<tr>
					<td class="seat-text-small">2</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>
				<tr>
					<td class="seat-text-small">3</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>
				<tr>
					<td class="seat-text-small">4</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>
				<tr>
					<td class="seat-text-small">5</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>
				<tr>
					<td class="seat-text-small">6</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>
				<tr>
					<td class="seat-text-small">7</td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
					<td><img class="seatimg" src="Images/armchair.png"></td>
				</tr>

            </tbody>
        </table>
    </div>

	</div>

	</section>

</body>
</html>
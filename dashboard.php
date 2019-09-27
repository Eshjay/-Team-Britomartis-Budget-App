<?php 
include('phpInc/login.php');

userAuth();

logOut();

$dName = $_SESSION['name'];
// $dEmail = $_SESSION['email'];
// $dPic = strtoupper(substr($dName, 0, 1));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>go-budget</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/fontawesome.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  </head>
  <body>
    <section>
      <h4 class="text-center mt-4 text-white"><b> Welcome <?= $dName; ?></b></h4>
    </section>
    <section class="mainbody">
      <div class="container my-2">
        <div class="row ">
          <div class="col-4"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1569531044/team%20britomartis/vgcrl4aqmugqun37wpp7.png" alt="" /></div>
        </div>
      </div>
      <div class="container">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th scope="col">
                <select name="" id="category" class="form-control category">
                  <option value="">Category</option>
                  <option value="">Transportation</option>
                  <option value="">Housing</option>
                  <option value="">Food</option>
                  <option value="">Personal Care</option>
                </select>
              </th>
              <th scope="col"><h5>Amount</h5></th>
              <th scope="col"><h5>Priority</h5></th>
              <th scope="col"><h5>Delete</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Shoes</b></td>
              <td>
                <input
                  class="form-control myControl"
                  type="number"
                  name="amount"
                  id="amount"
                  value="2000"
                  readonly
                />
              </td>
              <td>
                <input
                  class="form-control myControl"
                  type="text"
                  name="priority"
                  id="priority"
                  value="High"
                  readonly
                />
              </td>
              <td>
                <button class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><b>Bag</b></td>
              <td>
                <input
                  class="form-control myControl"
                  type="number"
                  name="amount"
                  id="amount"
                  value="5000"
                  readonly
                />
              </td>
              <td>
                <input
                  class="form-control myControl"
                  type="text"
                  name="priority"
                  id="priority"
                  value="High"
                  readonly
                />
              </td>
              <td>
                <button class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><b>Cap</b></td>
              <td>
                <input
                  class="form-control myControl"
                  type="number"
                  name="amount"
                  id="amount"
                  value="1000"
                  readonly
                />
              </td>
              <td>
                <input
                  class="form-control myControl"
                  type="text"
                  name="priority"
                  id="priority"
                  value="High"
                  readonly
                />
              </td>
              <td>
                <button class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="row mt-4 down-text">
          <div class="col-sm-12 col-md-6">
            <p>
              <b>
                Enter Total Available Sum

                <input
                  class="form-control mytotal text-center"
                  type="number"
                  name="budgetedamount"
                  id="budgetedamount"
                  value="5000"
                />
              </b>
            </p>
          </div>

          <div class="col-sm-12 col-md-3">
            <button
              class="btn btn-primary p-3 px-4 mybutton"
              data-toggle="modal"
              data-target="#loginModal"
            >
              <b class="btnText">
                +
              </b>
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="loginModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="loginModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body text-center">
                    <form>
                      <fieldset>
                        <legend>
                          <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1569531044/team%20britomartis/vgcrl4aqmugqun37wpp7.png" alt="Budget logo" />
                        </legend>
                        <div class="form-group">
                          <input
                            type="text"
                            class="form-control"
                            name="item"
                            id="amount"
                            placeholder="Enter Item"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <select name="" id="" class="form-control">
                            <option value="">Priority</option>
                            <option value="">Very High</option>
                            <option value="">High</option>
                            <option value="">Low</option>
                            <option value="">Very Low</option>
                          </select>
                        </div>
                        <button class="btn btn-primary">
                          Enter
                        </button>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <button class="btn btn-primary btn-cal">Calculate</button>
          </div>
        </div>
      </div>
    </section>

    <!--SCRIPTS-->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
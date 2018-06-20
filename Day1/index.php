<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Question & Answer</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-light bg-light justify-content-between">
    <div class="container-fluid">
      <a class="navbar-brand">Question & Answer</a>
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModal">Login</button>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row justify-content-center my-3">
      <div class="col-md-6">
        <form method="get" action="add_question.php" id="question">
          <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control" name="question" placeholder="Enter question">
            <small class="form-text text-muted">You can ask any question.</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div id="accordion">
          <div class="card">
            <!-- Modal Answer and Edit question -->
            <div class="modal fade" id="answer1">
              <form>
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer:</label>
                        <textarea class="form-control" rows="5" placeholder="Enter question"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal fade" id="editQues1">
              <form>
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Question:</label>
                        <input type="text" class="form-control" name="question" placeholder="Enter question">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- Card -->
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is Lorem Ipsum?</button>
				        <div class="float-right">
				        	<div class="btn-group" role="group" aria-label="Basic example">
									  <button type="button" class="btn btn-link text-success" data-toggle="modal" data-target="#answer1">Answer</button>
									  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editQues1" data-parent=".card-header">Edit</button>
									  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
									</div>
								</div>
				      </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <!-- Modal Edit Answer -->
              <div class="modal fade" id="editAnswer1">
                <form>
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Answer:</label>
                          <textarea class="form-control" name="answer" rows="5" placeholder="Enter question"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <br>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editAnswer1" data-parent=".card-body">Edit</button>
                  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
                </div>
              </div>
              <div class="card-body">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <br>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editAnswer1" data-parent=".card-body">Edit</button>
                  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="card">
            <!-- Modal Answer and Edit question -->
            <div class="modal fade" id="answer2">
              <form>
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer:</label>
                        <textarea class="form-control" rows="5" placeholder="Enter question"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal fade" id="editQues2">
              <form>
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Question:</label>
                        <input type="text" class="form-control" name="question" placeholder="Enter question">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why do we use it?</button>
				        <div class="float-right">
				        	<div class="btn-group" role="group" aria-label="Basic example">
									  <button type="button" class="btn btn-link text-success" data-toggle="modal" data-target="#answer2">Answer</button>
									  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editQues2" data-parent=".card-header">Edit</button>
									  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
									</div>
								</div>
				      </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <!-- Modal Edit Answer -->
              <div class="modal fade" id="editAnswer2">
                <form>
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Answer:</label>
                          <textarea class="form-control" name="answer" rows="5" placeholder="Enter question"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                <br>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editAnswer2" data-parent=".card-body">Edit</button>
                  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <!-- Modal Answer and Edit question -->
            <div class="modal fade" id="answer3">
              <form>
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer:</label>
                        <textarea class="form-control" rows="5" placeholder="Enter question"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal fade" id="editQues3">
              <form>
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Question:</label>
                        <input type="text" class="form-control" name="question" placeholder="Enter question">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--  -->
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Where does it come from?</button>
				        <div class="float-right">
				        	<div class="btn-group" role="group" aria-label="Basic example">
									  <button type="button" class="btn btn-link text-success" data-toggle="modal" data-target="#answer3">Answer</button>
									  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editQues3" data-parent=".card-header">Edit</button>
									  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
									</div>
								</div>
				      </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <!-- Modal Edit Answer -->
              <div class="modal fade" id="editAnswer3">
                <form>
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Answer:</label>
                          <textarea class="form-control" name="answer" rows="5" placeholder="Enter question"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                <br>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editAnswer3" data-parent=".card-body">Edit</button>
                  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="1" data-qna="qna">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="exampleModal">
      <div class="modal-dialog">
        <form>
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Admin Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label class="col-form-label">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal fade" id="deleteQnA">
      <div class="modal-dialog">
        <form>
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Are you want to delete?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="main.js"></script>
</body>

</html>
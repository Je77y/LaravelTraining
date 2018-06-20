<?php 
   session_start();
  include("db.php");
  $database = new Database();
  $query_question = "SELECT id, question FROM qna__questions ORDER BY id DESC";
  $database->query($query_question);
  $questions = $database->resultset();

  $query_answer = "SELECT id, answer, question_id FROM qna__answers WHERE question_id = :fquestion ORDER BY id DESC";
  $database->query($query_answer);
  
?>
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
      <?php 
        if (isset($_SESSION['signed_in'])) {
            echo '<ul class="navbar-nav mr-0-auto">';
              echo '<li class="nav-item ">';
                echo '<a class="nav-link text-dark" href="logout.php">Dang xuat</a>';
              echo '</li>';
            echo '</ul>';
        } else {
          echo '<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">Login</button>';
        }
      ?>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row justify-content-center my-3">
      <div class="col-md-6">
        <form method="get" action="add_question.php">
          <div class="form-group">
            <label>Question <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="question" placeholder="Enter question" required>
            <small class="form-text text-muted">You can ask any question.</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div id="accordion">
          <!-- Card -->
          <?php foreach ($questions as $key => $question): ?>
            
            <?php 
              echo '<div class="card">';
              
              echo '<!-- Card -->';
              echo '<div class="card-header" id="heading' . $key . '">';
                echo '<h5 class="mb-0">';
    			        echo '<button class="btn btn-link" data-toggle="collapse" data-target="#collapse' . $key. '" aria-expanded="true" aria-controls="collapseOne">' . $question['question'] . '</button>';
                  if ($_SESSION['signed_in']) {
      			        echo '<div class="float-right">';
      			        	echo '<div class="btn-group" role="group" aria-label="Basic example">';
      								  echo '<button type="button" class="btn btn-link text-success" data-toggle="modal" data-target="#answer" data-id="' . $question['id'] . '">Answer</button>';
      								  echo '<button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editQues" data-parent=".card-header" data-id="' . $question['id'] . '" data-qna="question">Edit</button>';
      								  echo '<button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="' . $question['id'] . '" data-qna="question">Delete</button>';
      								echo '</div>';
      							echo '</div>';
                  }
    			      echo '</h5>';
              echo '</div>';
              echo '<div id="collapse' . $key . '" class="collapse" aria-labelledby="heading' . $key . '" data-parent="#accordion">';

                
                echo '<!-- Card body -->';
                $database->bind(':fquestion', $question['id']);
                $answers = $database->resultset();
                foreach ($answers as $key => $answer) {
                  echo '<div class="card-body">';
                    echo '<p>' . $answer['answer'] . '</p>';
                    echo '<hr>';
                    if ($_SESSION['signed_in']) {
                      echo '<div class="btn-group" role="group" aria-label="Basic example">';
                        echo '<button type="button" class="btn btn-link text-info" data-toggle="modal" data-target="#editAnswer" data-parent=".card-body" data-id="' . $answer['id'] . '" data-qna="answer">Edit</button>';
                        echo '<button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteQnA" data-id="' . $answer['id'] . '" data-qna="answer">Delete</button>';
                      echo '</div>';
                    }
                  echo '</div>';
                }
              echo '</div>';
            echo '</div>' ?>
          <?php endforeach ?>
          
        </div>
      </div>
    </div>
    <!-- Login -->
    <div class="modal fade" id="exampleModal">
      <div class="modal-dialog">
        <form method="post" action="login.php">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Admin Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label class="col-form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal Answer -->
    <div class="modal fade" id="answer">
      <div class="modal-dialog">
        <form method="post" action="answer.php">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="id">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Answer <span class="text-danger">*</span></label>
                <textarea class="form-control" rows="5" placeholder="Enter answer" name="answer" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal Edit Question -->
    <div class="modal fade" id="editQues">
      <div class="modal-dialog">
        <form method="post" action="edit_qna.php">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="qna">
                <input type="hidden" name="id">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Question:</label>
                  <input type="text" class="form-control" name="question" placeholder="Enter question">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </form>
      </div>
    </div>
    <!-- Delete -->
    <div class="modal fade" id="deleteQnA">
      <div class="modal-dialog">
        <form method="post" action="delete_qna.php" id="#deleteForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Are you want to delete?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="qna">
              <input type="hidden" name="id">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal Edit Answer -->
    <div class="modal fade" id="editAnswer">
      <div class="modal-dialog">
        <form method="post" action="edit_qna.php">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="qna">
              <input type="hidden" name="id">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Answer:</label>
                <textarea class="form-control" name="answer" rows="5" placeholder="Enter question"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
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

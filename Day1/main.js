(function($) {

// Check edit (body or header) in card
  function parentCardHearder(el) {
    let parentClass = $(el).data('parent');
    if (parentClass == '.card-body') {
      return false;
    }
    return true;
  };

// Load data in modal
  function loadDataModal(el) {
  	let question;
  	let answer;
    if (parentCardHearder(el)) {
    	question = $(el).parents('.card-header').find('button[data-toggle=collapse]').text();
    } else {
    	question = $(el).parents('.card').find('.card-header').find('button[data-toggle=collapse]').text();
    	answer = $(el).parents('.card-body').find('p').text();
    }

    let idModal = $(el).data('target');
    $(idModal)
      .find('.modal-title')
      .text(question)
      .end()
      .find('input[name=question]')
      .val(question)
      .end()
      .find('textarea[name=answer]')
      .val(answer)
      .end()
      .find('input[name=id]')
      .val($(el).data('id'))
      .end()
      .find('input[name=qna]')
      .val($(el).data('qna'))
      .end();
  }

// Clear data in modal
  $('.modal').on('hidden.bs.modal', function(e) {
    $(this)
      .find('input[type=text]')
      .val('')
      .end()
      .find('textarea')
      .val('')
      .end();
  });

// Add answer
  $('button.btn-link.text-success').on('click', function() {
    loadDataModal($(this));
  });

// Edit
  $('button.btn-link.text-info').on('click', function() {
    loadDataModal($(this));
  });

// Delete
  $('button.btn-link.text-danger').on('click', function() {
    let qna = $(this).data('qna');
    let id = $(this).data('id');
    $('#deleteQnA')
      .find('input[name=qna]')
      .val(qna)
      .end()
      .find('input[name=id]')
      .val(id)
      .end();
  });

})(jQuery);

(function($) {
  function parentCardHearder(el) {
    let parentClass = $(el).data('parent');
    if (parentClass == '.card-body') {
      return false;
    }
    return true;
  };

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
      .end();

  }

  $('.modal').on('hidden.bs.modal', function(e) {
    $(this)
      .find('input[type=text]')
      .val('')
      .end()
      .find('textarea')
      .val('')
      .end();
  });

  $('button.btn-link.text-success').on('click', function() {
    loadDataModal($(this));

  });

  $('button.btn-link.text-info').on('click', function() {

    loadDataModal($(this));
    // console.log($(this).parents(' .card-header').find('button[data-toggle=collapse]').text());
  });

  $('button.btn-link.text-danger').on('click', function() {
    console.log($(this));
  });

  $('#question').submit(function() {


    // return false;
  });

})(jQuery);

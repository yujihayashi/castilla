function add_answer(answer, points, correct)
{
  if (!answer) {
    answer = '';
  }
  if (!points) {
    points = 0;
  }
  if (!correct) {
    correct = 0;
  }
  var correct_text = '';
  if (correct === 1) {
    correct_text = ' checked="checked"';
  }
  var total_answers = parseInt(jQuery("#new_question_answer_total").val());
  total_answers += 1;
  jQuery("#new_question_answer_total").val(total_answers);
  var $answer_single = jQuery('<div class="answers_single">'+
    '<div class="answer_number"><button class="button delete_answer">Delete</button> '+answer_text+'</div>'+
    '<div class="answer_text"><input type="text" class="answer_input" name="answer_'+total_answers+'" id="answer_'+total_answers+'" value="'+answer+'" /></div>'+
    '<div class="answer_points"><input type="text" class="answer_input" name="answer_'+total_answers+'_points" id="answer_'+total_answers+'_points" value="'+points+'" /></div>'+
    '<div class="answer_correct"><input type="checkbox" id="answer_'+total_answers+'_correct" name="answer_'+total_answers+'_correct"'+correct_text+' value=1 /></div>'+
  '</div>');
  jQuery("#answers").append($answer_single);
}
function deleteQuestion(id){
  jQuery("#delete_dialog").dialog({
    autoOpen: false,
    show: 'blind',
    hide: 'explode',
    buttons: {
    Cancel: function() {
      jQuery(this).dialog('close');
      }
    }
  });
  jQuery("#delete_dialog").dialog('open');
  var idHidden = document.getElementById("delete_question_id");
  idHidden.value = id;
};
function duplicateQuestion(id){
  jQuery("#duplicate_dialog").dialog({
    autoOpen: false,
    show: 'blind',
    hide: 'explode',
    buttons: {
    Cancel: function() {
      jQuery(this).dialog('close');
      }
    }
  });
  jQuery("#duplicate_dialog").dialog('open');
  var idHidden = document.getElementById("duplicate_question_id");
  idHidden.value = id;
};

jQuery("#new_answer_button").click(function(event) {
  event.preventDefault();
  add_answer();
});

jQuery(".answers").on('click', '.delete_answer', function(event) {
  event.preventDefault();
  jQuery(this).parent().parent().detach();
});

jQuery("#the-list").on('click', '.edit_link', function(event) {
  event.preventDefault();
  var question_array_id = jQuery(this).attr('data-question-id');
  var question_editor = tinyMCE.get('question_name');
  var question = jQuery('<textarea/>').html(questions_list[question_array_id].question).text();
  if (question_editor)
  {
    tinyMCE.get('question_name').setContent(question);
  }
  else
  {
    jQuery("#question_name").val(question);
  }
  jQuery(".question_area_header_text").text('Edit Question');
  jQuery(".question_area .button-primary").val("Save Question");
  jQuery("#correct_answer_info").val(jQuery('<textarea/>').html(questions_list[question_array_id].correct_info).text());
  jQuery("#hint").val(jQuery('<textarea/>').html(questions_list[question_array_id].hint).text());
  jQuery("#new_question_order").val(questions_list[question_array_id].order);
  jQuery("#question_type").val(questions_list[question_array_id].type);
  jQuery(".comments_radio").val([questions_list[question_array_id].comment]);
  jQuery("#required").val(questions_list[question_array_id].required);
  jQuery(".category_radio").removeAttr('checked');
  if (questions_list[question_array_id].category != '') {
    jQuery(".category_radio").val([questions_list[question_array_id].category]);
  }
  jQuery("#question_submission").val('edit_question');
  jQuery("#question_id").val(questions_list[question_array_id].id);
  jQuery("#answers").empty();
  jQuery("#new_question_answer_total").val(0);
  for (var i = 0; i < questions_list[question_array_id].answers.length; i++) {
    add_answer(questions_list[question_array_id].answers[i].answer,questions_list[question_array_id].answers[i].points,questions_list[question_array_id].answers[i].correct);
  }
  location.hash = '';
  location.hash = '#question_area';
});

jQuery("#new_question_button").click(function() {
  jQuery(".question_area_header_text").text('Add New Question');
  jQuery(".question_area .button-primary").val("Create Question");
  var question_editor = tinyMCE.get('question_name');
  if (question_editor)
  {
    tinyMCE.get('question_name').setContent('');
  }
  else
  {
    jQuery("#question_name").val('');
  }
  jQuery("#correct_answer_info").val('');
  jQuery("#hint").val('');
  jQuery("#new_question_order").val(questions_list.length+1);
  jQuery("#question_type").val('');
  jQuery(".comments_radio").val([1]);
  jQuery("#required").val(1);
  jQuery("#question_submission").val('new_question');
  jQuery("#question_id").val(0);
  jQuery(".category_radio").removeAttr('checked');
  jQuery("#answers").empty();
  jQuery("#new_question_answer_total").val(0);
  location.hash = '';
  location.hash = '#question_area';
});

jQuery("#question_search").keyup(function() {
  jQuery(".question_row").each(function() {
    if ( jQuery(this).text().toLowerCase().indexOf(jQuery("#question_search").val().toLowerCase()) === -1 ) {
      jQuery(this).hide();
    } else {
      jQuery(this).show();
    }
  });
});

jQuery("#the-list").text('');
var alternate = false;
var alternate_css = '';
for (var i = 0; i < questions_list.length; i++) {
  alternate_css = '';
  if (alternate) {
    alternate_css = ' alternate'
  }
  var $question_row = jQuery('<tr class="question_row'+alternate_css+'">'+
  '<td>'+questions_list[i].order+'</td>'+
  '<td>'+questions_list[i].type_name+'</td>'+
  '<td>'+questions_list[i].category+'</td>'+
  '<td>'+
    jQuery('<textarea/>').html(questions_list[i].question.replace(/\\"/g, '"').replace(/\\'/g, "'")).text()+
    '<div class="row-actions">'+
      '<a class="edit_link" data-question-id="'+i+'" href="#">Edit</a> | '+
      '<a class="duplicate_link" onclick="duplicateQuestion('+questions_list[i].id+')" href="#">Duplicate</a>| '+
      '<a class="delete_link" onclick="deleteQuestion('+questions_list[i].id+')" href="#">Delete</a>'+
    '</div>'+
  '</td>'+
  '</tr>');
  jQuery("#the-list").append($question_row);
  alternate = !alternate;
}

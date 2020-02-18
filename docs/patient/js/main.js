var questionTemplate = $('#question script').text();
var questionHTML = ejs.render(questionTemplate);
$('#question').html(questionHTML);

var questionsProgressTemplate = $('#questions-progress script').text();
const renderQuestionsProgress = function() {
    
    var questionsProgressHTML = ejs.render(questionsProgressTemplate,{
        
        progress: {
            
            
        }
        
        
    });
    $('#questions-progress').html(questionsProgressHTML);
    
}

renderQuestionsProgress(); 
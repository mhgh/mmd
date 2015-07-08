/* MathMirrorDown | https://github.com/mhgh/mmd | (c) 2015 Mohammad Hossein Ghaffari | MIT License */

$(document).ready(function() {  
        
        $(".CodeMirror-wrap textarea").keyup(function() {
 		Preview.Update(this);
	});          

        

        
        // Actual default values
        var md = new Remarkable({
        html:         true,        // Enable HTML tags in source
        xhtmlOut:     false,        // Use '/' to close single tags (<br />)
        breaks:       false,        // Convert '\n' in paragraphs into <br>
        langPrefix:   'language-',  // CSS language prefix for fenced blocks
        linkify:      false,        // Autoconvert URL-like text to links

        // Enable some language-neutral replacement + quotes beautification
        typographer:  false,

        // Double + single quotes replacement pairs, when typographer enabled,
        // and smartquotes on. Set doubles to '«»' for Russian, '„“' for German.
        quotes: '“”‘’',

        // Highlighter function. Should return escaped HTML,
        // or '' if the source string is not changed
        highlight: function (/*str, lang*/) { return ''; }
        });        

// console.log(md.render('# Remarkable rulezz!'));        

        $('.entry-content').each(function () {
                this.innerHTML=md.render(this.innerHTML);
        });


});



var Preview = {
  delay: 300,       

  preview: null,    
  textr: null,      

  timeout: null,    
  mjRunning: false,     

//   Init: function () {
//       ;
//   },

  Update: function (el) {
    this.txtr = el;
    $(el.currentTarget).parents(".uk-htmleditor").find('.uk-htmleditor-preview').children().eq(0);
    if (this.timeout) {clearTimeout(this.timeout)}
    this.timeout = setTimeout(this.callback,this.delay);
  },

  CreatePreview: function () {
    Preview.timeout = null;
    if (this.mjRunning) return;
    var text = this.txtr.value;
    
    this.mjRunning = true;
    
    MathJax.Hub.Queue(
      ["Typeset",MathJax.Hub,text],
      ["PreviewDone",this]
    );    
    
  },

  PreviewDone: function () {
    this.mjRunning = false;
  }

};


Preview.callback = MathJax.Callback(["CreatePreview",Preview]);
Preview.callback.autoReset = true; 


